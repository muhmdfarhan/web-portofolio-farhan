@extends('layouts.app')

@section('title', 'Education — Muhamad Farhan')
@section('meta_description', 'Riwayat pendidikan Muhamad Farhan, Fresh Graduate S1 Sistem Informasi Universitas Metamedia.')

@section('content')

{{-- PAGE HERO --}}
<section class="page-hero-v2">
    <div class="page-hero-v2__bg">
        <div class="phv2-blob phv2-blob--1"></div>
        <div class="phv2-blob phv2-blob--2"></div>
    </div>
    <div class="container">
        <div class="page-hero-v2__content">
            <span class="section-tag"><i class="fas fa-graduation-cap"></i> Akademik &amp; Kredensial</span>
            <h1 class="page-hero-v2__title">Pendidikan, <span class="text-accent">Sertifikat</span> &amp; Prestasi</h1>
            <p class="page-hero-v2__sub">Perjalanan akademik, sertifikasi kompetensi keahlian, dan penghargaan yang telah saya raih untuk memperkuat kapabilitas profesional.</p>
            <div class="edu-quick-nav">
                <a href="#pendidikan-formal" class="edu-nav-pill"><i class="fas fa-school"></i> Pendidikan Formal</a>
                <a href="#sertifikat" class="edu-nav-pill"><i class="fas fa-certificate"></i> Sertifikat Kompetensi</a>
                <a href="#pencapaian" class="edu-nav-pill"><i class="fas fa-trophy"></i> Prestasi &amp; Penghargaan</a>
            </div>
        </div>
    </div>
</section>

