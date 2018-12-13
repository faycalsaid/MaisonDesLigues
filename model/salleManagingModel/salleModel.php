<?php 



    Function getSalleInfo()
    {
        $db = dbConnect();
        $req = $db->query("SELECT room_name from mrbs_room where area_id = 1");
        $req = $req->fetchAll();
        return $req;
    }

    Function getSalleReunion()
    {
        $db = dbConnect();
        $req = $db->query("SELECT room_name from mrbs_room where area_id = 2");
        $req = $req->fetchAll();
        return $req;
    }

    Function getSalleReception()
    {
        $db = dbConnect();
        $req = $db->query("SELECT room_name from mrbs_room where area_id = 3");
        $req = $req->fetchAll();
        return $req;
    }

    




?>