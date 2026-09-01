<?php 
include('header.php'); 
$Description = $CategoryName = '';
$CategoryNameError = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
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
        $sql = "INSERT INTO `categories` (`CategoryName`, `Description`) VALUES ('$CategoryName', '$Description')";
        
        if($is_created = mysqli_query($conn, $sql)) {
            header("Location: categories.php");
            exit();
        }else {
            echo "Database Error: " . mysqli_error($conn);
        }
    }
}
?>

<div class="container">
    <h1>Add New Category</h1>
    <h2>Enter category details</h2>
    
    <!-- This will show validation errors if the form fails on this page -->
    <?php if(!empty($CategoryNameError)) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $CategoryNameError; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>    

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="mb-3">
            <label for="categoryName" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="categoryName" name="CategoryName" value="<?php echo $CategoryName; ?>">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="Description" rows="3"><?php echo $Description; ?></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-primary mb-3">Add</button>
        </div>
    </form>
</div>

<?php include('footer.php'); ?>