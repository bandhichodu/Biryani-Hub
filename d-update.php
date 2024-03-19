<?php

include("links.html");

$item = $_POST['item'];
$price = $_POST['price'];

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'biryani';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Update the price of the item
$update_sql = "UPDATE `drinks` SET price='$price' WHERE Item='$item'";
if (mysqli_query($conn, $update_sql)) {
    echo "Price updated successfully  ";
    echo $price;
} else {
    echo "Error updating price: " . mysqli_error($conn);
}

// Select all items after the update
$select_sql = "SELECT * FROM `drinks`";
$result = mysqli_query($conn, $select_sql);

// Check for errors in the select query
if (!$result) {
    echo "Error selecting items: " . mysqli_error($conn);
}

?>

<h1 align='center'>Drinks</h1>
<table align='center' border='5'>
    <tr><td> Item Name </td><td> Price </td></tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['Item'] ?></td>
            <td><?php echo $row['price'] ?></td>
        </tr>
    <?php
    }
    ?>
</table>

<?php
mysqli_close($conn);
?>
