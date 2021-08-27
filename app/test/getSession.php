<?php

require_once("../controller/LibraryConnect.php");

@$TestSession = new Session();
@$TestSession->SessionStart();
@$GetSession = $TestSession->getSession("AppSession");


print_r($GetSession);
