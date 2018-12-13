<?php

        require "model/associationManagingModel/associationModel.php" ;

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $id = htmlspecialchars($_POST['id']);
                $nom = htmlspecialchars($_POST['input_nom']);
                $assoMail = htmlspecialchars($_POST['input_asso_mail']);
                $resMail = htmlspecialchars($_POST['input_res_mail']);
                $sector = htmlspecialchars($_POST['input_sector']); 
                $img = htmlspecialchars($_POST['input_img']);

                updateInfoAsso($id, $nom, $assoMail, $resMail, $sector, $img);

        }
        $responcables = getAllResponcable(); //Array with all Responcable in DB
        $assos = getAllAsso(); //Array with all association in DB

        require "vue/associationManaging/associationView.php";