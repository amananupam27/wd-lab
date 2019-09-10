
<html>
<head>
<title>index.php</title>

</head>

<body>
<form method="post" action="index2.php">
First Value: <input type="value" name="fv" value="<?php echo @$_GET['a']?>"><br><br>
Second Value: <input type="value" name="sv" value="<?php echo @$_GET['b']?>"><br><br>
Select Option: <br><br>
<input type="radio"  name="sel" value="Addition" <?php  if(@$_GET['c']=="Addition") {?> checked="checked" <?php }?>>Addition<br><br>

<input type="radio" name="sel" value="Subtration" <?php  if(@$_GET['c']=="Subtration") {?> checked="checked" <?php }?>>Subtraction<br><br>
<input type="radio" name="sel" value="Multiplication" <?php  if(@$_GET['c']=="Multiplication") {?> checked="checked" <?php }?>>Multiply<br><br>
<input type="radio" name="sel" value="Division" <?php  if(@$_GET['c']=="Division") {?> checked="checked" <?php }?>>Divide<br><br>
Result: <input type="value" readonly="readonly" value="<?php echo @$_GET['d']?>"><br><br>
<br>
<br>
<button type="submit" name="button" >Submit</button>
</form>

</body>
</html>