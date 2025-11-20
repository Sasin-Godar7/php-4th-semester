<html>
<head>
<title> this is database connectivity example </title>
</head>
<body>
<?php
if(isset($_POST["sname"]))
{
    $sname = $_POST["name"];
    $scourse = $_POST["course"];
    $sage = $_POST["age"];
     $sphone = $_POST["phone"];
    

    require_once "connect.php";

$sql = "insert into student(std_name,course,age,phone,) values('$sname',$scourse,$sage,'$sphone')";
$result = $conn->query($sql);
if($result)
{
    echo "data inserted successfully";
}
else{
    echo "sorry data not inserted successfully";
}
$conn->close();
}
else{
    header("location:formconnect.php");
}
?>
</body>
</html>