
<!DOCTYPE html>
<html lang="en">

<?php include './model/func_db.php'; ?>
<?php include './model/database.php'; ?>

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

        <div class="lsidebar__input"><br><br>

            <input type="text" placeholder="Search" />
            <input id="searcher" type="text" name="searcher">
            <script>
                $('#searcher').quicksearch('table tbody tr', {
                    'delay': 100,
                    'bind': 'keyup keydown',
                    'show': function() {
                        if ($('#searcher').val() === '') {
                            return;
                        }
                        $(this).addClass('show');
                    },
                    'onAfter': function() {
                        if ($('#searcher').val() === '') {
                            return;
                        }
                        if ($('.show:first').length > 0) {
                            $('html,body').scrollTop($('.show:first').offset().top);
                        }
                    },
                    'hide': function() {
                        $(this).removeClass('show');
                    },
                    'prepareQuery': function(val) {
                        return new RegExp(val, "i");
                    },
                    'testQuery': function(query, txt, _row) {
                        return query.test(txt);
                    }
                });

                $('#searcher').focus();

            </script>

        </div>
    </div>
    <!-- Begin Goals Feed -->
    <div class="goals">
        <div class="goals__header">
            <h2>Home</h2>
        </div>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value ="logout_user">
            <input type="submit" value="Logout">
        </form>

        <!-- Goal starts -->
        <div class="newGoal">

            <div class="goals__input">

                <?php
                echo $_SESSION['username'];?>

                <img
                        src="https://i.pinimg.com/originals/a6/58/32/a65832155622ac173337874f02b218fb.png"
                        alt=""
                />



                <br>
<!--edit comment box replaces post comment box-->
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

        </div>
        <!-- Goal ends -->

        <!-- Goals feed -->
        <div class = "feed">
            <table id="table_example">
                <table>
                    <tbody>
                    <?php
                    $comments = get_comments();
                    foreach ($comments as $comment) : ?>
                    <div>

                        <div class= comment-box><p>

                                <?php echo "Comment ID: ".$comment['cid'];?><br>
                                <?php
                                echo $_SESSION['username'];?><br><br>

                                <select id="status">
                                    <option value="notcompleted" data-sort="1" font-color='green'>Completed</option>
                                    <option value="inprogress" data-sort="2" font-color='yellow'>In Progress</option>
                                    <option value="completed" data-sort="3" font-color='red'>Not Completed</option>
                                </select>
                                <script>
                                    window.onload = function() {
                                        var selItem = sessionStorage.getItem("SelItem");
                                        $('#status').val(selItem);
                                    }
                                    $('#status').change(function() {
                                        var selVal = $(this).val();
                                        sessionStorage.setItem("SelItem", selVal);
                                    });
                                </script>

                                <?php echo nl2br($comment['message']);?><br><br>



                            <form method="post" action="index.php">
                                <input type="hidden" name="action" value ="edit_comment">

                                <input type="hidden" name="cid"
                                       value="<?php echo $comment['cid']; ?>">

                                <input type="submit" value="Edit">
                            </form>



                            <form action="index.php" method="post">
                                <input type="hidden" name="action" value ="delete_comment">
                                <input type="hidden" name="cid"
                                       value="<?php echo $comment['cid']; ?>">

                                <input type="submit" value="Delete">
                            </form>


                            <button onclick="replyFunction()" button class = "newGoal__button">Reply</button>


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
                            <p id="replyTextElem"></p>




                            <br>
                            </form>

                            </p></div>
                        <!-- this is the div divider line for the foreach comments don't delete the line below!-->
                        ____________________________________________________________________________________________________________________________________

                        <?php endforeach; ?>
                    </div>
                    </tbody>
                </table>
                <!--How to handle the live feed - php? JavaScript? - goes here -->
                <!-- <h1> You will see your current goals and past goals in this feed</h1> -->

        </div>
    </div>
    <!-- Right Side Bar -->
    <div class = "rsidebar">


    </div>

</div>
</body>
</html>
