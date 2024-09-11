<?php
$conn = mysqli_connect('localhost', 'root', '1234', 'jnv');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Database connection successful!";
}
?>
