<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "nandhudb");
$delete = $_GET['del'];
$sql = "DELETE FROM student WHERE id='$delete'";
if (mysqli_query($connection, $sql)) {
    echo '<script>location.replace("index.php")</script>';
} else {
    echo "Data not deleted: " . $connection->error;
}
?>