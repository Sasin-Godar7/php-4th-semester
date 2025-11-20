<html>
<head>
<title>Database Connectivity Example</title>
</head>
<body>
<?php
require_once "connect.php";

// Your SQL must be defined, example:
$sql = "SELECT course_name FROM courses"; 
$result = $conn->query($sql);
?>
<form action="databaseconnect.php" method="post">

<label for="sname">Std Name : </label>
<input type="text" id="sname" name="name" placeholder="Enter student name here" />
<br><br>

<label for="cor">Course : </label>
<select id="cor" name="course">
<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['course_name'] . "'>" . $row['course_name'] . "</option>";
    }
} else {
    echo "<option disabled selected>No course to display</option>";
}
$conn->close();
?>
</select>

<br><br>

<label>Age : </label>
<input type="number" name="age" min="16" max="100" placeholder="Enter student age" />
<br><br>

<label>Std phone : </label>
<input type="tel" name="phone" placeholder="Enter phone number here" />
<br><br>

<input type="submit" name="btn1" value="Save" />
<input type="reset" name="btn2" value="Cancel" />

</form>
</body>
</html>
