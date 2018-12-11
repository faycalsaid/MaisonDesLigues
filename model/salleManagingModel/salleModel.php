<?php 

    require "model/bddModel.php";

    Function getSalle()
    {
        $db = dbConnect();
        $req = $db->query("SELECT area_id,room_name,description,capacity,room_admin_email FROM mrbs_room ORDER BY area_id DESC ");
        $req = $req->fetchAll();
        return $req;
    }




?>