<?php
/**
 * Custom authentication for WHIA project
 *
 * Manage domain information
 *
 * @package    auth_whia
 * @author     Bevan Holman <bevan@pukunui.com>, Pukunui
 * @copyright  2015 onwards, Pukunui
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');
require_once('./locallib.php');
require_once('./forms.php');
require_once($CFG->dirroot.'/lib/adminlib.php');

admin_externalpage_setup('auth_watereff_suburb');

$systemcontext = context_system::instance();
$strpluginname = get_string('pluginname', 'auth_watereff');

require_capability('auth/watereff:suburbconfig', $systemcontext);

$id      = optional_param('id', 0, PARAM_INT);
$delete  = optional_param('delete', 0, PARAM_INT);
$confirm = optional_param('confirm', '', PARAM_ALPHANUM);

$returnurl = '/auth/watereff/suburb.php';
$namelabel = 'suburb';

$deletedata = new stdClass();
$deletedata->id = $delete;
$deletedata->confirm = $confirm;
$deletedata->namelabel = $namelabel;
$deletedata->returnurl = $returnurl;
$deletedata->candelete = false;
$deletedata->name = '';

$PAGE->set_url($returnurl);
$PAGE->set_context($systemcontext);
$PAGE->set_title("Water Efficiency - Suburbs");
$PAGE->set_pagelayout('report');
$PAGE->set_heading("Water Efficiency");

// Deleting a suburb?
if (!empty($delete)) {
    auth_watereff_delete_profile_field_data($deletedata);
}

$form = new auth_watereff_suburbform(null, $id);

if ($form->is_cancelled()) { // Form cancelled?
    redirect(new moodle_url($returnurl));
    exit;
} else if ($data = $form->get_data()) { // Form submitted?

    if ($data->id) {
        $updateparams = array("oldname" => $data->suburbname, "newname" => $data->name, "namelabel" => $namelabel);
        $sql = 'UPDATE {user_info_data} '
                    .'SET data = :newname '
                    .'WHERE data = :oldname '
                    .'AND fieldid = (SELECT id '
                                        .'FROM {user_info_field} '
                                        .'WHERE shortname = :namelabel) ';
        try {
            $transaction = $DB->start_delegated_transaction();

            if ($DB->execute($sql, $updateparams)) {
                if ($DB->update_record('auth_watereff_suburb', $data)) {
                    $strcontinue = get_string('suburbupdated', 'auth_watereff');
                } else {
                    $strcontinue = get_string('errorupdate', 'auth_watereff');
                }
            } else {
                $strcontinue = get_string('errorupdate', 'auth_watereff');
            }
            $transaction->allow_commit();
        } catch (Exception $e) {
            $transaction->rollback($e);
        }

    } else {
        unset($data->id);
        if ($DB->insert_record('auth_watereff_suburb', $data)) {
            $strcontinue = get_string('suburbadded', 'auth_watereff');
        } else {
            $strcontinue = get_string('errorinsert', 'auth_watereff');
        }
    }
    redirect(new moodle_url($returnurl), $strcontinue);
    exit;
}

echo $OUTPUT->header();

if (!empty($delete)) {
    if ($deletedata->candelete) {
        echo $OUTPUT->heading(get_string('deletesuburb', 'auth_watereff', $deletedata->name));
        echo $OUTPUT->confirm(get_string('deletesuburbconfirm', 'auth_watereff', $deletedata->name),
            new moodle_url($returnurl, array('delete' => $delete, 'confirm' => md5('delete'.$delete))),
            $returnurl);
    } else {
        $suburbname = $DB->get_field('auth_watereff_suburb', 'name', array('id' => $delete));
        echo $OUTPUT->heading(get_string('deletesuburb', 'auth_watereff', $suburbname));
        echo get_string('deletesuburbdenied', 'auth_watereff', $suburbname);
        $link = new moodle_url($returnurl, array('confirm' => 0));
        echo $OUTPUT->continue_button($link);
    }
} else {
    echo $OUTPUT->heading(get_string('suburbs', 'auth_watereff'));
    $form->display();
    echo html_writer::table(auth_watereff_get_suburbs_table());
}

echo $OUTPUT->footer();
