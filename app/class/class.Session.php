<?php


class Session extends DatabaseConfig
{
    public $array = array();
    public $username;
    public $password;
    public $SessionName;
    public $authority;

    /*
    public function __construct()
    {
        session_start();
        ob_start();
    }
    */

    public function SessionStart()
    {
        return session_start();
    }

    /*
    public function newSession($Session_Name, $array)
    {

        $_SESSION[$Session_Name] += $array;
        return $_SESSION[$Session_Name];
        
        if ($_SESSION[$Session_Name]) {
            return array('status' => "success", 'info' => "Oturum Açıldı");
        } else {
            return array('status' => "error", 'info' => "Oturum Açılamadı");
        }
        
    }
    */

    public function loginSession($username, $password)
    {

        try {
            if ($username == "test") {
                if ($password == "64a1311beac50") {

                    $this->SessionStart();

                    @$_SESSION['AppSession'] = [
                        'username' => $username

                    ];
                    if ($_SESSION['AppSession']) {
                        return array('status' => "success", 'info' => "Oturum Açıldı");
                    } else {
                        return array('status' => "error", 'info' => "Oturum Açılamadı");
                    }
                } else {
                    return array('status' => "warning", 'info' => "Parola Hatalı");
                }
            } else {
                return array('status' => "warning", 'info' => "Kullanıcı Hatalı");
            }
        } catch (PDOException $e) {
            // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
            print $e->getMessage();
            print $e->getFile();
        }
    }

    public function logoutSession($Name)
    {
        $this->deleteSession($Name);

        return @session_destroy();
    }

    public function deleteSession($Session_Name)
    {
        unset($Session_Name);
    }

    public function getSession($Session_Name)
    {
        $getSession = $_SESSION[$Session_Name];
        return var_dump($getSession);
    }
}
