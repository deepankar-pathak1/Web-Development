<?php

include 'good_vibes_confg.php';


if (isset($_POST['submit'])){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$number = $_POST["number"];
	$gender = $_POST["gender"];
	$age = $_POST["age"];
	
	
	
	
$sql = mysqli_query($conn,"insert into good_vibes (name,email,number,gender,age) values ('$name','$email','$number','$gender','$age')");

header('location: good_vibes.php');	
	
}
$sql = mysqli_query($conn, "select * from good_vibes");
while($var=mysqli_fetch_array($sql)){
	
echo "Name is : ";
echo $var['name'];
echo "<br>" ;
;
echo "Number is : ";
echo $var['number'];
echo "<br>" ;
echo "Email is : ";
echo $var['email'];
echo "<br>" ;
echo "<br>";
	
}

?>
