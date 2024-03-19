<?php

include('links.html');

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'biryani';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM booking"; // Fixed SQL query

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<h1 align='center'>Registrations</h1>

<table align='center' border='5'>
<tr>
    <td>Name</td><td>Email</td><td>Item</td><td>Price</td><td>Address</td>
</tr>
<?php
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['item'] ?></td>
    <td><?php echo $row['price'] ?></td>
    <td><?php echo $row['address'] ?></td>
    </tr>
    <?php
}

mysqli_close($conn);
?>
