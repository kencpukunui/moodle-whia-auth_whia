<?php
/**
 * Custom authentication for WHIA project
 *
 * Form definitions
 *
 * @package    auth_whia
 * @author     Bevan Holman <bevan@pukunui.com>, Pukunui
 * @copyright  2015 onwards, Pukunui
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

require_once($CFG->libdir.'/formslib.php');

/**
 * Form definition for managing suburbs
 *
 * @package    auth_whia
 * @author     Bevan Holman <bevan@pukunui.com>, Pukunui
 * @copyright  2015 onwards, Pukunui
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class auth_whia_domainform extends moodleform {

    /**
     * Define the form
     */
    public function definition() {
        global $DB;

        $mform          =& $this->_form;
        $id             = $this->_customdata;
        $strrequired    = get_string('required');
        $domain         = null;

        $mform->addElement('hidden', 'id');
        $mform->setType('id', PARAM_INT);
        $mform->setDefault('id', $id);

        if (!empty($id) and ($domain = $DB->get_record('auth_whia_domain', array('id' => $id)))) {

            $mform->addElement('static', 'currentname', get_string('domain:currentname', 'auth_whia'), $domain->name);
        }
        $strname   = get_string('domain:name', 'auth_whia');
        $strsubmit = get_string('button:save', 'auth_whia');

        $mform->addElement('text', 'name', $strname, array('size' => 30));
        $mform->setType('name', PARAM_HOST);
        $mform->addRule('name', $strrequired, 'required', null, 'client');

        $cohortsmenu =

        $sql = "
            SELECT id,name from {cohort} ORDER BY name
        ";

        $cohortsmenu = array("domain:form:cohort" => "Select a cohort");

        if ($cohorts = $DB->get_records_sql_menu($sql, null)) {
            foreach ($cohorts as $id => $name) {
                $cohortsmenu["$id"] = $name;
            }
            $cohortselect = $mform->addElement('select', 'cohortid', get_string('domain:cohort', 'auth_whia'), $cohortsmenu);
            $cohortselect->setSelected($domain->cohortid);
//  array_merge(array(get_string('selectasuburb', 'auth_whia')),

        }

        $this->add_action_buttons(true, $strsubmit);
    }

    /**
     * Validate the form submission
     *
     * @param array $data  submitted form data
     * @param array $files submitted form files
     * @return array
     */
    public function validation($data, $files) {
        global $DB;

        $errors = parent::validation($data, $files);

        if ($DB->record_exists('auth_whia_domain', array('name' => $data['name']))) {
            $errors['name'] = get_string('domain:error:exists', 'auth_whia');
        }
        return $errors;
    }
}
