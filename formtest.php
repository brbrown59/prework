<?php

$f = $c = '';

//if there's a value entered in the form, sanitize it
if (isset($_POST['f'])) $f = sanitizestring($_POST['f']);
if (isset($_POST['c'])) $c = sanitizestring($_POST['c']);

//if given a fahrenheit value, convert to celsius
if ($f != '')
{
	$c = intval((5 / 9) * ($f - 32));
	$out = "$f degrees F equals $c degrees C";
}

//otherwise, if given a celsius value, convert to fahrenheit
elseif($c != '')
{
	$f = intval((9 / 5) * $c + 32);
	$out = "$c degrees C equals $f degrees F";
}

//if neither entered, set output to blank
else
{
	$out = '';
}

//the HTML
echo <<<_END
<html>
	<head>
		<title>Temperature Conversion</title>
	</head>
	<body>
		<pre>
			Enter either Fahrenheit or Celsius and click convert

			<b>$out</b> <!--output the result-->

			<!--form stuff-->
			<form method="post" action="formtest.php">
				Fahrenheit <input type="text" name="f" size="7">
				Celsius <input type="text" name="c" size="7">
				<input type="submit" value ="Conversion">
			</form>
		</pre>
	</body>
</html>
_END;

//sanitization function
function sanitizestring($var)
{
	$var = stripslashes($var);
	$var = strip_tags($var);
	$var = htmlentities($var);
	return $var;
}
?>