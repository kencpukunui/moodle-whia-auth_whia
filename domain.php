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

admin_externalpage_setup('auth_whia_domain');

$systemcontext = context_system::instance();
$strpluginname = get_string('pluginname', 'auth_whia');

require_capability('auth/whia:domainconfig', $systemcontext);

$id      = optional_param('id', 0, PARAM_INT);
$delete  = optional_param('delete', 0, PARAM_INT);
$confirm = optional_param('confirm', '', PARAM_ALPHANUM);

$returnurl = '/auth/whia/domain.php';

$PAGE->set_url($returnurl);
$PAGE->set_context($systemcontext);
$PAGE->set_title("WHIA - Domains");
$PAGE->set_pagelayout('report');
$PAGE->set_heading("WHIA");

$form = new auth_whia_domainform(null, $id);

if ($form->is_cancelled()) { // Form cancelled?
    redirect(new moodle_url($returnurl));
    exit;
} else if ($data = $form->get_data()) { // Form submitted?
// PARAM_HOST
print_object($data);
    if ($data->delete and isset($data->confirm)) {
        if ($DB->delete_records('auth_whia_domain', array('id' => $data->delete))) {
            $strcontinue = get_string('domain:delete', 'auth_whia');
        } else {
            $strcontinue = get_string('domain:error:delete', 'auth_whia');
        }
        redirect(new moodle_url($returnurl), $strcontinue);
        exit;
    }
    if ($data->id) {
        if ($DB->update_record('auth_whia_domain', $data)) {
            $strcontinue = get_string('domain:update', 'auth_whia');
        } else {
            $strcontinue = get_string('domain:error:update', 'auth_whia');
        }
    } else {
        unset($data->id);
        if ($DB->insert_record('auth_whia_domain', $data)) {
            $strcontinue = get_string('domain:insert', 'auth_whia');
        } else {
            $strcontinue = get_string('domain:error:insert', 'auth_whia');
        }
    }
    redirect(new moodle_url($returnurl), $strcontinue);
    exit;
}

echo $OUTPUT->header();

if (!empty($delete)) {

    $domainname = $DB->get_field('auth_whia_domain', 'name', array('id' => $delete));

    echo $OUTPUT->heading(get_string('domain:delete:heading', 'auth_whia', $domainname));
    echo $OUTPUT->confirm(get_string('domain:delete:confirm', 'auth_whia', $domainname),
        new moodle_url($returnurl, array('delete' => $delete, 'confirm' => md5('delete'.$delete))),
        $returnurl);
} else {
    echo $OUTPUT->heading(get_string('domain:heading', 'auth_whia'));
    $form->display();
    echo html_writer::table(auth_whia_get_domains_table());
}

echo $OUTPUT->footer();
