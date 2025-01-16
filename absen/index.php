<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Gen Sija Dashboard</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Link ke file CSS -->
</head>
<body>
<div class="layout">
    <?php include 'layout/sidebar.html'; ?> <!-- Sertakan file sidebar -->
    <div class="header">
    <img src="https://via.placeholder.com/40" alt="User   Avatar" class="user-avatar">
    <span>Stewie Griffin</span><h1>Last Gen Sija Dashboard</h1>
                <div class="user-info">
                    
                </div>
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
</body>
</html>