# 🚀 Panduan Deployment Portfolio

## 📋 Pre-Deployment Checklist

- [ ] Semua konten sudah diupdate (projects, skills, about)
- [ ] Gambar sudah dioptimasi dan diupload
- [ ] Social media links sudah diupdate
- [ ] Contact form sudah ditest
- [ ] Website sudah ditest di berbagai browser
- [ ] Mobile responsive sudah dicek
- [ ] .env production sudah disiapkan

## 🌐 Pilihan Hosting

### 1. Shared Hosting (Mudah & Murah)

**Recommended:**
- Niagahoster
- Hostinger
- Rumahweb
- IDCloudHost

**Langkah Deploy:**

1. **Upload files via FTP/cPanel File Manager**
   - Upload semua file kecuali `/node_modules` dan `/vendor`

2. **Setup di cPanel**
   ```bash
   # SSH ke server, lalu:
   cd public_html/your-domain
   composer install --optimize-autoloader --no-dev
   npm install
   npm run build
   ```

3. **Setup .env**
   ```env
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://yourdomain.com
   ```

4. **Generate key & optimize**
   ```bash
   php artisan key:generate
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

5. **Set permissions**
   ```bash
   chmod -R 755 storage bootstrap/cache
   ```

6. **Point domain ke /public folder**
   - Di cPanel, set document root ke `/public_html/your-domain/public`

### 2. VPS (Lebih Kontrol)

**Recommended:**
- DigitalOcean
- Vultr
- Linode
- AWS Lightsail

**Setup Server (Ubuntu 22.04):**

```bash
# Update system
sudo apt update && sudo apt upgrade -y

# Install PHP 8.3
sudo apt install php8.3 php8.3-fpm php8.3-mysql php8.3-mbstring php8.3-xml php8.3-curl -y

# Install Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

# Install Node.js
curl -fsSL https://deb.nodesource.com/setup_20.x | sudo -E bash -
sudo apt install nodejs -y

# Install Nginx
sudo apt install nginx -y

# Install MySQL
sudo apt install mysql-server -y
```

**Deploy Application:**

```bash
# Clone atau upload project
cd /var/www
git clone your-repo.git portfolio

# Install dependencies
cd portfolio
composer install --optimize-autoloader --no-dev
npm install
npm run build

# Setup permissions
sudo chown -R www-data:www-data /var/www/portfolio
sudo chmod -R 755 /var/www/portfolio/storage
sudo chmod -R 755 /var/www/portfolio/bootstrap/cache

# Setup .env
cp .env.example .env
nano .env  # Edit sesuai kebutuhan
php artisan key:generate
```

**Nginx Configuration:**

```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /var/www/portfolio/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

**Enable site:**
```bash
sudo ln -s /etc/nginx/sites-available/portfolio /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl restart nginx
```

### 3. Platform as a Service (Paling Mudah)

#### A. Laravel Forge (Recommended)

1. **Connect server** (DigitalOcean, AWS, dll)
2. **Create site** dengan domain
3. **Deploy** via Git
4. **Auto deployment** setiap push

**Harga:** $12/bulan (unlimited sites)

#### B. Ploi.io

Similar dengan Forge, lebih murah:
- $10/bulan untuk 1 server
- Auto deployment
- SSL gratis

#### C. Heroku (Free tier available)

```bash
# Install Heroku CLI
# Login
heroku login

# Create app
heroku create your-portfolio

# Add buildpacks
heroku buildpacks:add heroku/php
heroku buildpacks:add heroku/nodejs

# Deploy
git push heroku main

# Setup env
heroku config:set APP_KEY=$(php artisan key:generate --show)
heroku config:set APP_ENV=production
```

**Procfile:**
```
web: vendor/bin/heroku-php-nginx -C nginx.conf public/
```

### 4. Vercel / Netlify (Static Export)

Jika ingin export ke static HTML:

```bash
# Install package
composer require spatie/laravel-export

# Export
php artisan export

# Deploy folder dist/ ke Vercel/Netlify
```

## 🔒 SSL Certificate (HTTPS)

### Let's Encrypt (Gratis)

