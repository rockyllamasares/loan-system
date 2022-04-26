<?php
require 'dbconn.php';

$utangID = $_POST['utangID'];
$lName = $_POST["lName"];
$fName = $_POST["fName"];
$mName = $_POST["mName"];
$amntBorrowed = $_POST["amntBorrowed"];
$terms = $_POST["terms"];
$rate = $_POST["rate"];

$sql = "UPDATE tbl_utang SET lName = '$lName', fName = '$fName', mName = '$mName', amntBorrowed = '$amntBorrowed', terms = '$terms', rate = '$rate' WHERE utangID = '$utangID'";

if (mysqli_query($conn, $sql)) {
    header("Location: ../view.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
