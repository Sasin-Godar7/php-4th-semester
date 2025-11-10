<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <label for="first">Number 1:</label>
        <input type="number" name="num1" >
        <br><br>
        <label for="second">Number 2:</label>
        <input type="number" name="num2">
        <br><br>
       <input type="Submit" value="Sum" name="sumbtn">
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="Submit" value="Multiply" name="mulbtn">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" value="Clear" name="clearbtn">

       </form>
<?php
if(isset($_POST["sumbtn"]))

    {
        $n1 = floatval($_POST["num1"]);
        $n2 = floatval($_POST["num2"]);
        $sum= $n1+$n2;
        echo"<h2> Sum of $n1 and $n2 is {$sum}</h2>";
    }
    else{

    }
    if(isset($_POST["mulbtn"]))

    {
        $n1 = floatval($_POST["num1"]);
        $n2 = floatval($_POST["num2"]);
        $mul= $n1*$n2;
        echo"<h2> product of $n1 and $n2 is $mul</h2>";
    }
    else{

    }

?>
</body>
</html>