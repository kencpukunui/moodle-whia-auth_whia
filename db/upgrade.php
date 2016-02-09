<?php
/**
 * Custom authentication for WHIA project
 *
 * Upgrade script
 *
 * @package    auth_whia
 * @author     Bevan Holman <bevan@pukunui.com>, Pukunui
 * @copyright  2015 onwards, Pukunui
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function xmldb_auth_whia_upgrade($oldversion) {
    global $DB;
    $dbman = $DB->get_manager();

    /// Add a new table mdl_auth_whia_domain to plugin
    if ($oldversion < 2016020802) {

        // Define table auth_rsa_cpdlog to be created.
        $table = new xmldb_table('auth_whia_domain');

        // Adding fields to table auth_rsa_cpdlog.
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('name', XMLDB_TYPE_CHAR, '50', null, XMLDB_NOTNULL, null, null);

        // Adding keys to table auth_rsa_cpdlog.
        $table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));

        // Conditionally launch create table for auth_rsa_cpdlog.
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // WHIA savepoint reached.
        upgrade_plugin_savepoint(true, 2016020802, 'auth', 'whia');
    }

    if ($oldversion < 2016020813) {

        // Define field cohortid to be added to auth_whia_domain.
        $table = new xmldb_table('auth_whia_domain');
        $field = new xmldb_field('cohortid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0', 'name');

        // Conditionally launch add field cohortid.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Monitor savepoint reached.
        upgrade_plugin_savepoint(true, 2016020813, 'tool', 'monitor');
    }
}