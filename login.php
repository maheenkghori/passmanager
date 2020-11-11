<!DOCTYPE html>
<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles.css">
		<title>Login Page</title>
	</head>


	 <body>
		<form>
                <div class="container"> 
                    <div class="login-text">
                    <h2>Log In</h2>
                </div>
                    <label>Username : </label>
                        
                        <label>Master Password : </label> 
                        <input type="password" placeholder="Enter Password" name="password" id="password" required>
                        
                        <input type="submit" id="submit" value="submit" name="submit">
                           
                </div> 
                 </form> 
                 <?php

                        if(isset($_GET['submit'])){
                            $p= $_GET['password'];
                            $masterpassword= "maheen";
                            if($p == $masterpassword){
                                header('Location:dashboard.php');
                               }
                            else{
                                header('Location:login.php');                                
                            }


            }


            ?>

               

           

        </body>
 </html>