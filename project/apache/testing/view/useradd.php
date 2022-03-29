<html>
<head>
    <title>Auto Snippet Login Page</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
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
    <form action="index.php" method="post" id="add_user_form">
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
        <input type="text" name="fname" value="" placeholder = "First Name" class="input">
        </div><br>
	<div class="input_field">
        <label>Last Name:</label>
        <input type="text" name="lname" value="" placeholder = "Last Name" class="input">
        </div><br>
	<div class="input_field">
        <label>E-Mail:</label>
        <input type="text" name="email" value="" placeholder = "Email" class="input">
        </div><br>
	<!-- Moved these to the top bc Username/Password choice should be prompt 1&2
        <div class="input_field">
        <label>Username:</label>
        <input type="text" name="username" value="" placeholder = "Username" class="input">
        </div><br>
	<div class="input_field">
        <label>Password:</label>
        <input type="password" name="password" placeholder="Password" class="input">
        </div><br>-->
	<div class="input_field">
        <label>Phone Number:</label>
        <input type="text" name="phone" value="" placeholder = "Phone Number" class="input">
        </div><br>
	<div class="input_field">
        <label>Address:</label>
        <input type="text" name="address" value="" placeholder = "Address" class="input">
        </div><br>
	<div class="input_field">
        <label>City:</label>
        <input type="text" name="city" value="" placeholder = "City" class="input">
        </div><br>
	<div class="input_field">
        <label>State:</label>
        <input type="text" name="state" value="" placeholder = "State" class="input">
        </div><br>
	<div class="input_field">
        <label>Zip:</label>
        <input type="text" name="zip" value="" placeholder = "Zip" class="input">
        </div><br>
	<div class="input_field">
        <label>Country:</label>
        <input type="text" name="country" value="" placeholder = "Country" class="input">
        </div><br>
	<div class="input_field">
        <!--<p>What team are you on?</p>-->
        
        <div class="input_field">
        <label for="teamselect">Choose your team:</label>
        <select name="team_on" id="teamselect" class="input_field">
          <option value="teamA">Team A</option>
          <option value="teamB">Team B</option>
          <option value="teamC">Team C</option>
          <option value="teamD">Team D</option>
        </select>
     </div><br>

        
       <!-- <input type="radio" name="team_on" value="TeamA">
        Team A<br>
        <input type="radio" name="team_on" value="TeamB">
        Team B<br>
        <input type="radio" name="team_on" value="TeamC">
        Team C<br>
        <input type="radio" name="team_on" value="TeamD">
        Team D<br>-->
        <label>&nbsp;</label>
        <div class="btn"><input type="submit" value="Add User" /></div>
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
