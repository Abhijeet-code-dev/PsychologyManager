<?php
$server = "localhost";
$username = "root";
$password = "";
$dbase = "mhealth";

$con = mysqli_connect($server,$username,$password,$dbase);
if(!$con){
    die("Connection failed".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Records</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script>
       $(function(){
        $('#navigation').load('navbar.html');
       })
   </script>
    <style>
        .rec_container{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(15rem,1fr));
            gap: 1rem;
            margin-top: 10vh;
        }
        .record{
            border: 2px solid hotpink;
            border-radius: 10px;
            max-width: 500px;
            padding: 10px;
            background-color: whitesmoke;
        }
       #quote{
           margin-top: 15vh;
       }
        .name{
            font-size: 24px;
            padding: 10px;
        }
        .dtitle{
            font-size: 30px;
            color: blue;
            text-align: center;
        }
        .dstory{
            font-size: 21px;
            
        }
    </style>
</head>
<body>
    
    <div id="navigation"></div>
    <div id="quote">
    <h2>Read.Inspire.Learn from Experiences</h2>
    </div>
    <div class="rec_container">
        
<?php
    $sql = "SELECT * FROM `data` where verify='yes'";
    $result = mysqli_query($con,$sql);
    //No. of records
    // $num =  mysqli_num_rows($result);
    // echo $num;
    while($row = mysqli_fetch_assoc($result)){
        echo "<div class= record>";
         echo "<div class= name>".$row['uname']. "</div>";
         echo "<div class = dtitle>".$row['title']."</div>";
         echo "<div class= dstory>".$row['story']."</div>";
         echo "<br>";
         echo "</div>";
}
?>
        </div>
    
</body>
</html>