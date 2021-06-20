<?php
include_once 'functions.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>askit zim</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
    <link rel="stylesheet" href="resetstyle.css"> 
    <link rel="stylesheet" href="main.css">
    <script defer src="main.js"></script>
    <script defer src="functions.js"></script>
</head>
<body>
   
   <nav class="top-nav">
    <ul>
    <li> <a href="#Home">HOME</a> </li>
    <li><a href="#pic-upload">REGISTER</a></li>
    <li><a href="#Tutorials">Tutorials</a></li>
    <li><a href="#Paid revisions">Paid Revisions</a></li>
    <li><a href="#Exercises">Exercises</a></li>
    <li><a href="#Download Material">Download Material</a></li>
    </ul>
    <br>
    <button class = "btn-logout" onclick = "openLoginWindow()">Log Out</button>
    </nav>
    <br>
<div class ="ask-a-question">
    Welcome to askit zim. <br>
    Please go ahead to ask your question. Our professionals will be at your service. <br>
    <button class="btn-ask"><a href="#pic-upload">Click to ask</a></button>
    <div class = "div-for-question">
    ... students can ask any academic question online and get immediate answers! <br>
    <hr>
    <aside class ="aside-question-txtarea">
    Please type/paste your question into the text: <br>
        <textarea name="txt-area-question" class="txt-area-question" cols="100" rows="25"></textarea> <br>
        <button class="btn-submit-question">Submit Question</button> <br>
      
    </aside>
       <aside class ="pic-upload" id ="pic-upload">
       alternatively upload a picture with the question:
       <input type="file" id="files" accept = "image/*"> <br>
       <hr>
       <button class = "btn-upload">Upload Image</button>
       <button name = "btn-view-image" class = "btn-view-image">View Image</button>
       <button class = "btn-delete-image">Detele Image</button>
       </aside>
    </div>
</div>
<br>
<footer>
Hello this is my footer.
<p>Copywrite &copy; 2021, designed by <span>Ventenlab.</span></p>
</footer>

</body>
</html>