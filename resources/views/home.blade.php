@extends('layouts.app')

@section('title', 'Muhamad Farhan — Fullstack Developer | Web Developer')
@section('meta_description', 'Portofolio Muhamad Farhan, Information Systems Student dan FullStact Developer.')

@section('content')

{{-- ============================================================
     SECTION 1: HERO
     ============================================================ --}}
<section class="hero" id="hero">

    <div class="hero-bg-decor">
        <div class="decor-circle decor-1"></div>
        <div class="decor-circle decor-2"></div>
        <div class="decor-circle decor-3"></div>
    </div>

    <div class="container">
        <div class="hero-content">

            {{-- KIRI: Teks Utama --}}
            <div class="hero-text">

                <div class="hero-available">
                    <span class="available-dot"></span>
                    <span data-i18n="hero.available">Available for Freelance &amp; Collaboration</span>
                </div>

                <p class="hero-greeting" data-i18n="hero.greeting">👋 Halo, Saya</p>

                <h1 class="hero-name">{{ $profil['nama_lengkap'] }}</h1>

                <div class="hero-typewriter">
                    <span class="typewriter-prefix" data-i18n="hero.prefix">Seorang </span>
                    <span class="typewriter-text" id="typewriter"></span>
                    <span class="typewriter-cursor">|</span>
                </div>

                <p class="hero-description" data-i18n="hero.desc">{{ $profil['deskripsi'] }}</p>

                <div class="hero-stack">
                    <span class="stack-label" data-i18n="hero.stack">Tech Stack:</span>
                    <div class="stack-items">
                        <span class="stack-item" title="Laravel"><i class="fab fa-laravel"></i></span>
                        <span class="stack-item" title="PHP"><i class="fab fa-php"></i></span>
                        <span class="stack-item" title="HTML5"><i class="fab fa-html5"></i></span>
                        <span class="stack-item" title="CSS3"><i class="fab fa-css3-alt"></i></span>
                        <span class="stack-item" title="JavaScript"><i class="fab fa-js"></i></span>
                        <span class="stack-item" title="Git"><i class="fab fa-git-alt"></i></span>
                    </div>
                </div>

                <div class="hero-buttons">
                    <a href="{{ route('projects') }}" class="btn btn-primary btn-hero">
                        <i class="fas fa-rocket"></i> <span data-i18n="hero.btn_projects">Lihat Proyek Saya</span>
                    </a>
                    <a href="{{ $profil['cv_url'] ?? '#' }}" {{ (!empty($profil['cv_url']) && (str_starts_with($profil['cv_url'], 'http://') || str_starts_with($profil['cv_url'], 'https://')) && !str_contains($profil['cv_url'], request()->getHost())) ? 'target="_blank" rel="noopener noreferrer"' : 'download' }} class="btn btn-outline btn-hero">
                        <i class="fas fa-download"></i> <span data-i18n="hero.btn_cv">Download CV</span>
                    </a>
                </div>

                <div class="hero-social-wrap">
                    <span class="social-label" data-i18n="hero.social">Temukan saya di:</span>
                    <div class="hero-social">
                        <a href="{{ $profil['github'] }}" target="_blank" rel="noopener" class="social-icon social-github" aria-label="GitHub">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="{{ $profil['linkedin'] }}" target="_blank" rel="noopener" class="social-icon social-linkedin" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="{{ $profil['instagram'] }}" target="_blank" rel="noopener" class="social-icon social-instagram" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://wa.me/{{ $profil['whatsapp'] }}" target="_blank" rel="noopener" class="social-icon social-whatsapp" aria-label="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- KANAN: Foto Profil --}}
            <div class="hero-image">
                <div class="profile-ring-outer"></div>
                <div class="profile-ring-inner"></div>

                <div class="profile-frame">
                    <img src="{{ asset('images/Farhan.jpeg') }}"
                         alt="Foto Profil {{ $profil['nama_lengkap'] }}"
                         class="profile-photo"
                         onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($profil['nama_lengkap']) }}&size=400&background=6366f1&color=ffffff&bold=true&font-size=0.33'">
                </div>

                <div class="float-badge float-badge--top">
                    <span class="float-badge-icon">💻</span>
                    <div>
                        <span class="float-badge-title">Full-Stack</span>
                        <span class="float-badge-sub">Developer</span>
                    </div>
                </div>

                <div class="float-badge float-badge--bottom">
                    <span class="float-badge-icon">🎓</span>
                    <div>
                        <span class="float-badge-title" data-i18n="hero.float_title">Sistem</span>
                        <span class="float-badge-sub" data-i18n="hero.float_sub">Informasi</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="scroll-indicator">
            <a href="#stats" aria-label="Scroll ke bawah">
                <div class="scroll-mouse">
                    <div class="scroll-wheel"></div>
                </div>
                <span>Scroll</span>
            </a>
        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 2: STATS
     ============================================================ --}}
