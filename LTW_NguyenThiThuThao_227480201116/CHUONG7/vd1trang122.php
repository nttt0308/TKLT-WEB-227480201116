<?php
$sql = "SELECT * FROM danhsach";
if ($result = mysqli_query($conn, $sql)) {
    if(mysqli_num_rows($result) >0) {
        while ($row = mysqli_fetch_array($result)){
            echo $row['msv'];
            echo $row['hoten'];
            echo $row['ngaysinh'];
            echo $row['nganhhoc'];
            echo $row['tongdiem'];
        }
        mysqli_free_result($result);
    }
    else
    {
        echo "No Records";
    }
}
else {
    echo "Truy vấn thất bại".mysqli_error_link($link);
}
mysqli_close($conn);
?>