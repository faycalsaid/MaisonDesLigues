<?php
require "model/salleManagingModel/salleModel.php";

dbConnect();

$Salles = getSalle();



dbClose();

require "vue/Salles/sallesView.php";

?>