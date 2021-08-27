<?php
require_once("class/class.DatabaseConfig.php");

$conn = new DatabaseConfig();
$retVal = ($conn) ? "Aktif" : "Pasif";
//print $retVal;


require_once("class/class.Session.php");
$session = new Session();

//print session_status();

/*
// Session Status 
    * _Disabled = 0
    * // _NONE = 1
    * // _ACTIVE = 2

*/


/*
// Session
*/
