<html>
<head>
<title>index.php</title>

<script>


function check()
{
var fname=form1.elements["fname"].value;
var sname=form1.elements["sname"].value;
var email=form1.elements["email"].value;
var pwd=form1.elements["pwd"].value;
var contact=form1.elements["contact"].value;
var dd=form1.elements["dd"].value;
var mm=form1.elements["mm"].value;
var yyyy=form1.elements["yyyy"].value;
var addr=form1.elements["addr"].value;
var frm_element = document.getElementById ('address');
var message="";
if(fname=="")
{
	message+="-Enter first name\n";
}
if(sname=="")
{
	message+="-Enter second name\n";
}
if(email=="")
{
	message+="-Enter email\n";
}
if(pwd=="")
{
	message+="-Enter password\n";
}
if(contact=="")
{
	message+="-Enter contact\n";
}
if(dd=="")
{
	message+="-Enter date\n";
}
if(mm=="")
{
	message+="-Enter month\n";
}
if(yyyy=="")
{
	message+="-Enter year\n";
}
if(addr=="")
{
	message+="-Enter address\n";
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
<h1>PERSONAL DETAILS</h1>
<form method="post" action="conn.php" name="form1">
<table>
<tr>
<td>First Name: </td><td><input type="value" name="fname" id="fname"></td>
</tr>
<tr>
<td>Last Name: </td><td><input type="value" name="sname" id="sname"></td>
</tr>
<tr>
<td>Email: </td><td><input type="email" name="email" id="email"></td>
</tr>
<tr>
<td>Password: </td><td><input type="password" name="pwd" id="pwd"></td>
</tr>
<tr>
<td>Contact: </td><td><input type="value" name="contact" id="contact"></td>
</tr>
<tr>
<td>DOB:</td>
<td>
<select name="dd" id="dd">
<option> </option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select>


<select name="mm" id="mm">
<option> </option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>

</select>
<select name="yyyy" id="yyyy">
<option> </option>
<option>1900</option>
<option>1901</option>
<option>1902</option>
<option>1903</option>
<option>1904</option>
<option>1905</option>
<option>1906</option>
<option>1907</option>
<option>1908</option>
<option>1909</option>
<option>1910</option>
<option>1911</option>
<option>1912</option>
<option>1913</option>
<option>1914</option>
<option>1915</option>
<option>1916</option>
<option>1917</option>
<option>1918</option>
<option>1919</option>
<option>1920</option>
<option>1921</option>
<option>1922</option>
<option>1923</option>
<option>1924</option>
<option>1925</option>
<option>1926</option>
<option>1927</option>
<option>1928</option>
<option>1929</option>
<option>1930</option>
<option>1931</option>
<option>1932</option>
<option>1933</option>
<option>1934</option>
<option>1935</option>
<option>1936</option>
<option>1937</option>
<option>1938</option>
<option>1939</option>
<option>1940</option>
<option>1941</option>
<option>1942</option>
<option>1943</option>
<option>1944</option>
<option>1945</option>
<option>1946</option>
<option>1947</option>
<option>1948</option>
<option>1949</option>
<option>1950</option>
<option>1951</option>
<option>1952</option>
<option>1953</option>
<option>1954</option>
<option>1955</option>
<option>1956</option>
<option>1957</option>
<option>1958</option>
<option>1959</option>
<option>1960</option>
<option>1961</option>
<option>1962</option>
<option>1963</option>
<option>1964</option>
<option>1965</option>
<option>1966</option>
<option>1967</option>
<option>1968</option>
<option>1969</option>
<option>1970</option>
<option>1971</option>
<option>1972</option>
<option>1973</option>
<option>1974</option>
<option>1975</option>
<option>1976</option>
<option>1977</option>
<option>1978</option>
<option>1979</option>
<option>1980</option>
<option>1981</option>
<option>1982</option>
<option>1983</option>
<option>1984</option>
<option>1985</option>
<option>1986</option>
<option>1987</option>
<option>1988</option>
<option>1989</option>
<option>1990</option>
<option>1991</option>
<option>1992</option>
<option>1993</option>
<option>1994</option>
<option>1995</option>
<option>1996</option>
<option>1997</option>
<option>1998</option>
<option>1999</option>
<option>2000</option>
<option>2001</option>
<option>2002</option>
<option>2003</option>
<option>2004</option>
<option>2005</option>
<option>2006</option>
<option>2007</option>
<option>2008</option>
<option>2009</option>
<option>2010</option>
<option>2011</option>
<option>2012</option>
<option>2013</option>
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
<option>2018</option>
<option>2019</option>
</select>
</td>
</tr>
<br>
<br>
<tr>
<td>
Address: </td><td><textarea rows="4" cols="20" name="address" id="addr"></textarea></td>
</tr>
<tr>
<td>
<button type="reset" value="reset">Reset</button>
<button type="submit"  name="answer" onclick="return check()" >Submit</button>
</td>
</tr>
</table>





</form>

</body>
</html>