<html>
    <head><title>signup new user</title>
</head>
<body>
<?php
if(isset($_POST["username"]))
{
$user = $_POST["username"];
$upassword = $_POST["password"];
$cpassword = $_POST["cpassword"];
$url = "";
if($upassword!=$cpassword)
{
    echo "password and cpassword not matching";
    echo "<br><a href='signup.php'>go back</a>";
    die("");
}
 // to upload image file in server
    $error = [];
    if(isset($_FILES["myfile"]["error"])&& $_FILES["myfile"]["error"]==0)
    {
        if($_FILES["myfile"]["size"] < 102400000)
        {
            $type = ['image/png','image/jpg','image/jpeg','image/gif','image/bmp'];
            if(in_array($_FILES["myfile"]["type"],$type,false))
            {
                if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"images/" . $_FILES["myfile"]["name"]))
                {
                    $url = "images/" . $_FILES["myfile"]["name"];
                    
                }
                else{
                    echo "Sorry file not uploaded successfully";
                }
            }
            else{
                $error["myfile"] = "File type does not match";
            }
        }
        else{
            $error["myfile"] = "File size exceed 1 mb only upto 1 mb is allowed";
        }
    }
    

if(isset($error["myfile"]))
{
    echo "<h2>Error occured :" . $error["myfile"] . " </h2>";
    die("");
}

$servername = "localhost:3306";
$username= "root";
$dbpassword = "";
$dbname = "test";
$conn = new mysqli($servername,$username,$dbpassword,$dbname);
if($conn->connect_error)
{
    die("unable to connect" . $conn->connect_error);
}
$sql = "insert into user(username,password,url) values('$user','$upassword','$url')";

$result = $conn->query($sql);
if($result)
{
    //echo "User registered successfully";
    header("location:login.php");
}
else{
    echo "Sorry user not registered successfully";
}
}
else{
    header("location:signup.php");
}
?>
</body>
</html>