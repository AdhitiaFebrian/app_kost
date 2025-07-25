<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tagihan - Sistem Manajemen Kost</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .stats-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }
        
        .stat-mini {
            background: white;
            border-radius: 10px;
            padding: 1rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
        }
        
        .stat-mini h4 {
            color: #7f8c8d;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }
        
        .stat-mini .number {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2c3e50;
        }
        
        .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        
        .btn-success {
            background: #28a745;
            color: white;
        }
        
        .btn-warning {
            background: #ffc107;
            color: #212529;
        }
        
        .btn-danger {
            background: #dc3545;
            color: white;
        }
        
        .btn-sm {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }
        
        .table-actions {
            display: flex;
            gap: 0.5rem;
        }
        
        .badge.danger {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        .badge.success {
            background-color: #d4edda;
            color: #155724;
        }
        
        .badge.warning {
            background-color: #fff3cd;
            color: #856404;
        }
    </style>
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
                        <li><a href="../index.php">Dashboard</a></li>
                        <li><a href="tambah_kost.php">Tambah Kost</a></li>
                        <li><a href="penghuni.php">Penghuni</a></li>
                        <li><a href="tagihan.php" class="active">Tagihan</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main">
        <div class="container">
            <div class="page-header">
                <h2><i class="fas fa-receipt"></i> Data Tagihan</h2>
                <p>Kelola tagihan dan pembayaran kost</p>
            </div>

            <!-- Statistics -->
            <div class="stats-row">
                <div class="stat-mini">
                    <h4>Total Tagihan</h4>
                    <div class="number">Rp 12.500.000</div>
                </div>
                <div class="stat-mini">
                    <h4>Sudah Dibayar</h4>
                    <div class="number">Rp 8.200.000</div>
                </div>
                <div class="stat-mini">
                    <h4>Belum Dibayar</h4>
                    <div class="number">Rp 4.300.000</div>
                </div>
                <div class="stat-mini">
                    <h4>Terlambat</h4>
                    <div class="number">3 Tagihan</div>
                </div>
            </div>

            <!-- Data Table -->
            <div class="content-card">
                <div class="card-header">
                    <h3><i class="fas fa-list"></i> Daftar Tagihan</h3>
                    <a href="#" class="btn btn-success btn-sm">
                        <i class="fas fa-plus"></i> Buat Tagihan
                    </a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Penghuni</th>
                                <th>Kamar</th>
                                <th>Periode</th>
                                <th>Jumlah</th>
                                <th>Jatuh Tempo</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ahmad Fauzi</td>
                                <td>103</td>
                                <td>Jan 2024</td>
                                <td>Rp 800.000</td>
                                <td>15 Jan 2024</td>
                                <td><span class="badge warning">Jatuh Tempo</span></td>
                                <td>
                                    <div class="table-actions">
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-success btn-sm">
                                            <i class="fas fa-check"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Siti Nurhaliza</td>
                                <td>203</td>
                                <td>Jan 2024</td>
                                <td>Rp 1.000.000</td>
                                <td>18 Jan 2024</td>
                                <td><span class="badge warning">Jatuh Tempo</span></td>
                                <td>
                                    <div class="table-actions">
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-success btn-sm">
                                            <i class="fas fa-check"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Budi Santoso</td>
                                <td>301</td>
                                <td>Jan 2024</td>
                                <td>Rp 1.200.000</td>
                                <td>20 Jan 2024</td>
                                <td><span class="badge warning">Jatuh Tempo</span></td>
                                <td>
                                    <div class="table-actions">
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-success btn-sm">
                                            <i class="fas fa-check"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Rina Marlina</td>
                                <td>104</td>
                                <td>Jan 2024</td>
                                <td>Rp 800.000</td>
                                <td>05 Jan 2024</td>
                                <td><span class="badge danger">Terlambat</span></td>
                                <td>
                                    <div class="table-actions">
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-success btn-sm">
                                            <i class="fas fa-check"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Dedi Kurniawan</td>
                                <td>204</td>
                                <td>Jan 2024</td>
                                <td>Rp 1.000.000</td>
                                <td>08 Jan 2024</td>
                                <td><span class="badge danger">Terlambat</span></td>
                                <td>
                                    <div class="table-actions">
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-success btn-sm">
                                            <i class="fas fa-check"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Maya Indah</td>
                                <td>302</td>
                                <td>Jan 2024</td>
                                <td>Rp 1.200.000</td>
                                <td>10 Jan 2024</td>
                                <td><span class="badge danger">Terlambat</span></td>
                                <td>
                                    <div class="table-actions">
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-success btn-sm">
                                            <i class="fas fa-check"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Sistem Manajemen Kost. All rights reserved.</p>
        </div>
    </footer>

    <script src="../assets/js/script.js"></script>
</body>
</html> 