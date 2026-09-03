<?php
    require('header.php');
    $sql = "SELECT * 
            FROM `products` AS p
            LEFT JOIN `suppliers` AS s ON p.SupplierID = s.SupplierID
            LEFT JOIN `categories` AS c ON p.CategoryID = c.CategoryID";
    $result = mysqli_query($conn, $sql);
?>
<div class="container">
    <h1>All Products</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Supplier ID</th>
                <th>Supplier Name</th>                
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Unit</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['ProductID']; ?></td>
                <td><?php echo $row['ProductName']; ?></td>
                <td><?php echo $row['SupplierID']; ?></td>
                <td><?php echo $row['SupplierName']; ?></td>                
                <td><?php echo $row['CategoryID']; ?></td>
                <td><?php echo $row['CategoryName']; ?></td>
                <td><?php echo $row['Unit']; ?></td>
                <td><?php echo $row['Price']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php require('footer.php'); ?>