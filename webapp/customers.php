<?php
include('header.php');

$sql = "SELECT * FROM customers";

$result = mysqli_query($conn, $sql);

?>
<div class="container">
    <h1>Customers</h1>
    <table class="table table-striped">
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
</div>
<?php include('footer.php');?>