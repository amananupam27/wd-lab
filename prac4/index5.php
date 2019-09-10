<html>
<head>
<title>index.php</title>
<?php 



?>

<script>

function calcPer()
{
var obt=form1.elements["obt"].value;
var total=form1.elements["total"].value;
var c=(obt/total)*100;
document.form1.per.value=c;
//form1.elements["per"].value=c;
 
echo c;
}
function check()
{
var fname=form1.elements["clg"].value;
var sname=form1.elements["qual"].value;
var email=form1.elements["obt"].value;
var pwd=form1.elements["total"].value;

var message="";
if(fname=="")
{
	message+="-Enter College\n";
}
if(sname=="")
{
	message+="-Enter Qualification\n";
}
if(email=="")
{
	message+="-Enter Obtained Marks\n";
}
if(pwd=="")
{
	message+="-Enter Total Marks\n";
}


if(message)
{
	alert(message);
	return false;
	
}
}


</script>

</head>

<body>
<h1>ALL DETAILS</h1>

<form>
First Name: <input type="value" name="fname" id="fname" value="<?php echo $_GET['a']; ?>"><br>
Last Name: <input type="value" name="sname" id="sname" value="<?php echo $_GET['b']; ?>"><br>
Email: <input type="value" name="email" id="email" value="<?php echo $_GET['c']; ?>"><br>
Password: <input type="value" name="pwd" id="pwd" value="<?php echo $_GET['d']; ?>"><br>
Contact: <input type="value" name="contact" id="contact" value="<?php echo $_GET['e']; ?>"><br>
DOB: <input type="value" name="dd" id="contact" value="<?php echo $_GET['f']; ?>">/
<input type="value" name="mm" id="contact" value="<?php echo $_GET['i']; ?>">/
<input type="value" name="yyyy" id="contact" value="<?php echo $_GET['h']; ?>"><br>
Address: <input type="value" name="address" id="contact" value="<?php echo $_GET['g']; ?>"><br>
College: <input type="value" name="address" id="contact" value="<?php echo $_GET['j']; ?>"><br>
Qualification: <input type="value" name="address" id="contact" value="<?php echo $_GET['k']; ?>"><br>
Obtained Marks: <input type="value" name="address" id="contact" value="<?php echo $_GET['l']; ?>"><br>
Total Marks: <input type="value" name="address" id="contact" value="<?php echo $_GET['m']; ?>"><br>
Percentage: <input type="value" name="address" id="contact" value="<?php echo $_GET['n']; ?>"><br>
</form>



</body>
</html>