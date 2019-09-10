<html>
<head>
<title>index.php</title>
<?php 



?>

<script>

function calcPer()
{
	
var obt=document.getElementById('obt').value;

var total=document.getElementById('total').value;


var c=(obt/total)*100;
document.getElementById('per').value=c;

//form1.elements["per"].value=c;

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
<h1>PROFESSIONAL DETAILS</h1>

<form method="post" action="conn2.php">

<input type="hidden" name="fname" id="fname" value="<?php echo $_GET['a']; ?>">
<input type="hidden" name="sname" id="sname" value="<?php echo $_GET['b']; ?>">
<input type="hidden" name="email" id="email" value="<?php echo $_GET['c']; ?>">
<input type="hidden" name="pwd" id="pwd" value="<?php echo $_GET['d']; ?>">
<input type="hidden" name="contact" id="contact" value="<?php echo $_GET['e']; ?>">
<input type="hidden" name="dd" id="contact" value="<?php echo $_GET['f']; ?>">
<input type="hidden" name="mm" id="contact" value="<?php echo $_GET['g']; ?>">
<input type="hidden" name="yyyy" id="contact" value="<?php echo $_GET['h']; ?>">
<input type="hidden" name="address" id="contact" value="<?php echo $_GET['i']; ?>">
<table>
<tr>
<td>College Name: </td><td><input type="value" name="clg" id="clg"></td>
</tr>
<tr>
<td>Qualification: </td><td><input type="value" name="qual" id="qual"></td>
</tr>
<tr>
<td>Obtained Marks: </td><td><input type="value" name="obt" id="obt"></td>
</tr>
<tr>
<td>Total Marks: </td><td><input type="value" name="total" id="total" onblur="calcPer();"></td>
</tr>
<tr>
<td>Percentage: </td><td><input type="value" name="per" id="per" readonly="readonly"></td>
</tr>

<tr>
<td>
<button type="reset" value="reset">Reset</button>
<button type="submit"  name="submit" onclick="check();">Submit</button>
</td>    
</tr>    
</table>





</form>

</body>
</html>