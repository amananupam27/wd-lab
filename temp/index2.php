<?php

$fno=$_POST['fv'];
$sno=$_POST['sv'];
$choice=$_POST['sel'];

switch($choice)
{
case 'Addition': {
	$result=$fno+$sno; break;
}

case 'Subtration': {
	$result=$fno-$sno;break;
}

case 'Multiplication': {
	$result=$fno*$sno;break;
}
case 'Division': {
	$result=$fno/$sno;break;
}

}









header("location:index.php?a=$fno&b=$sno&c=$choice&d=$result");

?>
