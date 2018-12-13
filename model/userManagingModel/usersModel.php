<?php
    function getAllUsers()
    {
        $db = dbConnect();
        $res = $db->query("SELECT level, name, email FROM `mrbs_users` WHERE level <> 0 ORDER BY level DESC ");
        $res = $res->fetchAll();
        dbClose();
        return $res;
    }
    
    if(is_ajax())
    {
        if(isset($_POST['targFunc']))
        {
            $targetFunction = htmlspecialchars($_POST['targFunc']);
            
            switch ($targetFunction) {
                case 'insertUser': insertUser(); break;
                case 'mailExist': mailExist(); break;
                case 'deleteUser': deleteUser(); break;

            }
        }
      
    }   
    
    function mailExist()
    {
        $email = htmlspecialchars($_POST['email']);
        
        require "../../model/bddModel.php";
        $db = dbConnect();
        $res = $db->query("SELECT COUNT(*) as nb FROM `mrbs_users` where email = '$email' WHERE level <> 0 ");
        $res = $res->fetch();
        $bool;

        if($res['nb'] > 0)
        {
            $bool = true;
        }
        else
        {
            $bool =  false;
        }
        
        echo json_encode($bool) ;
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

    function deleteUser()
    {
        require "../../model/bddModel.php";
        
        $email = htmlspecialchars($_POST['email']);

        $db = dbConnect();
        try
        {
                $db->query("INSERT INTO mrbs_deleted_users SELECT * FROM mrbs_users WHERE email = '$email' ");
                $db->query("DELETE FROM  mrbs_users WHERE email = '$email' ");
        } 
        catch (\Throwable $th)
        {
                echo json_encode($th) ;
        }   

        echo json_encode($email);
    }

    function is_ajax() {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
      }