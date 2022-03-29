<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Auto Anippet Login Page</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
<div class="wrapper">
	<div class="header">
		<div class="top">

			<div class="container1">
				<div class="logo">
					<img src="ASLogoV1.1.jpeg" alt="AutoSnippet" style="width: 200px; height: 150px;">
				</div>
				<div class="welcome">
					<p>Welcome to AutoSnippet! <br> Please, Login:</p>
				</div>
			</div>
			<br>
		<form action="index.php" method="post" id="short_label_form">
       			<input type="hidden" name="action" value="validate_login">
        		<h1>Customer Login</h1>
        		<p>You must login before you can register a product</p>
   
            		<label for="id"><b>Username:</b></label>
           		<input type="text" name="id" required/>
        
            		<label for="password"><b>Password:</b></label>
            		<input type="text" name="password" required/>

            		<input type="submit" name="login" id="login" value="Login" />
            
        	</form>
			<div class="or">
				<div class="line"></div>
				<p>OR</p>
				<div class="line"></div>
			</div>

  		<div id="name"></div>
		<div class="signup">
			<p>Don't have an account? <a href="#">Register</a></p>
		</div>
		</div>
		</div>

	<div class="footer">
		<div class="links">
			<ul>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">SUPPORT</a></li>
				<li><a href="#">PRIVACY</a></li>
				<li><a href="#">TERMS</a></li>
				<li><a href="#">LANGUAGE</a></li>
			</ul>
		</div>
		<div class="copyright">
			© 2022 Auto Snippet
		</div>
	</div>
</div>

</body>
</html>
