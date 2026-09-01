<?php 
include('header.php'); 
$CategoryID = $Description = $CategoryName = '';
$CategoryNameError = '';

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['CategoryID'])) {
    $CategoryID = test_input($_GET['CategoryID']);
    $sql = "SELECT * FROM `categories` WHERE CategoryID = $CategoryID";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($result);

    $CategoryName = $data['CategoryName'];
    $Description = $data['Description'];
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST["CategoryID"])) {
        $CategoryID = "";
    } else {
        $CategoryID = test_input($_POST["CategoryID"]);
    }    
    
    if (empty($_POST["CategoryName"])) {
        $CategoryNameError = "Category name is required";
    } else {
        $CategoryName = test_input($_POST["CategoryName"]);
    }

    if (empty($_POST["Description"])) {
        $Description = "";
    } else {
        $Description = test_input($_POST["Description"]);
    }

    if(empty($CategoryNameError)) {
        $update_sql = "UPDATE `categories` SET CategoryName = '$CategoryName', Description = '$Description' WHERE CategoryID = '$CategoryID'";
        
        if($is_updated = mysqli_query($conn, $update_sql)) {
            header("Location: categories.php");
            exit();
        }else {
            echo "Database Error: " . mysqli_error($conn);
        }
    }
}
?>

<div class="container">
    <h1>Edit Category</h1>
    <h2>Enter category details</h2>
    
    <?php if(!empty($CategoryNameError)) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $CategoryNameError; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>    

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="mb-3">
            <label for="categoryID" class="form-label">Category ID</label>
            <!-- REMOVED 'disabled' so that the value transmits via POST, retained 'readonly' to stop user edits -->
            <input type="text" readonly class="form-control" id="categoryID" name="CategoryID" value="<?php echo $CategoryID; ?>">
        </div>        
        <div class="mb-3">
            <label for="categoryName" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="categoryName" name="CategoryName" value="<?php echo $CategoryName; ?>">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="Description" rows="3"><?php echo $Description; ?></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-primary mb-3">Update</button>
        </div>
    </form>
</div>

<?php include('footer.php'); ?>
