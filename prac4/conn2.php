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
$clg=$_POST['clg'];
$qual=$_POST['qual'];
$obt=$_POST['obt'];
$total=$_POST['total'];
$per=$_POST['per'];


header("location:index5.php?a=$first_name && b=$last_name && c=$email && d=$pwd && e=$contact && f=$address && g=$dd && h= $mm  && i=$yyyy && j=$clg && k=$qual && l=$obt && m=$total && n=$per ");
//$sql = "INSERT INTO detail (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')";

?>


