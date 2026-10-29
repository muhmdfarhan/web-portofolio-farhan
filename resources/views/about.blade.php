@extends('layouts.app')

@section('title', 'About — Muhamad Farhan')
@section('meta_description', 'Tentang Muhamad Farhan, Fresh Graduate Sistem Informasi yang fokus pada web development dan Laravel.')

@section('content')

{{-- PAGE HERO --}}
<section class="page-hero-v2">
    <div class="page-hero-v2__bg">
        <div class="phv2-blob phv2-blob--1"></div>
        <div class="phv2-blob phv2-blob--2"></div>
    </div>
    <div class="container">
        <div class="page-hero-v2__content">
            <span class="section-tag">Tentang Saya</span>
            <h1 class="page-hero-v2__title">Kenalan dengan <span class="text-accent">Muhamad Farhan</span></h1>
            <p class="page-hero-v2__sub">Fresh Graduate Sistem Informasi yang passionate di bidang Web Development &amp; Laravel.</p>
        </div>
    </div>
</section>

{{-- PROFILE SECTION --}}
<section class="about-profile section-lg">
    <div class="container">
        <div class="about-profile__grid">

            {{-- Kiri: Foto + Info Card --}}
            <div class="about-profile__left">
                <div class="about-photo-card">
                    <div class="about-photo-card__ring"></div>
                    <div class="about-photo-card__img">
                        <img src="{{ asset('images/farhan1.jpeg') }}"
                             alt="Foto {{ $profil['nama_lengkap'] }}"
                             onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($profil['nama_lengkap']) }}&size=400&background=6366f1&color=ffffff&bold=true'">
                    </div>
                    {{-- Status badge --}}
                    <div class="about-status-badge">
                        <span class="status-dot"></span> Open to Opportunities
                    </div>
                </div>

                {{-- Info Cards --}}
                <div class="about-info-list">
                    <div class="about-info-item">
                        <div class="about-info-icon" style="background:#eef2ff;color:#6366f1">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <span class="about-info-label">Nama Lengkap</span>
                            <span class="about-info-val">{{ $profil['nama_lengkap'] }}</span>
                        </div>
                    </div>
                    <div class="about-info-item">
                        <div class="about-info-icon" style="background:#f0fdf4;color:#16a34a">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <span class="about-info-label">Kota</span>
                            <span class="about-info-val">{{ $profil['kota'] }}</span>
                        </div>
                    </div>
                    <div class="about-info-item">
                        <div class="about-info-icon" style="background:#fff7ed;color:#ea580c">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <span class="about-info-label">Email</span>
                            <span class="about-info-val">{{ $profil['email'] }}</span>
                        </div>
                    </div>
                    <div class="about-info-item">
                        <div class="about-info-icon" style="background:#f0fdf4;color:#16a34a">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div>
                            <span class="about-info-label">WhatsApp</span>
                            <span class="about-info-val">+{{ $profil['whatsapp'] }}</span>
                        </div>
                    </div>
                    <div class="about-info-item">
                        <div class="about-info-icon" style="background:#eef2ff;color:#6366f1">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div>
                            <span class="about-info-label">Status</span>
                            <span class="about-info-val">Fresh Graduate</span>
                        </div>
                    </div>
                </div>

                {{-- Sosial Media --}}
                <div class="about-social">
                    <a href="{{ $profil['github'] }}" target="_blank" class="about-social-btn" style="background:#1a1a1a">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                    <a href="{{ $profil['linkedin'] }}" target="_blank" class="about-social-btn" style="background:#0077b5">
                        <i class="fab fa-linkedin-in"></i> LinkedIn
                    </a>
                    <a href="{{ $profil['instagram'] }}" target="_blank" class="about-social-btn" style="background:linear-gradient(45deg,#f09433,#dc2743,#bc1888)">
                        <i class="fab fa-instagram"></i> Instagram
                    </a>
                </div>

                <a href="{{ $profil['cv_url'] ?? '#' }}" {{ (!empty($profil['cv_url']) && (str_starts_with($profil['cv_url'], 'http://') || str_starts_with($profil['cv_url'], 'https://')) && !str_contains($profil['cv_url'], request()->getHost())) ? 'target="_blank" rel="noopener noreferrer"' : 'download' }} class="btn btn-primary btn-full" style="margin-top:16px">
                    <i class="fas fa-download"></i> Download CV
                </a>
            </div>

            {{-- Kanan: Deskripsi + Minat --}}
            <div class="about-profile__right">

                <div class="section-header" style="text-align:left;margin-bottom:32px">
                    <span class="section-tag">Profil</span>
                    <h2 class="section-heading" style="font-size:1.9rem">Siapa <span class="text-accent">Saya?</span></h2>
                </div>

                <p class="about-desc">{{ $profil['deskripsi'] }}</p>
                <p class="about-desc">
                    Saya percaya bahwa menjadi seorang developer yang baik bukan hanya soal menulis kode yang bekerja,
                    tetapi juga soal membuat kode yang mudah dipahami, dirawat, dan dikembangkan oleh orang lain.
                    Setiap hari saya berusaha membangun kebiasaan belajar yang konsisten.
                </p>
                <p class="about-desc">
                    Di luar coding, saya juga tertarik pada UI/UX design, sistem basis data, serta manajemen proyek teknologi informasi.
                    Saya terbuka untuk diskusi, kolaborasi, maupun kesempatan kerja (full-time / contract / remote) dan kerja sama proyek.
                </p>

                {{-- Stats Row --}}
                <div class="about-stats-row">
                    <div class="about-stat">
                        <span class="about-stat__num">3+</span>
                        <span class="about-stat__lbl">Proyek</span>
                    </div>
                    <div class="about-stat">
                        <span class="about-stat__num">2+</span>
                        <span class="about-stat__lbl">Tahun Belajar</span>
                    </div>
                    <div class="about-stat">
                        <span class="about-stat__num">9+</span>
                        <span class="about-stat__lbl">Teknologi</span>
                    </div>
                </div>

                {{-- Minat / Interest --}}
                <h3 class="about-subtitle">🎯 Minat &amp; Ketertarikan</h3>
                <div class="interest-grid">
                    @php
                        $minatIcons = [
                            'Web Development'       => ['icon'=>'fas fa-globe',       'bg'=>'#eef2ff', 'color'=>'#6366f1'],
                            'UI/UX Design'          => ['icon'=>'fas fa-paint-brush',  'bg'=>'#fdf4ff', 'color'=>'#a855f7'],
                            'Database Management'   => ['icon'=>'fas fa-database',     'bg'=>'#eff6ff', 'color'=>'#3b82f6'],
                            'Problem Solving'       => ['icon'=>'fas fa-lightbulb',    'bg'=>'#fff7ed', 'color'=>'#f59e0b'],
                        ];
                    @endphp
                    @foreach($profil['minat'] as $minat)
                    <div class="interest-card">
                        <div class="interest-card__icon"
                             style="background:{{ $minatIcons[$minat]['bg'] ?? '#eef2ff' }};color:{{ $minatIcons[$minat]['color'] ?? '#6366f1' }}">
                            <i class="{{ $minatIcons[$minat]['icon'] ?? 'fas fa-star' }}"></i>
                        </div>
                        <span>{{ $minat }}</span>
                    </div>
                    @endforeach
                </div>

                <div class="about-cta-row">
                    <a href="{{ route('projects') }}" class="btn btn-primary">
                        <i class="fas fa-folder-open"></i> Lihat Proyek
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-outline">
                        <i class="fas fa-envelope"></i> Hubungi Saya
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- NILAI / PRINSIP --}}
<section class="values-section section-lg" style="background:var(--bg-light)">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Nilai</span>
            <h2 class="section-heading">Prinsip yang saya <span class="text-accent">pegang</span></h2>
        </div>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-card__icon" style="background:linear-gradient(135deg,#6366f1,#8b5cf6)">
                    <i class="fas fa-code"></i>
                </div>
                <h4>Clean Code</h4>
                <p>Menulis kode yang rapi, terdokumentasi, dan mudah dipahami orang lain.</p>
            </div>
            <div class="value-card">
                <div class="value-card__icon" style="background:linear-gradient(135deg,#3b82f6,#06b6d4)">
                    <i class="fas fa-book-open"></i>
                </div>
                <h4>Terus Belajar</h4>
                <p>Teknologi terus berkembang, saya berkomitmen untuk selalu belajar hal baru setiap hari.</p>
            </div>
            <div class="value-card">
                <div class="value-card__icon" style="background:linear-gradient(135deg,#10b981,#34d399)">
                    <i class="fas fa-users"></i>
                </div>
                <h4>Kolaboratif</h4>
                <p>Terbuka untuk kerja sama tim, berbagi pengetahuan, dan belajar dari orang lain.</p>
            </div>
            <div class="value-card">
                <div class="value-card__icon" style="background:linear-gradient(135deg,#f59e0b,#f97316)">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h4>Detail Oriented</h4>
                <p>Memperhatikan setiap detail kecil untuk menghasilkan produk berkualitas tinggi.</p>
            </div>
        </div>
    </div>
</section>

@endsection
