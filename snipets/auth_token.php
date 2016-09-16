<?php

/* 
 * How to create an Auth Token to allow external access to a specific service
 */

// inside an service-script, when user is logged

// Get and set organizationID, applicationID and userID
$organizationID = MainGama::getApp()->getProfile()->getSelectedContext('organization', '_id');
$applicationID = 'landing_page';
$userID = 'anonymous@gmail.com';

// Define parms...
$parms = array(
    'a' => 'CRUD',
    'acao' => 'showFormCad',
    'application_id' => 'xxxx', 
    'module_id' => 'yyyy', 
    'class_id' => 'zzzzz',
    'kind' => 'shared');

// And finnaly create the $authToken
$auth = MainGama::getApp()->createSecurityToken($parms, $userID, $applicationID, $organizationID);

