# 🚀 Portfolio Website Modern

Portfolio website modern dengan animasi smooth menggunakan Laravel 13, Tailwind CSS 4, dan JavaScript vanilla.

## ✨ Fitur

- **Design Modern & Responsif** - Tampilan yang menarik di semua device
- **Animasi Smooth** - Scroll reveal, fade-in, parallax effects
- **Dark Theme** - Tema gelap yang nyaman di mata
- **Interactive Elements** - Hover effects, smooth scrolling, typing effect
- **Contact Form** - Form kontak dengan AJAX submission
- **Skill Bars** - Animated skill progress bars
- **Project Showcase** - Grid layout untuk menampilkan project
- **Social Links** - Link ke media sosial

## 🎨 Teknologi

- **Backend**: Laravel 13 (PHP 8.3)
- **Frontend**: Tailwind CSS 4, JavaScript (Vanilla)
- **Build Tool**: Vite 8
- **Database**: SQLite (default)

## 📦 Instalasi

1. **Clone atau pastikan dependencies terinstall**
   ```bash
   composer install
   npm install
   ```

2. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Setup database**
   ```bash
   php artisan migrate
   ```

4. **Build assets**
   ```bash
   npm run build
   ```

5. **Jalankan development server**
   ```bash
   # Opsi 1: Jalankan semua services sekaligus
   composer dev

   # Opsi 2: Jalankan manual
   php artisan serve
   npm run dev
   ```

6. **Buka browser**
   ```
   http://localhost:8000
   ```

## 🎯 Struktur File

```
├── app/
│   └── Http/
│       └── Controllers/
│           └── PortfolioController.php    # Controller utama
├── resources/
│   ├── css/
│   │   └── app.css                        # Custom CSS & animations
│   ├── js/
│   │   └── app.js                         # JavaScript interactions
│   └── views/
│       └── portfolio/
│           └── index.blade.php            # Template utama
└── routes/
    └── web.php                            # Routes
```

## 🎨 Kustomisasi

### Mengubah Data Portfolio

Edit file `app/Http/Controllers/PortfolioController.php`:

**Projects:**
```php
$projects = [
    [
        'title' => 'Nama Project',
        'description' => 'Deskripsi project',
        'image' => 'URL gambar',
        'tags' => ['Tag1', 'Tag2'],
        'link' => 'URL project'
    ],
    // tambahkan project lainnya...
];
```

**Skills:**
```php
$skills = [
    ['name' => 'Skill Name', 'level' => 90, 'icon' => '🚀'],
    // tambahkan skill lainnya...
];
```

### Mengubah Warna

Edit `resources/views/portfolio/index.blade.php` dan ubah class Tailwind:
- `from-blue-500 to-purple-600` - Gradient colors
- `bg-gray-950` - Background color
- `text-gray-100` - Text color

### Menambah Animasi

Edit `resources/css/app.css` untuk menambah custom animations:
```css
@keyframes your-animation {
    from { /* start state */ }
    to { /* end state */ }
}
```

## 📱 Sections

1. **Hero Section** - Intro dengan animated background
2. **About Section** - Tentang diri Anda
3. **Skills Section** - Keahlian dengan progress bars
4. **Projects Section** - Portfolio projects dengan grid layout
5. **Contact Section** - Form kontak dengan validasi
6. **Footer** - Social links dan copyright

## 🔧 Fitur JavaScript

- **Smooth Scrolling** - Navigasi smooth ke section
- **Scroll Reveal** - Animasi saat scroll
- **Navbar Effect** - Navbar berubah saat scroll
- **Skill Bars Animation** - Progress bars animate on view
- **Typing Effect** - Text typing animation di hero
- **Form Validation** - AJAX form submission
- **Mobile Menu** - Responsive mobile navigation
- **Parallax Effect** - Background parallax scrolling

## 🎯 Customization Tips

1. **Ganti Foto Profile**: Ubah emoji di hero section dengan `<img>` tag
2. **Tambah Section**: Copy struktur section dan sesuaikan
3. **Ubah Font**: Edit `@theme` di `app.css`
4. **Tambah Social Links**: Edit section social links di contact
5. **Ganti Gambar Project**: Gunakan URL gambar sendiri atau upload ke `/public/images`

## 📝 Contact Form

Form contact sudah siap dengan:
- CSRF Protection
- Client-side validation
- AJAX submission
- Success/Error messages

Untuk menambahkan fungsi kirim email, edit method `contact()` di `PortfolioController.php`:

```php
use Illuminate\Support\Facades\Mail;

public function contact(Request $request)
{
    $validated = $request->validate([...]);
    
    // Kirim email
    Mail::to('your@email.com')->send(new ContactMail($validated));
    
    return response()->json([...]);
}
```

## 🚀 Production Deployment

1. **Build assets untuk production**
   ```bash
   npm run build
   ```

2. **Optimize Laravel**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

3. **Set environment ke production**
   ```env
   APP_ENV=production
   APP_DEBUG=false
   ```

## 📄 License

Open source - silakan digunakan dan dimodifikasi sesuai kebutuhan!

## 🎉 Selamat!

Portfolio website modern Anda sudah siap! Customize sesuai kebutuhan dan deploy ke hosting favorit Anda.

**Happy Coding! 🚀**
