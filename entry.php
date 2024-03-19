<?php

if ($_POST['c']=='veg')
{
    $val1=$_POST['v11'];
    $val2=$_POST['v12'];

    $servername='localhost';
    $username='root';
    $password='';
    $dbname='biryani';

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)
    {
        die("connection failed :".mysqli_connect_error());
    }

    

    $sql = "INSERT INTO `veg-items` (Item, price) VALUES ('$val1', '$val2')";


    if (mysqli_query($conn, $sql)) {
        echo "New record inserted successfully";
        include("v-veg-item.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}


if ($_POST['c']=='nv')
{
    $val1=$_POST['v21'];
    $val2=$_POST['v22'];

    $servername='localhost';
    $username='root';
    $password='';
    $dbname='biryani';

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)
    {
        die("connection failed :".mysqli_connect_error());
    }

    $sql = "INSERT INTO `nonveg-items` (Item, price) VALUES ('$val1', '$val2')";

    if (mysqli_query($conn, $sql)) {
        echo "New record inserted successfully";
        include("v-nonveg-item.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}

if ($_POST['c']=='drink')
{

    $val1=$_POST['v31'];
    $val2=$_POST['v32'];

    $servername='localhost';
    $username='root';
    $password='';
    $dbname='biryani';

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)
    {
        die("connection failed :".mysqli_connect_error());
    }

    $sql="INSERT INTO drinks (Item,price) VALUES ('$val1','$val2')";

  

    if (mysqli_query($conn, $sql)) {
        echo "New record inserted successfully";
        include("drinks.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


}



?>