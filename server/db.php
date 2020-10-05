<?php

$connection = mysqli_connect('localhost','root','','users');

if($connection == false){
	echo "connection denied ";
	echo mysqli_connect_error();
	exit();
}
else{
	echo 'I  connected to my base!!! For First time';
}

?>