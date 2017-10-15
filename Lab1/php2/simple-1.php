<!DOCTYPE html>
<html>
	<head>
		<title>PHP Example</title>
	</head>
	<body>
		<h1> Simple PHP Example </h1>
		<?php
			echo "<p>PHP can echo static text that includes HTML code.</p>";
			// Creating variables - dynamic typing in PHP
			$n = 55;	//integer
			echo "<p>You can also display variable values: n=$n.</p>";
			$p = "yo";	//string
			echo "<p>You can also display variable values: p=$p.</p>";
			$q = 3.14;	//float
			echo "<p>You can also display variable values: q=$q.</p>";
		?>
		<hr />
		<p> You can have many PHP code segments on a single page. </p>
		<?php
			// Data persists between code segments
			echo "<p> $n, $p, $q </p>";
			// Constants
			define('hey', 'Hey, how are you doing?');
			define('age', 65);
			echo "<p>" . hey . " You don't look ". age . "!</p>";
		?>
		<hr />
		<h2> Calculations and Conditionals </h2>
		<?php
			$x = 10 + 20;
			$y = $x * 10;
			$z = $x / $y;
			echo "<p> x=$x, y=$y, z=$z</p>";
			if ($x < $y) {
				echo "<p> Yo! </p>";
			}
			else {
				echo "<p> :( </p>";
			}			
		?>
		<hr />
		<h2> How about some looping?</h2>
		<?php
			$a = 5;
			echo "<p>";
			while ($a > 0) {
				echo "Hola <br />";
				$a--;
			}
			echo "</p>";
			
			echo "<p>";
			for ($i=0; $i<5; $i++) {
				echo "Hola <br />";
			}
			echo "</p>";
		?>
		<hr />
		<h2>Playing with data types</h2>
		<?php
			$alpha=125;
			$beta=33.44;
			$gamma="17.99";
			echo "<p> alpha is " . gettype($alpha). "</p>";
			echo "<p> beta is " . gettype($beta). "</p>";
			echo "<p> gamma is " . gettype($gamma). "</p>";
			$beta = (integer)$beta;
			echo "<p> beta is " . gettype($beta). " value = $beta</p>";
			$success = settype($alpha, 'double');
			echo "<p> alpha is " . gettype($alpha). " value = $alpha</p>";
		?>
		<hr />
		<h2> Arrays! </h2>
		<?php
			//Arrays in PHP can store mixed types!
			//Use the array() function to create an array - no need for sizes
			//Normal arrays
			$months = array('Jan','Feb','Mar','Apr','May','June');
			echo "<p>$months[0] </p>";
			echo "<p>";
			print_r($months);
			echo "</p>";
			
			//Associative arrays
			$name = array('first'=>"John", 'middle'=>"Qunicy", 'last'=>"Adams");
			echo "<p>".$name['middle']."</p>";
			echo "<p>";
			print_r($name);
			echo "</p>";
			echo "<p> There are ".count($name)." elements in the array.</p>";
		?>
		<hr />
		<h2> Strings! </h2>
		<?php
			$phrase="Department of ";
			$phrase=$phrase." Computer Science";
			echo "<p> The string is: $phrase </p>";
			echo "<p> There are ".strlen($phrase)." characters.</p>";
			echo "<p> " .strtolower($phrase)." - ".strtoupper($phrase). "</p>";
			//Comparing strings
			$str1="yes";
			$str2="YeS";
			if (strcmp($str1,$str2) != 0) {
				echo "<p> These strings ($str1) ($str2) are NOT equal!</p>";
			}
			if (strcasecmp($str1,$str2) == 0) {
				echo "<p> These strings ($str1) ($str2) are equal (if you ignore case)!</p>";
			}
			//Note: There are more string functions.
			//PHP is also object-oriented!
		?>
	</body>
</html>
