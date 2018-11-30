<?php

require "model/bddModel.php";

    function getAllUsers()
    {
        $db = dbConnect();
        $res = $db->query("SELECT level,name,email FROM `mrbs_users` ORDER BY level DESC");
        $res = $res->fetchAll();
        return $res;
    }
    