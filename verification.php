<?php

$email=$_POST['email'];
$pass=$_POST['password'];

$servername='localhost';
$username='root';
$password='';
$dbname='biryani';

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("connection failed :".mysqli_connect_error());
}

$sql = "SELECT * FROM `login` WHERE email='$email' ";


$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==0)
{
    ?><script>
        alert("invalid credentials");
    </script>
    <?php
    include("login-1.html");
}
else
{
    setcookie("username","$email",time()+3600,'/',"",0);
    echo "cookie created";
    include("home.html");

}




?>