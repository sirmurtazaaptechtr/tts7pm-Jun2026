<?php
include('header.php');
$sql = "SELECT * FROM `products`";
$result = mysqli_query($conn, $sql);
?>
<div class="container">
    <h1>Products</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ProductID</th>
                <th>ProductName</th>
                <th>SupplierID</th>
                <th>CategoryID</th>
                <th>Unit</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['ProductID'];?></td>
                <td><?php echo $row['ProductName'];?></td>
                <td><?php echo $row['SupplierID'];?></td>
                <td><?php echo $row['CategoryID'];?></td>
                <td><?php echo $row['Unit'];?></td>
                <td><?php echo $row['Price'];?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php include('footer.php');?>