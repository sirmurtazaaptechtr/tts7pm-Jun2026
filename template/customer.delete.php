<?php
include('header.php');
$CustomerID =$CustomerName = $ContactName = $Address = $City = $PostalCode = $Country = '';
$errors = [];
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $CustomerID = test_input($_GET['id']);
    
    $sql = "SELECT * FROM customers WHERE CustomerID = '$CustomerID'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0) {
        $customer = mysqli_fetch_assoc($result);

        $CustomerName = $customer['CustomerName'];
        $ContactName = $customer['ContactName'];
        $Address = $customer['Address'];
        $City = $customer['City'];
        $PostalCode = $customer['PostalCode'];
        $Country = $customer['Country'];
    } else {
        header("Location: customers.php");
        exit();
    }    
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['DeleteBtn'])) {
    $CustomerID = test_input($_POST['CustomerID']);

    $delete_sql = "DELETE FROM customers WHERE CustomerID = '$CustomerID'";

    if($is_deleted = mysqli_query($conn, $delete_sql)) {
        header("Location:customers.php");
        exit();
    }
}

?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Delete Customer</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
                <li class="breadcrumb-item active">Delete Customer</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Delete Customer</h5>
                        <p class="card-text text-danger">Are you sure you want to delete the following customer?</p>
                        <ul>
                            <li><strong>Customer Name:</strong> <?php echo $CustomerName; ?></li>
                            <li><strong>Contact Name:</strong> <?php echo $ContactName; ?></li>
                            <li><strong>Address:</strong> <?php echo $Address; ?></li>
                            <li><strong>City:</strong> <?php echo $City; ?></li>
                            <li><strong>Postal Code:</strong> <?php echo $PostalCode; ?></li>
                            <li><strong>Country:</strong> <?php echo $Country; ?></li>
                        </ul>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                            <input type="hidden" name="CustomerID" value="<?php echo $CustomerID; ?>">
                            <button type="submit" class="btn btn-danger" name="DeleteBtn">Delete Customer</button>
                            <a href="customers.php" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>