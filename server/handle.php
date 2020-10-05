<?php
$login = $_POST['login'];
if (!isset($_POST['login']))
	die($login);


include ('db.php');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$login = $_POST['login'];
$password = $_POST['password'];




$count = mysqli_query($connection,"SELECT * FROM `users_info` WHERE `login` = '$login' AND `password` = '$password' ");

if(mysqli_num_rows($count) == 0){
  echo "You are not  registered!";
}
else {
	echo "Welcome ".$login;
}

?>



