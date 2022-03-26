
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Building A Comment Section</title>
	<link rel="stylesheet" type="text/css" href="style.css?version=51">
</head>

<body>

	<form action="index.php" method="post">
    <input type="hidden" name="action" value="add_comment">
    	<!--Will need to grab username   -->
    		<input type='hidden' name='uid' value='Anonymous'>

            <textarea name='message'></textarea><br>

            <label>&nbsp;</label>

            <button type='submit' name='commentSubmit'>Comment</button>

    </form>

    <table>
  		<?php
  		$comments = get_comments();
  		 foreach ($comments as $comment) : ?>
  		<div class=comment-box><p>
  		 	<?php echo $comment['cid'];?><br>
  		 	<?php echo $comment['uid'];?><br><br>
			<?php echo nl2br($comment['message']);?><br><br>

			<form>
				<input type='hidden' name='uid' value='$comment["uid"]>
				<button>Edit:</button>
			</form>

		</p></div>

		<?php endforeach; ?>

    </table>



</body>
</html>


