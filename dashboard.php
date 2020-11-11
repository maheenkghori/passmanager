<!DOCTYPE html>
<html>
<head>
	<title> DASHBOARD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles.css">

</head>

<body>
	<h1>WELCOME TO DASHBOARD</h1>


		<form>
                    

               	        <div class="dashboardContainer">     
                        <label>Enter Title</label>
                        <input type="text" placeholder="title" name="title" >
                        <label>Enter Username</label>
                        <input type="text" placeholder="username" name="username" >
                        <label>Enter Password</label>
                        <input type="password" placeholder="password" name="password" id="password" >
                        <label>Repeat Password</label>
                        <input type="password" placeholder="repeat" name="repeat" id="repeat" onkeyup="rep_check()" >
                        <p id="match"></p>
                        <div style="clear:both;"></div>
                        <label>Enter URL</label>
                        <input type="text" placeholder="url" name="url" >
                        <input type="submit" id="submitBttn" value="submit" name="submitBttn">

                </div> 
                


             

               
                 </form> 
                       <script>
                        function rep_check(){
			var pwsd = document.getElementById("password").value;
			var rep = document.getElementById("repeat").value;
			var strResult;
			if (pwsd == rep) {
				strResult="Password entered correct.";
				document.getElementById("match").innerHTML = strResult.toString();
			}
			else {
				strResult="Password entered incorrect.";
				document.getElementById("match").innerHTML = strResult.toString();
				}
                         </string>


                                <?php
				$serverName = "localhost";
				$username = "root";
				$password = "";
				$databaseName = "master";

				// Create connection
				$connect = new mysqli($serverName, $username, $password, $databaseName);

				// Check connection
				if ($connect->connect_error) {
				  die("Connection failed: " . $connect->connect_error);
				}
					if(isset($_GET['submitBttn'])){
						$title = $_GET['title'];
						$uname=$_GET['username'];
						$password = $_GET['password'];
						$url=$_GET['url'];

						$sql = "INSERT INTO password_table (title, username, password, url)
						VALUES ('$title', '$uname','$password','$url')";
						//echo $sql;
						if ($connect->query($sql) === TRUE) {
						  echo "New record added successfully";
						} else {
							  echo "Error: " . $sql . "<br>" . $connect->error;
								}

					}
				
				$connect->close();
			?>

</body>
</html>