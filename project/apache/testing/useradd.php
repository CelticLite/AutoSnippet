<!DOCTYPE html>
<html>
<head>
    <title>Auto Snippet Login Page</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <main>
    <h1>Account Sign Up</h1>
    <form action="index.php" method="post" id="add_user_form">
        <input type="hidden" name="action" value="add_user">

        <label>First Name:</label>
        <input type="text" name="fname" value="" class="textbox">
        <br>

        <label>Last Name:</label>
        <input type="text" name="lname" value="" class="textbox">
        <br>
        

        <label>E-Mail:</label>
        <input type="text" name="email" value="" class="textbox">
        <br>

        <label>Username:</label>
        <input type="text" name="username" value="" class="textbox">
        <br>

        <label>Password:</label>
        <input type="password" name="password" value="" class="textbox">
        <br>

        <label>Phone Number:</label>
        <input type="text" name="phone" value="" class="textbox">
        <br>

        <label>Address:</label>
        <input type="text" name="address" value="" class="textbox">
        <br>

        <label>City:</label>
        <input type="text" name="city" value="" class="textbox">
        <br>

        <label>State:</label>
        <input type="text" name="state" value="" class="textbox">
        <br>

        <label>Zip:</label>
        <input type="text" name="zip" value="" class="textbox">
        <br>

        <label>Country:</label>
        <input type="text" name="country" value="" class="textbox">
        <br>

        <p>What team are you on?</p>
        <input type="radio" name="team_on" value="TeamA">
        Team A<br>
        <input type="radio" name="team_on" value="TeamB">
        Team B<br>
        <input type="radio" name="team_on" value="TeamC">
        Team C<br>
        <input type="radio" name="team_on" value="TeamD">
        Team D<br>


        <label>&nbsp;</label>
        <input type="submit" value="Add User" />
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
            © 2022 Auto Snippet
        </div>
    </div>
</body>
</html>