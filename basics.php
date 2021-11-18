<?php
$f_name = "Aaron";
$l_name = "Cleveland";
$age = 27;
$heigiht = 72.0;
$can_vote = true;
$address = array('street' => '123 Main St', 'city' => 'Pittsburgh');
$state = NULL;
define('PI', 3.1452);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Tutorial</title>
</head>
<body>
	<p>Name : <?php echo $f_name . ' ' . $l_name; ?></p>
	<form action="PHP_TUT.php" method="get">
		<label>Your State : </label>
		<input type="text" name="state"/><br>
		<label>Number 1 : </label>
		<input type="text" name="num-1"/><br>
		<label>Number 2 : </label>
		<input type="text" name="num-2"/><br>
		<input type="submit" name="Submit"/>
	</form>
	<?php 
	if(isset($_GET) && array_key_exists('state', $_GET)) {
		$state = $_GET['state'];
		if(isset($state) && !empty($state)) {
			echo 'You live in ' . $state . '<br>';
			echo "$f_name lives in $state<br>";
		}
		if(count($_GET) >= 3) {
			$num_1 = $_GET['num-1'];
			$num_2 = $_GET['num-2'];
			echo "$num-1 + $num-2 = " . ($num_1 + $num_2) . "<br>";
			echo "$num-1 - $num-2 = " . ($num_1 - $num_2) . "<br>";
			echo "$num-1 * $num-2 = " . ($num_1 * $num_2) . "<br>";
			echo "$num-1 / $num-2 = " . ($num_1 / $num_2) . "<br>";
			echo "$num-1 % $num-2 = " . ($num_1 % $num_2) . "<br>";
			echo "$num-1 / $num-2 = " . (intdiv($num_1, $num_2)) . "<br>";

			echo "Increment $num-1 = " . ($num_1++) . "<br>";
			echo "Decrement $num-1 = " . ($num_1--) . "<br>";
			echo "abs(-5) = " . abs(-5) . "<br>";
			echo "ceil(4.45) = " . ceil(4.45) . "<br>";
			echo "floor(4.45) = " . floor(4.45) . "<br>";
			echo "round(4.45) = " . round(4.45) . "<br>";
			echo "max(4,5) = " . max(4,5) . "<br>";
			echo "min(4,5) = " . min(4,5) . "<br>";
			echo "sqrt(16) = " . sqrt(16) . "<br>";
			echo "exp(1) = " . exp(1) . "<br>";
			echo "log(e) = " . log(exp(1)) . "<br>";
			echo "log10(10) = " . log10(exp(10)) . "<br>";

			echo "PI = " . pi() . "<br>";
			echo "hypot(10,10) = " . hypot(10,10) . "<br>"; # hypotenuse
			echo "deg2rad(90) = " . deg2rad(90) . "<br>" # degrees to radius
			echo "rad2deg(1.57) = " . rad2deg(1.57) . "<br>"
			echo "mt_rand(1,50) = " . mt_rand(1,50) . "<br>" # fast random num
			echo "rand(1,50) = " . rand(1,50) . "<br>"; # original random num
			echo "Max Random = " . mt_getrandmax() . "<br>" # max random num
			echo "is_finite(10) = " . is_finite(10) . "<br>"
			echo "is_infinite(log(0)) = " . is_infinite(log(0)) . "<br>";
			echo "is_numeric(\"10\") = " . is_numeric("10") . "<br>";
			# sin, cos, tan, asin, acos, atan, asinh, acosh, atanh, atan2
			echo "sin(0) = " . sin(0) . "<br>"
			echo number_format(12345.6789, 2) . "<br>";
		}
	}
	?>
</body>
</html>