<?php
include('Conn.php');
echo "worked";
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $role = $_POST['role'];
    $coon = new Coon();
    $stmt = $coon->getConnection()->prepare("SELECT user_id, username, password_hash, user_type FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password_hash'])) {
            if ($role === $user['user_type']) {
                $_SESSION['user_data'] = $user; 
                $_SESSION['role'] = $user['user_type'];
                if ($role === 'admin') {
                    header('Location:Admin/pages/dashboard.php');
                } else {
                    header('Location:http://localhost/ecommorce/');
                }
                exit;
            } else {
                echo json_encode(['error' => 'Incorrect role selected']);
            }
        } else {
            echo json_encode(['error' => 'Incorrect password']);
        }
    } else {
        echo json_encode(['error' => 'No account found with that email address']);
    }
}
?>
