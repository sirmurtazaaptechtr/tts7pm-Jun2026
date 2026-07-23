<?php
function clean_input ($input) {
    $input = htmlspecialchars($input);
    $input = stripcslashes($input);
    $input = trim($input);
    return $input;
}
$full_name = $email = '';
$full_name_err = $email_err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_btn'])) {
    if(!empty($_POST['full_name'])) {
        $full_name = clean_input($_POST['full_name']);
        if(!preg_match("/^[a-zA-Z' ]*$/",$full_name)) {
            $full_name_err = "Name can have alphabets and space only!";
        }
    }else {
        $full_name_err = "Name is Required!";
    }
    
    if(!empty($_POST['email'])) {
        $email = clean_input($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Email Address is not valid!";
        }
    }else {
        $email_err = "Email is Required!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Feedback Form</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <div>
            <label for="fullName">Name</label>
            <input type="text" name="full_name" id="fullName" value="<?php echo $full_name;?>">
            <span style="color: red;">* <?php echo $full_name_err;?></span>
        </div>
        <br>
        <div>
            <label for="email">Email Address</label>
            <input type="text" name="email" id="email" value="<?php echo $email;?>">
            <span style="color: red;">* <?php echo $email_err;?></span>
        </div>
        <br>
        <input type="submit" value="Submit" name="submit_btn" id="submitBtn">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_btn']) && empty($full_name_err) && empty($email_err))
    {
    ?>
    <h1>Output</h1>
    <ul>
        <li><b>Full Name: </b><?php echo $full_name;?></li>
        <li><b>Email Address: </b><?php echo $email;?></li>
    </ul>
    <?php    
    }
    ?>
</body>
</html>