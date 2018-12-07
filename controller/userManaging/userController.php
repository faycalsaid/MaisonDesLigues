<?php

        require "model/userManagingModel/usersModel.php" ;

        $users = getAllUsers();

        require "vue/userManaging/usersView.php";




