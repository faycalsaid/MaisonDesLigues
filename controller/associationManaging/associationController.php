<?php

        require "model/associationManagingModel/associationModel.php" ;

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                
        }

        $assos = getAllAsso(); //Array with all users in DB

        require "vue/associationManaging/associationView.php";