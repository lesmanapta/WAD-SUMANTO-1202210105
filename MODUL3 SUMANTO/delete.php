<?php
include("connect.php");

$id = $_GET['id'];

$sql = "DELETE FROM showroom_mobil WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: list_mobil.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
