<?php


$uname=$_POST['username'];
$pass=$_POST['password'];

if($uname=='venkat' && $pass=="1234")
{
    
    echo "<center><h2> You can modify veg items </h2></center> ";
    $servername='localhost';
    $username='root';
    $password='';
    $dbname='biryani';

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)
    {
        die("connection failed :".mysqli_connect_error());
    }

    $sql = "SELECT * FROM `veg-items`";


    $result=mysqli_query($conn,$sql);

    ?>
    <h2 align='center'>Veg items</h2>
    <table align='center' border='5'>
        <tr><td> Item Name </td><td> Price </td><td>Operations</td></tr>

        
        <?php
        while($row=mysqli_fetch_assoc($result))
        {
            ?>
            <tr><form action="v-update.php" method='post'>
                <td><input type="text" name='item' value="<?php echo $row['Item']?>"readonly></td>
                <td><input type="number" name='price' value="<?php echo $row['price']?>"></td>
                <td><input type="submit"  value='update'></td></form>
            </tr>
        
            <?php
        }
      ?></table>
      
      <?php  


        echo "<center><h2> You can modify NON-veg items </h2></center> ";

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
        <h2 align='center'>Drinks</h2>
        <table align='center' border='5'>
            <tr><td> Item Name </td><td> Price </td><td>Operations</td></tr>

            
            <?php
            while($row=mysqli_fetch_assoc($result))
            {
                ?>
                <tr><form action="nv-update.php" method='post'>
                    <td><input type="text" name='item' value="<?php echo $row['Item']?>"readonly></td>
                    <td><input type="number" name='price' value="<?php echo $row['price']?>"></td>
                    <td><input type="submit"  value='update'></td></form>
                </tr>
            
                <?php
            }
        ?></table>
        
        <?php 
        
        


        echo "<center><h2> You can modify Drinks </h2></center> ";

        $servername='localhost';
        $username='root';
        $password='';
        $dbname='biryani';

        $conn=mysqli_connect($servername,$username,$password,$dbname);

        if(!$conn)
        {
            die("connection failed :".mysqli_connect_error());
        }

        $sql = "SELECT * FROM `drinks`";


        $result=mysqli_query($conn,$sql);

        ?>
        <h2 align='center'>Drinks</h2>
        <table align='center' border='5'>
            <tr><td> Item Name </td><td> Price </td><td>Operations</td></tr>

            <form action="d-update.php" method='post'>
            <?php
            while($row=mysqli_fetch_assoc($result))
            {
                ?>
                <tr>
                    <td><input type="text" name='item' value="<?php echo $row['Item']?>"readonly></td>
                    <td><input type="number" name='price' value="<?php echo $row['price']?>"></td>
                    <td><input type="submit"  value='update'></td>
                </tr>
            
                <?php
            }
        ?></table>
        </form>

<br><br>
        <h2><center>For new Entries click below <a href="registration.html">link</a></center></h2>
        <?php



}

else
{
    ?><script>
        alert("invalid credentials");
    </script>
    <?php
    include("admin.html");
  
}


?>

