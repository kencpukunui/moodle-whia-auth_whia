<?php
/**
 * Custom authentication for WHIA project
 *
 * Local library functions
 *
 * @package    auth_whia
 * @author     Bevan Holman <bevan@pukunui.com>, Pukunui
 * @copyright  2015 onwards, Pukunui
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

/**
 * Return an html table with a list of suburbs and control links
 *
 * @return html_table
 */
function auth_whia_get_domains_table() {
    global $DB, $OUTPUT;

    $table = new html_table();
    $table->head  = array(get_string('domain:names', 'auth_whia'), '');
    $table->align = array('left', 'center');

    if ($domains = $DB->get_records_menu('auth_whia_domain', null, 'name', 'id, name', 0, 0)) {
        foreach ($domains as $id => $name) {
            $row = new html_table_row();

            // Add the control links/icons.
            $icons = array(
                html_writer::link(
                    new moodle_url('/auth/whia/domain.php', array('id' => $id)),
                    $OUTPUT->pix_icon('t/edit', get_string('edit'))),
                html_writer::link(
                    new moodle_url('/auth/whia/domain.php', array('delete' => $id)),
                    $OUTPUT->pix_icon('t/delete', get_string('delete')))
                );
            $row->cells[] = new html_table_cell($name);
            $row->cells[] = implode('&nbsp;', $icons);

            $table->data[] = $row;
        }
    }

    return $table;
}
