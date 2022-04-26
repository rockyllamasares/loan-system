<?php
require 'dbconn.php';

$lName = $_POST["lName"];
$fName = $_POST["fName"];
$mName = $_POST["mName"];
$amntBorrowed = $_POST["amntBorrowed"];
$terms = $_POST["terms"];
$rate = $_POST["rate"];

$sql = "INSERT INTO tbl_utang (lName, fName, mName, amntBorrowed, terms, rate)
VALUES ('$lName', '$fName', '$mName', '$amntBorrowed', '$terms', '$rate')";

if (mysqli_query($conn, $sql)) {
    header("Location: ../view.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
