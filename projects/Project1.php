<!DOCTYPE html>
<html>
    <head>
    <title>Project 1</title>
        <link rel="stylesheet" href="css/application.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="120x120" href="images/favicon_package_v0.16/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon_package_v0.16/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon_package_v0.16/favicon-16x16.png">
        <link rel="manifest" href="images/favicon_package_v0.16/site.webmanifest">
        <link rel="mask-icon" href="images/favicon_package_v0.16/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta name="description" content="Project 1, PHP database.">
    </head>
<body>
    <?php
        if (isset($_GET['first_name'], $_GET['last_name'], $_GET['email'], $_GET['phoneNumber']))
            {
            $first_name = $_GET['first_name'];
            $last_name = $_GET['last_name'];
            $email = $_GET['email'];
            $phoneNumber = $_GET['phone_number'];
            echo $first_name . '<br>'; 
            echo $last_name;
            echo $email;
            echo $phoneNumber;
            }
    ?>
    <form method="get" action="Project1.php">
        <input type="text" name="first_name">
        <input type="text" name="last_name">
        <input type="email" name="email">
        <input type="tel" name="phone_number">
</body>
</html>