```bash
# Install Certbot
sudo apt install certbot python3-certbot-nginx -y

# Generate certificate
sudo certbot --nginx -d yourdomain.com -d www.yourdomain.com

# Auto renewal
sudo certbot renew --dry-run
```

### Cloudflare (Gratis + CDN)

1. **Add site** di Cloudflare
2. **Update nameservers** di domain registrar
3. **Enable SSL** (Full/Flexible)
4. **Enable caching** untuk performance

## 📧 Setup Email (Contact Form)

### Option 1: Gmail SMTP

**.env:**
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```

### Option 2: Mailgun (Recommended)

1. **Sign up** di mailgun.com
2. **Get API key**
3. **Update .env:**

```env
MAIL_MAILER=mailgun
MAILGUN_DOMAIN=your-domain.com
MAILGUN_SECRET=your-api-key
```

### Option 3: SendGrid

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.sendgrid.net
MAIL_PORT=587
MAIL_USERNAME=apikey
MAIL_PASSWORD=your-sendgrid-api-key
```

## 🗄️ Database Setup

### MySQL Production

```sql
-- Create database
CREATE DATABASE portfolio_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Create user
CREATE USER 'portfolio_user'@'localhost' IDENTIFIED BY 'strong_password';

-- Grant privileges
GRANT ALL PRIVILEGES ON portfolio_db.* TO 'portfolio_user'@'localhost';
FLUSH PRIVILEGES;
```

**.env:**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio_db
DB_USERNAME=portfolio_user
DB_PASSWORD=strong_password
```

**Run migrations:**
```bash
php artisan migrate --force
```

## 🔧 Optimization

### Laravel Optimization

```bash
# Cache everything
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Optimize autoloader
composer install --optimize-autoloader --no-dev

# Clear unnecessary files
php artisan clear-compiled
```

### Asset Optimization

```bash
# Build for production
npm run build

# Minify images
# Use tools like TinyPNG or ImageOptim
```

### Enable OPcache

**php.ini:**
```ini
opcache.enable=1
opcache.memory_consumption=128
opcache.interned_strings_buffer=8
opcache.max_accelerated_files=4000
opcache.revalidate_freq=60
```

## 📊 Monitoring & Analytics

### Google Analytics

Tambahkan di `<head>`:
```html
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');
</script>
```

### Error Tracking

**Sentry:**
```bash
composer require sentry/sentry-laravel
php artisan sentry:publish --dsn=your-dsn
```

## 🔄 Auto Deployment

### GitHub Actions

**.github/workflows/deploy.yml:**
```yaml
name: Deploy

on:
  push:
    branches: [ main ]

jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v2
      
      - name: Deploy to server
        uses: appleboy/ssh-action@master
        with:
          host: ${{ secrets.HOST }}
          username: ${{ secrets.USERNAME }}
          key: ${{ secrets.SSH_KEY }}
          script: |
            cd /var/www/portfolio
            git pull origin main
            composer install --no-dev
            npm install
            npm run build
            php artisan migrate --force
            php artisan config:cache
            php artisan route:cache
            php artisan view:cache
```

## ✅ Post-Deployment

- [ ] Test semua fitur
- [ ] Check SSL certificate
- [ ] Test contact form
- [ ] Check mobile responsive
- [ ] Test loading speed (GTmetrix, PageSpeed Insights)
- [ ] Setup Google Search Console
- [ ] Submit sitemap
- [ ] Test di berbagai browser

## 🆘 Troubleshooting

### 500 Error
```bash
php artisan config:clear
php artisan cache:clear
chmod -R 755 storage bootstrap/cache
```

### Assets tidak muncul
```bash
php artisan storage:link
npm run build
```

### Permission denied
```bash
sudo chown -R www-data:www-data /var/www/portfolio
sudo chmod -R 755 storage bootstrap/cache
```

## 📚 Resources

- **Laravel Deployment Docs**: https://laravel.com/docs/deployment
- **DigitalOcean Tutorials**: https://www.digitalocean.com/community/tutorials
- **Laravel Forge**: https://forge.laravel.com
- **Cloudflare**: https://www.cloudflare.com

---

**Good luck with your deployment! 🚀**
