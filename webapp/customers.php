<?php
require('connection.php');

$sql = "SELECT * FROM customers";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
</head>
<body>
    <table border = 1>
        <thead>
            <tr>
                <th>CustomerID</th>
                <th>CustomerName</th>
                <th>ContactName</th>
                <th>Address</th>
                <th>PostalCode</th>
                <th>City</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($customer = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $customer['CustomerID'];?></td>
                <td><?php echo $customer['CustomerName'];?></td>
                <td><?php echo $customer['ContactName'];?></td>
                <td><?php echo $customer['Address'];?></td>
                <td><?php echo $customer['PostalCode'];?></td>
                <td><?php echo $customer['City'];?></td>
                <td><?php echo $customer['Country'];?></td>
            </tr>
            <?php
            }
            ?>            
        </tbody>
    </table>
</body>
</html>