<?php
require_once("../class/class.DatabaseConfig.php");

$conn = new DatabaseConfig();
$retVal = ($conn) ? "Aktif" : "Pasif";
//print $retVal;


require_once("../class/class.Session.php");
$session = new Session();