<section class="stats-section" id="stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon"><i class="fas fa-folder-open"></i></div>
                <span class="stat-number" data-target="4">0</span>
                <span class="stat-plus">+</span>
                <span class="stat-label" data-i18n="stats.p1">Proyek Selesai</span>
            </div>
            <div class="stat-card">
                <div class="stat-icon"><i class="fas fa-code"></i></div>
                <span class="stat-number" data-target="9">0</span>
                <span class="stat-plus">+</span>
                <span class="stat-label" data-i18n="stats.p2">Teknologi Dikuasai</span>
            </div>
            <div class="stat-card">
                <div class="stat-icon"><i class="fas fa-clock"></i></div>
                <span class="stat-number" data-target="2">0</span>
                <span class="stat-plus">+</span>
                <span class="stat-label" data-i18n="stats.p3">Tahun Belajar</span>
            </div>
            <div class="stat-card">
                <div class="stat-icon"><i class="fas fa-star"></i></div>
                <span class="stat-number" data-target="100">0</span>
                <span class="stat-plus">%</span>
                <span class="stat-label" data-i18n="stats.p4">Semangat Belajar</span>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 3: TENTANG SAYA (Preview)
     ============================================================ --}}
<section class="about-preview section-lg" id="about-preview">
    <div class="container">

        <div class="section-header">
            <span class="section-tag" data-i18n="about.tag">Tentang Saya</span>
            <h2 class="section-heading"><span data-i18n="about.heading">Kenapa memilih</span> <span class="text-accent" data-i18n="about.accent">saya?</span></h2>
            <p class="section-desc" data-i18n="about.sub">Saya adalah developer yang tidak hanya menulis kode, tetapi membangun solusi.</p>
        </div>

        <div class="about-preview-grid">
            <div class="about-preview-text">
                <p data-i18n="about.p1">{{ $profil['deskripsi'] }}</p>
                <p style="margin-top: 16px; color: var(--text-muted); line-height: 1.8;" data-i18n="about.p2">
                    Saya percaya bahwa kombinasi antara kemampuan teknis yang kuat dan pemahaman
                    terhadap kebutuhan pengguna adalah kunci membuat produk digital yang baik.
                </p>

                <div class="about-preview-facts">
                    <div class="fact-item">
                        <i class="fas fa-check-circle"></i>
                        <span data-i18n="about.fact1">Kode bersih dan terstruktur</span>
                    </div>
                    <div class="fact-item">
                        <i class="fas fa-check-circle"></i>
                        <span data-i18n="about.fact2">Detail oriented &amp; problem solver</span>
                    </div>
                    <div class="fact-item">
                        <i class="fas fa-check-circle"></i>
                        <span data-i18n="about.fact3">Fast learner &amp; kolaboratif</span>
                    </div>
                    <div class="fact-item">
                        <i class="fas fa-check-circle"></i>
                        <span data-i18n="about.fact4">Berpengalaman dengan Laravel &amp; MySQL</span>
                    </div>
                </div>

                <a href="{{ route('about') }}" class="btn btn-primary" style="margin-top: 28px;">
                    <i class="fas fa-user"></i> <span data-i18n="about.btn">Selengkapnya Tentang Saya</span>
                </a>
            </div>

            <div class="about-preview-cards">
                <div class="mini-card">
                    <div class="mini-card-icon" style="background: #eef2ff;">
                        <i class="fas fa-graduation-cap" style="color: #6366f1;"></i>
                    </div>
                    <div>
                        <h4 data-i18n="about.card1_t">Pendidikan</h4>
                        <p data-i18n="about.card1_s">S1 Sistem Informasi</p>
                    </div>
                </div>
                <div class="mini-card">
                    <div class="mini-card-icon" style="background: #f0fdf4;">
                        <i class="fas fa-map-marker-alt" style="color: #16a34a;"></i>
                    </div>
                    <div>
                        <h4 data-i18n="about.card2_t">Lokasi</h4>
                        <p>{{ $profil['kota'] }}</p>
                    </div>
                </div>
                <div class="mini-card">
                    <div class="mini-card-icon" style="background: #fff7ed;">
                        <i class="fas fa-briefcase" style="color: #ea580c;"></i>
                    </div>
                    <div>
                        <h4 data-i18n="about.card3_t">Pengalaman</h4>
                        <p data-i18n="about.card3_s">Magang &amp; Freelance</p>
                    </div>
                </div>
                <div class="mini-card">
                    <div class="mini-card-icon" style="background: #fdf4ff;">
                        <i class="fas fa-heart" style="color: #a855f7;"></i>
                    </div>
                    <div>
                        <h4 data-i18n="about.card4_t">Passion</h4>
                        <p>Web Development</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 4: SERVICES
     ============================================================ --}}
