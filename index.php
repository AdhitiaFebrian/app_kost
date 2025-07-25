<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistem Manajemen Kost</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <i class="fas fa-home"></i>
                    <h1>Kost Manager</h1>
                </div>
                <nav class="nav">
                    <ul>
                        <li><a href="index.php" class="active">Dashboard</a></li>
                        <li><a href="pages/tambah_kost.php">Tambah Kost</a></li>
                        <li><a href="pages/penghuni.php">Penghuni</a></li>
                        <li><a href="pages/tagihan.php">Tagihan</a></li>
                        <li><a href="pages/login.php">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main">
        <div class="container">
            <!-- Page Header -->
            <div class="page-header">
                <h2>Dashboard Kost</h2>
                <p>Selamat datang di sistem manajemen kost</p>
            </div>

            <!-- Statistics Cards -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-door-open"></i>
                    </div>
                    <div class="stat-content">
                        <h3>Kamar Kosong</h3>
                        <div class="stat-number">8</div>
                        <p>Dari total 20 kamar</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <h3>Penghuni Aktif</h3>
                        <div class="stat-number">12</div>
                        <p>Sedang menempati kost</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="stat-content">
                        <h3>Tagihan Jatuh Tempo</h3>
                        <div class="stat-number">5</div>
                        <p>Dalam 7 hari ke depan</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="stat-content">
                        <h3>Tagihan Terlambat</h3>
                        <div class="stat-number">3</div>
                        <p>Perlu tindakan segera</p>
                    </div>
                </div>
            </div>

            <!-- Recent Activities -->
            <div class="content-grid">
                <!-- Kamar Kosong -->
                <div class="content-card">
                    <div class="card-header">
                        <h3><i class="fas fa-door-open"></i> Kamar Kosong</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nomor Kamar</th>
                                    <th>Lantai</th>
                                    <th>Ukuran</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>101</td>
                                    <td>1</td>
                                    <td>3x4m</td>
                                    <td>Rp 800.000</td>
                                    <td><span class="badge success">Kosong</span></td>
                                </tr>
                                <tr>
                                    <td>102</td>
                                    <td>1</td>
                                    <td>3x4m</td>
                                    <td>Rp 800.000</td>
                                    <td><span class="badge success">Kosong</span></td>
                                </tr>
                                <tr>
                                    <td>201</td>
                                    <td>2</td>
                                    <td>4x4m</td>
                                    <td>Rp 1.000.000</td>
                                    <td><span class="badge success">Kosong</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Tagihan Jatuh Tempo -->
                <div class="content-card">
                    <div class="card-header">
                        <h3><i class="fas fa-calendar-alt"></i> Tagihan Jatuh Tempo</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Penghuni</th>
                                    <th>Kamar</th>
                                    <th>Jatuh Tempo</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ahmad Fauzi</td>
                                    <td>103</td>
                                    <td>15 Jan 2024</td>
                                    <td>Rp 800.000</td>
                                    <td><span class="badge warning">Jatuh Tempo</span></td>
                                </tr>
                                <tr>
                                    <td>Siti Nurhaliza</td>
                                    <td>203</td>
                                    <td>18 Jan 2024</td>
                                    <td>Rp 1.000.000</td>
                                    <td><span class="badge warning">Jatuh Tempo</span></td>
                                </tr>
                                <tr>
                                    <td>Budi Santoso</td>
                                    <td>301</td>
                                    <td>20 Jan 2024</td>
                                    <td>Rp 1.200.000</td>
                                    <td><span class="badge warning">Jatuh Tempo</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="actions-grid">
                <a href="pages/tambah_kost.php" class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-plus"></i>
                    </div>
                    <h3>Tambah Kost</h3>
                    <p>Tambah data kost baru</p>
                </a>

                <a href="pages/penghuni.php" class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Kelola Penghuni</h3>
                    <p>Atur data penghuni kost</p>
                </a>

                <a href="pages/tagihan.php" class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-receipt"></i>
                    </div>
                    <h3>Kelola Tagihan</h3>
                    <p>Buat dan kelola tagihan</p>
                </a>

                <a href="pages/laporan.php" class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Laporan</h3>
                    <p>Lihat laporan keuangan</p>
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Sistem Manajemen Kost. All rights reserved.</p>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html> 