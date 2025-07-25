# Sistem Manajemen Kost

Aplikasi web berbasis PHP native untuk mengelola data kost, penghuni, dan tagihan.

## Fitur Utama

- **Dashboard** - Tampilan ringkasan data kost
- **Manajemen Kost** - Tambah, edit, hapus data kost
- **Data Penghuni** - Kelola data penghuni kost
- **Sistem Tagihan** - Buat dan kelola tagihan bulanan
- **Login System** - Autentikasi pengguna

## Struktur Folder

```
app_kost/
├── index.php              # Halaman utama (dashboard)
├── assets/
│   ├── css/
│   │   └── style.css      # File CSS utama
│   ├── js/
│   │   └── script.js      # File JavaScript
│   └── img/               # Folder gambar
├── pages/
│   ├── login.php          # Halaman login
│   ├── tambah_kost.php    # Form tambah kost
│   ├── penghuni.php       # Data penghuni
│   └── tagihan.php        # Data tagihan
└── README.md              # Dokumentasi
```

## Instalasi

1. **Clone atau download project**
   ```bash
   git clone [repository-url]
   cd app_kost
   ```

2. **Setup Web Server**
   - Pastikan XAMPP/WAMP/LAMP sudah terinstall
   - Letakkan folder project di `htdocs/` (XAMPP) atau `www/` (WAMP)
   - Start Apache server

3. **Akses Aplikasi**
   - Buka browser
   - Kunjungi `http://localhost/app_kost`

## Penggunaan

### Login
- Username: `admin`
- Password: `admin123`

### Dashboard
- Melihat statistik kost (kamar kosong, penghuni aktif, tagihan)
- Data kamar kosong
- Tagihan jatuh tempo dan terlambat
- Quick actions untuk navigasi

### Tambah Kost
- Form untuk menambah data kost baru
- Field: nomor kamar, lantai, ukuran, harga, fasilitas, status

### Data Penghuni
- Daftar semua penghuni kost
- Fitur pencarian dan filter
- Aksi edit dan hapus data

### Tagihan
- Kelola tagihan bulanan
- Status pembayaran (lunas, jatuh tempo, terlambat)
- Statistik tagihan

## Teknologi yang Digunakan

- **PHP 7.4+** - Backend programming
- **HTML5** - Markup
- **CSS3** - Styling dengan Grid dan Flexbox
- **JavaScript** - Interaktivitas client-side
- **Font Awesome** - Icon library
- **Responsive Design** - Mobile-friendly

## Fitur Responsif

- Layout menyesuaikan ukuran layar
- Mobile menu untuk layar kecil
- Grid system yang fleksibel
- Touch-friendly interface

## Browser Support

- Chrome (recommended)
- Firefox
- Safari
- Edge

## Pengembangan

### Menambah Halaman Baru
1. Buat file PHP di folder `pages/`
2. Gunakan struktur header dan footer yang sama
3. Link CSS dan JS dengan path relatif `../assets/`

### Styling
- Gunakan class CSS yang sudah ada
- Tambahkan style custom di dalam tag `<style>`
- Ikuti naming convention yang konsisten

### JavaScript
- Semua fungsi JS ada di `assets/js/script.js`
- Gunakan event listener untuk interaktivitas
- Validasi form client-side

## Kontribusi

1. Fork repository
2. Buat branch fitur baru
3. Commit perubahan
4. Push ke branch
5. Buat Pull Request

## Lisensi

Project ini open source dan dapat digunakan untuk keperluan komersial maupun non-komersial.

## Support

Untuk pertanyaan atau bantuan, silakan buat issue di repository atau hubungi developer.

---

**Dibuat dengan ❤️ untuk memudahkan pengelolaan kost**