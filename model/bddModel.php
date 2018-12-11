<?php

function dbConnect()
{
        try
        {
                $db = new PDO('mysql:host=localhost; dbname=mrbs; charset=utf8' , 'root', 'root' );
                return $db;  
        }
        catch(Exception $e)
        {
                die('Erreur : ' .$e->getMessage());
        }
}

function dbClose()
{
        $db = NULL;

}