<section class="services-section section-lg" id="services">
    <div class="container">

        <div class="section-header">
            <span class="section-tag" data-i18n="services.tag">Layanan</span>
            <h2 class="section-heading"><span data-i18n="services.heading">Apa yang bisa saya</span> <span class="text-accent" data-i18n="services.accent">lakukan?</span></h2>
            <p class="section-desc" data-i18n="services.sub">Saya siap membantu Anda membangun solusi digital yang tepat sasaran.</p>
        </div>

        <div class="services-grid">

            <div class="service-card">
                <div class="service-icon service-icon--purple">
                    <i class="fas fa-globe"></i>
                </div>
                <h3>Web Development</h3>
                <p data-i18n="services.s1_desc">Membangun website dinamis dan responsif menggunakan Laravel, PHP, HTML, dan CSS yang bersih dan terstruktur.</p>
                <div class="service-tags">
                    <span>Laravel</span><span>PHP</span><span>MySQL</span>
                </div>
            </div>

            <div class="service-card">
                <div class="service-icon service-icon--blue">
                    <i class="fas fa-database"></i>
                </div>
                <h3 data-i18n="services.s2_title">Manajemen Database</h3>
                <p data-i18n="services.s2_desc">Merancang struktur database yang efisien dengan MySQL, relasi antar tabel, dan query yang optimal.</p>
                <div class="service-tags">
                    <span>MySQL</span><span>Query</span><span>Migration</span>
                </div>
            </div>

            <div class="service-card">
                <div class="service-icon service-icon--green">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3>UI Design</h3>
                <p data-i18n="services.s3_desc">Membuat tampilan antarmuka yang bersih, modern, dan nyaman digunakan oleh pengguna di berbagai perangkat.</p>
                <div class="service-tags">
                    <span>HTML</span><span>CSS</span><span>Responsif</span>
                </div>
            </div>

            <div class="service-card">
                <div class="service-icon service-icon--orange">
                    <i class="fas fa-cogs"></i>
                </div>
                <h3 data-i18n="services.s4_title">Sistem Informasi</h3>
                <p data-i18n="services.s4_desc">Mengembangkan sistem informasi berbasis web seperti sistem pengelolaan data, laporan, dan monitoring.</p>
                <div class="service-tags">
                    <span>CRUD</span><span>Laporan</span><span>Dashboard</span>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 5: SKILL PREVIEW
     ============================================================ --}}
