<?php
require_once "config.php";

require_once "model/salleManagingModel/salleModel.php" ;


$sallesInfo = getSalleInfo();
$sallesReunion = getSalleReunion();
$sallesReception = getSalleReception();

require "vue/Salles/test.php";

?>