<?php
session_start(); 

require_once 'config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    try {
        $stmt = $pdo->prepare("INSERT INTO users (full_name, email, password_hash, role) VALUES (:name, :email, :pass, :role)");
        $stmt->execute([
            ':name'  => $full_name,
            ':email' => $email,
            ':pass'  => $password,
            ':role'  => $role
        ]);
        $user_id = $pdo->lastInsertId();

        $_SESSION['user_id']   = $user_id;
        $_SESSION['full_name'] = $full_name;
        $_SESSION['role']      = $role;
        $_SESSION['logged_in'] = true;
        if ($role === 'host') {
            header("Location: pages/host_dashboard.php");
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