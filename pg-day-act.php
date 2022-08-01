<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the Weeks Activity</title>
</head>
<body>
    <h1> Days of the Week Activity </h1>
    
    <form method="post">

        <input type="submit" name="monday" value="MONDAY">
        <input type="submit" name="tuesday" value="TUESDAY">
        <input type="submit" name="wednesday" value="WEDNESDAY">
        <input type="submit" name="thursday" value="THURSDAY">
        <input type="submit" name="friday" value="FRIDAY">
    </form>

    <?php

        if (isset($_POST['monday'])){
            echo "MONDAY";
        }

        if (isset($_POST['tuesday'])){
            echo "TUESDAY";
        }

        if (isset($_POST['wednesday'])){
            echo "WEDNESDAY";
        }

        if (isset($_POST['thursday'])){
            echo "THURSDAY";
        }

        if (isset($_POST['friday'])){
            echo "FRIDAY";
        }




    ?>

</body>
</html>