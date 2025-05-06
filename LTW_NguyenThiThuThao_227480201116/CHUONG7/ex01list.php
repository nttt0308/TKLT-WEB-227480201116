<?php
include 'Connection.php';

$table = $_GET['table'];
$sql = "SELECT * FROM $table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Dữ liệu bảng $table</h2>";
    echo "<table border='1'><tr>";
    while ($field = $result->fetch_field()) {
        echo "<th>{$field->name}</th>";
    }
    echo "</tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Không có dữ liệu.";
}
$conn->close();
?>
