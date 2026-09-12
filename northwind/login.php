<?php
session_start();
function pr($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'northwind';

$conn = mysqli_connect($hostname, $username, $password, $database);
$Username = $Password = '';
$_SESSION['isLogin'] = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['LoginBtn'])) {
    $Username = test_input($_POST['Username']);
    $Password = test_input($_POST['Password']);

    $sql = "SELECT * FROM logins WHERE Username = '$Username'";
    $logins = mysqli_query($conn, $sql);

    if (mysqli_num_rows($logins) > 0) {
        $row = mysqli_fetch_assoc($logins);
        if ($row['Password'] == $Password) {
            echo "<p>login Successfull!</p>";
            $_SESSION['isLogin'] = true;
            $_SESSION['LoginID'] = $row['LoginID'];
            $_SESSION['Username'] = $row['Username'];
            $_SESSION['Type'] = $row['Type'];
            $_SESSION['UserID'] = $row['UserID'];
            header("Location:dashboard.php");
        } else {
            echo "password is incorrect";
        }
    } else {
        echo "username is incorrect";
    }

    // pr($row);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Northwind - </title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
</head>

<body>
    <div class="container">
        <h1>Welcome to MyWesite</h1>
        <h2>Login to MyWebsite</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="row mb-3">
                <label for="username" class="col-sm-2 col-form-label">Email/Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="Username">
                </div>
            </div>
            <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="Password">
                </div>
            </div>

            <button type="submit" class="btn btn-primary" id="loginBtn" name="LoginBtn">Login</button>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

</body>

</html>