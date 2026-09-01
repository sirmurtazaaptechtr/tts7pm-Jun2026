<?php
include('header.php');
$sql = "SELECT * FROM `categories`";
$result = mysqli_query($conn, $sql);

// Check if a delete request was sent via the URL
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    
    // SQL query to delete the row matching the ID
    $delete_sql = "DELETE FROM `categories` WHERE CategoryID = '$delete_id'";
    
    if (mysqli_query($conn, $delete_sql)) {
        // Redirect to the same page to clear the 'delete_id' from the URL bar
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Database Error: " . mysqli_error($conn);
    }
}
?>
<div class="container">
    <h1>Categories</h1>
    <div class="my-3">
        <a type="button" class="btn btn-outline-primary" href="category.add.php">+ Add New Category</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>CategoryID</th>
                <th>CategoryName</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['CategoryID'];?></td>
                <td><?php echo $row['CategoryName'];?></td>
                <td><?php echo $row['Description'];?></td>
                <td>
                    <a href="category.edit.php?CategoryID=<?php echo $row['CategoryID'];?>"
                        class="btn btn-sm btn-outline-warning">
                        Edit
                    </a>                    
                    <a href="<?php echo $_SERVER['PHP_SELF']; ?>?delete_id=<?php echo $row['CategoryID'];?>"
                        class="btn btn-sm btn-outline-danger"
                        onclick="return confirm('Are you sure you want to delete CategoryID = <?php echo $row['CategoryID'];?>?');">
                        Delete
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php include('footer.php');?>