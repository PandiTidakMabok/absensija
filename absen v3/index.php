<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Gen Sija Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"></head>
<body>
<?php include 'layout/header.php'; ?>     
<div class="layout">
<?php include 'layout/sidebar.html'; ?> <!-- Sertakan file sidebar -->
    
                <div class="container">
        <div class="main-content">
            </div>
            <div class="tasks">
                <h2>Tugas Minggu Ini</h2>
                <div class="task-cards">
                    <div class="task-card" style="background-color: #3b82f6;"></div>
                    <div class="task-card" style="background-color: #22c55e;"></div>
                    <div class="task-card" style="background-color: #f59e0b;"></div>
                </div>
            </div>
            <div class="grid">
                <div class="card">
                    <h3>Jadwal Minggu Ini</h3>
                    <div class="schedule-item">
                        <div class="schedule-dot"></div>
                        <span>Senin Praktek</span>
                    </div>
                    <div class="schedule-item">
                        <div class="schedule-dot"></div>
                        <span>Jumat Sehat</span>
                    </div>
                </div>
                <div class="card">
                    <h3>Absensi Hari Ini</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Status Kehadiran</th>
                                <th>Status Aktivitas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add table rows here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="jam.js"></script>
</body>
</html>