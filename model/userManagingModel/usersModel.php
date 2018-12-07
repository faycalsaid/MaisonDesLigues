<?php

    function getAllUsers()
    {
        $db = dbConnect();
        $res = $db->query("SELECT level, name, email FROM `mrbs_users` ORDER BY level DESC");
        $res = $res->fetchAll();
        dbClose();
        return $res;
    }

    function mailExist($email)
    {
        $db = dbConnect();
        $res = $db->query("SELECT COUNT(*) FROM `mrbs_users` where email = '$email' ");
        if($res >0)
        {
            return true;
        }
        else
        return false;
    }
    