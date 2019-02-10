<?php

/**
 * 
 * 
 */
class Session
{
    public $name;
    public $data = [];
    public $userid;
    public $username;
    public $token;

    function __construct(){
        
    }

    public function setSessionName($name){
        if(empty($name))
            $name = 'ADAFrameWork_'.$this->RandomString();

        return $_SESSION[SITE_ID][$name];
    }

    public function setSessionData($data = array()){
        return $_SESSION[SITE_ID]['data'] = $data;
    }

    public function setSessionUserID($id){
        if(empty($name))
            $name = 'ADAFrameWork_'.$this->RandomString();

        return $_SESSION[SITE_ID][$name];
    }

    public function setSessuinUsername($id){
        if(empty($name))
            $name = 'ADAFrameWork_'.$this->RandomString();

        return $_SESSION[SITE_ID][$name];
    }

    public function setSessionToken($token){
        if(empty($name))
            $name = 'ADAFrameWork_'.$this->RandomString();

        return $_SESSION[SITE_ID][$name];
    }

    public function RandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 1; $i <= $length; $i++) {
            $randstring = $characters[rand(0, strlen($characters))];
        }
        return $randstring;
    }
}

?>