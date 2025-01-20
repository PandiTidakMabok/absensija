<?php
date_default_timezone_set('Asia/Jakarta'); // Set timezone ke Indonesia
$time = date('H:i');
$date = date('l, j F Y'); // Contoh: Senin, 9 Desember 2024
?>
<div class="top-navbar">
    <div class="logo">Last Gen Sija</div>
    <div class="date-time">
        <span><?php echo $time; ?></span> | <span><?php echo $date; ?></span>
    </div>
    <div class="user-info">
        <img src="user-icon.png" alt="User Icon" class="user-icon">
        <span>Stewie Griffin</span>
    </div>
</div>
