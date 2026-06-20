<?php
    $title = "My Website";
    $name = "Syed Murtaza Hussain";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <style>
        h1 {color: green;}
    </style>
</head>
<body>
    <?php
        echo "<h1>$title</h1>";
        echo "<h2>My name is $name</h2>";        
    ?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus magni distinctio facilis quod, dolorum impedit fugit quia sit obcaecati eaque perferendis ex veniam quas nulla odit nostrum iure labore qui.</p>
    
    
</body>
</html>