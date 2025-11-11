<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="principle">Principle:</label>
        <input type="number" name="principle" >
        <br><br>
        <label for="time">Time :</label>
        <input type="number" name="time">
        <br><br>
         <label for="rate">Rate :</label>
        <input type="number" name="rate">
        <br><br>
       <input type="Submit" value="Simple intrest" name="sibtn">
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" value="Clear" name="clearbtn">
       </form>

       <?php

       if(isset($_POST["sibtn"]))
       {
        $p = intval($_POST["principle"]);
        $t = floatval($_POST["time"]);
        $r = floatval($_POST["rate"]);

        $simpleintrest = ($p * $t * $r) / 100;
        echo"<h2> The simple intrest of principle amount :{$p} with rate of intrest {$r} for time {$t} years is $simpleintrest</h2>";
       }
       else{

       }


    ?>
    
</body>
</html>