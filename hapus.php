<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM mhs WHERE id=$id";



if ($conn->query($sql) === TRUE) {
    header("Location: index.php");

    exit;

} else {



    echo "Error: " . $conn->error;
}


$conn->close();

?>