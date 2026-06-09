<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berkah Digital - Solusi Digital Terbaik</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4361ee',
                        secondary: '#3f37c9',
                        accent: '#4895ef',
                        dark: '#1d3557',
                        light: '#f8f9fa'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .floating {
            animation: float 3s ease-in-out infinite;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="font-sans bg-gray-50 text-gray-800 overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-sm shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center">
                    <div class="bg-primary rounded-xl p-2 mr-3">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <span class="text-xl font-bold text-dark font-heading">Berkah<span class="text-primary">Digital</span></span>
                </div>
                <div class="hidden md:flex items-center space-x-10">
                    <a href="home.php" class="font-medium hover:text-primary transition">Beranda</a>
                    <a href="service.php" class="font-medium hover:text-primary transition">Layanan</a>
                    <a href="portfolio.php" class="font-medium hover:text-primary transition">Portfolio</a>
                    <a href="about.php" class="font-medium hover:text-primary transition">Tentang</a>
                    <a href="contact.php" class="font-medium hover:text-primary transition">Kontak</a>
                </div>
                <button class="md:hidden text-dark focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <a href="#contact" class="hidden md:block bg-primary hover:bg-secondary text-white font-medium py-2 px-6 rounded-lg transition duration-300 transform hover:scale-105">Konsultasi Gratis</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 md:pt-40 md:pb-32 bg-gradient-to-br from-indigo-50 to-blue-100 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute -top-20 -right-20 w-80 h-80 bg-primary rounded-full opacity-20"></div>
            <div class="absolute -bottom-32 -left-20 w-96 h-96 bg-secondary rounded-full opacity-10"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold font-heading text-dark mb-6 leading-tight">
                        Transformasi Digital untuk <span class="text-primary">Bisnis Anda</span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-8 max-w-lg">
                        Solusi teknologi terintegrasi yang membantu bisnis Anda berkembang di era digital dengan strategi yang tepat dan eksekusi yang presisi.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#contact" class="bg-primary hover:bg-secondary text-white font-medium py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105 text-center">
                            Mulai Konsultasi
                        </a>
                        <a href="#services" class="bg-white text-primary border border-primary hover:bg-gray-50 font-medium py-3 px-8 rounded-lg transition duration-300 text-center">
                            Pelajari Layanan
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center relative">
                    <div class="relative">
                        <div class="absolute -inset-4 bg-gradient-to-r from-primary to-secondary rounded-xl blur opacity-20"></div>
                        <div class="relative bg-white rounded-2xl shadow-2xl p-6 overflow-hidden">
                            <div class="grid grid-cols-3 gap-4 mb-6">
                                <div class="bg-blue-100 h-24 rounded-lg"></div>
                                <div class="bg-indigo-100 h-24 rounded-lg"></div>
                                <div class="bg-purple-100 h-24 rounded-lg"></div>
                                <div class="bg-pink-100 h-24 rounded-lg"></div>
                                <div class="bg-red-100 h-24 rounded-lg"></div>
                                <div class="bg-orange-100 h-24 rounded-lg"></div>
                            </div>
                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 bg-primary rounded-full mr-3"></div>
                                    <div>
                                        <p class="font-medium">Dashboard Analytics</p>
                                        <p class="text-xs text-gray-500">Real-time monitoring</p>
                                    </div>
                                </div>
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-yellow-400 rounded-full opacity-30 floating"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold font-heading text-dark mb-4">Layanan Unggulan Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Kami menyediakan solusi digital komprehensif yang dirancang khusus untuk memenuhi kebutuhan bisnis Anda di era modern
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="card-hover bg-white rounded-2xl p-8 shadow-md border border-gray-100">
                    <div class="bg-blue-100 w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-heading text-dark mb-3">Pengembangan Website</h3>
                    <p class="text-gray-600 mb-4">
                        Website profesional yang responsif, cepat, dan dioptimalkan untuk konversi dengan teknologi terkini
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Custom Web Development</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>E-commerce Solutions</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Progressive Web Apps</span>
                        </li>
                    </ul>
                    <a href="#contact" class="text-primary font-medium flex items-center hover:text-secondary transition">
                        Pelajari Lebih Lanjut
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
                
                <!-- Service Card 2 -->
                <div class="card-hover bg-white rounded-2xl p-8 shadow-md border border-gray-100">
                    <div class="bg-purple-100 w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 011-1h1a2 2 0 100-4H7a1 1 0 01-1-1V7a1 1 0 011-1h3a1 1 0 011-1V4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-heading text-dark mb-3">Strategi Digital Marketing</h3>
                    <p class="text-gray-600 mb-4">
                        Strategi pemasaran digital terukur untuk meningkatkan visibilitas, keterlibatan, dan konversi bisnis Anda
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>SEO & Konten Berkualitas</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Manajemen Media Sosial</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Iklan Berbayar (PPC)</span>
                        </li>
                    </ul>
                    <a href="#contact" class="text-primary font-medium flex items-center hover:text-secondary transition">
                        Pelajari Lebih Lanjut
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
                
                <!-- Service Card 3 -->
                <div class="card-hover bg-white rounded-2xl p-8 shadow-md border border-gray-100">
                    <div class="bg-amber-100 w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-heading text-dark mb-3">UI/UX Design</h3>
                    <p class="text-gray-600 mb-4">
                        Desain pengalaman pengguna yang intuitif dan menarik untuk meningkatkan kepuasan dan retensi pengguna
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Research & Analisis Pengguna</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Wireframing & Prototyping</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Design System Development</span>
                        </li>
                    </ul>
                    <a href="#contact" class="text-primary font-medium flex items-center hover:text-secondary transition">
                        Pelajari Lebih Lanjut
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 bg-gradient-to-br from-indigo-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold font-heading text-dark mb-4">Portfolio Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Proyek yang telah kami selesaikan dengan sukses untuk klien kami di berbagai industri
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Portfolio Item 1 -->
                <div class="card-hover bg-white rounded-2xl overflow-hidden shadow-md">
                    <div class="h-56 bg-gradient-to-r from-blue-400 to-indigo-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-blue-100 text-primary text-xs font-medium px-3 py-1 rounded-full">E-commerce</span>
                        </div>
                        <h3 class="text-xl font-bold font-heading text-dark mb-2">TokoFashion.id</h3>
                        <p class="text-gray-600 mb-4">
                            Pengembangan platform e-commerce untuk fashion lokal dengan integrasi pembayaran dan manajemen inventori
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">React</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">Node.js</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">MongoDB</span>
                        </div>
                        <a href="#" class="text-primary font-medium flex items-center hover:text-secondary transition">
                            Lihat Detail Proyek
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Portfolio Item 2 -->
                <div class="card-hover bg-white rounded-2xl overflow-hidden shadow-md">
                    <div class="h-56 bg-gradient-to-r from-amber-400 to-orange-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-amber-100 text-amber-700 text-xs font-medium px-3 py-1 rounded-full">Web App</span>
                        </div>
                        <h3 class="text-xl font-bold font-heading text-dark mb-2">Finansia App</h3>
                        <p class="text-gray-600 mb-4">
                            Aplikasi manajemen keuangan pribadi dengan fitur analisis pengeluaran dan perencanaan anggaran
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">Vue.js</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">Firebase</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">Tailwind CSS</span>
                        </div>
                        <a href="#" class="text-primary font-medium flex items-center hover:text-secondary transition">
                            Lihat Detail Proyek
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Portfolio Item 3 -->
                <div class="card-hover bg-white rounded-2xl overflow-hidden shadow-md">
                    <div class="h-56 bg-gradient-to-r from-emerald-400 to-cyan-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-emerald-100 text-emerald-700 text-xs font-medium px-3 py-1 rounded-full">Mobile App</span>
                        </div>
                        <h3 class="text-xl font-bold font-heading text-dark mb-2">SehatQ</h3>
                        <p class="text-gray-600 mb-4">
                            Aplikasi kesehatan dengan fitur konsultasi dokter online dan manajemen catatan kesehatan pribadi
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">React Native</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">GraphQL</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">AWS</span>
                        </div>
                        <a href="#" class="text-primary font-medium flex items-center hover:text-secondary transition">
                            Lihat Detail Proyek
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center text-primary font-medium hover:text-secondary transition">
                    Lihat Semua Portfolio
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 gradient-bg">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-8 md:p-12 border border-white/20">
                <h2 class="text-3xl md:text-4xl font-bold font-heading text-white mb-6">
                    Siap Mengembangkan Bisnis Digital Anda?
                </h2>
                <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
                    Jadwalkan konsultasi gratis hari ini dan temukan solusi terbaik untuk kebutuhan digital bisnis Anda
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#contact" class="bg-white text-primary font-bold py-4 px-8 rounded-xl hover:bg-gray-100 transition duration-300 transform hover:scale-105">
                        Jadwalkan Konsultasi
                    </a>
                    <a href="#services" class="bg-transparent border-2 border-white text-white font-bold py-4 px-8 rounded-xl hover:bg-white/10 transition duration-300">
                        Pelajari Layanan Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold font-heading text-dark mb-6">Hubungi Kami</h2>
                    <p class="text-gray-600 mb-8 max-w-lg">
                        Tim kami siap membantu Anda. Isi formulir di bawah atau hubungi kami langsung melalui informasi kontak yang tersedia.
                    </p>
                    
                    <div class="space-y-6 mb-10">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-lg mr-4">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-dark mb-1">Telepon</h4>
                                <p class="text-gray-600">+62 812-3456-7890 (WhatsApp)</p>
                                <p class="text-gray-600">+62 21-1234-5678</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-lg mr-4">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-dark mb-1">Email</h4>
                                <p class="text-gray-600">info@berkahdigital.com</p>
                                <p class="text-gray-600">sales@berkahdigital.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-lg mr-4">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-dark mb-1">Alamat</h4>
                                <p class="text-gray-600">Gedung Digital Hub, Lantai 12</p>
                                <p class="text-gray-600">Jl. Sudirman No. 123, Jakarta Pusat</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex space-x-4">
                        <a href="#" class="bg-blue-100 text-primary w-12 h-12 rounded-full flex items-center justify-center hover:bg-blue-200 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="bg-blue-100 text-primary w-12 h-12 rounded-full flex items-center justify-center hover:bg-blue-200 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                        <a href="#" class="bg-blue-100 text-primary w-12 h-12 rounded-full flex items-center justify-center hover:bg-blue-200 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-2xl p-8 shadow-sm">
                    <form>
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 mb-2 font-medium">Nama Lengkap</label>
                            <input type="text" id="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary focus:border-transparent transition" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 mb-2 font-medium">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary focus:border-transparent transition" placeholder="Masukkan email Anda">
                        </div>
                        <div class="mb-6">
                            <label for="service" class="block text-gray-700 mb-2 font-medium">Layanan yang Dibutuhkan</label>
                            <select id="service" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary focus:border-transparent transition">
                                <option>Pilih Layanan</option>
                                <option>Pengembangan Website</option>
                                <option>Digital Marketing</option>
                                <option>UI/UX Design</option>
                                <option>Aplikasi Mobile</option>
                                <option>Konsultasi Digital</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 mb-2 font-medium">Pesan Anda</label>
                            <textarea id="message" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary focus:border-transparent transition" placeholder="Tulis pesan Anda di sini"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-primary hover:bg-secondary text-white font-bold py-4 px-6 rounded-lg transition duration-300 transform hover:scale-[1.02]">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="bg-primary rounded-xl p-2 mr-3">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <span class="text-xl font-bold font-heading text-white">Berkah<span class="text-primary">Digital</span></span>
                    </div>
                    <p class="text-blue-200 mb-4 max-w-xs">
                        Mitra terpercaya untuk transformasi digital bisnis Anda dengan solusi inovatif dan berkelanjutan.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-gray-800 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-primary transition">
                            <span class="sr-only">Facebook</span>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="bg-gray-800 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-primary transition">
                            <span class="sr-only">Twitter</span>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                        <a href="#" class="bg-gray-800 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-primary transition">
                            <span class="sr-only">Instagram</span>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.786.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.786.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.023.047 1.351.058 3.807.058h.468c2.456 0 2.784-.011 3.807-.058.975-.045 1.504-.207 1.857-.344.467-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.047-1.023.058-1.351.058-3.807v-.468c0-2.456-.011-2.784-.058-3.807-.045-.975-.207-1.504-.344-1.857a4.197 4.197 0 00-.748-1.15 4.197 4.197 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.894a5.002 5.002 0 00-4.69 5.106A5.002 5.002 0 0012 17.106a5.002 5.002 0 004.69-5.106A5.002 5.002 0 0012 6.894zm0 1.752a3.25 3.25 0 110 6.5 3.25 3.25 0 010-6.5z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold font-heading text-white mb-6">Layanan</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Pengembangan Website</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Digital Marketing</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition">UI/UX Design</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Aplikasi Mobile</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Konsultasi Digital</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold font-heading text-white mb-6">Perusahaan</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Tim Kami</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Karir</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Blog</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Testimoni</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold font-heading text-white mb-6">Kontak</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="text-blue-200">Gedung Digital Hub, Lantai 12<br>Jl. Sudirman No. 123, Jakarta</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span class="text-blue-200">+62 812-3456-7890<br>+62 21-1234-5678</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-blue-200">info@berkahdigital.com<br>sales@berkahdigital.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-blue-200 text-sm">
                <p>&copy; 2025 Berkah Digital. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Simple scroll animation for navigation
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('nav a[href^="#"]');
            const mobileMenuButton = document.querySelector('nav button');
            
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Mobile menu toggle
            mobileMenuButton.addEventListener('click', function() {
                const menu = document.createElement('div');
                menu.className = 'fixed inset-0 bg-white z-50 flex flex-col p-6';
                menu.innerHTML = `
                    <div class="flex justify-between items-center mb-8">
                        <span class="text-xl font-bold font-heading text-dark">Berkah<span class="text-primary">Digital</span></span>
                        <button class="close-menu text-dark text-2xl">&times;</button>
                    </div>
                    <div class="flex flex-col space-y-6 mt-12">
                        <a href="#home" class="text-2xl font-medium hover:text-primary transition">Beranda</a>
                        <a href="#services" class="text-2xl font-medium hover:text-primary transition">Layanan</a>
                        <a href="#portfolio" class="text-2xl font-medium hover:text-primary transition">Portfolio</a>
                        <a href="#about" class="text-2xl font-medium hover:text-primary transition">Tentang</a>
                        <a href="#contact" class="text-2xl font-medium hover:text-primary transition">Kontak</a>
                        <a href="#contact" class="bg-primary text-white font-medium py-3 px-6 rounded-lg inline-block text-center mt-4">Konsultasi Gratis</a>
                    </div>
                `;
                
                document.body.appendChild(menu);
                
                document.querySelector('.close-menu').addEventListener('click', function() {
                    menu.remove();
                });
            });
            
            // Close mobile menu when clicking outside
            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('close-menu')) {
                    document.querySelector('.mobile-menu')?.remove();
                }
            });
            
            // Add scroll animation for cards
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            document.querySelectorAll('.card-hover').forEach(card => {
                card.style.opacity = 0;
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(card);
            });
        });
    </script>
</body>
</html>