{{-- EDUCATION LIST --}}
<section class="edu-section section-lg" id="pendidikan-formal">
    <div class="container">
        <div class="section-header" style="margin-bottom: 40px;">
            <span class="section-tag"><i class="fas fa-university"></i> Pendidikan Formal</span>
            <h2 class="section-heading">Riwayat <span class="text-accent">Akademik</span></h2>
            <p class="section-desc">Institusi pendidikan formal yang membentuk pola pikir terstruktur dan fondasi ilmu rekayasa perangkat lunak.</p>
        </div>
        <div class="edu-list">
            @foreach($educations as $index => $edu)
            <div class="edu-card-v2">

                {{-- Nomor --}}
                <div class="edu-card-v2__num">{{ str_pad(count($educations) - $index, 2, '0', STR_PAD_LEFT) }}</div>

                {{-- Icon --}}
                <div class="edu-card-v2__icon">{{ $edu['icon'] }}</div>

                {{-- Konten --}}
                <div class="edu-card-v2__content">
                    <div class="edu-card-v2__header">
                        <div>
                            <span class="edu-jenjang-badge">{{ $edu['jenjang'] }}</span>
                            <h3 class="edu-card-v2__institusi">{{ $edu['institusi'] }}</h3>
                            <p class="edu-card-v2__jurusan">
                                <i class="fas fa-book"></i> {{ $edu['jurusan'] }}
                            </p>
                        </div>
                        <div class="edu-card-v2__period">
                            <i class="fas fa-calendar-alt"></i>
                            {{ $edu['tahun_masuk'] }} – {{ $edu['tahun_lulus'] }}
                        </div>
                    </div>
                    <p class="edu-card-v2__desc">{{ $edu['deskripsi'] }}</p>
                </div>

            </div>
            @endforeach
        </div>

        {{-- BAGIAN 1: SERTIFIKAT KOMPETENSI & KURSUS --}}
        <div class="edu-cert-section" id="sertifikat">
            <div class="section-header">
                <span class="section-tag"><i class="fas fa-certificate"></i> Lisensi &amp; Sertifikasi</span>
                <h2 class="section-heading">Sertifikat <span class="text-accent">Kompetensi &amp; Kredensial</span></h2>
                <p class="section-desc">Koleksi sertifikasi resmi nasional dan internasional berstandar industri yang memvalidasi kompetensi dalam rekayasa perangkat lunak, arsitektur SOLID, basis data, jaringan, dan AI.</p>
            </div>

            {{-- KATEGORI FILTER INTERAKTIF --}}
            <div class="cert-filter-bar">
                <button type="button" class="cert-filter-btn active" onclick="filterCerts('all', this)">
                    <i class="fas fa-th-large"></i> Semua ({{ count($certificates) }})
                </button>
                <button type="button" class="cert-filter-btn" onclick="filterCerts('Jaringan|Artificial', this)">
                    <i class="fas fa-network-wired"></i> Jaringan &amp; AI
                </button>
                <button type="button" class="cert-filter-btn" onclick="filterCerts('BNSP|Institusi|Kepemimpinan|Kepanitiaan', this)">
                    <i class="fas fa-award"></i> Profesi &amp; Kampus
                </button>
                <button type="button" class="cert-filter-btn" onclick="filterCerts('Front-End|Architecture|OOP|Dasar', this)">
                    <i class="fas fa-code"></i> Coding &amp; Web Dev
                </button>
                <button type="button" class="cert-filter-btn" onclick="filterCerts('Database|Version|Software|Magang', this)">
                    <i class="fas fa-database"></i> Database, Tools &amp; Magang
                </button>
            </div>

            <div class="cert-grid" id="certGrid">
                @foreach($certificates as $cert)
                <div class="cert-card-v2" data-category="{{ $cert['kategori'] }}">
                    {{-- Preview Gambar Sertifikat Asli --}}
                    @if(!empty($cert['gambar']))
                    <div class="cert-card-v2__media" onclick="openCertModal('{{ asset($cert['gambar']) }}', '{{ addslashes($cert['judul']) }}', '{{ addslashes($cert['penerbit']) }}', '{{ $cert['credential_id'] ?? '' }}', '{{ $cert['credential_url'] ?? '' }}')">
                        <img src="{{ asset($cert['gambar']) }}" alt="{{ $cert['judul'] }}" loading="lazy">
                        <div class="cert-card-v2__media-overlay">
                            <span class="cert-zoom-pill"><i class="fas fa-search-plus"></i> Pratinjau Sertifikat</span>
                        </div>
                        <span class="cert-card-v2__media-badge"><i class="fas fa-check-shield"></i> Dokumen Resmi</span>
                    </div>
                    @endif

                    <div class="cert-card-v2__content-wrap">
                        <div class="cert-card-v2__top">
                            <div class="cert-card-v2__icon" style="background: {{ $cert['icon_bg'] }}; color: {{ $cert['icon_color'] }};">
                                <i class="{{ $cert['icon'] }}"></i>
                            </div>
                            <div class="cert-card-v2__meta">
                                <span class="cert-card-v2__category">{{ $cert['kategori'] }}</span>
                                <span class="cert-card-v2__year"><i class="far fa-calendar-alt"></i> {{ $cert['tahun'] }}</span>
                            </div>
                        </div>

                        <div class="cert-card-v2__body">
                            <h3 class="cert-card-v2__title">{{ $cert['judul'] }}</h3>
                            <div class="cert-card-v2__issuer">
                                <i class="fas fa-building"></i>
                                <span>{{ $cert['penerbit'] }}</span>
                            </div>
                            <p class="cert-card-v2__desc">{{ $cert['deskripsi'] }}</p>

                            @if(!empty($cert['credential_id']))
                            <div class="cert-card-v2__id">
                                <i class="fas fa-id-badge"></i>
                                <span>Kredensial: <code>{{ $cert['credential_id'] }}</code></span>
                            </div>
                            @endif

                            <div class="cert-card-v2__skills">
                                @foreach($cert['skills'] as $skill)
                                <span class="cert-skill-pill">{{ $skill }}</span>
                                @endforeach
                            </div>
                        </div>

                        <div class="cert-card-v2__footer">
                            @if(!empty($cert['gambar']))
                            <button type="button" class="cert-btn-preview" onclick="openCertModal('{{ asset($cert['gambar']) }}', '{{ addslashes($cert['judul']) }}', '{{ addslashes($cert['penerbit']) }}', '{{ $cert['credential_id'] ?? '' }}', '{{ $cert['credential_url'] ?? '' }}')">
                                <i class="fas fa-eye"></i> Lihat Berkas
                            </button>
                            @endif

                            @if(!empty($cert['credential_url']) && $cert['credential_url'] !== '#')
                            <a href="{{ $cert['credential_url'] }}" target="_blank" rel="noopener noreferrer" class="cert-card-v2__btn">
                                <span>Verifikasi</span>
                                <i class="fas fa-arrow-up-right-from-square"></i>
                            </a>
                            @else
                            <span class="cert-card-v2__verified">
                                <i class="fas fa-check-circle"></i> Terverifikasi
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- BAGIAN 2: PENCAPAIAN & PRESTASI --}}
        <div class="edu-achievement-section" id="pencapaian">
            <div class="section-header">
                <span class="section-tag"><i class="fas fa-trophy"></i> Prestasi &amp; Capaian</span>
                <h2 class="section-heading">Pencapaian &amp; <span class="text-accent">Penghargaan</span></h2>
                <p class="section-desc">Pengakuan atas dedikasi, prestasi resmi universitas, dan partisipasi aktif dalam ajang kompetisi IT selama masa studi.</p>
            </div>

            <div class="achievement-grid">
                @foreach($achievements as $ach)
                <div class="achievement-card achievement-card--{{ $ach['badge_variant'] }}">
                    {{-- Jika ada berkas piagam/sertifikat --}}
                    @if(!empty($ach['gambar']))
                    <div class="achievement-card__media" onclick="openCertModal('{{ asset($ach['gambar']) }}', '{{ addslashes($ach['judul']) }}', '{{ addslashes($ach['penyelenggara']) }}', '{{ $ach['credential_id'] ?? '' }}', '')">
                        <img src="{{ asset($ach['gambar']) }}" alt="{{ $ach['judul'] }}" loading="lazy">
                        <div class="achievement-card__media-overlay">
                            <span class="cert-zoom-pill"><i class="fas fa-search-plus"></i> Lihat Piagam Resmi</span>
                        </div>
                        <span class="cert-card-v2__media-badge"><i class="fas fa-medal"></i> Piagam Penghargaan</span>
                    </div>
                    @endif

                    <div class="achievement-card__header">
                        <div class="achievement-card__icon-box">
                            <i class="{{ $ach['icon'] }}"></i>
                        </div>
                        <div class="achievement-card__badges">
                            <span class="achievement-badge achievement-badge--{{ $ach['badge_variant'] }}">
                                {{ $ach['badge'] }}
                            </span>
                            <span class="achievement-tingkat">{{ $ach['tingkat'] }}</span>
                        </div>
                    </div>

                    <div class="achievement-card__body">
                        <h3 class="achievement-card__title">{{ $ach['judul'] }}</h3>
                        <div class="achievement-card__meta">
                            <span class="achievement-card__org">
                                <i class="fas fa-university"></i> {{ $ach['penyelenggara'] }}
                            </span>
                            <span class="achievement-card__year">
                                <i class="far fa-calendar-check"></i> {{ $ach['tahun'] }}
                            </span>
                        </div>
                        <p class="achievement-card__desc">{{ $ach['deskripsi'] }}</p>

                        @if(!empty($ach['gambar']))
                        <div class="achievement-card__action" style="margin-top: 16px; padding-top: 14px; border-top: 1px dashed var(--border);">
                            <button type="button" class="cert-btn-preview" onclick="openCertModal('{{ asset($ach['gambar']) }}', '{{ addslashes($ach['judul']) }}', '{{ addslashes($ach['penyelenggara']) }}', '{{ $ach['credential_id'] ?? '' }}', '')">
                                <i class="fas fa-file-contract"></i> Buka Piagam Rektor
                            </button>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- CTA CALLOUT --}}
        <div class="edu-cta-card">
            <div class="edu-cta-card__content">
                <div class="edu-cta-card__badge"><i class="fas fa-shield-alt"></i> Kredensial Terverifikasi</div>
                <h3>Tertarik melihat berkas fisik atau mendiskusikan portofolio saya?</h3>
                <p>Saya siap menunjukkan salinan resmi sertifikat, transkrip, maupun CV untuk proses rekrutmen atau kolaborasi pengembangan web.</p>
            </div>
            <div class="edu-cta-card__actions">
                <a href="{{ route('contact') }}" class="btn btn-primary">
                    <i class="fas fa-paper-plane"></i> Hubungi Saya
                </a>
                <a href="{{ route('projects') }}" class="btn btn-outline">
                    <i class="fas fa-laptop-code"></i> Lihat Portofolio Proyek
                </a>
            </div>
        </div>
    </div>
