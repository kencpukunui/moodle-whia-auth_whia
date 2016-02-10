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
$string['button:save'] = 'Save domain cohort';
$string['domain:add'] = 'Email domain added: {$a}';
$string['domain:cohort'] = 'Cohort';
$string['domain:currentname'] = 'Current Email domain';
$string['domain:delete'] = 'Email domain deleted: {$a}';
$string['domain:delete:confirm'] = 'Are you absolutely sure you want to delete email domain: {$a}?';
$string['domain:delete:heading'] = 'Email domain deletion';
$string['domain:error:delete'] = 'Error deleting record';
$string['domain:error:exists'] = 'Email domain already exists';
$string['domain:error:insert'] = 'There was a problem inserting the record in the database';
$string['domain:error:select'] = 'Error retrieving record';
$string['domain:error:update'] = 'There was a problem updating the record in the database';
$string['domain:form:cohort'] = 'Select a cohort';
$string['domain:heading'] = 'Email Domain Cohort Enrolment';
$string['domain:insert'] = 'Email domain added';
$string['domain:missing:domain'] = 'Email domain is required';
$string['domain:cohorts'] = 'Assigned Cohort';
$string['domain:name'] = 'Email domain';
$string['domain:names'] = 'Email domains';
$string['domain:update'] = 'Email domain updated: {$a}';
$string['email:account:confirm'] = 'Thank you for registering for the Water Corporation Water Efficiency Online Training.'.
'The following is a record of your registration details that you should keep in a secure place.'.
"\n\n".'Name: {$a->firstname} {$a->lastname}'.
"\n".'Username: {$a->username}'.
"\n".'Password: {$a->password}'.
"\n\n".'To log-in and complete a training course, please click on the following link ({$a->website}) and select a course.'.
"\n\n".'For help, contact the Water Corporation Service Desk on 9420 3090, or email ITServiceDesk@watercorporation.com.au'.
"\n\n".'Water Corporation';
$string['emaildomain_help'] = '
<p>By entering an email domain here allows users, on confirmation of their account to be inserted into a cohort that is specially configured to </p>
';
$string['pluginname'] = 'WHIA Email Domain Cohort Enrolment';
$string['text:failed'] = 'Failed to create a new email domain';
$string['text:success'] = 'New email domain created';
$string['whia:domainconfig'] = 'Email to Cohorts';



