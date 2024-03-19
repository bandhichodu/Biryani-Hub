<?php

include("links.html");

$name=$_POST['name'];
$email=$_POST['email'];
$item=$_POST['item'];
$price=$_POST['price'];
$addr=$_POST['address'];

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
