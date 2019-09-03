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
<h1>PROFESSIONAL DETAILS</h1>
<form  name="form1">
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
<td>Total Marks: </td><td><input type="value" name="total" id="total"></td>
</tr>
<tr>
<td>Percentage: </td><td><input type="value" name="per" id="per" readonly="readonly"></td>
</tr>

<tr>
<td>
<button type="reset" value="reset">Reset</button>
<button type="submit" value="Calculate" name="submit" onclick="return check(); return calcPer();" >
</td>
</tr>
</table>





</form>

</body>
</html>