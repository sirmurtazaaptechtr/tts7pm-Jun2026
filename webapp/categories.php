<?php
include('header.php');
$sql = "SELECT * FROM `categories`";
$result = mysqli_query($conn, $sql);
?>
<div class="container">
    <h1>Categories</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>CategoryID</th>
                <th>CategoryName</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['CategoryID'];?></td>
                <td><?php echo $row['CategoryName'];?></td>
                <td><?php echo $row['Description'];?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php include('footer.php');?>