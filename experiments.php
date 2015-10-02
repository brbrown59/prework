<!DOCTYPE html>
<html>
<head>
	<title>Names</title>
</head>
<body>
	His name is:
</body>
<?php
$firstname = "Pete";
$lastname = "Jones";

$fullname = combine_names ($firstname, $lastname);

echo $fullname;

function combine_names ($n1, $n2)
{
	$combined = $n1 . " " . $n2;
	return $combined;
}

?>
</html>