<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penghuni - Sistem Manajemen Kost</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .search-container {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }
        
        .search-row {
            display: flex;
            gap: 1rem;
            align-items: end;
        }
        
        .search-group {
            flex: 1;
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
        
        @media (max-width: 768px) {
            .search-row {
                flex-direction: column;
            }
            
            .table-actions {
                flex-direction: column;
            }
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
                        <li><a href="penghuni.php" class="active">Penghuni</a></li>
                        <li><a href="tagihan.php">Tagihan</a></li>
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
                <h2><i class="fas fa-users"></i> Data Penghuni</h2>
                <p>Kelola data penghuni kost</p>
            </div>

            <!-- Search and Filter -->
            <div class="search-container">
                <div class="search-row">
                    <div class="search-group">
                        <label for="search" class="form-label">Cari Penghuni</label>
                        <input type="text" id="search" class="form-control" placeholder="Cari berdasarkan nama, kamar, atau nomor telepon">
                    </div>
                    <div class="search-group">
                        <label for="status_filter" class="form-label">Status</label>
                        <select id="status_filter" class="form-control">
                            <option value="">Semua Status</option>
                            <option value="aktif">Aktif</option>
                            <option value="nonaktif">Nonaktif</option>
                        </select>
                    </div>
                    <div class="search-group">
                        <label for="kamar_filter" class="form-label">Kamar</label>
                        <select id="kamar_filter" class="form-control">
                            <option value="">Semua Kamar</option>
                            <option value="101">Kamar 101</option>
                            <option value="102">Kamar 102</option>
                            <option value="103">Kamar 103</option>
                        </select>
                    </div>
                    <div class="search-group">
                        <button class="btn btn-primary">
                            <i class="fas fa-search"></i> Cari
                        </button>
                    </div>
                </div>
            </div>

            <!-- Data Table -->
            <div class="content-card">
                <div class="card-header">
                    <h3><i class="fas fa-list"></i> Daftar Penghuni</h3>
                    <a href="#" class="btn btn-success btn-sm">
                        <i class="fas fa-plus"></i> Tambah Penghuni
                    </a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kamar</th>
                                <th>No. Telepon</th>
                                <th>Tanggal Masuk</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ahmad Fauzi</td>
                                <td>103</td>
                                <td>081234567890</td>
                                <td>01 Jan 2024</td>
                                <td><span class="badge success">Aktif</span></td>
                                <td>
                                    <div class="table-actions">
                                        <a href="#" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Siti Nurhaliza</td>
                                <td>203</td>
                                <td>081234567891</td>
                                <td>05 Jan 2024</td>
                                <td><span class="badge success">Aktif</span></td>
                                <td>
                                    <div class="table-actions">
                                        <a href="#" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Budi Santoso</td>
                                <td>301</td>
                                <td>081234567892</td>
                                <td>10 Jan 2024</td>
                                <td><span class="badge success">Aktif</span></td>
                                <td>
                                    <div class="table-actions">
                                        <a href="#" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Rina Marlina</td>
                                <td>104</td>
                                <td>081234567893</td>
                                <td>15 Jan 2024</td>
                                <td><span class="badge warning">Nonaktif</span></td>
                                <td>
                                    <div class="table-actions">
                                        <a href="#" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
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