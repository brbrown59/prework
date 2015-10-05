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
$middlename = "Alexander";
$lastname = "Jones";

//call function to combine names into one array
$fullname = combine_names ($firstname, $middlename, $lastname);

foreach($fullname as $print_name)
{
	echo "$print_name ";
}

sort($fullname, SORT_STRING);

//puts the names in alphabetical order, demonstrate foreach use
foreach($fullname as $print_alpha_name)
{
	echo "<br>$print_alpha_name";
}

$street = "Easy Street";
$house = "123";
$city = "Oakland";
$state = "New Mexico";

//instead of calling function, use built in one!!!
$address = compact('house', 'street', 'city', 'state');

foreach($address as $print_address)
{
	echo "<br>$print_address";
}


//combines names into one array
function combine_names ($n1, $n2, $n3)
{
	$combined = array('first' => $n1,
							'middle' => $n2,
							'last' => $n3);
	return $combined;
}

?>
</html>