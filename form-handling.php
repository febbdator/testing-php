<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1> GET FORM </h1>
    <form action="welcome.php" method="GET">
        <input type="text" name="name" placeholder="Enter Name"> <br>
        <input type="email" name="email" placeholder="Enter Email"> <br>
        <input type="submit">
    </form>

    <h1> POST FORM </h1>

    <form action="welcome-post.php" method="POST">
        <input type="text" name="name" placeholder="Enter Name"> <br>
        <input type="email" name="email" placeholder="Enter Email"> <br>
        <input type="submit">
    </form>

    <h1> SAME PAGE POST </h1>
    <form method="POST">
        <input type="text" name="name" placeholder="Enter Name"> <br>
        <input type="email" name="email" placeholder="Enter Email"> <br>
        <input type="submit" name="btn_submit">
    </form>

    <?php

        if (isset($_POST['btn_submit'])){
            
            $form_name = $_POST['name'];
            $form_email = $_POST['email'];
        
            echo "WELCOME $form_name! Your email is $form_email. ";
        }



    ?>

</body>
</html>