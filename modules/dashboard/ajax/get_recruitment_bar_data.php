<?php
/**
 * This file is used by the Dashboard to get the data for
 * the recruitment bar chart via AJAX
 */

header("content-type:application/json");

ini_set('default_charset', 'utf-8');

require_once "Database.class.inc";
require_once 'NDB_Client.class.inc';
require_once "Utility.class.inc";
$client = new NDB_Client();
$client->makeCommandLine();
$client->initialize();

$DB =& Database::singleton();
$genderData = array();
$list_of_sites =& Utility::getSiteList();
foreach ($list_of_sites as $site) {
    $genderData['labels'][] = $site;
    $genderData['datasets']['female'][] = $DB->pselectOne(
        "SELECT count(c.CandID) FROM candidate c 
        LEFT JOIN psc ON (psc.CenterID=c.CenterID) 
        WHERE c.Gender='female' AND psc.Name=:Site", array('Site' => $site)
    );
    $genderData['datasets']['male'][] = $DB->pselectOne(
        "SELECT count(c.CandID) FROM candidate c 
        LEFT JOIN psc ON (psc.CenterID=c.CenterID) 
        WHERE c.Gender='male' AND psc.Name=:Site", array('Site' => $site)
    );
}
echo json_encode($genderData);

exit();

?>