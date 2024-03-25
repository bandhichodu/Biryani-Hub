<?php

include("links.html");

$name=$_POST['name'];
$email=$_POST['email'];
$item=$_POST['item'];
$price=$_POST['price'];
$addr=$_POST['address'];

$servername='localhost';
$username='root';
$password='';
$dbname='biryani';

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("connection failed :".mysqli_connect_error());
}

$sql="INSERT INTO booking (name,email,item,price,address) VALUES ('$name','$email','$item','$price','$addr')";


$result=mysqli_query($conn,$sql);


?>
<html>
    <body>
        <center>
        <h2><li>Hello Mr/Mrs <i><?php echo $name?></i></li>
            <h2><li>Your booking had been confirmed ...</li>
            <li>Your item <i><?php echo $item?></i> will be 
            delivered to your address <i><?php echo $addr?> </i>soon.. </li><li>Visit again</li>
            <br><br>
            click here to go to <a href="home.html">Home page</a>
            </h2></h2>
    </center>
    </body>
</html>
