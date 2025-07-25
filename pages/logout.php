<?php
session_start();

// Hapus semua data session
session_destroy();

// Hapus cookie remember me jika ada
if (isset($_COOKIE['remember_user'])) {
    setcookie('remember_user', '', time() - 3600, '/');
}

// Redirect ke halaman login dengan pesan sukses
header('Location: login.php?success=logout');
exit();
?> 