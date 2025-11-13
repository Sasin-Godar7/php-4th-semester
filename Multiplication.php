<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Enter the number you want for multiplication table</h2>
    <form action="#" method="POST" >
        <label for="number">Enter Number :</label>
        <input type="number" name="number" />
        <br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="Submit" value="Multiplication Table" name="mulbtn">
         </form>

         <?php

         if(isset($_POST['mulbtn']))
         {
            $num = intval($_POST['number']);

            for ($i = 1; $i<=10; $i++)
            {
                $mul = $num * $i;
                echo" <p> $num x $i = $mul</p>";
            }
         }
         else
         {

         }

         ?>
    
</body>
</html>