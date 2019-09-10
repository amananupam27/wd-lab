<?php

$first_name = $_POST['fname'];
$last_name = $_POST['sname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

$contact = $_POST['contact'];
$address = $_POST['address'];
$dd = $_POST['dd'];
$mm = $_POST['mm'];
$yyyy = $_POST['yyyy'];
echo '<h1>HERE ARE YOUR DETAILS</h1><br>';
echo '<h3>

<table border=1 cellpadding="20">
<tr>
<td>Full Name </td><td>'.$first_name.' '.$last_name.'</td>
</tr>
<tr>
<td>Email</td><td>'.$email.'</td>
</tr>
<tr>
<td>Password</td><td>'.$pwd.'</td>
</tr>
<tr>
<td>Date of Birth</td><td>'.$dd.'/'.$mm.'/'.$yyyy.'</td>
</tr>
<tr>
<td>Contact</td><td>'.$contact.'</td>
</tr>
<tr>
<td>Address</td><td>'.$address.'</td>
</tr>
</table>



</h3>';


?>