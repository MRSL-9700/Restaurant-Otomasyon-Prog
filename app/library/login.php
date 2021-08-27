<?php
require_once("../controller/LibraryConnect.php");
$SessioN = new Session();
try {



    if ($_POST) {
        # Post...
        //---------------------------\\
        $user = $_POST['UserName'];
        $UserValue = $user['value'];
        //---------------------------\\        
        $pass = $_POST['PassWord'];
        $PassValue = $pass['value'];
        //---------------------------\\
        $login = $SessioN->loginSession($UserValue, $PassValue);


        $Data = array(
            'status' => $login['status'],
            'info' => $login['info']
        );
        print json_encode($Data);
    }
} catch (PDOException $e) {
    print $e->getMessage();
}
