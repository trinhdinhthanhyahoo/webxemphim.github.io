<?php 
session_start();
require_once 'config/database.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Clone</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header class="header">
        <a href="/" class="logo">
            <img src="assets/images/netflix-logo.png" alt="Netflix">
        </a>
        
        <nav class="main-nav">
            <a href="/">Trang chủ</a>
            <a href="/series.php">Phim bộ</a>
            <a href="/movies.php">Phim lẻ</a>
            <a href="/new.php">Mới & Phổ biến</a>
            <a href="/mylist.php">Danh sách của tôi</a>
        </nav>

        <div class="user-nav">
            <a href="#" class="search-icon">
                <i class="fas fa-search"></i>
            </a>
            <a href="#" class="notifications">
                <i class="fas fa-bell"></i>
            </a>
            <div class="user-profile">
                <img src="assets/images/avatar.png" alt="User">
            </div>
        </div>
    </header> 