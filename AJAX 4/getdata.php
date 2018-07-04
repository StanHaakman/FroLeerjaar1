<?php
include "dbvars.php";

$resultArray = array();

$search = $_GET['q'];
$type = $_GET['type'];
$con = mysqli_connect($servername,$uid,$pwd,$database);
if (!$con) {
    echo 'dood';
}
mysqli_select_db($con,'24505_db');
$sql = "SELECT * FROM country WHERE name LIKE '$search%' ";
if ($type == 'list') {
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)) {
        $resultArray[] = $row['Name'];
    }
    echo json_encode($resultArray);
}
if ($type == 'answer') {
    $result = mysqli_query($con,$sql);

    echo "<table>
<tr>
<th>Name</th>
<th>Continent</th>
<th>Region</th>
</tr>";
    while($row = mysqli_fetch_array($result)) {
        echo "<table>";
        echo "<tr>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Continent'] . "</td>";
        echo "<td>" . $row['Region'] . "</td>";

        echo "</tr>";
        echo "</table>";
    }
    echo "</table>";
}
mysqli_close($con);
?>
