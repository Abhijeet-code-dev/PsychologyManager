<?php
 include_once("index.html");
include_once("index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share your story</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script>
       $(function(){
        $('#navigation').load('navbar.html');
       })
       
   </script>
    <style>
         :root{
            --blue: #000080;
            --orange: #ff8000;
        }
        
        h1{
            text-align: center;
        }
        form{
            display: flex;
            flex-direction: column;
            width: 80%;
            margin: 0 auto;
        }
        form label{
            font-size: 21px;
        }
        form input{
            padding: 8px;
            margin: 10px;
            margin-left: 0px;
        }
        textarea{
            margin: 10px;
            margin-left: 0px;
        }
        #submit{
            width: 50%;
            background-color: var(--blue);
            color: white;
            margin: 0 auto;
            padding: 8px;
            cursor: pointer;
            font-size: 20px;
            margin-top: 5px;
        }
        #submit:hover{
            background-color: var(--orange);
        }
    </style>
</head>
<body>
    <div id="navigation"></div>
    
    <div id="text_wrapper">
    <h1>Give Hope. Inspire. Change Lives. Share your story</h1>
    <form action="submit.php" method="POST">
        <label for="uname">Enter name as you wish it to appear on our site</label> 
        <input type="text" name="uname" id="uname" required> 
        <label for="email">Enter your email</label> 
        <input type="email" name="email" id="email" required> 
        <label for="title">Enter title of your story</label> 
        <input type="text" name="title" id="title" required> 
        <label for="story">Your Story</label> 
        <textarea name="story" id="story" cols="30" rows="10" placeholder="Start writing your story" required></textarea>
        <button id="submit" name="submit">Submit</button>
    </form>
    </div>
</body>
</html>
