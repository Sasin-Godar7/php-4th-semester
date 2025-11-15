<?php
if (file_exists("newfile.txt")) {
    $fp = fopen("newfile.txt", "r") or die("Error opening file");
    echo "<h1>Student Record..</h1>
    <table border='1'>
    <tr>
    <th>S.No</th>
    <th> Name</th>
    <th>Roll</th>
    <th>Class</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Address</th>
    </tr>";

    $sno = 0;

    while (!feof($fp)) {
        $str = fgets($fp);
        $arr = explode(",", $str);
        if (trim($arr[0])!= "") {
            $sno++;
            echo "<tr>
            <td>$sno</td>
            <td>$arr[0]</td>
            <td>$arr[1]</td>
            <td>$arr[2]</td>
            <td>$arr[3]</td>
            <td>$arr[4]</td>
            <td>$arr[5]</td>
            </tr>";
        }
    }


    
    echo "</table>";
    fclose($fp);
} else {
    echo "Students record doesn't exist";
}
?>
