<?php
include_once 'Conn.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $phone_number = trim($_POST['phone_number']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    if ($password !== $confirm_password) {
        echo json_encode(['error' => 'Passwords do not match']);
        exit;
    }
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $coon = new Coon();
    $result = $coon->insert($fullname, $email, $phone_number, $hashed_password);
    if ($result) {
        header("Location:login.php ");   
      } else {
        echo json_encode(['error' => 'Error creating account. Please try again later.']);
    }
}
?>
