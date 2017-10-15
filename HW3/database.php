<!DOCTYPE html>
<html>
	<head>
		<title>PHP Example</title>
	</head>
	<body>
		<h1> Using PHP to connect to a MySQL Database </h1>
		<p> Note:This example assumes a pre-existing, populated database called "avv1004". </p>
		<?php
			//Create a connection to the MySQL server and store DB resource handle
			$handle=mysql_connect('localhost','avv1004','9toiryu');
			//Check to see if connection established and exit on error
			if($handle == FALSE) {
				die("No database connection available: ".mysql_error());
			}
			//Select the database that you want to use
			$db=mysql_select_db('avv1004');
			if($db == FALSE) {
				die("Unable to select database: ".mysql_error());
			}
			//Running queries on the database
			//Step #1 - Formulate your query
			$query = "SELECT * FROM EMPLOYEE";
			echo "<p> $query </p>";
			//Step #2 - Run query and store result
			$result= mysql_query($query, $handle);
			if($result==FALSE) {
				echo "<p>QUERY ERROR: ". mysql_error() ."</p>";
			}
			//Step #3 - Working with the results
			//Fetch and return records as associative array
			while($row=mysql_fetch_assoc($result)){
				echo "<p>";
				print_r($row);
				echo "</p>";
			}	
			//Step #3 - Alternative- Only show specific attribute values
			$result= mysql_query($query, $handle);
			while($row=mysql_fetch_assoc($result)){
				echo "<p>".$row['Fname'] . "</p>";
			}
			
			//Step #3 - Alternative- Use a table to display output
			$result= mysql_query($query, $handle);
			echo '<table border="1">';
			echo "<tr><th>Names</th></tr>";
			while($row=mysql_fetch_assoc($result)){
				echo "<tr> <td>".$row['Fname'] . "</td></tr>";
			}
			echo "</table>";
			
			//Don't forget to close your connection to the database
			mysql_close($handle);
		?>
	</body>
</html>
