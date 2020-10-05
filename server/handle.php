<?php



include ('db.php');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$login = $_GET['login'];
$password = $_GET['password'];




$count = mysqli_query($connection,"SELECT * FROM `users_info` WHERE `login` = '$login' AND `password` = '$password' ");

if(mysqli_num_rows($count) == 0){
  echo "You are not  registered!";
}
else {
	echo "Welcome ".$login;
}

?>



