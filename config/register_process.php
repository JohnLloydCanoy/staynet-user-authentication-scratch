<?php
require_once 'config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $role = $_POST['role']; // 'guest' or 'host'
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    try {
        $stmt = $pdo->prepare("INSERT INTO users (full_name, email, password_hash, role) VALUES (:name, :email, :pass, :role)");
        $stmt->execute([
            ':name'  => $full_name,
            ':email' => $email,
            ':pass'  => $password,
            ':role'  => $role
        ]);

        if ($role === 'host') {
            header("Location: host_dashboard.php");
            exit(); 
        } else {
            header("Location: index.php"); 
            exit();
        }

    } catch (\PDOException $e) {
        die("Registration failed: " . $e->getMessage());
    }
}
?>