<?php

require "model/bddModel.php";

    function getAllUsers()
    {
        $db = dbConnect();
        $res = $db->query("SELECT level,name,email FROM `mrbs_users`");
        $res = $res->fetchAll();
        return $res;
    }
    