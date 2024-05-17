<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // echo "<h1>Pakistan</h1>";

    // arthietic operator
    // + , - , * , / ;
    // $a=3;
    // $b=5;
    // $c =$a%$b;
    // echo "<h1> your answer =" . $c ."</h1>";



    ?>
    <form method="get">
        <h1>Enter first Number:</h1>
        <input type="number" name="num1"><br>
        <h1>Enter Second Number</h1>
        <input type="number" name="num2">
        <input type="submit" name="submit" value="send">
    </form>
<?php 
    if(isset($_GET['submit']))
    {
        $a =$_GET['num1'];
        $b =$_GET['num2'];
        $c = $a+$b;



    }
     echo "your answer is.". $c;
   
?>
    

</body>
</html>