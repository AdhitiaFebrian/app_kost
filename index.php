<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin Kost - Sistem Manajemen Kost</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Dashboard Layout */
        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background: linear-gradient(180deg, #2c3e50 0%, #34495e 100%);
            color: white;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            z-index: 1000;
        }

        .sidebar-header {
            padding: 2rem 1.5rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            text-align: center;
        }

        .sidebar-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 1rem;
        }

        .sidebar-logo i {
            font-size: 2rem;
            color: #3498db;
        }

        .sidebar-logo h2 {
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0;
        }

        .sidebar-menu {
            padding: 1rem 0;
        }

        .menu-item {
            display: block;
            padding: 1rem 1.5rem;
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .menu-item:hover,
        .menu-item.active {
            background: rgba(255,255,255,0.1);
            color: white;
            border-left-color: #3498db;
        }

        .menu-item i {
            margin-right: 10px;
            width: 20px;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: 250px;
            background: #f8f9fa;
        }

        /* Top Header */
        .top-header {
            background: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2c3e50;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0.5rem 1rem;
            background: #f8f9fa;
            border-radius: 25px;
        }

        .user-avatar {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        /* Content Area */
        .content-area {
            padding: 2rem;
        }

        .welcome-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            border-radius: 15px;
            margin-bottom: 2rem;
            text-align: center;
        }

        .welcome-section h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .welcome-section p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .welcome-icon {
            font-size: 4rem;
            margin-bottom: 1rem;
            opacity: 0.8;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            .mobile-toggle {
                display: block;
                background: none;
                border: none;
                font-size: 1.5rem;
                color: #2c3e50;
                cursor: pointer;
            }

            .welcome-section h1 {
                font-size: 2rem;
            }

            .welcome-icon {
                font-size: 3rem;
            }
        }

        @media (min-width: 769px) {
            .mobile-toggle {
                display: none;
            }
        }

        /* Overlay for mobile */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
            z-index: 999;
        }

        .sidebar-overlay.active {
            display: block;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo">
                    <i class="fas fa-home"></i>
                    <h2>Kost Manager</h2>
                </div>
                <p style="margin: 0; opacity: 0.8; font-size: 0.9rem;">Admin Panel</p>
            </div>
            
            <nav class="sidebar-menu">
                <a href="index.php" class="menu-item active">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
                <a href="pages/tambah_kost.php" class="menu-item">
                    <i class="fas fa-plus"></i>
                    Tambah Kost
                </a>
                <a href="pages/penghuni.php" class="menu-item">
                    <i class="fas fa-users"></i>
                    Data Penghuni
                </a>
                <a href="pages/tagihan.php" class="menu-item">
                    <i class="fas fa-receipt"></i>
                    Tagihan
                </a>
                <a href="pages/laporan.php" class="menu-item">
                    <i class="fas fa-chart-bar"></i>
                    Laporan
                </a>
                <a href="pages/pengaturan.php" class="menu-item">
                    <i class="fas fa-cog"></i>
                    Pengaturan
                </a>
                <a href="pages/login.php" class="menu-item">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Top Header -->
            <header class="top-header">
                <div class="header-left">
                    <button class="mobile-toggle" id="mobileToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <span class="header-title">Dashboard Admin Kost</span>
                </div>
                
                <div class="header-actions">
                    <div class="user-info">
                        <div class="user-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <div style="font-weight: bold; font-size: 0.9rem;">Admin</div>
                            <div style="font-size: 0.8rem; opacity: 0.7;">Administrator</div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content Area -->
            <div class="content-area">
                <!-- Welcome Section -->
                <div class="welcome-section">
                    <div class="welcome-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h1>Dashboard Admin Kost</h1>
                    <p>Selamat datang di sistem manajemen kost. Kelola data kost, penghuni, dan tagihan dengan mudah.</p>
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
                                    <tr>
                                        <td>202</td>
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
    </div>

    <!-- Mobile Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <script src="assets/js/script.js"></script>
    <script>
        // Mobile sidebar toggle
        const mobileToggle = document.getElementById('mobileToggle');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        mobileToggle.addEventListener('click', function() {
            sidebar.classList.toggle('active');
            sidebarOverlay.classList.toggle('active');
        });

        sidebarOverlay.addEventListener('click', function() {
            sidebar.classList.remove('active');
            sidebarOverlay.classList.remove('active');
        });

        // Close sidebar when clicking on menu items on mobile
        const menuItems = document.querySelectorAll('.menu-item');
        menuItems.forEach(item => {
            item.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    sidebar.classList.remove('active');
                    sidebarOverlay.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html> 