<?php
/**
 * Custom authentication for Water Corporation Water Efficiency project
 *
 * String definitions
 *
 * @package    auth_watereff
 * @author     Shane Elliott <shane@pukunui.com>, Pukunui
 * @copyright  2015 onwards, Pukunui
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$string['accountcreated'] = 'Your account has been successfully created. Your details are:<br />Username: {$a->username}<br />Password: {$a->password}<br />You will need these to access this system.';
$string['addgovernment'] = 'Add local government';
$string['addindustry'] = 'Add industry';
$string['addprogram'] = 'Add program';
$string['addsuburb'] = 'Add suburb';
$string['businessnametype'] = 'Business';
$string['cohortnamelabel'] = 'Cohort name';
$string['cohortnamelabel_settings'] = 'Cohort Settings';
$string['confirmemailtag'] = 'Confirm Email';
$string['createnewaccount'] = 'Create your account';
$string['currentname'] = 'Current Name';
$string['defaultcategory'] = 'Water Efficiency Project';
$string['defaultprofilebusiness'] = 'Business';
$string['defaultprofilebusinessdesc'] = 'Water Efficiency Project - Business';
$string['defaultprofilegovernment'] = 'Local Government';
$string['defaultprofilegovernment'] = 'Local Government';
$string['defaultprofilegovernmentdesc'] = 'Water Efficiency Project - Government';
$string['defaultprofileindustry'] = 'Industry';
$string['defaultprofileindustrydesc'] = 'Water Efficiency Project - Industry';
$string['defaultprofileposition'] = 'Position';
$string['defaultprofilepositiondesc'] = 'Water Efficiency Project - Position';
$string['defaultprofileprogram'] = 'Program';
$string['defaultprofileprogramdesc'] = 'Water Efficiency Project - Program';
$string['defaultprofilesuburb'] = 'Suburb';
$string['defaultprofilesuburbdesc'] = 'Water Efficiency Project - Suburb';
$string['deletegovernment'] = 'Delete local government: {$a}';
$string['deletegovernmentconfirm'] = 'Are you absolutely sure you want to delete a local government: {$a}?';
$string['deletegovernmentdenied'] = '{$a}: is has been allocated to a user record and cannot be deleted.';
$string['deleteindustry'] = 'Delete industry: {$a}';
$string['deleteindustryconfirm'] = 'Are you absolutely sure you want to delete a industry: {$a}?';
$string['deleteindustrydenied'] = '{$a}: is has been allocated to a user record and cannot be deleted.';
$string['deleteprogram'] = 'Delete program: {$a}';
$string['deleteprogramconfirm'] = 'Are you absolutely sure you want to delete a program: {$a}?';
$string['deleteprogramdenied'] = '{$a}: is has been allocated to a user record and cannot be deleted.';
$string['deletesuburb'] = 'Delete suburb: {$a}';
$string['deletesuburbconfirm'] = 'Are you absolutely sure you want to delete suburb: {$a}?';
$string['deletesuburbdenied'] = '{$a}: is has been allocated to a user record and cannot be deleted.';
$string['editaccountdetailhere'] = 'Edit your account details here';
$string['efficiencylogin'] = 'Login';
$string['efficiencyloginexistingaccount'] = 'Existing account';
$string['efficiencyloginfirsttimequestion'] = 'Is this your first time here?';
$string['efficiencyloginheading'] = 'Login Page';
$string['efficiencyloginpluginname'] = 'Login Page';
$string['efficiencylogintitle'] = 'Efficiency Login Page';
$string['emailnotthesame'] = 'Email addresses do not match';
$string['emailtag'] = 'Email';
$string['errgovernmentnameexists'] = 'Local government name already exists';
$string['errindustrynameexists'] = 'Industry name already exists';
$string['errordeletion'] = 'there was an error deleting the record from the database';
$string['errorinsert'] = 'There was a problem inserting the record in the database';
$string['errorretrievingrecord'] = 'Error retrieving record';
$string['errorupdate'] = 'There was a problem updating the record in the database';
$string['errprogramnameexists'] = 'Program name already exists';
$string['errsuburbnameexists'] = 'Suburb name already exists';
$string['firstnametag'] = 'First name';
$string['formtag:password'] = 'The password must have at least 8 characters, including at least<br />1 digit, 1 lower-case letter, 1 upper-case letter, and 1 non-alphanumeric character.';
$string['formtypeofbusiness'] = 'Type of Business';
$string['government'] = 'Local Government';
$string['governmentadded'] = 'Local government added';
$string['governmentdeleted'] = 'Local government deleted';
$string['governmentheading'] = 'Water Efficiency';
$string['governments'] = 'Local Governments';
$string['governmenttitle'] = 'Water Efficiency - Government';
$string['governmenttype'] = 'Council name';
$string['governmentupdated'] = 'Local government updated';
$string['industries'] = 'Industries';
$string['industry'] = 'Industry';
$string['industryadded'] = 'Industry added';
$string['industrydeleted'] = 'Industry deleted';
$string['industryheading'] = 'Water Efficiency';
$string['industrytitle'] = 'Water Efficiency - Industry';
$string['industrytype'] = 'Industry';
$string['industryupdated'] = 'Industry updated';
$string['installcustomprofilecategory'] = 'Installing custom profile category ...';
$string['installcustomprofilefields'] = 'Installing custom profile fields ...';
$string['installcustomtabledata'] = 'Installing custom table data ...';
$string['installprofilefieldexists'] = 'A custom profile field with shortname <strong>{$a}</strong> already exists. You may need to set up this field manually';
$string['lastnametag'] = 'Last name';
$string['login'] = 'Login';
$string['logindetailhere'] = 'Login using an existing user account';
$string['missingconfirmemail'] = 'Confirm email is required';
$string['missingcouncilname'] = 'Council name is required';
$string['missingemail'] = 'Email address is required';
$string['missingfirstname'] = 'First name is required';
$string['missingindustry'] = 'Industry is required';
$string['missinglastname'] = 'Last name is required';
$string['missingpassword'] = 'Password is required';
$string['missingpassword2'] = 'Password is required';
$string['missingprogram'] = 'Program is required';
$string['missingsuburb'] = 'Suburb is required';
$string['missingusername'] = 'Username is required';
$string['missingbusiness'] = 'Business is required';
$string['name'] = 'Name';
$string['newaccountdetailhere'] = 'Enter your new account details here';
$string['newaccountemailsubject'] = 'Water Corporation Efficiency: New Account';
$string['newaccountemailbody'] = 'Thank you for registering for the Water Corporation Water Efficiency Online Training.'.
'The following is a record of your registration details that you should keep in a secure place.'.
"\n\n".'Name: {$a->firstname} {$a->lastname}'.
"\n".'Username: {$a->username}'.
"\n".'Password: {$a->password}'.
"\n\n".'To log-in and complete a training course, please click on the following link ({$a->website}) and select a course.'.
"\n\n".'For help, contact the Water Corporation Service Desk on 9420 3090, or email ITServiceDesk@watercorporation.com.au'.
"\n\n".'Water Corporation';
$string['newname'] = 'New Name';
$string['notifyintroformattag'] = 'Intro Format';
$string['participantbusiness'] = 'Business';
$string['participantgovernment'] = 'Local Government';
$string['participantneither'] = 'I’m not from Local Government or a Business';
$string['passwordtag'] = 'Password';
$string['phonenumbertag'] = 'Phone number';
$string['pluginname'] = 'Water Efficiency';
$string['positiontag'] = 'Position';
$string['program'] = 'Program';
$string['programadded'] = 'Program added';
$string['programdeleted'] = 'Program deleted';
$string['programheading'] = 'Water Efficiency';
$string['programs'] = 'Programs';
$string['programcontexthelp'] = 'If you are completing this training to participate in one of our Waterwise Programs please select the relevant program. If not please select<br />“Not Applicable".';
$string['programtitle'] = 'Water Efficiency - Program';
$string['programtype'] = 'Program';
$string['programupdated'] = 'Program updated';
$string['savechanges'] = 'Save changes';
$string['selectabusiness'] = 'Select a business';
$string['selectacourse'] = 'Select a course';
$string['selectalocalgovernment'] = 'Select a local government ';
$string['selectanindustry'] = 'Select an industry';
$string['selectaprogram'] = 'Select a program';
$string['selectasuburb'] = 'Select a suburb';
$string['suburb'] = 'Suburb';
$string['suburbadded'] = 'Suburb added';
$string['suburbdeleted'] = 'Suburb deleted';
$string['suburbheading'] = 'Water Efficiency';
$string['suburbs'] = 'Suburbs';
$string['suburbtitle'] = 'Water Efficiency - Suburb';
$string['suburbtype'] = 'Suburb';
$string['suburbupdated'] = 'Suburb updated';
$string['typeofbusinesscontexthelp'] = '
<p>This training has been developed to assist those managing water in large commercial facilities or local government.
To help us ensure this information is relevant please tell us whether you are from a Local Government or from a Business.</p>
<p>If you are not from either and would just like to complete the training for your own information please select the
“I’m not from a Business” option.</p>
';
$string['updatedetails'] = 'Update details';
$string['usercreated'] = 'New user created';
$string['userfailed'] = 'Failed to create a new user';
$string['usernametag'] = 'Username';
$string['userupdated'] = 'User updated';
$string['watereff:efficiencyloginconfig'] = 'Water Efficiency Login';
$string['watereff:governmentconfig'] = 'Water Efficiency - Government List';
$string['watereff:industryconfig'] = 'Water Efficiency - Industry List';
$string['watereff:programconfig'] = 'Water Efficiency - Program List';
$string['watereff:suburbconfig'] = 'Water Efficiency - Suburb List';

