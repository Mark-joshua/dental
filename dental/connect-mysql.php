<?php

//DEFINE ('DB_USER','admin');
//DEFINE ('DB_PSWD','admin');
//DEFINE ('DB_HOST','localhost');
//DEFINE ('DB_NAME','dentalclinic');


$dbcon=mysqli_connect('localhost', 'root', '', 'dentalclinic');
if(!$dbcon){
	die('error connecting to database');
}

echo '';

?>