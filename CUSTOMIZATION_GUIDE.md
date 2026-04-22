# 🎨 Panduan Kustomisasi Portfolio

## 📝 Mengubah Konten

### 1. Hero Section - Informasi Utama

**File**: `resources/views/portfolio/index.blade.php`

```html
<!-- Ubah emoji/foto profile -->
<div class="text-5xl">👨‍💻</div>
<!-- Atau ganti dengan foto: -->
<img src="/images/profile.jpg" alt="Profile" class="w-32 h-32 rounded-full">

<!-- Ubah nama dan title -->
<h1>Hi, Saya <span>Nama Anda</span></h1>
<p>Full Stack Developer | Laravel Enthusiast | UI/UX Lover</p>
```

### 2. About Section - Tentang Anda

```html
<p>
    Tulis tentang diri Anda, pengalaman, passion, dan apa yang membuat Anda unik.
    Ceritakan journey Anda sebagai developer.
</p>
```

### 3. Projects - Portfolio Anda

**File**: `app/Http/Controllers/PortfolioController.php`

```php
$projects = [
    [
        'id' => 1,
        'title' => 'Nama Project',
        'description' => 'Deskripsi singkat project (max 2-3 kalimat)',
        'image' => 'https://images.unsplash.com/photo-xxx', // atau '/images/project1.jpg'
        'tags' => ['Laravel', 'Vue.js', 'MySQL'],
        'link' => 'https://github.com/username/project' // atau '#' jika belum ada
    ],
];
```

**Tips Gambar Project:**
- Ukuran ideal: 800x600px
- Format: JPG atau PNG
- Upload ke `/public/images/`
- Atau gunakan Unsplash untuk placeholder

### 4. Skills - Keahlian Anda

```php
$skills = [
    ['name' => 'Nama Skill', 'level' => 85, 'icon' => '🚀'],
    // level: 0-100 (persentase keahlian)
    // icon: emoji yang relevan
];
```

**Emoji Icons yang Cocok:**
- 🚀 Laravel/Framework
- 🐘 PHP
- ⚡ JavaScript
- 💚 Vue.js
- ⚛️ React
- 🎨 CSS/Design
- 🗄️ Database
- 📦 Git/Tools

## 🎨 Mengubah Warna & Tema

### Warna Gradient Utama

**File**: `resources/views/portfolio/index.blade.php`

Cari dan ganti semua:
```html
from-blue-500 to-purple-600
```

**Pilihan Warna Gradient:**
- `from-blue-500 to-cyan-500` - Blue to Cyan
- `from-purple-500 to-pink-500` - Purple to Pink
- `from-green-500 to-teal-500` - Green to Teal
- `from-orange-500 to-red-500` - Orange to Red
- `from-indigo-500 to-purple-500` - Indigo to Purple

### Background Color

```html
<!-- Ubah dari: -->
bg-gray-950

<!-- Ke warna lain: -->
bg-slate-950    <!-- Lebih biru -->
bg-zinc-950     <!-- Lebih netral -->
bg-neutral-950  <!-- Warm neutral -->
```

### Accent Color

Ganti semua `text-blue-400` dan `hover:text-blue-400` dengan warna pilihan:
- `text-purple-400`
- `text-cyan-400`
- `text-green-400`
- `text-pink-400`

## 🖼️ Mengganti Gambar

### Profile Picture

```html
<!-- Ganti emoji dengan foto -->
<img src="/images/profile.jpg" 
     alt="Profile" 
     class="w-32 h-32 rounded-full object-cover">
```

### Project Images

1. **Upload gambar** ke `/public/images/projects/`
2. **Update controller**:
```php
'image' => '/images/projects/project1.jpg'
```

### Background Patterns (Optional)

Tambahkan pattern di hero section:
```html
<div class="absolute inset-0 opacity-10">
    <img src="/images/pattern.svg" class="w-full h-full object-cover">
</div>
```

## ✨ Menambah Animasi

### Custom Animation

**File**: `resources/css/app.css`

```css
@keyframes slide-in {
    from {
        transform: translateX(-100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

.animate-slide-in {
    animation: slide-in 0.6s ease-out;
}
```

Gunakan di HTML:
```html
<div class="animate-slide-in">Content</div>
```

### Hover Effects

```html
<!-- Scale on hover -->
<div class="transform hover:scale-105 transition-transform">

<!-- Glow effect -->
<div class="hover:shadow-lg hover:shadow-blue-500/50 transition-shadow">

<!-- Rotate on hover -->
<div class="transform hover:rotate-3 transition-transform">
```

## 🔗 Social Media Links

**File**: `resources/views/portfolio/index.blade.php`

Cari section "Social Links" dan update:

```html
<a href="https://facebook.com/your-username">Facebook</a>
<a href="https://twitter.com/your-username">Twitter</a>
<a href="https://github.com/your-username">GitHub</a>
<a href="https://linkedin.com/in/your-username">LinkedIn</a>
<a href="https://instagram.com/your-username">Instagram</a>
```

## 📱 Menambah Section Baru

### Template Section

```html
<section id="new-section" class="py-20 relative">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 scroll-reveal">
            Section <span class="bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text text-transparent">Title</span>
        </h2>
        
        <div class="max-w-4xl mx-auto">
            <!-- Content here -->
        </div>
    </div>
</section>
```

Jangan lupa tambahkan link di navigation:
```html
<a href="#new-section" class="nav-link">New Section</a>
```

## 🎯 Tips & Tricks

### 1. Responsive Design
- Gunakan `md:` prefix untuk tablet/desktop
- Test di berbagai ukuran layar
- Mobile-first approach

### 2. Performance
- Compress gambar sebelum upload
- Gunakan lazy loading untuk gambar
- Minimize custom CSS/JS

### 3. SEO
- Tambahkan meta tags di `<head>`
- Gunakan semantic HTML
- Alt text untuk semua gambar

### 4. Accessibility
- Contrast ratio yang baik
- Keyboard navigation
- Screen reader friendly

## 🚀 Advanced Customization

### Menambah Dark/Light Mode Toggle

1. **Tambahkan toggle button** di navbar
2. **Update JavaScript** untuk switch theme
3. **Tambahkan light mode colors** di CSS

### Menambah Blog Section

1. **Buat migration** untuk posts table
2. **Buat model** Post
3. **Tambahkan routes** dan controller
4. **Buat view** untuk blog listing dan detail

### Integrasi dengan CMS

- Gunakan Laravel Nova untuk admin panel
- Atau buat custom admin dashboard
- Store content di database

## 📚 Resources

- **Tailwind CSS Docs**: https://tailwindcss.com/docs
- **Laravel Docs**: https://laravel.com/docs
- **Unsplash (Free Images)**: https://unsplash.com
- **Heroicons (Icons)**: https://heroicons.com
- **Google Fonts**: https://fonts.google.com

---

**Happy Customizing! 🎨**
