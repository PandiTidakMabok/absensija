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
        <img src="https://www.tryparrotai.com/_next/image?url=https%3A%2F%2Ffirebasestorage.googleapis.com%2Fv0%2Fb%2Fparrot-prod-21b3c.appspot.com%2Fo%2Fcommunity%252FcoverPhotos%252F14992f96-5d18-48e3-96c4-7997996cd039%3Falt%3Dmedia%26token%3D76a86f97-01df-4ebf-ac76-0af5bb045616&w=828&q=75" alt="User Icon" class="user-icon">
        <span>Stewie Griffin</span>
    </div>
</div>
