<!DOCTYPE html>
<html>
<head>
	<title>SERVER PAGE</title>
</head>
<body>



<?php

// connect to our data base 

$connection = mysqli_connect('localhost','root','','users');

if($connection == false){
	echo "connection denied ";
	echo mysqli_connect_error();
	exit();
}
else{
	echo 'I  connected to my base!!! For First time';
}

// it fully describes my fail 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


$result =mysqli_query($connection," SELECT * FROM `users_info` ");

//amount of notes 
echo "<br>";
echo 'Users in Data Base:'.mysqli_num_rows($result);

// first result of the function , first note of table 
//$r1 = mysqli_fetch_assoc($result);
//while (($record =mysqli_fetch_assoc($result)) ) {
	//print_r($record);
//	echo "<hr>";
//}


//print_r($r1);

?>

<ul>
 <?php

  while (($cat =mysqli_fetch_assoc($result)) ) {
  	 echo '<li>'.$cat['login'].'</li>';
  }

echo date('d.m.Y');

 ?>
 

</ul>

<form method="POST" action="/handle.php">
   <input type="login" autocomplete="off" placeholder="Your login" name="login">
   <input type="password" autocomplete="off" placeholder="Your password" name="password">
   <hr>
   <input type="submit" name="Log in">
</form>


</body>
</html>