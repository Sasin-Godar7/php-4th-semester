<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="$_REQUEST">
        <label for="length">Length :</label>
        <input type="number" name="length"/>
        <br><br>
        <label for="breadth">Breadth :</label>
        <input type="number" name="breadth">
        <br><br>
       <input type="Submit" value="Area of Rectangle" name="btn1">
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="Reset" value="Clear" name="clearbtn">
    </form>


    <?php
    if(isset($_REQUEST['btn1']))
    {
        $length = floatval($_REQUEST['length']);
        $breadth = floatval($_REQUEST['breadth']);

        $area = ($length + $breadth);

        echo"<h2> Area of Rectangle of length $length and Breadth $breadth is {$area}</h2>";
    }
    else
    {

    }

    ?>

    
</body>
</html>