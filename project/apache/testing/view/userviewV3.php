<!DOCTYPE html>
<html lang="en">



  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Auto Snippet</title>
    <link rel="stylesheet" href="main.css" />
  </head>
  <body>
  <div class ="bwrapper">
  <!-- Left side bar -->
    <div class="lsidebar">
		<div class="sidebarOption">
			<h2>Home</h2>
		</div>
		<div class="sidebarOption">
			<h2>Other Option</h2>
		</div>
		<div class="sidebarOption">
			<h2>Another Option</h2>
		</div>
	</div>
	<!-- Begin Goals Feed -->
	<div class="goals">
      <div class="goals__header">
        <h2>Home</h2>
      </div>

      <!-- Goal starts -->
      <div class="newGoal">

          <div class="goals__input">
            <img
              src="https://i.pinimg.com/originals/a6/58/32/a65832155622ac173337874f02b218fb.png"
              alt=""
            />
              <br>
            <form action="index.php" method="post">
                <input type="hidden" name="action" value="add_comment">
                <!-- NEED TO GRAB USER INFO -->
                <input type='hidden' name='uid' value='Anonymous'>


                <textarea name="message" rows = "10" cols = "142" Placeholder="What's your new weekly goal?"></textarea>
            

          </div>
            <!--<button type='submit' name='commentSubmit'>Comment</button>-->
            <button type='submit' name='commentSubmit' button class = "newGoal__button">Submit</button>
          

        </form>
      </div>
      <!-- Goal ends -->
	  
	  <!-- Goals feed -->
	  <div class = "feed">
              <table>
  		<?php
  		$comments = get_comments();
  		 foreach ($comments as $comment) : ?>
        <div>
  		<div class= comment-box><p>

  		 	<?php echo "Comment ID: ".$comment['cid'];?><br>
  		 	<?php echo "Username: ".$comment['uid'];?><br><br>
			<?php echo nl2br($comment['message']);?><br><br>



			<form>
				<input type='hidden' name='uid' value='$comment["uid"]'>
				<button>Edit</button>



                <button onclick="replyFunction()">Reply</button>

                <p id="replyTextElem"></p>

                <script>
                    function replyFunction() {
                        let text;
                        let replyText = prompt("Please enter a reply:", "Reply");
                        if (replyText == null || replyText == "") {
                            text = "User cancelled the reply.";
                        } else {
                            text = "Reply " + replyText;
                        }
                        document.getElementById("replyTextElem").innerHTML = text;
                    }
                </script>

                <br>
                <!-- this is the div divider line for the foreach comments don't delete the line below!-->
                ____________________________________________________________________________________________________________________________________

			</form>
		</p></div>
         <?php endforeach; ?>
    </table>
			<!--How to handle the live feed - php? JavaScript? - goes here -->
		<!-- <h1> You will see your current goals and past goals in this feed</h1> -->
	  
	  
	  </div>
	</div>
	<!-- Right Side Bar -->
	<div class = "rsidebar">
		<div class="rsidebar__input">
              <input type="text" placeholder="Search" />
      </div>
	
	</div>
	
	</div>
	</body>
</html>
