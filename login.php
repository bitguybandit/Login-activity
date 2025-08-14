<?php

$conn = mysqli_connect("localhost", "root", "", "login");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$id = $_POST['id'] ?? '';
$password = $_POST['password'] ?? '';

$sql = "SELECT * FROM admin WHERE id='$id' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        echo "Succes! =)";
    } else {
        echo "Login failed!";
    }

?>
