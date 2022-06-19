<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script>
       $(function(){
        $('#navigation').load('navbar.html');
       })
       
   </script>
</head>
<style>
    .thankmsg{
        max-width : 500px;
        height: 300px;
        margin: 0 auto;
        margin-top: 20vh;
        color: red;
        text-align: center;
        background-color: whitesmoke;
        padding: 40px;
    }
</style>

<body>
    <div id="navigation"></div>
</body>
</html>

<?php
$server = "localhost";
$username = "root";
$password = "";
$dbase = "mhealth";

$con = mysqli_connect($server,$username,$password,$dbase);
if(!$con){
    die("Connection failed".mysqli_connect_error());
}
else{
    //echo "Connection succesfull";
}
$uname = $_POST['uname'];
$email = $_POST['email'];
$title = $_POST['title'];
$story = $_POST['story'];
$sql = "INSERT INTO `data` (`uname`,`email`,`title`,`story`,`dt`) VALUES ('$uname','$email','$title','$story', current_timestamp())";

    //print_r($_POST);
    if($con->query($sql) == true){
        echo "<h1 class='thankmsg'>Thank you for sharing your story with us. We will publish your story soon.</h1>";
    }
    else{
        echo "Error: $sql <br> $con->error";
    }
    
    $con->close();

?>

    