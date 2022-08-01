<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Activity</title>
</head>
<body>
    
    <form method="post">
        <input type="number" name="num1" placeholder="ENTER FIRST NUMBER">
        <input type="number" name="num2" placeholder="ENTER SECOND NUMBER">
        <input type="submit" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])){
        $first_num = $_POST['num1'];
        $second_num = $_POST['num2'];

        $sum = $first_num + $second_num;
        echo "The sum of $first_num and $second_num is $sum";

    }


    ?>

</body>
</html>