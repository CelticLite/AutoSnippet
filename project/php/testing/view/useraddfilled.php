<html>
<head>
    <title>Auto Snippet Login Page</title>
    <link rel="stylesheet" type="text/css" href="./view/main.css">
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
                    <p>Welcome to Auto Snippet! <br> Register User:</p>
                </div>
            </div>
            <div class="form">

                <body>
                <main>
                    <h1>Account Sign Up</h1>

                    <form action="index.php" method="post" id="short_label_form">
                        <input type="hidden" name="action" value="add_user">
                        <div class="input_field">
                            <label>Username:</label>
                            <input type="text" name="username" value="" placeholder = "Username" class="input">
                        </div><br>

                        <div class="input_field">
                            <label>Password:</label>
                            <input type="password" name="password" placeholder="Password" class="input">
                        </div><br>

                        <div class="input_field">
                            <label>First Name:</label>
                            <input type="text" name="fname" value="user" placeholder = "user" class="input">
                        </div><br>

                        <div class="input_field">
                            <label>Last Name:</label>
                            <input type="text" name="lname" value="user" placeholder = "user" class="input">
                        </div><br>

                        <div class="input_field">
                            <label>E-Mail:</label>
                            <input type="text" name="email" value="user@gmail.com" placeholder = "user@gmail.com" class="input">
                        </div><br>

                        <div class="input_field">
                            <label>Phone Number:</label>
                            <input type="text" name="phone" value="5555555" placeholder = "5555555555" class="input">
                        </div><br>

                        <div class="input_field">
                            <label>Address:</label>
                            <input type="text" name="address" value="123 Calhoun St" placeholder = "123 Calhoun St" class="input">
                        </div><br>
                        <div class="input_field">
                            <label>City:</label>
                            <input type="text" name="city" value="Charleston" placeholder = "Charleston" class="input">
                        </div><br>
                        <div class="input_field">
                            <label>State:</label>
                            <input type="text" name="state" value="SC" placeholder = "SC" class="input">
                        </div><br>
                        <div class="input_field">
                            <label>Zip:</label>
                            <input type="text" name="zip" value="29401" placeholder = "29401" class="input">
                        </div><br>
                        <div class="input_field">
                            <label>Country:</label>
                            <input type="text" name="country" value="US" placeholder = "US" class="input">
                        </div><br>

                        <input type="submit" value="Register" />
                        <br>
                    </form>

                </main>

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
                        ?? 2022 Auto Snippet
                    </div>
                </div>
                </body>
</html>
