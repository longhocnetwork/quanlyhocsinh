<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script defer src="/app.js"></script>
    <title>Hệ thống thông tin sinh viên</title>
</head>
<body>
    <?php
    // Lấy URL hiện tại
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>
    <div class="container">
        <div class="header">
            <img class="logo" src="/images/header.png">
        </div>
        <div class="menu">
            <button class="tab <?php if($current_page == 'roll-call.php') echo 'a'; ?>" data-href="/student/roll-call/roll-call.php">
                <div class="title">Điểm danh</div>
            </button>
            <button class="tab <?php if($current_page == 'class.php') echo 'a'; ?>" data-href="/teacher/class/class.php">
                <div class="title">Quản lý lớp</div>
            </button>
            <button class="tab <?php if($current_page == 'teaching-schedule.php') echo 'a'; ?>" data-href="/teacher/schedule/teaching-schedule.php">
                <div class="title">Lịch dạy</div>
            </button>
            <div class="tab with-drop <?php if($current_page == 'info-teacher.php' || $current_page == 'change-password.php') echo 'a'; ?>">
                <div class="title">Tài khoản</div>
                <div class="backdrop">
                    <div class="dropdown">
                        <div data-href="/teacher/info-teacher.php" class="tab-child">Thông tin cá nhân</div>
                        <div id="logout" class="tab-child">Đăng xuất</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
