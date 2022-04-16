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

        <!--<input type="text" placeholder="Search" />-->
        <input id="searcher" type="text" name="searcher">
        <br><br><br>


       <h2>Filter:</h2>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value ="filter_all">

            <!--<select id="filterfeed" name="filterfeed">
                <option value="all" data-sort="0" font-color='red'>All</option>
                <option value="notcompleted" data-sort="1" font-color='green'>Not Completed</option>
                <option value="inprogress" data-sort="2" font-color='yellow'>In Progress</option>
                <option value="completed" data-sort="3" font-color='red'>Completed</option>
            </select>
            <br>-->
            <button type='submit' button class = "newGoal__button">All</button>
        </form>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value ="filter_uncomplete">

            <!--<select id="filterfeed" name="filterfeed">
                <option value="all" data-sort="0" font-color='red'>All</option>
                <option value="notcompleted" data-sort="1" font-color='green'>Not Completed</option>
                <option value="inprogress" data-sort="2" font-color='yellow'>In Progress</option>
                <option value="completed" data-sort="3" font-color='red'>Completed</option>
            </select>
            <br>-->
            <button type='submit' button class = "newGoal__button">Not Complete</button>
        </form>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value ="filter_in_progress">

            <!--<select id="filterfeed" name="filterfeed">
                <option value="all" data-sort="0" font-color='red'>All</option>
                <option value="notcompleted" data-sort="1" font-color='green'>Not Completed</option>
                <option value="inprogress" data-sort="2" font-color='yellow'>In Progress</option>
                <option value="completed" data-sort="3" font-color='red'>Completed</option>
            </select>
            <br>-->
            <button type='submit' button class = "newGoal__button">In Progress</button>
        </form>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value ="filter_done">

            <!--<select id="filterfeed" name="filterfeed">
                <option value="all" data-sort="0" font-color='red'>All</option>
                <option value="notcompleted" data-sort="1" font-color='green'>Not Completed</option>
                <option value="inprogress" data-sort="2" font-color='yellow'>In Progress</option>
                <option value="completed" data-sort="3" font-color='red'>Completed</option>
            </select>
            <br>-->
            <button type='submit' button class = "newGoal__button">Done</button>
        </form>

        <div class="lsidebar__input"><br><br>

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

                <form action="index.php" method="post">
                    <input type="hidden" name="action" value="add_comment">
                    <!-- NEED TO GRAB USER INFO -->
                    <input type='hidden' name='uid' value=''>
                    <select id="status" name="status">
                        <option value="Not Completed" data-sort="1" font-color='green'>Not Completed</option>
                        <option value="In Progress" data-sort="2" font-color='yellow'>In Progress</option>
                        <option value="Completed" data-sort="3" font-color='red'>Completed</option>
                    </select>


                    <textarea name="message" rows = "10" cols = "142" Placeholder="What's your new weekly goal?"></textarea>


            </div>
            <!--<button type='submit' name='commentSubmit'>Comment</button>-->
            <button type='submit' name='commentSubmit' button class = "newGoal__button">Submit</button>


            </form>
        </div>
        <!-- Goal ends -->





<h1>In Progress Goals:</h1>
      
        <!-- this is the div divider line for the foreach comments don't delete the line below!-->
        ____________________________________________________________________________________________________________________________________
<br>


        <!-- Goals feed -->



        <div class = "feed">
            <table id="table_example">
                <table>
                    <tbody>


                    <?php
                    $comments = get_inprogress_comments();
                    foreach ($comments as $comment) : ?>
                    <div>

                        <div class= comment-box><p>

                                <?php echo "Comment ID: ".$comment['cid'];?><br>
                                <?php echo "Status: ".$comment['status'];?><br>
                                <?php
                                echo $_SESSION['username'];?><br><br>




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
