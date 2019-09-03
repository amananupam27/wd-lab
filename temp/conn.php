<?php

$conn=mysqli_connect("localhost","root","","base");
if($conn==NULL)
{
die("Couldnt load");
}



$first_name = $_POST['fname'];
$last_name = $_POST['sname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$dd = $_POST['dd'];
$mm = $_POST['mm'];
$yyyy = $_POST['yyyy'];


header("location:index4.php?a=$first_name b=$last_name c=$email d=$pwd e=$contact f=$address g=$dd h= $mm i=$yyyy")
//$sql = "INSERT INTO detail (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')";

?>


