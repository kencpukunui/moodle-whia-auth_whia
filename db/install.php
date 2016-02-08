<?php
/**
 * Custom authentication for WHIA project
 *
 * Installation script
 *
 * @package    auth_whia
 * @author     Bevan Holman <bevan@pukunui.com>, Pukunui
 * @copyright  2015 onwards, Pukunui
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

require_once($CFG->dirroot.'/auth/whia/locallib.php');

function xmldb_auth_whia_install() {
    \auth_watereff\install::execute();
}
