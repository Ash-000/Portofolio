# 🎨 Portfolio Website - Complete Package

> Portfolio website modern dengan Laravel 13, Tailwind CSS 4, dan animasi JavaScript yang smooth.

![Laravel](https://img.shields.io/badge/Laravel-13-red?style=flat-square&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.3-blue?style=flat-square&logo=php)
![Tailwind](https://img.shields.io/badge/Tailwind-4.0-cyan?style=flat-square&logo=tailwindcss)
![Vite](https://img.shields.io/badge/Vite-8.0-purple?style=flat-square&logo=vite)

## 📸 Preview

Portfolio ini mencakup:
- ✨ Hero section dengan animated background
- 👤 About section dengan informasi personal
- 💪 Skills section dengan animated progress bars
- 🎯 Projects showcase dengan grid layout
- 📧 Contact form dengan AJAX submission
- 📱 Fully responsive design
- 🎨 Modern dark theme
- ⚡ Smooth animations & transitions

## 🚀 Quick Start

```bash
# 1. Install dependencies
composer install
npm install

# 2. Setup environment
cp .env.example .env
php artisan key:generate

# 3. Run migrations
php artisan migrate

# 4. Build assets
npm run build

# 5. Start server
php artisan serve
```

Buka browser: `http://localhost:8000`

## 📚 Dokumentasi Lengkap

### 🎯 Getting Started
- **[QUICK_START.md](QUICK_START.md)** - Panduan cepat untuk memulai
- **[PORTFOLIO_README.md](PORTFOLIO_README.md)** - Dokumentasi lengkap fitur

### 🎨 Customization
- **[CUSTOMIZATION_GUIDE.md](CUSTOMIZATION_GUIDE.md)** - Cara customize portfolio
  - Mengubah konten (projects, skills, about)
  - Mengubah warna & tema
  - Mengganti gambar
  - Menambah animasi
  - Menambah section baru

### 🚀 Deployment
- **[DEPLOYMENT_GUIDE.md](DEPLOYMENT_GUIDE.md)** - Panduan deploy ke production
  - Shared hosting (Niagahoster, Hostinger, dll)
  - VPS (DigitalOcean, Vultr, dll)
  - Platform as a Service (Forge, Ploi, Heroku)
  - SSL setup
  - Email configuration
  - Database setup
  - Optimization tips

### 💡 Enhancement
- **[ENHANCEMENT_IDEAS.md](ENHANCEMENT_IDEAS.md)** - Ideas untuk upgrade portfolio
  - Visual enhancements (particles, 3D effects, glassmorphism)
  - Functional features (blog, testimonials, filtering)
  - Interactive features (live chat, scroll progress)
  - SEO & performance optimization
  - Security enhancements
  - Analytics & tracking

## 📁 Struktur Project

```
portfolio/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PortfolioController.php    # Main controller
├── resources/
│   ├── css/
│   │   └── app.css                        # Custom CSS & animations
│   ├── js/
│   │   └── app.js                         # JavaScript interactions
│   └── views/
│       ├── portfolio/
│       │   └── index.blade.php            # Main template
│       └── components/
│           └── loading.blade.php          # Loading screen
├── routes/
│   └── web.php                            # Routes
├── public/
│   └── images/                            # Upload gambar di sini
└── Documentation/
    ├── QUICK_START.md
    ├── PORTFOLIO_README.md
    ├── CUSTOMIZATION_GUIDE.md
    ├── DEPLOYMENT_GUIDE.md
    └── ENHANCEMENT_IDEAS.md
```

## ✨ Fitur Utama

### 🎨 Design & UI
- Modern dark theme dengan gradient accents
- Glassmorphism effects
- Smooth scroll animations
- Responsive untuk semua device
- Custom scrollbar
- Hover effects & transitions

### ⚡ Animations
- Fade-in animations
- Scroll reveal effects
- Animated blob background
- Skill bars animation
- Typing effect (optional)
- Parallax scrolling
- Project card hover effects

### 🔧 Functionality
- Dynamic content dari controller
- AJAX contact form
- Form validation
- Mobile menu toggle
- Active navigation highlighting
- Smooth scrolling navigation

## 🎯 Cara Customize

### 1. Update Konten Personal

Edit `app/Http/Controllers/PortfolioController.php`:

```php
// Projects
$projects = [
    [
        'title' => 'Your Project',
        'description' => 'Project description',
        'image' => 'image-url',
        'tags' => ['Laravel', 'Vue.js'],
        'link' => 'project-url'
    ],
];

// Skills
$skills = [
    ['name' => 'Laravel', 'level' => 90, 'icon' => '🚀'],
];
```

### 2. Update Hero Section

Edit `resources/views/portfolio/index.blade.php`:

```html
<h1>Hi, Saya <span>Your Name</span></h1>
<p>Your Title | Your Specialty</p>
```

### 3. Update Social Links

```html
<a href="https://github.com/username">GitHub</a>
<a href="https://linkedin.com/in/username">LinkedIn</a>
```

### 4. Ubah Warna

Ganti gradient colors:
```html
from-blue-500 to-purple-600
```

Ke warna pilihan Anda:
```html
from-green-500 to-teal-500
from-purple-500 to-pink-500
from-orange-500 to-red-500
```

## 🛠️ Tech Stack

### Backend
- **Laravel 13** - PHP Framework
- **PHP 8.3** - Programming Language

### Frontend
- **Tailwind CSS 4** - Utility-first CSS Framework
- **JavaScript (Vanilla)** - No framework dependencies
- **Vite 8** - Build tool & dev server

### Database
- **SQLite** - Default (bisa diganti MySQL/PostgreSQL)

## 📦 Dependencies

### PHP (Composer)
```json
{
    "laravel/framework": "^13.0",
    "laravel/tinker": "^3.0"
}
```

### JavaScript (NPM)
```json
{
    "tailwindcss": "^4.0.0",
    "vite": "^8.0.0",
    "laravel-vite-plugin": "^3.0.0"
}
```

## 🎓 Learning Resources

- **Laravel Docs**: https://laravel.com/docs
- **Tailwind CSS Docs**: https://tailwindcss.com/docs
- **MDN Web Docs**: https://developer.mozilla.org

## 🤝 Support

Jika ada pertanyaan atau butuh bantuan:

1. Baca dokumentasi di folder ini
2. Check Laravel documentation
3. Search di Stack Overflow
4. Join Laravel Indonesia community

## 📝 Checklist Sebelum Deploy

- [ ] Update semua konten personal
- [ ] Ganti placeholder images
- [ ] Update social media links
- [ ] Test contact form
- [ ] Test di berbagai browser
- [ ] Test responsive di mobile
- [ ] Optimize images
- [ ] Setup .env production
- [ ] Enable caching
- [ ] Setup SSL certificate
- [ ] Configure email
- [ ] Add Google Analytics (optional)

## 🎉 Next Steps

1. **Customize** - Sesuaikan dengan brand personal Anda
2. **Add Content** - Tambahkan project dan skill Anda
3. **Test** - Test di berbagai device dan browser
4. **Deploy** - Deploy ke hosting pilihan Anda
5. **Share** - Share portfolio Anda ke dunia!

## 📄 License

Open source - bebas digunakan dan dimodifikasi!

## 🙏 Credits

Built with:
- Laravel Framework
- Tailwind CSS
- Unsplash (placeholder images)
- Heroicons (icons)

---

**Made with ❤️ using Laravel & Tailwind CSS**

**Happy Coding! 🚀**

---

## 📞 Quick Links

- [Quick Start Guide](QUICK_START.md)
- [Full Documentation](PORTFOLIO_README.md)
- [Customization Guide](CUSTOMIZATION_GUIDE.md)
- [Deployment Guide](DEPLOYMENT_GUIDE.md)
- [Enhancement Ideas](ENHANCEMENT_IDEAS.md)
