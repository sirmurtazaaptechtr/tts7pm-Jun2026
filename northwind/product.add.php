<?php 
    require('header.php');
    $ProductName = $SupplierID = $CategoryID = $Unit = $Price = '';
    $ProductNameError = $SupplierIDError = $CategoryIDError = $UnitError = $PriceError = '';

    $supplier_sql = "SELECT * FROM suppliers ORDER BY SupplierName";
    $suppliers = mysqli_query($conn, $supplier_sql);
    
    $category_sql = "SELECT * FROM categories ORDER BY categoryName";
    $categories = mysqli_query($conn, $category_sql);

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['SubmitBtn'])) {
        if (empty($_POST["ProductName"])) {
            $ProductNameError = "Product Name is required";
        } else {
            $ProductName = test_input($_POST["ProductName"]);
        }

        if (empty($_POST["SupplierID"]) || $_POST["SupplierID"] == 0) {
            $SupplierIDError = "Must select a supplier";
        } else {
            $SupplierID = test_input($_POST["SupplierID"]);
        }

        if (empty($_POST["CategoryID"]) || $_POST["CategoryID"] == 0) {
            $CategoryIDError = "Must select a category";
        } else {
            $CategoryID = test_input($_POST["CategoryID"]);
        }

        if (empty($_POST["Unit"])) {
            $UnitError = "Enter Unit for the product";
        } else {
            $Unit = test_input($_POST["Unit"]);
        }

        if (empty($_POST["Price"])) {
            $PriceError = "Enter price";
        } else {
            $Price = test_input($_POST["Price"]);
        }
    }    
?>
<div class="container">
    <h1>Add New Product</h1>
    <h2>Enter Product Details</h2>
    <p><span class="text-danger">* required field</span></p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <span class="text-danger">* <?php echo $ProductNameError;?></span>
            <input type="text" class="form-control" id="productName" name="ProductName" value="<?php echo $ProductName; ?>">            
        </div>
        <div class="mb-3">
            <label for="supplierSelect" class="form-label">Select Supplier</label>
            <span class="text-danger">* <?php echo $SupplierIDError;?></span>
            <select class="form-select" id="supplierSelect" name="SupplierID">
                <?php while($supplier = mysqli_fetch_assoc($suppliers)) { ?>
                <option value="0" <?php if($SupplierID == 0) { echo "selected"; }?>>Select Supplier</option>
                <option value="<?php echo $supplier['SupplierID']?>" <?php if($SupplierID == $supplier['SupplierID']) { echo "selected"; }?>><?php echo $supplier['SupplierName']; ?></option>
                <?php } ?>
            </select>
        </div>        
        <div class="mb-3">
            <label for="categorySelect" class="form-label">Select Category</label>
            <span class="text-danger">* <?php echo $CategoryIDError;?></span>
            <select class="form-select" id="categorySelect" name="CategoryID">
                <?php while($category = mysqli_fetch_assoc($categories)) { ?>
                <option value="0" <?php if($CategoryID == 0) { echo "selected"; } ?>>Select Category</option>
                <option value="<?php echo $category['CategoryID']?>" <?php if($CategoryID == $category['CategoryID']) { echo "selected"; } ?>><?php echo $category['CategoryName']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="unit" class="form-label">Unit</label>
            <span class="text-danger">* <?php echo $UnitError;?></span>
            <input type="text" class="form-control" id="unit" name="Unit" value="<?php echo $Unit; ?>">            
        </div>        
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <span class="text-danger">* <?php echo $PriceError;?></span>
            <input type="text" class="form-control" id="price" name="Price" value="<?php echo $Price; ?>">            
        </div>        
        <button type="submit" class="btn btn-primary" id="submitBtn" name="SubmitBtn">Submit</button>
    </form>
</div>
<?php require('footer.php'); ?>