<section class="skills-preview section-lg" id="skills-preview">
    <div class="container">

        <div class="section-header">
            <span class="section-tag" data-i18n="skills.tag">Kemampuan</span>
            <h2 class="section-heading"><span data-i18n="skills.heading">Teknologi yang saya</span> <span class="text-accent" data-i18n="skills.accent">kuasai</span></h2>
            <p class="section-desc" data-i18n="skills.sub">Beberapa teknologi yang saya gunakan dalam setiap proyek.</p>
        </div>

        <div class="skills-preview-grid">
            @php
                $skillsPreview = [
                    ['nama' => 'PHP',        'nilai' => 80, 'icon' => 'fab fa-php',        'color' => '#7b68ee'],
                    ['nama' => 'Laravel',    'nilai' => 75, 'icon' => 'fab fa-laravel',    'color' => '#ff2d20'],
                    ['nama' => 'HTML5',      'nilai' => 90, 'icon' => 'fab fa-html5',      'color' => '#e34f26'],
                    ['nama' => 'CSS3',       'nilai' => 80, 'icon' => 'fab fa-css3-alt',   'color' => '#264de4'],
                    ['nama' => 'JavaScript', 'nilai' => 65, 'icon' => 'fab fa-js',         'color' => '#f7df1e'],
                    ['nama' => 'Git',        'nilai' => 75, 'icon' => 'fab fa-git-alt',    'color' => '#f05032'],
                    ['nama' => 'MySQL',      'nilai' => 70, 'icon' => 'fas fa-database',   'color' => '#00758f'],
                    ['nama' => 'UI/UX',      'nilai' => 65, 'icon' => 'fas fa-paint-brush','color' => '#a855f7'],
                ];
            @endphp

            @foreach($skillsPreview as $skill)
            <div class="skill-pill-card">
                <div class="skill-pill-icon" style="color: {{ $skill['color'] }}; background: {{ $skill['color'] }}18;">
                    <i class="{{ $skill['icon'] }}"></i>
                </div>
                <div class="skill-pill-info">
                    <div class="skill-pill-header">
                        <span class="skill-pill-name">{{ $skill['nama'] }}</span>
                        <span class="skill-pill-pct">{{ $skill['nilai'] }}%</span>
                    </div>
                    <div class="skill-pill-bar-wrap">
                        <div class="skill-pill-bar" data-width="{{ $skill['nilai'] }}"
                             style="background: {{ $skill['color'] }};"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ route('skills') }}" class="btn btn-outline">
                <i class="fas fa-layer-group"></i> <span data-i18n="skills.all_btn">Lihat Semua Skills</span>
            </a>
        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 6: FEATURED PROJECTS
     ============================================================ --}}
