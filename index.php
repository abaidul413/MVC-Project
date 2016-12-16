
<?php 
spl_autoload_register(function($calss_name){
    include "system/libs/".$calss_name.".php";
});

include 'app/Config/config.php';

 // include 'system/libs/Main.php';
 // include 'system/libs/MainController.php';
 // include 'system/libs/MainModel.php';
 // include 'system/libs/Database.php';
 // include 'system/libs/Load.php';
 
 $main = new Main();
 

?>

