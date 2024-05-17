<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $number= 123456;
    // if($number==0){
    //     echo $number. " is even";
    // }
    // else{
    //     echo $number. "is Odd number.";
    // }
    ?>

    <form method="get">
        <h1>Enter your number</h1>
        <br>
        <input type="number" name="number" id="number">
        <input type="submit" name="submit">

    </form>
    <?php
    if(isset($_GET['submit']))
    $number=
    {
        if($number==0){
               echo $number. " is even";
             }
             else{
                 echo $number. "is Odd number.";
             }
    }
    ?>
</body>
</html>