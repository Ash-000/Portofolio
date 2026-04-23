<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-950 text-gray-100 overflow-x-hidden">
    
    <!-- Navigation -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="#home" class="text-2xl font-bold bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text text-transparent">
                    Portfolio
                </a>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="nav-link hover:text-blue-400 transition-colors">Home</a>
                    <a href="#about" class="nav-link hover:text-blue-400 transition-colors">About</a>
                    <a href="#skills" class="nav-link hover:text-blue-400 transition-colors">Skills</a>
                    <a href="#projects" class="nav-link hover:text-blue-400 transition-colors">Projects</a>
                    <a href="#contact" class="nav-link hover:text-blue-400 transition-colors">Contact</a>
                </div>
                <button id="mobile-menu-btn" class="md:hidden text-gray-100 relative w-10 h-10 flex items-center justify-center">
                    <div class="hamburger">
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line"></span>
                    </div>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="fixed inset-0 bg-gray-900/95 backdrop-blur-lg z-40 opacity-0 invisible transition-all duration-300 pointer-events-none">
        <nav class="flex flex-col items-center justify-center h-full space-y-8">
            <a href="#home" class="mobile-nav-link text-3xl font-bold hover:text-blue-400 transition-all transform hover:scale-110 opacity-0">Home</a>
            <a href="#about" class="mobile-nav-link text-3xl font-bold hover:text-blue-400 transition-all transform hover:scale-110 opacity-0">About</a>
            <a href="#skills" class="mobile-nav-link text-3xl font-bold hover:text-blue-400 transition-all transform hover:scale-110 opacity-0">Skills</a>
            <a href="#projects" class="mobile-nav-link text-3xl font-bold hover:text-blue-400 transition-all transform hover:scale-110 opacity-0">Projects</a>
            <a href="#contact" class="mobile-nav-link text-3xl font-bold hover:text-blue-400 transition-all transform hover:scale-110 opacity-0">Contact</a>
        </nav>
    </div>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center justify-center relative overflow-hidden pt-20">
        <!-- Animated Background -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute w-96 h-96 bg-blue-500/20 rounded-full blur-3xl animate-blob"></div>
            <div class="absolute w-96 h-96 bg-purple-500/20 rounded-full blur-3xl animate-blob animation-delay-2000" style="top: 50%; left: 50%;"></div>
            <div class="absolute w-96 h-96 bg-pink-500/20 rounded-full blur-3xl animate-blob animation-delay-4000" style="bottom: 0; right: 0;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center">
                <div class="mb-8 opacity-0 animate-fade-in-up">
                    <div style="width:140px; height:140px; border-radius:50%; background: linear-gradient(to right, #3b82f6, #9333ea); padding:3px; margin: 0 auto 1.5rem; box-shadow: 0 0 20px rgba(59,130,246,0.3);">
                        <div style="width:100%; height:100%; border-radius:50%; overflow:hidden;">
                            <img src="/images/portofolio.jpg" alt="Profile" style="width:100%; height:100%; object-fit:cover; display:block;">
                        </div>
                    </div>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold mb-6 opacity-0 animate-fade-in-up animation-delay-200">
                    Hi, Nama saya Acef Ridwan saya merupakan<br>
                    <span class="bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text text-transparent">Developer</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-400 mb-8 opacity-0 animate-fade-in-up animation-delay-400">
                    Full Stack Developer | UI/UX Lover
                </p>
                <div class="flex flex-wrap gap-4 justify-center opacity-0 animate-fade-in-up animation-delay-600">
                    <a href="#projects" class="px-8 py-3 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full hover:shadow-lg hover:shadow-blue-500/50 transition-all transform hover:scale-105">
                        Lihat Projects
                    </a>
                    <a href="#contact" class="px-8 py-3 border border-gray-700 rounded-full hover:border-blue-500 transition-all transform hover:scale-105">
                        Hubungi Saya
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 relative">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 scroll-reveal">
                Tentang <span class="bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text text-transparent">Saya</span>
            </h2>
            <div class="max-w-4xl mx-auto">
                <div class="bg-gray-900/50 backdrop-blur-sm rounded-2xl p-8 md:p-12 border border-gray-800 scroll-reveal">
                    <p class="text-lg text-gray-300 leading-relaxed mb-6">
                        Saya adalah seorang Full Stack Developer dengan passion dalam menciptakan aplikasi web yang modern, responsif, dan user-friendly. 
                        Dengan pengalaman dalam berbagai teknologi web, saya selalu berusaha untuk menghadirkan solusi terbaik untuk setiap project.
                    </p>
                    <p class="text-lg text-gray-300 leading-relaxed">
                        Saya memiliki keahlian khusus dalam Laravel framework. 
                        Saya percaya bahwa kode yang baik adalah kode yang clean, maintainable, dan scalable.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 relative">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 scroll-reveal">
                Keahlian <span class="bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text text-transparent">Saya</span>
            </h2>
            <div class="max-w-2xl mx-auto grid grid-cols-2 gap-4" style="grid-template-columns: repeat(2, 1fr)">

                <div class="skill-card scroll-reveal flex flex-col items-center justify-center gap-4 bg-gray-900/50 border border-gray-800 rounded-2xl py-8 px-6 hover:border-blue-500/50 transition-all hover:-translate-y-1">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel" class="w-14 h-14 object-contain">
                    <span class="text-xs font-bold tracking-widest text-gray-300">LARAVEL</span>
                </div>

                <div class="skill-card scroll-reveal flex flex-col items-center justify-center gap-4 bg-gray-900/50 border border-gray-800 rounded-2xl py-8 px-6 hover:border-blue-500/50 transition-all hover:-translate-y-1">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" class="w-14 h-14 object-contain">
                    <span class="text-xs font-bold tracking-widest text-gray-300">PHP</span>
                </div>

                <div class="skill-card scroll-reveal flex flex-col items-center justify-center gap-4 bg-gray-900/50 border border-gray-800 rounded-2xl py-8 px-6 hover:border-blue-500/50 transition-all hover:-translate-y-1">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg" alt="Tailwind CSS" class="w-14 h-14 object-contain">
                    <span class="text-xs font-bold tracking-widest text-gray-300">TAILWIND CSS</span>
                </div>

                <div class="skill-card scroll-reveal flex flex-col items-center justify-center gap-4 bg-gray-900/50 border border-gray-800 rounded-2xl py-8 px-6 hover:border-blue-500/50 transition-all hover:-translate-y-1">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" class="w-14 h-14 object-contain">
                    <span class="text-xs font-bold tracking-widest text-gray-300">MYSQL</span>
                </div>

                <div class="skill-card scroll-reveal flex flex-col items-center justify-center gap-4 bg-gray-900/50 border border-gray-800 rounded-2xl py-8 px-6 hover:border-blue-500/50 transition-all hover:-translate-y-1">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="Git" class="w-14 h-14 object-contain">
                    <span class="text-xs font-bold tracking-widest text-gray-300">GIT</span>
                </div>

                <div class="skill-card scroll-reveal flex flex-col items-center justify-center gap-4 bg-gray-900/50 border border-gray-800 rounded-2xl py-8 px-6 hover:border-blue-500/50 transition-all hover:-translate-y-1">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" class="w-14 h-14 object-contain">
                    <span class="text-xs font-bold tracking-widest text-gray-300">JAVASCRIPT</span>
                </div>

                <div class="skill-card scroll-reveal flex flex-col items-center justify-center gap-4 bg-gray-900/50 border border-gray-800 rounded-2xl py-8 px-6 hover:border-blue-500/50 transition-all hover:-translate-y-1">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML" class="w-14 h-14 object-contain">
                    <span class="text-xs font-bold tracking-widest text-gray-300">HTML</span>
                </div>

                <div class="skill-card scroll-reveal flex flex-col items-center justify-center gap-4 bg-gray-900/50 border border-gray-800 rounded-2xl py-8 px-6 hover:border-blue-500/50 transition-all hover:-translate-y-1">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS" class="w-14 h-14 object-contain">
                    <span class="text-xs font-bold tracking-widest text-gray-300">CSS</span>
                </div>

            </div>
        </div>
    </section>
    <!-- Projects Section -->
    <section id="projects" class="py-20 relative">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 scroll-reveal">
                Project <span class="bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text text-transparent">Terbaru</span>
            </h2>
            <div class="max-w-2xl mx-auto">
                @foreach($projects as $project)
                <div class="project-card group bg-gray-900/50 backdrop-blur-sm rounded-2xl overflow-hidden border border-gray-800 scroll-reveal hover:border-blue-500/50 transition-all">
                    <a href="{{ $project['link'] }}" target="_blank" class="block relative overflow-hidden h-64">
                        <img src="{{ $project['image'] }}" 
                             alt="{{ $project['title'] }}" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="px-6 py-3 bg-blue-500 rounded-full text-white font-semibold">
                                Lihat Project
                            </span>
                        </div>
                    </a>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-3">{{ $project['title'] }}</h3>
                        <p class="text-gray-400 mb-4">{{ $project['description'] }}</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach($project['tags'] as $tag)
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm text-blue-400">{{ $tag }}</span>
                            @endforeach
                        </div>
                        <a href="{{ $project['link'] }}" 
                           target="_blank"
                           class="inline-flex items-center gap-2 text-blue-400 hover:text-blue-300 transition-colors">
                            Lihat Detail
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 relative">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 scroll-reveal">
                Hubungi <span class="bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text text-transparent">Saya</span>
            </h2>
            <div class="max-w-2xl mx-auto">
                <div class="bg-gray-900/50 backdrop-blur-sm rounded-2xl p-8 md:p-12 border border-gray-800 scroll-reveal">
                    <form id="contact-form" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium mb-2">Nama</label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   required
                                   class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:border-blue-500 transition-colors">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium mb-2">Email</label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   required
                                   class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:border-blue-500 transition-colors">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium mb-2">Pesan</label>
                            <textarea id="message" 
                                      name="message" 
                                      rows="5" 
                                      required
                                      class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:border-blue-500 transition-colors resize-none"></textarea>
                        </div>
                        <button type="submit" 
                                class="w-full px-8 py-3 bg-gradient-to-r from-green-500 to-green-600 rounded-lg hover:shadow-lg hover:shadow-green-500/50 transition-all transform hover:scale-105 font-semibold flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            Kirim Pesan via WhatsApp
                        </button>
                    </form>
                    <div id="form-message" class="mt-4 text-center hidden"></div>
                </div>

                <!-- Social Links -->
                <div class="flex justify-center gap-6 mt-12 scroll-reveal">
                    <a href="https://github.com/Ash-000" target="_blank" class="w-12 h-12 flex items-center justify-center bg-gray-800 rounded-full hover:bg-purple-500 transition-colors transform hover:scale-110">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                    <a href="mailto:aceplas0@gmail.com" class="w-12 h-12 flex items-center justify-center bg-gray-800 rounded-full hover:bg-blue-500 transition-colors transform hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </a>
                    <a href="https://instagram.com/ash_959_" target="_blank" class="w-12 h-12 flex items-center justify-center bg-gray-800 rounded-full hover:bg-pink-500 transition-colors transform hover:scale-110">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 border-t border-gray-800">
        <div class="container mx-auto px-6 text-center text-gray-400">
            <p>&copy; {{ date('Y') }} Portfolio.</p>
        </div>
    </footer>

</body>
</html>
