<?php
/**
 * Custom authentication for WHIA project
 *
 * Administration settings
 *
 * @package    auth_whia
 * @author     Bevan Holman <bevan@pukunui.com>, Pukunui
 * @copyright  2015 onwards, Pukunui
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

// Settings menu.

$ADMIN->add('root', new admin_category('auth_whia', get_string('pluginname', 'auth_whia')));

$ADMIN->add('auth_whia', new admin_externalpage('auth_whia_domain', get_string('government', 'auth_whia'),
            new moodle_url('/auth/whia/domain.php'),
            'auth/whia:domainconfig'));