<section class="featured-projects section-lg" id="featured-projects">
    <div class="container">

        <div class="section-header">
            <span class="section-tag" data-i18n="projects.tag">Portfolio</span>
            <h2 class="section-heading"><span data-i18n="projects.heading">Proyek</span> <span class="text-accent" data-i18n="projects.accent">terbaru saya</span></h2>
            <p class="section-desc" data-i18n="projects.sub">Beberapa karya terbaik yang pernah saya kerjakan.</p>
        </div>

        <div class="fp-grid">

            <div class="fp-card">
                <div class="fp-image">
                    <img src="{{ asset('images/project-1.jpg') }}" alt="Sistem Hosting"
                          onerror="this.parentElement.innerHTML='<div class=\'fp-placeholder\'><i class=\'fas fa-server\'></i></div>'">
                    <div class="fp-overlay">
                        <a href="https://github.com/muhmdfarhan/hosting-management" target="_blank" rel="noopener"
                           class="fp-overlay-btn"><i class="fab fa-github"></i> Repository</a>
                    </div>
                </div>
                <div class="fp-content">
                    <div class="fp-meta">
                        <span class="fp-badge fp-badge--done" data-i18n="projects.done">✅ Selesai</span>
                        <span class="fp-year">2024</span>
                    </div>
                    <h3 data-i18n="projects.p1_title">HostBill — Pengelolaan &amp; Penagihan Hosting</h3>
                    <p data-i18n="projects.p1_desc">Sistem enterprise manajemen hosting, domain, dan penagihan invoice otomatis yang dikembangkan untuk CV. Mediatama Web Indonesia.</p>
                    <div class="fp-tech">
                        <span>Laravel 12</span><span>MySQL</span><span>Blade</span><span>PHP 8.2</span><span>Tailwind</span>
                    </div>
                </div>
            </div>

            <div class="fp-card">
                <div class="fp-image">
                    <img src="{{ asset('images/project-4.jpg') }}" alt="Kasir POS"
                          onerror="this.parentElement.innerHTML='<div class=\'fp-placeholder\'><i class=\'fas fa-cash-register\'></i></div>'">
                    <div class="fp-overlay">
                        <a href="https://github.com/muhmdfarhan/kasir-pos" target="_blank" rel="noopener"
                           class="fp-overlay-btn"><i class="fab fa-github"></i> Repository</a>
                    </div>
                </div>
                <div class="fp-content">
                    <div class="fp-meta">
                        <span class="fp-badge fp-badge--done" data-i18n="projects.done">✅ Selesai</span>
                        <span class="fp-year">2024</span>
                    </div>
                    <h3 data-i18n="projects.p4_title">Kasir POS — Sistem Kasir &amp; Toko Digital</h3>
                    <p data-i18n="projects.p4_desc">Aplikasi POS multi-role terintegrasi kasir barcode, multi-payment QRIS/Tunai, manajemen stok, dan laporan laba rugi.</p>
                    <div class="fp-tech">
                        <span>Laravel 12</span><span>MySQL</span><span>Blade</span><span>Tailwind</span><span>Chart.js</span>
                    </div>
                </div>
            </div>

            <div class="fp-card">
                <div class="fp-image">
                    <img src="{{ asset('images/project-2.jpg') }}" alt="Host Reminder"
                          onerror="this.parentElement.innerHTML='<div class=\'fp-placeholder\'><i class=\'fas fa-bell\'></i></div>'">
                    <div class="fp-overlay">
                        <a href="https://github.com/muhmdfarhan/host-reminder" target="_blank" rel="noopener"
                           class="fp-overlay-btn"><i class="fab fa-github"></i> Repository</a>
                    </div>
                </div>
                <div class="fp-content">
                    <div class="fp-meta">
                        <span class="fp-badge fp-badge--done" data-i18n="projects.done">✅ Selesai</span>
                        <span class="fp-year">2024</span>
                    </div>
                    <h3 data-i18n="projects.p2_title">Host Reminder — Pemantau Jatuh Tempo Hosting &amp; Domain</h3>
                    <p data-i18n="projects.p2_desc">Aplikasi monitoring masa aktif domain dan server hosting dengan indikator status mendesak dan notifikasi WhatsApp langsung.</p>
                    <div class="fp-tech">
                        <span>Laravel</span><span>MySQL</span><span>PHP 8.2</span><span>WhatsApp API</span>
                    </div>
                </div>
            </div>

            <div class="fp-card">
                <div class="fp-image">
                    <img src="{{ asset('images/project-3.jpg') }}" alt="Portofolio"
                          onerror="this.parentElement.innerHTML='<div class=\'fp-placeholder\'><i class=\'fas fa-user-circle\'></i></div>'">
                    <div class="fp-overlay">
                        <a href="https://github.com/muhmdfarhan/web-portofolio-farhan" target="_blank" rel="noopener"
                           class="fp-overlay-btn"><i class="fab fa-github"></i> Repository</a>
                    </div>
                </div>
                <div class="fp-content">
                    <div class="fp-meta">
                        <span class="fp-badge fp-badge--done" data-i18n="projects.done">✅ Selesai</span>
                        <span class="fp-year">2024</span>
                    </div>
                    <h3 data-i18n="projects.p3_title">Website Portofolio Interaktif &amp; Personal</h3>
                    <p data-i18n="projects.p3_desc">Website portofolio modern berstandar industri IT untuk memperkenalkan diri dan menampilkan karya.</p>
                    <div class="fp-tech">
                        <span>Laravel 12</span><span>Blade</span><span>CSS3</span>
                    </div>
                </div>
            </div>

        </div>

        <div style="text-align: center; margin-top: 48px;">
            <a href="{{ route('projects') }}" class="btn btn-primary">
                <i class="fas fa-folder-open"></i> <span data-i18n="projects.all_btn">Lihat Semua Proyek</span>
            </a>
        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 7: TIMELINE MINI
     ============================================================ --}}
