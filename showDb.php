<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
			$serverName = "localhost";
			$userName = "root";
			$password = "";
			$databaseName = "master";


			// Create connection
			$connect = new mysqli($serverName, $userName, $password, $databaseName);
			// Check connection
			if ($connect->connect_error) {
			  die("Connection failed: " . $connect->connect_error);
			}

			$sql = "SELECT title, username, password, url FROM password_table";
			$result = $connect->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			    echo "Title:" . $row["title"]. "username: " . $row["username"]. "Password  : " . $row["password"]."URL:".$row["url"]."<br>";
			  }
			} else {
			  echo "0 results";
			}
			$connect->close();
?>







</body>
</html>