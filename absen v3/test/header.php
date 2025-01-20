<?php
date_default_timezone_set('Asia/Jakarta'); // Set timezone ke Indonesia
$time = date('H:i'); // Format jam:menit
$date = date('l, j F Y'); // Format hari, tanggal bulan tahun
?>

<div class="header">
    <div class="logo">Last Gen Sija</div>
    <div class="date-time">
        <span><?php echo $time; ?></span> | <span><?php echo $date; ?></span>
    </div>
    <div class="user-info">
        <img src="user-icon.png" alt="User Icon" class="user-icon">
        <span>Stewie Griffin</span>
        <div class="mode-toggle">
            <button id="theme-toggle" class="toggle-btn">🌙</button>
        </div>
    </div>
</div>
