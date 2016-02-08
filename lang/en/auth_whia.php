<?php
/**
 * Custom authentication for Water Corporation WHIA
 *
 * String definitions
 *
 * @package    auth_watereff
 * @author     Shane Elliott <shane@pukunui.com>, Pukunui
 * @copyright  2015 onwards, Pukunui
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;



$string['button:add'] = 'Add domain';
$string['button:update'] = 'Update domain';
$string['domain:delete'] = 'Delete suburb: {$a}';
$string['domain:delete'] = 'Local government deleted';
$string['domain:delete:confirm'] = 'Are you absolutely sure you want to delete suburb: {$a}?';
$string['domain:delete:failed'] = '{$a}: is has been allocated to a user record and cannot be deleted.';
$string['domain:error:exists'] = 'Local government name already exists';
$string['domain:error:insert'] = 'There was a problem inserting the record in the database';
$string['domain:error:select'] = 'Error retrieving record';
$string['domain:error:update'] = 'There was a problem updating the record in the database';
$string['domain:heading'] = 'Email to Cohorts';
$string['domain:insert'] = 'Local government added';
$string['domain:missing:domain'] = 'Email domain is required';


$string['email:account:confirm'] = 'Thank you for registering for the Water Corporation Water Efficiency Online Training.'.
'The following is a record of your registration details that you should keep in a secure place.'.
"\n\n".'Name: {$a->firstname} {$a->lastname}'.
"\n".'Username: {$a->username}'.
"\n".'Password: {$a->password}'.
"\n\n".'To log-in and complete a training course, please click on the following link ({$a->website}) and select a course.'.
"\n\n".'For help, contact the Water Corporation Service Desk on 9420 3090, or email ITServiceDesk@watercorporation.com.au'.
"\n\n".'Water Corporation';

$string['emaildomain:help'] = '
<p>This training has been developed to assist those managing water in large commercial facilities or local government.
To help us ensure this information is relevant please tell us whether you are from a Local Government or from a Business.</p>
<p>If you are not from either and would just like to complete the training for your own information please select the
“I’m not from a Business” option.</p>
';

$string['text:failed'] = 'Failed to create a new email domain';
$string['text:success'] = 'New email domain created';
$string['whia:domainconfig'] = 'Email to Cohorts';



