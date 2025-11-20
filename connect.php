
    <?php
    $servername = "localhost:3306";
    $dbname = "lictbca4";
    $dbusername = "root";
    $dbpassword = "";

    $conn = new mysqli($servername,$dbname,$dbusername,$dbpassword);
    
    if($conn->connect_errorno !=0)
    {
       die("connection error :".$conn->connect_errorno);
    }
    ?>
    
</body>
</html> 