<?php

function verifLogin($login, $password){

    if(empty($login) || empty($password)){
        return false;
    }
    else{
        $db = dbConnect();
        $res = $db->query("SELECT name, password FROM `mrbs_users` WHERE name='". $login ."' OR email='". $login ."' AND password = md5('".$password."')");
        $res = $res->fetchAll();

        if (count($res) == 1) {
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            return true;
        }
        else {
            return false;
        }
    dbClose();
    }    
}