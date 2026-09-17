<?php 
include('header.php'); 

$sql = "SELECT * FROM products ORDER BY ProductName";
$products = mysqli_query($conn, $sql);

?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Products</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item">Products</li>
                <li class="breadcrumb-item active">All Products</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Products</h5>                        

                        <!-- Table with stripped rows -->
                        <table class="table table-striped datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product ID</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Supplier ID</th>
                                    <th scope="col">Category ID</th>
                                    <th scope="col">Unit</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $srno = 1;
                                while($product = mysqli_fetch_assoc($products)) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $srno; ?></th>
                                    <td><?php echo $product['ProductID']?></td>
                                    <td><?php echo $product['ProductName']?></td>
                                    <td><?php echo $product['SupplierID']?></td>
                                    <td><?php echo $product['CategoryID']?></td>
                                    <td><?php echo $product['Unit']?></td>
                                    <td><?php echo $product['Price']?></td>
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