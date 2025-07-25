<?php
session_start();

// Redirect jika sudah login
if (isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
    exit();
}

// Cek apakah form dikirim dengan method POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php?error=invalid_method');
    exit();
}

// Ambil data dari form
$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

// Validasi input
if (empty($username) || empty($password)) {
    header('Location: login.php?error=empty');
    exit();
}

// Sanitasi input untuk mencegah XSS
$username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
$password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');

// Fungsi untuk validasi kredensial (dalam aplikasi nyata, gunakan database)
function validateCredentials($username, $password) {
    // Demo credentials - dalam aplikasi nyata, ambil dari database
    $valid_users = [
        'admin' => [
            'password' => 'admin123',
            'name' => 'Administrator',
            'role' => 'admin'
        ],
        'user' => [
            'password' => 'user123',
            'name' => 'User',
            'role' => 'user'
        ]
    ];
    
    if (isset($valid_users[$username])) {
        if ($valid_users[$username]['password'] === $password) {
            return $valid_users[$username];
        }
    }
    
    return false;
}

// Proses validasi
$user_data = validateCredentials($username, $password);

if ($user_data) {
    // Login berhasil
    $_SESSION['user_id'] = uniqid(); // Generate unique session ID
    $_SESSION['username'] = $username;
    $_SESSION['user_name'] = $user_data['name'];
    $_SESSION['user_role'] = $user_data['role'];
    $_SESSION['login_time'] = time();
    
    // Set cookie untuk remember me (opsional)
    if (isset($_POST['remember_me']) && $_POST['remember_me'] == 'on') {
        setcookie('remember_user', $username, time() + (30 * 24 * 60 * 60), '/'); // 30 hari
    }
    
    // Log aktivitas login (opsional)
    logLoginActivity($username, $_SERVER['REMOTE_ADDR']);
    
    // Redirect ke dashboard
    header('Location: ../index.php');
    exit();
} else {
    // Login gagal
    header('Location: login.php?error=invalid');
    exit();
}

// Fungsi untuk logging aktivitas login
function logLoginActivity($username, $ip_address) {
    $log_file = '../logs/login_activity.log';
    $timestamp = date('Y-m-d H:i:s');
    $log_entry = "[$timestamp] Login attempt - Username: $username, IP: $ip_address\n";
    
    // Buat direktori logs jika belum ada
    if (!is_dir('../logs')) {
        mkdir('../logs', 0755, true);
    }
    
    // Tulis log
    file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);
}

// Fungsi untuk mengecek apakah user sudah login
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

// Fungsi untuk logout
function logout() {
    session_destroy();
    setcookie('remember_user', '', time() - 3600, '/');
    header('Location: login.php?success=logout');
    exit();
}

// Fungsi untuk mengecek session timeout (30 menit)
function checkSessionTimeout() {
    if (isset($_SESSION['login_time'])) {
        $timeout = 30 * 60; // 30 menit dalam detik
        if (time() - $_SESSION['login_time'] > $timeout) {
            session_destroy();
            header('Location: login.php?error=session_expired');
            exit();
        }
        // Update login time
        $_SESSION['login_time'] = time();
    }
}

// Fungsi untuk mendapatkan data user yang sedang login
function getCurrentUser() {
    if (isLoggedIn()) {
        return [
            'id' => $_SESSION['user_id'],
            'username' => $_SESSION['username'],
            'name' => $_SESSION['user_name'] ?? 'Unknown',
            'role' => $_SESSION['user_role'] ?? 'user'
        ];
    }
    return null;
}

// Fungsi untuk mengecek apakah user memiliki role tertentu
function hasRole($role) {
    $user = getCurrentUser();
    return $user && $user['role'] === $role;
}

// Fungsi untuk require login
function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: login.php?error=not_logged_in');
        exit();
    }
    checkSessionTimeout();
}

// Fungsi untuk require admin
function requireAdmin() {
    requireLogin();
    if (!hasRole('admin')) {
        header('Location: ../index.php?error=access_denied');
        exit();
    }
}
?> 