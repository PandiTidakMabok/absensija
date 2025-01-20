<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
     <!-- Header -->
     <?php include 'header.php'; ?>

<!-- Sidebar -->
<?php include 'sidebar.php'; ?>

<!-- Konten Utama -->
<div class="main-content">
    <h1>Selamat Datang di Dashboard!</h1>
        <div class="content">
            <!-- Tugas Minggu Ini -->
            <div class="task-section">
                <h2>Tugas Minggu Ini</h2>
                <div class="tasks">
                    <div class="task blue">
                        <h3>Tugas 1</h3>
                        <p>Deskripsi singkat tentang tugas 1.</p>
                    </div>
                    <div class="task green">
                        <h3>Tugas 2</h3>
                        <p>Deskripsi singkat tentang tugas 2.</p>
                    </div>
                    <div class="task yellow">
                        <h3>Tugas 3</h3>
                        <p>Deskripsi singkat tentang tugas 3.</p>
                    </div>
                </div>
            </div>

            <!-- Jadwal dan Absensi -->
            <div class="schedule-absence">
                <div class="schedule">
                    <h2>Jadwal Minggu Ini</h2>
                    <ul>
                        <li>Senin: Praktik</li>
                        <li>Jumat: Sehat</li>
                    </ul>
                </div>
                <div class="absence">
                    <h2>Absensi Hari Ini</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Waktu Kehadiran</th>
                                <th>Waktu Pulang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Stewie Griffin</td>
                                <td>07:30</td>
                                <td>16:30</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Brian Griffin</td>
                                <td>07:40</td>
                                <td>16:20</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Peter Griffin</td>
                                <td>08:00</td>
                                <td>16:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
