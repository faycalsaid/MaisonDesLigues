<?php

    function getAllUsers()
    {
        $db = dbConnect();
        $res = $db->query("SELECT level, name, email FROM `mrbs_users` ORDER BY level DESC");
        $res = $res->fetchAll();
        dbClose();
        return $res;
    }
    