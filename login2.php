<?php


$email=$_POST['email'];
$uname=$_POST['username'];
$pass=$_POST['password'];

$servername='localhost';
$username='root';
$password='';
$dbname='biryani';

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("Connection failed : ".mysqli_connect_error());
}

$sql="INSERT INTO login (email,name,password) VALUES ('$email','$uname','$pass')";

$result=mysqli_query($conn,$sql);

if ($result)
{
    // echo "<center><h1> New Record Inserted </h1></center>";
    include("home.html");
}
else
{
    echo "error : ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);


?>