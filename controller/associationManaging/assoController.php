<?php
        require_once "config.php";

        require "model/userManagingModel/usersModel.php" ;

        $users = getAllAsso(); //Array with all users in DB
 
        require "vue/userManaging/usersView.php";