</section>

{{-- LIGHTBOX MODAL PREVIEW SERTIFIKAT --}}
<div id="certLightboxModal" class="cert-modal" role="dialog" aria-modal="true" aria-hidden="true">
    <div class="cert-modal__backdrop" onclick="closeCertModal()"></div>
    <div class="cert-modal__content">
        <div class="cert-modal__header">
            <div class="cert-modal__title-group">
                <span class="cert-modal__badge"><i class="fas fa-certificate"></i> Salinan Resmi Terverifikasi</span>
                <h3 id="certModalTitle" class="cert-modal__title">Judul Sertifikat</h3>
                <p id="certModalIssuer" class="cert-modal__issuer"><i class="fas fa-building"></i> Penerbit</p>
            </div>
            <button type="button" class="cert-modal__close" onclick="closeCertModal()" aria-label="Tutup Preview">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <div class="cert-modal__body">
            <div class="cert-modal__img-container">
                <img id="certModalImg" src="" alt="Pratinjau Sertifikat" class="cert-modal__img">
            </div>
        </div>

        <div class="cert-modal__footer">
            <div id="certModalCredBox" class="cert-modal__cred">
                <span class="cred-label">No. Kredensial / SK:</span>
                <code id="certModalCredId">-</code>
            </div>
            <div class="cert-modal__actions">
                <a id="certModalFullLink" href="#" target="_blank" rel="noopener" class="btn-cert-modal btn-cert-modal--primary">
                    <i class="fas fa-arrow-up-right-from-square"></i> Buka Resolusi Penuh
                </a>
                <a id="certModalVerifyLink" href="#" target="_blank" rel="noopener" class="btn-cert-modal btn-cert-modal--outline" style="display: none;">
                    <i class="fas fa-check-circle"></i> Verifikasi Online
                </a>
                <button type="button" class="btn-cert-modal btn-cert-modal--secondary" onclick="closeCertModal()">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function openCertModal(imgSrc, title, issuer, credId, verifyUrl) {
    const modal = document.getElementById('certLightboxModal');
    const modalImg = document.getElementById('certModalImg');
    const modalTitle = document.getElementById('certModalTitle');
    const modalIssuer = document.getElementById('certModalIssuer');
    const modalCredId = document.getElementById('certModalCredId');
    const modalCredBox = document.getElementById('certModalCredBox');
    const fullLink = document.getElementById('certModalFullLink');
    const verifyLink = document.getElementById('certModalVerifyLink');

    if (!modal) return;

    modalImg.src = imgSrc;
    modalTitle.textContent = title;
    modalIssuer.innerHTML = '<i class="fas fa-building"></i> ' + issuer;
    fullLink.href = imgSrc;

    if (credId && credId.trim() !== '') {
        modalCredId.textContent = credId;
        modalCredBox.style.display = 'inline-flex';
    } else {
        modalCredBox.style.display = 'none';
    }

    if (verifyUrl && verifyUrl.trim() !== '' && verifyUrl !== '#') {
        verifyLink.href = verifyUrl;
        verifyLink.style.display = 'inline-flex';
    } else {
        verifyLink.style.display = 'none';
    }

    modal.classList.add('is-open');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
}

function closeCertModal() {
    const modal = document.getElementById('certLightboxModal');
    if (!modal) return;
    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeCertModal();
    }
});

function filterCerts(categoryPattern, btnEl) {
    // Update active button
    document.querySelectorAll('.cert-filter-btn').forEach(b => b.classList.remove('active'));
    if (btnEl) btnEl.classList.add('active');

    const cards = document.querySelectorAll('#certGrid .cert-card-v2');
    const regex = new RegExp(categoryPattern, 'i');

    cards.forEach(card => {
        const cat = card.getAttribute('data-category') || '';
        if (categoryPattern === 'all' || regex.test(cat)) {
            card.style.display = 'flex';
            card.style.animation = 'fadeIn 0.4s ease forwards';
        } else {
            card.style.display = 'none';
        }
    });
}
</script>

@endsection
