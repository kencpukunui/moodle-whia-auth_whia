<?php
/*
 * Custom authentication for WHIA project
 *
 * Capabilities definition
 *
 * @package    auth_whia
 * @author     Bevan Holman <bevan@pukunui.com>, Pukunui
 * @copyright  2015 onwards, Pukunui
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
*/

defined('MOODLE_INTERNAL') || die;

$capabilities = array (
    'auth/whia:domainconfig' => array (
        'riskbitmask'  => RISK_CONFIG,
        'captype'      => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes'   => array (
            'manager' => CAP_ALLOW
        )
    ),
);
