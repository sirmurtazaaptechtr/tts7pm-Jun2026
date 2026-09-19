<?php
include('header.php');
$CustomerName = $ContactName = $Address = $City = $PostalCode = $Country = '';
$errors = [];

$city_sql = "SELECT DISTINCT City FROM customers ORDER BY City";
$cities = mysqli_query($conn, $city_sql);

$country_sql = "SELECT DISTINCT Country FROM customers ORDER BY Country";
$countries = mysqli_query($conn, $country_sql);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['CustomerName'])) {
        array_push($errors, "Customer name is required");
    }else {
        $CustomerName = test_input($_POST['CustomerName']);
    }

    if(empty($_POST['ContactName'])) {
        array_push($errors, "Contact name is required");
    }else {
        $ContactName = test_input($_POST['ContactName']);
    }

    $Address = test_input($_POST['Address']);
    $City = test_input($_POST['City']);
    $PostalCode = test_input($_POST['PostalCode']);
    $Country = test_input($_POST['Country']);

    if(empty($errors)) {
        $insert_sql = "INSERT INTO customers (CustomerName, ContactName, Address, City, PostalCode, Country) VALUES ('$CustomerName', '$ContactName', '$Address', '$City', '$PostalCode', '$Country')";

        if($is_created = mysqli_query($conn, $insert_sql)) {
            header("Location:customers.php");
            exit();
        }
    }
}

?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add New Customer</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
                <li class="breadcrumb-item active">Add New Customer</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">New customer details</h5>

                        <!-- General Form Elements -->
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                            <?php if (!empty($errors)) : ?>
                            <div class="col-12">
                                <div class="alert alert-danger" role="alert">
                                    <?php foreach ($errors as $error) : ?>
                                    <div><?php echo htmlspecialchars($error); ?></div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php endif; ?>


                            <div class="row mb-3">
                                <label for="customerName" class="col-sm-2 col-form-label">Customer Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="customerName" name="CustomerName"
                                        value="<?php echo $CustomerName; ?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="contactName" class="col-sm-2 col-form-label">Contact Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="contactName" name="ContactName"
                                        value="<?php echo $ContactName; ?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="address" name="Address"
                                        style="height: 100px"><?php echo $Address; ?></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="city" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="city" name="City" list="cityList"
                                        placeholder="Type to search or enter a new country..." autocomplete="off"
                                        value="<?php echo $City; ?>">
                                </div>
                                <datalist id="cityList">
                                    <?php while($row = mysqli_fetch_assoc($cities)) { ?>
                                    <option value="<?php echo $row['City']; ?>">
                                        <?php } ?>
                                </datalist>
                            </div>

                            <div class="row mb-3">
                                <label for="postalCode" class="col-sm-2 col-form-label">PostalCode</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="postalCode" name="PostalCode"
                                        value="<?php echo $PostalCode; ?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="country" class="col-sm-2 col-form-label">Country</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="country" name="Country"
                                        list="countryList" placeholder="Type to search or enter a new country..."
                                        autocomplete="off" value="<?php echo $Country; ?>">
                                </div>
                                <datalist id="countryList">
                                    <?php while($row = mysqli_fetch_assoc($countries)) { ?>
                                    <option value="<?php echo $row['Country']; ?>">
                                        <?php } ?>
                                </datalist>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary" id="addBtn" name="AddBtn">+
                                        Add</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
<?php include('footer.php'); ?>