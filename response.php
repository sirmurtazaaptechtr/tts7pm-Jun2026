<?php 
$name = $email = $website = $comment = $gender = '';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["full_name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $gender = $_POST["gender"];
    $comment = $_POST["comment"];
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
    <h1>Response</h1>
    <ul>
        <li><b>Full Name: </b><?php echo $name;?></li>
        <li><b>Email: </b><?php echo $email;?></li>
        <li><b>Website: </b><?php echo $website;?></li>
        <li><b>Gender: </b><?php echo $gender;?></li>
        <li><b>Comment: </b><?php echo $comment;?></li>
    </ul>

    <table border="1">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Website</th>
                <th>Gender</th>
                <th>Comment</th>
            </tr>            
        </thead>
        <tbody>
            <tr>
                <td><?php echo $name;?></td>
                <td><?php echo $email;?></td>
                <td><?php echo $website;?></td>
                <td><?php echo $gender;?></td>
                <td><?php echo $comment ;?></td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>
