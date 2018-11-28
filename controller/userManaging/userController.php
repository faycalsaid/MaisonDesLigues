<?php

        require "model/userManagingModel/usersModel.php" ;
        
        dbConnect();

        $users = getAllUsers();

        dbClose();

        require "vue/userManaging/usersView.php";




