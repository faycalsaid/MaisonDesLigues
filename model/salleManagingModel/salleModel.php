<?php 



    function getSalleInfo()
    {
        $db = dbConnect();
        $req = $db->query("SELECT room_name, area_id,description,capacity,room_admin_email from mrbs_room where area_id = 1");
        $req = $req->fetchAll();
        return $req;
    }

    function getSalleReunion()
    {
        $db = dbConnect();
        $req = $db->query("SELECT room_name, area_id,description,capacity,room_admin_email from mrbs_room where area_id = 2");
        $req = $req->fetchAll();
        return $req;
    }

    function getSalleReception()
    {
        $db = dbConnect();
        $req = $db->query("SELECT room_name, area_id,description,capacity,room_admin_email from mrbs_room where area_id = 3");
        $req = $req->fetchAll();
        return $req;
    }

    
   



?>