<?php
require('header.php');

$sql = "SELECT * FROM categories ORDER BY CategoryName";
$result = mysqli_query($conn, $sql);

$suppliers_sql = "SELECT * FROM suppliers ORDER BY SupplierName";
$suppliers = mysqli_query($conn, $suppliers_sql);

$shippers_sql = "SELECT * FROM shippers ORDER BY ShipperName";
$shippers = mysqli_query($conn, $shippers_sql);

$products_sql = "SELECT * FROM products ORDER BY ProductName";
$products = mysqli_query($conn, $products_sql);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    pr($_POST);
}
?>
<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <!-- Category Dropdown -->
        <label class="form-label" for="categoryId">Category</label>
        <select class="form-select" name="CategoryID" id="categoryId">
            <option value="0">Select category</option>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <option value="<?php echo $row['CategoryID']; ?>">
                <?php echo $row['CategoryName']; ?>
            </option>
            <?php } ?>
        </select>
        <!-- Supplier Dropdown -->
        <label class="form-label" for="supplierId">Suppliers</label>
        <select class="form-select" name="SupplierID" id="supplierId">
            <option value="0">Select Supplier</option>
            <?php while($supplier = mysqli_fetch_assoc($suppliers)) { ?>
            <option value="<?php echo $supplier['SupplierID']; ?>">
                <?php echo $supplier['SupplierName'],' | ',$supplier['ContactName']; ?>
            </option>
            <?php } ?>
        </select>
        <!-- Shipper Dropdown -->
        <label class="form-label" for="shipperId">Shipper</label>
        <select class="form-select" name="ShipperID" id="shipperId">
            <option value="0">Select Shipper</option>
            <?php while($shipper = mysqli_fetch_assoc($shippers)) { ?>
            <option value="<?php echo $shipper['ShipperID']; ?>">
                <?php echo $shipper['ShipperName'],' | ',$shipper['Phone']; ?>
            </option>
            <?php } ?>
        </select>
        <!-- Products Dropdown -->
        <label class="form-label" for="productId">Prodcut</label>
        <select class="form-select" name="ProductID" id="productId">
            <option value="0">Select Product</option>
            <?php while($product = mysqli_fetch_assoc($products)) { ?>
            <option value="<?php echo $product['ProductID']; ?>">
                <?php echo $product['ProductName']," | $", $product['Price']; ?>
            </option>
            <?php } ?>
        </select>
        <input class="my-3 btn btn-success" type="submit" value="Show">
    </form>
</div>

<?php require('footer.php'); ?>