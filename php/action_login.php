<?php
require "./config.php";
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$query = mysqli_query($con, $sql);
if (mysqli_num_rows($query) > 0) {
    session_start();
    $data = mysqli_fetch_assoc($query);
    $_SESSION['name'] = $data['name'];
    if ($data['role'] == 'Managing editor') {
        $_SESSION['role'] = 'Managing editor';
        header("Location: ../managing_editor?content=dashboard");
    } else if ($data['role'] == 'Associate_editor') {
        $_SESSION['role'] = 'Associate_editor';
        header("Location: ../associate_editor?content=dashboard");
    } else if ($data['role'] == 'Chief editor') {
        $_SESSION['role'] = 'Chief editor';
        header("Location: ../chief_editor?content=dashboard");
    }
} else {
    header("Location: ../index.php");
}