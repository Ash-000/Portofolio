# 🚀 Quick Start Guide

## Cara Menjalankan Portfolio

### Opsi 1: Menggunakan Laragon (Recommended untuk Windows)

1. **Buka Laragon**
2. **Start All** (Apache & MySQL akan jalan otomatis)
3. **Buka Terminal di Laragon**
   - Klik kanan Laragon tray icon → Terminal
4. **Masuk ke folder project**
   ```bash
   cd portofolio
   ```
5. **Install dependencies** (jika belum)
   ```bash
   composer install
   npm install
   ```
6. **Build assets**
   ```bash
   npm run build
   ```
7. **Buka browser**
   ```
   http://portofolio.test
   ```
   atau
   ```
   http://localhost/portofolio/public
   ```

### Opsi 2: Development Mode dengan Hot Reload

1. **Terminal 1 - Laravel Server**
   ```bash
   php artisan serve
   ```

2. **Terminal 2 - Vite Dev Server** (untuk hot reload CSS/JS)
   ```bash
   npm run dev
   ```

3. **Buka browser**
   ```
   http://localhost:8000
   ```

## ✅ Checklist Setup

- [ ] Composer dependencies installed (`composer install`)
- [ ] NPM packages installed (`npm install`)
- [ ] .env file exists (copy dari .env.example)
- [ ] APP_KEY generated (`php artisan key:generate`)
- [ ] Database migrated (`php artisan migrate`)
- [ ] Assets built (`npm run build` atau `npm run dev`)

## 🎨 Cara Customize

### 1. Ubah Informasi Personal

Edit `app/Http/Controllers/PortfolioController.php`:

```php
// Ubah projects
$projects = [
    [
        'title' => 'Project Saya',
        'description' => 'Deskripsi project',
        'image' => 'https://link-gambar.com/image.jpg',
        'tags' => ['Laravel', 'Vue.js'],
        'link' => 'https://project-url.com'
    ],
];

// Ubah skills
$skills = [
    ['name' => 'Laravel', 'level' => 90, 'icon' => '🚀'],
];
```

### 2. Ubah Teks di Hero Section

Edit `resources/views/portfolio/index.blade.php` bagian Hero:

```html
<h1>Hi, Saya <span>Nama Anda</span></h1>
<p>Full Stack Developer | Laravel Enthusiast</p>
```

### 3. Ubah Social Media Links

Edit bagian Social Links di `resources/views/portfolio/index.blade.php`:

```html
<a href="https://facebook.com/username">Facebook</a>
<a href="https://twitter.com/username">Twitter</a>
<a href="https://github.com/username">GitHub</a>
<a href="https://linkedin.com/in/username">LinkedIn</a>
```

### 4. Ganti Warna Tema

Edit class Tailwind di view:
- `from-blue-500 to-purple-600` → Ubah ke warna lain
- `bg-gray-950` → Background color
- `text-blue-400` → Accent color

## 🐛 Troubleshooting

### Assets tidak muncul?
```bash
npm run build
php artisan config:clear
php artisan cache:clear
```

### Error 500?
```bash
php artisan key:generate
chmod -R 775 storage bootstrap/cache
```

### CSS tidak berubah?
- Pastikan `npm run dev` berjalan
- Atau jalankan `npm run build` setelah edit CSS
- Clear browser cache (Ctrl + Shift + R)

### Form contact tidak jalan?
- Pastikan CSRF token ada di form
- Check console browser untuk error
- Pastikan route `/contact` terdaftar

## 📱 Testing di Mobile

1. **Cari IP komputer Anda**
   ```bash
   ipconfig
   ```
   Cari "IPv4 Address"

2. **Jalankan server dengan host**
   ```bash
   php artisan serve --host=0.0.0.0
   ```

3. **Buka di HP**
   ```
   http://IP-KOMPUTER:8000
   ```
   Contoh: `http://192.168.1.100:8000`

## 🎯 Next Steps

1. ✅ Ganti semua placeholder content dengan data asli
2. ✅ Upload gambar project ke `/public/images`
3. ✅ Setup email untuk contact form
4. ✅ Tambahkan Google Analytics (optional)
5. ✅ Deploy ke hosting

## 🚀 Ready to Deploy?

Lihat `PORTFOLIO_README.md` untuk panduan deployment lengkap!

---

**Need Help?** Check dokumentasi Laravel: https://laravel.com/docs
