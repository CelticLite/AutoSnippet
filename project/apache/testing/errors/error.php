<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Auto Anippet Login Page</title>

    <link rel="stylesheet" type="text/css" href="main.css?version=51">
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
            <form action="index.php" method="post">
                <input type="hidden" name="action" value="login_user">
                <h2>User Login</h2><br>

                <h3 style="color:red;">Error</h3>
                <p style="color:red;" class="first_paragraph"><?php echo $error; ?></p>

                <br>
                <p>You must login before you can use Auto Snippet:</p><br>

                <label for="username"><b>Username:</b></label>
                <input type="text" name="username" required/>

                <label for="password"><b>Password:</b></label>
                <input type="password" name="password" required/>
                <input type="submit" name="login" id="login" value="submit" />

            </form>

            <div class="or">
                <div class="line"></div>
                <p>OR</p>
                <div class="line"></div>
            </div>
            <form action="index.php" method="post" id="short_label_form">
                <input type="hidden" name="action" value="show_register_page">
                <p>Don't have an account?</p> <br>
                <input type="submit" name="Register" id="login" value="Register" />
            </form>
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
