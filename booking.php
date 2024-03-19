<?php

include("links.html");

$item=$_POST['item'];
$price=$_POST['price'];

?>

<h2 align='center' border='7'>Confirm Booking</h2>
<table align='center'>
    <form action="slot.php" method='post'>
    <tr><td>Name</td><td><input type="text" name='name'placeholder='enter name..'></td></tr>
    <tr><td>Email</td><td><input type="text" name="email" placeholder='enter mail..'></td></tr>
    <tr><td>Item</td><td><input type="text" name='item' value="<?php echo $item?>"readonly></td></tr>
    <tr><td>Price</td><td><input type="number" name='price' value='<?php echo $price ?>'readonly></td></tr>
    <tr><td>Address</td><td><input type="text" name='address' placeholder='enter address..'></td></tr>
    <tr><td><input type="submit" value='confirm'></td><td><input type="reset" value='Reset'></td></tr>
    </form>
</table>