<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kost - Sistem Manajemen Kost</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .form-container {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            max-width: 800px;
            margin: 0 auto;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #2c3e50;
        }
        
        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #e9ecef;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #667eea;
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
        
        .btn-secondary {
            background: #6c757d;
            color: white;
        }
        
        .btn:hover {
            transform: translateY(-2px);
        }
        
        .alert {
            padding: 0.75rem;
            border-radius: 5px;
            margin-bottom: 1rem;
        }
        
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
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
                        <li><a href="tambah_kost.php" class="active">Tambah Kost</a></li>
                        <li><a href="penghuni.php">Penghuni</a></li>
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
                <h2><i class="fas fa-plus"></i> Tambah Data Kost</h2>
                <p>Tambahkan data kost baru ke sistem</p>
            </div>

            <div class="form-container">
                <?php
                // Handle form submission
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $nomor_kamar = $_POST['nomor_kamar'] ?? '';
                    $lantai = $_POST['lantai'] ?? '';
                    $ukuran = $_POST['ukuran'] ?? '';
                    $harga = $_POST['harga'] ?? '';
                    $fasilitas = $_POST['fasilitas'] ?? '';
                    $status = $_POST['status'] ?? '';
                    
                    if ($nomor_kamar && $lantai && $ukuran && $harga && $status) {
                        $success = "Data kost berhasil ditambahkan!";
                    } else {
                        $error = "Mohon lengkapi semua field yang wajib diisi!";
                    }
                }
                ?>

                <?php if (isset($success)): ?>
                    <div class="alert alert-success">
                        <?php echo $success; ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($error)): ?>
                    <div class="alert alert-danger">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nomor_kamar" class="form-label">Nomor Kamar *</label>
                            <input type="text" id="nomor_kamar" name="nomor_kamar" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="lantai" class="form-label">Lantai *</label>
                            <select id="lantai" name="lantai" class="form-control" required>
                                <option value="">Pilih Lantai</option>
                                <option value="1">Lantai 1</option>
                                <option value="2">Lantai 2</option>
                                <option value="3">Lantai 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="ukuran" class="form-label">Ukuran Kamar *</label>
                            <select id="ukuran" name="ukuran" class="form-control" required>
                                <option value="">Pilih Ukuran</option>
                                <option value="3x4m">3x4m</option>
                                <option value="4x4m">4x4m</option>
                                <option value="4x5m">4x5m</option>
                                <option value="5x5m">5x5m</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="harga" class="form-label">Harga Sewa *</label>
                            <input type="number" id="harga" name="harga" class="form-control" placeholder="Contoh: 800000" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fasilitas" class="form-label">Fasilitas</label>
                        <textarea id="fasilitas" name="fasilitas" class="form-control" rows="3" placeholder="Contoh: AC, Kamar Mandi Dalam, WiFi, Dapur"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="status" class="form-label">Status *</label>
                        <select id="status" name="status" class="form-control" required>
                            <option value="">Pilih Status</option>
                            <option value="kosong">Kosong</option>
                            <option value="terisi">Terisi</option>
                            <option value="maintenance">Maintenance</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea id="keterangan" name="keterangan" class="form-control" rows="3" placeholder="Keterangan tambahan (opsional)"></textarea>
                    </div>

                    <div style="display: flex; gap: 1rem; justify-content: flex-end;">
                        <a href="../index.php" class="btn btn-secondary">
                            <i class="fas fa-times"></i> Batal
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan Data
                        </button>
                    </div>
                </form>
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