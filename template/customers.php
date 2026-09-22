<?php 
include('header.php'); 

$sql = "SELECT * FROM customers ORDER BY CustomerName";
$customers = mysqli_query($conn, $sql);

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $CustomerID = test_input($_GET['id']);

    $delete_sql = "DELETE FROM customers WHERE CustomerID = '$CustomerID'";

    if($is_deleted = mysqli_query($conn, $delete_sql)) {
        header("Location:customers.php");
        exit();
    }
}

?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Customers</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item">Customers</li>
                <li class="breadcrumb-item active">All Customers</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Customers</h5>

                        <div>
                            <a href="customer.add.php" type="button" class="btn btn-primary">+ Add New Customer</a>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Customer ID</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Contact Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Postal Code</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $srno = 1;
                                while($customer = mysqli_fetch_assoc($customers)) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $srno; ?></th>
                                    <td><?php echo $customer['CustomerID']?></td>
                                    <td><?php echo $customer['CustomerName']?></td>
                                    <td><?php echo $customer['ContactName']?></td>
                                    <td><?php echo $customer['Address']?></td>
                                    <td><?php echo $customer['City']?></td>
                                    <td><?php echo $customer['PostalCode']?></td>
                                    <td><?php echo $customer['Country']?></td>
                                    <td>
                                        <a href="customer.edit.php?id=<?php echo $customer['CustomerID']?>"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <a href="customer.delete.php?id=<?php echo $customer['CustomerID']?>"
                                            class="btn btn-danger btn-sm">Delete</a>
                                        <a 
                                            href="customers.php?id=<?php echo $customer['CustomerID']?>" 
                                            class="btn btn-link text-danger" 
                                            name="DeleteBtn"
                                            onclick="return confirm('Are you sure you want to delete this customer?');"
                                        >
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                $srno++;
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<?php include('footer.php'); ?>