<section class="journey-section section-lg">
    <div class="container">
        <div class="section-header">
            <span class="section-tag" data-i18n="journey.tag">Perjalanan</span>
            <h2 class="section-heading"><span data-i18n="journey.heading">Bagaimana saya</span> <span class="text-accent" data-i18n="journey.accent">berkembang</span></h2>
        </div>

        <div class="journey-timeline">
            <div class="journey-item">
                <div class="journey-dot">🏫</div>
                <div class="journey-year">2019–2022</div>
                <div class="journey-card">
                    <h4 data-i18n="journey.j1_title">SMA / SMK</h4>
                    <p data-i18n="journey.j1_desc">Mulai mengenal dunia komputer dan pemrograman dasar.</p>
                </div>
            </div>
            <div class="journey-item">
                <div class="journey-dot">🎓</div>
                <div class="journey-year">2022</div>
                <div class="journey-card">
                    <h4 data-i18n="journey.j2_title">Masuk Kuliah</h4>
                    <p data-i18n="journey.j2_desc">Memulai S1 Sistem Informasi, belajar Laravel &amp; web development secara serius.</p>
                </div>
            </div>
            <div class="journey-item">
                <div class="journey-dot">💼</div>
                <div class="journey-year">2024</div>
                <div class="journey-card">
                    <h4 data-i18n="journey.j3_title">Magang / PKL</h4>
                    <p data-i18n="journey.j3_desc">Pengalaman nyata membangun sistem informasi di dunia kerja.</p>
                </div>
            </div>
            <div class="journey-item">
                <div class="journey-dot">🚀</div>
                <div class="journey-year">Now</div>
                <div class="journey-card journey-card--active">
                    <h4 data-i18n="journey.j4_title">Terus Berkembang</h4>
                    <p data-i18n="journey.j4_desc">Aktif belajar, membangun proyek, dan siap berkolaborasi!</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 8: CTA
     ============================================================ --}}
<section class="cta-section">
    <div class="container">
        <div class="cta-box">
            <div class="cta-box-decor">
                <div class="cta-decor-1"></div>
                <div class="cta-decor-2"></div>
            </div>
            <div class="cta-box-content">
                <span class="cta-tag" data-i18n="cta.tag">👋 Siap Berkolaborasi?</span>
                <h2><span data-i18n="cta.heading">Mari Wujudkan Ide Anda</span> <span class="text-accent-light" data-i18n="cta.accent">Bersama Saya</span></h2>
                <p data-i18n="cta.desc">Punya proyek yang ingin dikerjakan? Butuh developer untuk tim Anda? Saya siap mendengar dan berdiskusi!</p>
                <div class="cta-btns">
                    <a href="{{ route('contact') }}" class="btn btn-white">
                        <i class="fas fa-envelope"></i> <span data-i18n="cta.btn_contact">Hubungi Saya</span>
                    </a>
                    <a href="https://wa.me/{{ $profil['whatsapp'] }}?text=Halo%20Farhan%2C%20saya%20ingin%20berkolaborasi!"
                       target="_blank" rel="noopener" class="btn btn-whatsapp-outline">
                        <i class="fab fa-whatsapp"></i> Chat WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
/* ── Counter Animation ─────────────────────────────── */
const counters = document.querySelectorAll('.stat-number[data-target]');
const counterObs = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        const el = entry.target, target = +el.dataset.target;
        let current = 0;
        const step = Math.ceil(target / 50);
        const timer = setInterval(() => {
            current = Math.min(current + step, target);
            el.textContent = current;
            if (current >= target) clearInterval(timer);
        }, 30);
        counterObs.unobserve(el);
    });
}, { threshold: 0.5 });
counters.forEach(c => counterObs.observe(c));

/* ── Skill Bar Animation (preview) ────────────────── */
const pillBars = document.querySelectorAll('.skill-pill-bar');
const pillObs = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.width = entry.target.dataset.width + '%';
            pillObs.unobserve(entry.target);
        }
    });
}, { threshold: 0.2 });
pillBars.forEach(b => { b.style.width = '0'; b.style.transition = 'width 1.2s ease'; pillObs.observe(b); });
</script>
@endpush
