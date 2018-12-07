<?php
function mailExist($email)
    {
        $array = [];
        
        header('Content-type: application/json');
        
        echo "<script>console.log( 'Debug Objects: yessss99999999' );</script>";
        
        $db = dbConnect();
        
        $res = $db->query("SELECT COUNT(*) FROM `mrbs_users` where email = '$email' ");
        if($res >0)
        {
            return true;
        }
        else
        return false;
    }

    // Dans un fichier test.php
// Je déclare un tableau
$array = ["foo", "bar"];
// J'indique au navigateur que je retourne du JSON
header('Content-type: application/json');
// Je transforme mon tableau en JSON et je l'imprime dans le body de ma réponse
echo json_encode($array);
    