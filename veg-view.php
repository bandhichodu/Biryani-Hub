<?php

include('links.html');
$veg=$_POST['veg'];

$servername='localhost';
$username='root';
$password='';
$dbname='biryani';

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("connection failed: ".mysqli_connect_error());
}

$sql = "SELECT * FROM `veg-items` WHERE Item='$veg'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==0)
{
    echo ("Item not found");
}
else
{
?>

<h1 align='center' >Specific item </h1>

<table align='center' border='5'>
<tr>
    <td> Item </td><td> Price </td>
</tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
    <td><?php echo $row['Item']?></td>
    <td><?php echo $row['price']?></td>
    </tr>
    <?php
}

}


?>