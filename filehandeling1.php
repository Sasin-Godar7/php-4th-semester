<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Info Form</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="name">Std. Name :</label>
        <input type="text" name="name" required>
        <br><br>

        <label for="rollno">Std. Roll No :</label>
        <input type="number" name="rollno" required>
        <br><br>

        <label for="class">Class :</label>
        <select name="class" required>
            <option value="BCA">BCA</option>
            <option value="BIM">BIM</option>
            <option value="CSIT">CSIT</option>
        </select>
        <br><br>

        <label for="phone">Phone :</label>
        <input type="tel" name="phone" required>
        <br><br>

        <label for="email">Email :</label>
        <input type="email" name="email" required>
        <br><br>

        <label for="address">Address :</label>
        <input type="text" name="address" placeholder="xxx-3" required>
        <br><br> 

        <input type="submit" value="Save" name="btn1">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" value="Reset" name="btn2">
    </form>

    <?php
    if (isset($_POST['btn1'])) {
        $name = $_POST['name'];
        $roll = $_POST['rollno'];
        $class = $_POST['class'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        // Open file in append mode
        $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");

        // Prepare formatted data to write
        $data = " $name,$roll,$class,$phone,$email,$address\n";

        fwrite($myfile, $data);
        fclose($myfile);

        echo "<h3>✅ Data saved successfully!</h3>";
    }
    ?>
</body>
</html>
