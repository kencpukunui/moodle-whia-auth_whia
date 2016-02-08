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

        $mform =& $this->_form;
        $id = $this->_customdata;

        $strrequired = get_string('required');

        $mform->addElement('hidden', 'id');
        $mform->setType('id', PARAM_INT);
        $mform->setDefault('id', $id);

        if (!empty($id) and ($suburb = $DB->get_field('auth_whia_domain', 'name', array('id' => $id))) ) {
            $mform->addElement('static', 'currentname', get_string('currentname', 'auth_whia'), $suburb);

            $mform->addElement('hidden', 'domainanme');
            $mform->setType('domainanme', PARAM_RAW);
            $mform->setDefault('domainanme', $domainanme);

            $strname   = get_string('newname', 'auth_whia');
            $strsubmit = get_string('savechanges', 'auth_whia');
        } else {
            $strname   = get_string('name', 'auth_whia');
            $strsubmit = get_string('adddomain', 'auth_whia');
        }

        $mform->addElement('text', 'name', $strname, array('size' => 20));
        $mform->setType('name', PARAM_RAW);
        $mform->addRule('name', $strrequired, 'required', null, 'client');

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
            $errors['name'] = get_string('errsuburbnameexists', 'auth_whia');
        }
        return $errors;
    }
}
