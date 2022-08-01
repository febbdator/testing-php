<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME</title>
</head>
<body>
    <?php

    $form_name = $_GET['name']; //febb
    $form_email = $_GET['email'];

    echo "WELCOME $form_name! Your email is $form_email. ";



    ?>
</body>
</html>