
<?php
if (isset($_COOKIE['username']))
{
    
include("links.html");

$servername='localhost';
$username='root';
$password='';
$dbname='biryani';

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("connection failed :".mysqli_connect_error());
}

$sql = "SELECT * FROM `nonveg-items`";


$result=mysqli_query($conn,$sql);

?>
<h1 align='center'>NON Veg items</h1>
<table align='center' border='5'>
    <tr><td> Item Name </td><td> Price </td><td>Booking</td></tr>
    <?php
    while($row=mysqli_fetch_assoc($result))
    {
        ?>
       <tr><form action="booking.php" method='post'>
            <td><input type="text" name='item' value='<?php echo $row['Item']?>'readonly></td>
            <td><input type="number" name='price' value='<?php echo $row['price']?>'readonly></td>
            <td><input type="submit" value="BOOK"></td>
            </form>
        </tr>
        <?php
    }
}
else
{
    ?><script>
        alert("pls login first");
        </script>
        <?php
        include("login-1.html");

}

?>