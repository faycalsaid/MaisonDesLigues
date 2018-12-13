<?php

        require "model/associationManagingModel/associationModel.php" ;

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $nom = htmlspecialchars($_POST['input_nom']);
                $assoMail = htmlspecialchars($_POST['input_asso_mail']);
                $resMail = htmlspecialchars($_POST['input_res_mail']);
                $sector = htmlspecialchars($_POST['input_sector']); 
                $img = htmlspecialchars($_POST['input_img']);

                echo $nom;

        }

        $assos = getAllAsso(); //Array with all users in DB

        require "vue/associationManaging/associationView.php";