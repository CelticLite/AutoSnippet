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
            <h1>Auto Snippet</h1>
        </div>

        <!--<input type="text" placeholder="Search" />-->

        <br><br><br>


        <h2>Filter:</h2>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value ="filter_all">

            <button type='submit' button class = "newGoal__button">All</button>
        </form>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value ="filter_uncomplete">

            <button type='submit' button class = "newGoal__button">Not Complete</button>
        </form>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value ="filter_in_progress">

            <button type='submit' button class = "newGoal__button">In Progress</button>
        </form>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value ="filter_done">

            <button type='submit' button class = "newGoal__button">Completed</button>
        </form>

   
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

                <h3>Welcome, <?php
                echo $_SESSION['username'];?>.</h3>

                <img
                        src="https://i.pinimg.com/originals/a6/58/32/a65832155622ac173337874f02b218fb.png"
                        alt=""
                />



                <br>

 



                    <!--<input type="password" name="password" placeholder="Password" class="input">-->
           <!-- <p>

                    <select id="status" name="status">
                        <option value="Not Completed" data-sort="1" font-color='green'>Not Completed</option>
                        <option value="In Progress" data-sort="2" font-color='yellow'>In Progress</option>
                        <option value="Completed" data-sort="3" font-color='red'>Completed</option>
                    </select>
            </p> --> 


            <?php

            $comment = get_one_comment($cid);
            foreach ($comment as $comm) : ?>
             <form action="index.php" method="post">
              
            <input type="hidden" name="action" value="change_comment">

                    <p><select id="status" name="status">
                        <option value="Not Completed" data-sort="1" font-color='green'>Not Completed</option>
                        <option value="In Progress" data-sort="2" font-color='yellow'>In Progress</option>
                        <option value="Completed" data-sort="3" font-color='red'>Completed</option>
                    </select></p>

            <input name="cid" type="hidden" id="cid"
                value="<?php echo ($comm['cid']);?>">

            <input name="uid" id="uid" type="hidden"
                           value="<?php echo ($comm['uid']);?>">

            <textarea name='message' id='message' cols="140" rows="10" method="post"><?php echo ($comm['message']);?>
            </textarea><br>

           <p> <input type="submit" value="Submit" button class = "newGoal__button"></p><br>
            </form>
                 

                        <?php endforeach; ?>

           

                
        </div>
        <!-- Goal ends -->






        <h2>All Goals</h2>
        <!-- this is the div divider line for the foreach comments don't delete the line below!-->
        ____________________________________________________________________________________________________________________________________
        <br>


        <!-- Goals feed -->

               <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                function searchAndHighlight(searchTerm, selector) {
                    if (searchTerm) {
                        var selector = selector || "#realTimeContents";
                        var searchTermRegEx = new RegExp(searchTerm, "ig");
                        var matches = $(selector).text().match(searchTermRegEx);
                        if (matches != null && matches.length > 0) {
                            $('.highlighted').removeClass('highlighted');
                            $span = $('#realTimeContents span');
                            $span.replaceWith($span.html());
                            if (searchTerm === "&") {
                                searchTerm = "&amp;";
                                searchTermRegEx = new RegExp(searchTerm, "ig");
                            }
                            $(selector).html($(selector).html().replace(searchTermRegEx, "<span class='match'>" + searchTerm + "</span>"));
                            $('.match:first').addClass('highlighted');
                            var i = 0;
                            $('#NextBtn').off('click').on('click', function () {
                                i++;
                                if (i >= $('.match').length) i = 0;
                                $('.match').removeClass('highlighted');
                                $('.match').eq(i).addClass('highlighted');
                                $('.ui-mobile-viewport').animate({
                                    scrollTop: $('.match').eq(i).offset().top
                                }, 300);
                            });
                            $('#PreBtn').off('click').on('click', function () {
                                i--;
                                if (i < 0) i = $('.match').length - 1;
                                $('.match').removeClass('highlighted');
                                $('.match').eq(i).addClass('highlighted');
                                $('.ui-mobile-viewport').animate({
                                    scrollTop: $('.match').eq(i).offset().top
                                }, 300);
                            });
                            if ($('.highlighted:first').length) { //if match found, scroll to where the first one appears
                                $(window).scrollTop($('.highlighted:first').position().top);
                            }
                            return true;
                        }
                    }
                    return false;
                }
                $(document).on('click', '#SearchBtn', function (event) {
                    $(".highlighted").removeClass("highlighted").removeClass("match");
                    if (!searchAndHighlight($('#SearchTxt').val())) {
                        alert("No results found");
                    }
                });
            </script>


        <body>



        <!-- Goals feed -->

        <form id="form1">
            <p><input type="text" id="SearchTxt" />
            <input type="button" id="SearchBtn" value="Search" />
            <input type="button" id="NextBtn" value="Next" />
            <input type="button" id="PreBtn" value="Previous" />
            <form action="index.php" method="post">
                <input type="hidden" name="action" value ="clear">
                <input type="submit" value="Clear">
            </form>
        </form></p>

            

                <div class = "feed" id="realTimeContents">

        
            <table id="table_example">
                <table>
                    <tbody>


                    <?php
                    $comments = get_comments($cid);
                    foreach ($comments as $comment) : ?>
                    <div>

                        <div class= comment-box><p>

                                <?php echo "Comment ID: ".$comment['cid'];?><br>
                                <?php echo "Status: ".$comment['status'];?><br>
                                <?php
                                echo "User Id: ".$comment['uid']?><br><br>




                                <?php echo nl2br($comment['message']);?><br><br>



                                <!--<form method="post" action="index.php">
                                    <input type="hidden" name="action" value ="edit_comment">

                                    <input type="hidden" name="cid"
                                           value="?php echo $comment['cid']; ?>">

                                    <input type="submit" value="Edit">
                                </form>



                                <form action="index.php" method="post">
                                    <input type="hidden" name="action" value ="delete_comment">
                                    <input type="hidden" name="cid"
                                           value="?php echo $comment['cid']; ?>">

                                    <input type="submit" value="Delete">
                                </form>


                                <button onclick="replyFunction()" button class = "newGoal__button">Reply</button>-->

                            <form action="index.php" method="post">
                                <input type='hidden' name='uid' value='$comment["uid"]'>
                                <input type="hidden" name="cid" value="<?php echo $comment['cid']; ?>" >
                                <div class="dropdown">
                                    <button class="newGoal__button">Options</button>
                                    <div class="dropdown-content">
                                        <form method="post" action="index.php">
                                            <input type="hidden" name="action" value ="edit_comment">

                                            <input type="hidden" name="cid"
                                                   value="<?php echo $comment['cid']; ?>">

                                            <input type="submit" value="                   Edit                    ">
                                        </form>
                                        <form action="index.php" method="post">
                                            <input type="hidden" name="action" value ="delete_comment">
                                            <input type="hidden" name="cid"
                                                   value="<?php echo $comment['cid']; ?>">

                                            <input type="submit" value="                   Delete                ">
                                        </form>
                                        <!--<a href="#" type="submit" name="action" value="edit_comment_comment">Edit</a>
                                        <a href="#" type="submit" name="action" value="delete_comment">Delete</a>-->
                                    </div>
                                </div>
                            </form>

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
