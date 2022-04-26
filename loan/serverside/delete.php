<?php
require 'dbconn.php';

$utangID = $_GET['utangID'];

$sql = "DELETE FROM tbl_utang WHERE utangID = '$utangID'";

if (mysqli_query($conn, $sql)) {
    header("Location: ../view.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
