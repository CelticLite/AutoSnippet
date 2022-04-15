
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editing a Comment Section</title>
	 <link rel="stylesheet" type="text/css" href="style.css?version=51">
</head>

<body>

	<form action="index.php" method="post">
    <input type="hidden" name="action" value="change_comment">

    <input type="hidden" name="cid"
    value="<?php echo $comment['cid']; ?>">

    <input type="password" name="password" placeholder="Password" class="input">
             
  		<?php

            $comment = get_one_comment($cid);
            foreach ($comment as $comm) : ?>
 
            <textarea name='message' id='message'>
				<?php echo ($comm['message']);?>
            </textarea><br>


		<?php endforeach; ?>

            <button type='submit' name='submit'>Confirm Edit</button>

    </form>


</body>
</html>

				<button>Edit:</button>
			</form>

		</p></div>

		<?php endforeach; ?>

    </table>



</body>
</html>


