<?php

    function getAllAsso()
    {
        $db = dbConnect();
        $res = $db->query("SELECT mrbs_association.name, mrbs_association.mail, mrbs_users.email, 
            mrbs_sector.libelle as sector, id_sector, urlImage FROM mrbs_association 
            INNER JOIN mrbs_users on id_responsible = mrbs_users.id 
            INNER JOIN mrbs_sector on id_sector = mrbs_sector.id");
        $res = $res->fetchAll();
        dbClose();
        return $res;
    }


    if( isset($_POST['targFunc']))
    {
      
        if( $_POST['targFunc'] == "mailExist" ) // If target function is mailExist
        {
            $email = htmlspecialchars($_POST['email']); 
            mailExist($email);
        }
        else if( $_POST['targFunc'] == "insertUser" )
        {
            insertUser();
        }
    }   

    function mailExist($email)
    {
        require "../../model/bddModel.php";
        $db = dbConnect();
        $res = $db->query("SELECT COUNT(*) as nb FROM `mrbs_users` where email = '$email' ");
        $res = $res->fetch();

        if($res['nb'] > 0)
        {
            return true;
        }
        else
        return false;
    }

    function insertUser()
    {
        require "../../model/bddModel.php";
        $level = htmlspecialchars($_POST['level']);
        $name = htmlspecialchars($_POST['name']);
        $pwd = htmlspecialchars($_POST['pwd']);
        $email = htmlspecialchars($_POST['email']);

        $db = dbConnect();
        try {
                $db->query("INSERT INTO mrbs_users VALUES(NULL , '$level' , '$name' , md5('$pwd') , '$email' );");
        } catch (\Throwable $th) {
                return $th;
        }    
      
    }