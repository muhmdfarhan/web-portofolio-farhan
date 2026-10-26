@extends('layouts.app')

@section('title', 'Projects — Muhamad Farhan | Portfolio')
@section('meta_description', 'Kumpulan proyek web development dan sistem informasi yang dibangun oleh Muhamad Farhan menggunakan Laravel, PHP, dan MySQL.')

@section('content')

{{-- PAGE HERO --}}
<section class="page-hero-v2">
    <div class="page-hero-v2__bg">
        <div class="phv2-blob phv2-blob--1"></div>
        <div class="phv2-blob phv2-blob--2"></div>
    </div>
    <div class="container">
        <div class="page-hero-v2__content">
            <span class="section-tag">Portfolio &amp; Showcase</span>
            <h1 class="page-hero-v2__title">Proyek &amp; Karya <span class="text-accent">Unggulan</span></h1>
            <p class="page-hero-v2__sub">Hasil karya nyata dari perancangan arsitektur sistem, integrasi database, hingga pengembangan antarmuka web.</p>
        </div>
    </div>
</section>

{{-- PROJECTS MAIN --}}
<section class="projects-main section-lg">
    <div class="container">

        {{-- FILTER TABS (Industry Standard) --}}
        <div class="projects-filter-bar">
            <button class="filter-btn active" data-filter="all">
                <i class="fas fa-grid-2"></i> Semua Proyek
            </button>
            <button class="filter-btn" data-filter="laravel">
                <i class="fab fa-laravel"></i> Laravel &amp; PHP
            </button>
            <button class="filter-btn" data-filter="system">
                <i class="fas fa-database"></i> Sistem Informasi
            </button>
            <button class="filter-btn" data-filter="web">
                <i class="fas fa-laptop-code"></i> Web App &amp; UI
            </button>
        </div>

        {{-- PROJECTS GRID --}}
        <div class="projects-main-grid">
            @foreach($projects as $index => $project)
            @php
                // Tentukan kategori filter otomatis dari teknologi & info proyek
                $techStr = strtolower(implode(' ', $project['teknologi']) . ' ' . $project['nama'] . ' ' . ($project['instansi'] ?? ''));
                $category = 'web';
                if (str_contains($techStr, 'laravel') || str_contains($techStr, 'php')) {
                    $category = 'laravel';
                }
                if (str_contains($techStr, 'sistem') || str_contains($techStr, 'hosting') || str_contains($techStr, 'monitor') || str_contains($techStr, 'pos') || str_contains($techStr, 'kasir') || str_contains($techStr, 'database')) {
                    $category .= ' system';
                }
            @endphp
            <div class="project-main-card" data-category="{{ $category }}">

                {{-- Gambar & Overlay --}}
                <div class="project-main-card__img">
                    <img src="{{ asset($project['gambar']) }}"
                         alt="{{ $project['nama'] }}"
                         onerror="this.parentElement.innerHTML='<div class=\'proj-img-placeholder\'><i class=\'fas fa-code\'></i></div>'">

                    <div class="project-main-card__overlay">
                        @if($project['github'])
                        <a href="{{ $project['github'] }}" target="_blank" rel="noopener" class="proj-overlay-btn">
                            <i class="fab fa-github"></i> Repository
                        </a>
                        @endif
                        @if($project['demo'])
                        <a href="{{ $project['demo'] }}" target="_blank" rel="noopener" class="proj-overlay-btn proj-overlay-btn--primary">
                            <i class="fas fa-external-link-alt"></i> Live Preview
                        </a>
                        @endif
                    </div>

                    <div class="project-main-card__num">0{{ $index + 1 }}</div>
                </div>

                {{-- Konten --}}
                <div class="project-main-card__body">
                    <div class="project-main-card__meta">
                        <span class="proj-status-badge proj-status-badge--{{ $project['status'] === 'Selesai' ? 'done' : 'wip' }}">
                            {{ $project['status'] === 'Selesai' ? '✅ Selesai' : '🔧 Dalam Pengembangan' }}
                        </span>
                        @if(!empty($project['instansi']))
                        <span class="proj-client-badge"><i class="fas fa-building"></i> {{ $project['instansi'] }}</span>
                        @endif
                    </div>

                    <h3 class="project-main-card__title">{{ $project['nama'] }}</h3>
                    <p class="project-main-card__desc">{{ $project['deskripsi'] }}</p>

                    {{-- Fitur Utama --}}
                    @if(!empty($project['fitur']))
                    <div class="project-main-card__features">
                        <span class="proj-features-label"><i class="fas fa-layer-group"></i> Fitur &amp; Kemampuan Utama:</span>
                        <ul class="proj-features-list">
                            @foreach($project['fitur'] as $fitur)
                            <li><i class="fas fa-check"></i> {{ $fitur }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    {{-- Galeri Tangkapan Layar (Jika ada lebih dari 1 gambar) --}}
                    @if(!empty($project['gallery']) && count($project['gallery']) > 1)
                    <div class="project-gallery-box">
                        <span class="proj-gallery-label"><i class="fas fa-images"></i> Tangkapan Layar Sistem:</span>
                        <div class="proj-gallery-scroll">
                            @foreach($project['gallery'] as $idx => $screenshot)
                            <div class="proj-gallery-thumb" onclick="openCertModal('{{ asset($screenshot) }}', '{{ addslashes($project['nama']) }}', 'Pratinjau Antarmuka #{{ $idx + 1 }}', '', '')" title="Klik untuk memperbesar">
                                <img src="{{ asset($screenshot) }}" alt="Screenshot {{ $idx + 1 }}" loading="lazy">
                                <span class="proj-gallery-zoom-icon"><i class="fas fa-search-plus"></i></span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    {{-- Teknologi Badges --}}
                    <div class="project-main-card__tech">
                        @foreach($project['teknologi'] as $tech)
                        <span class="proj-tech-tag">{{ $tech }}</span>
                        @endforeach
                    </div>

                    {{-- Action Buttons --}}
                    <div class="project-main-card__actions">
                        @if(!empty($project['gambar']))
                        <button type="button" class="btn btn-sm btn-outline" onclick="openCertModal('{{ asset($project['gambar']) }}', '{{ addslashes($project['nama']) }}', '{{ addslashes($project['instansi'] ?? '') }}', '', '')">
                            <i class="fas fa-eye"></i> Pratinjau
                        </button>
                        @endif
                        @if($project['github'])
                        <a href="{{ $project['github'] }}" target="_blank" rel="noopener" class="btn btn-sm btn-outline">
                            <i class="fab fa-github"></i> Source Code
                        </a>
                        @endif
                        @if($project['demo'])
                        <a href="{{ $project['demo'] }}" target="_blank" rel="noopener" class="btn btn-sm btn-primary">
                            <i class="fas fa-external-link-alt"></i> Live Demo
                        </a>
                        @endif
                    </div>
                </div>

            </div>
            @endforeach
        </div>

        {{-- CALL TO ACTION --}}
        <div class="projects-cta">
            <div class="projects-cta__box">
                <span class="projects-cta__emoji">⚡</span>
                <h3>Punya Rencana Proyek Baru?</h3>
                <p>Saya selalu siap berkolaborasi untuk merancang dan membangun sistem informasi web yang cepat, responsif, dan siap pakai.</p>
                <a href="{{ route('contact') }}" class="btn btn-primary">
                    <i class="fas fa-paper-plane"></i> Konsultasi &amp; Diskusi
                </a>
            </div>
        </div>

    </div>
</section>

{{-- LIGHTBOX MODAL PREVIEW PROYEK --}}
<div id="certLightboxModal" class="cert-modal" role="dialog" aria-modal="true" aria-hidden="true">
    <div class="cert-modal__backdrop" onclick="closeCertModal()"></div>
    <div class="cert-modal__content">
        <div class="cert-modal__header">
            <div class="cert-modal__title-group">
                <span class="cert-modal__badge"><i class="fas fa-desktop"></i> Showcase Proyek &amp; Antarmuka</span>
                <h3 id="certModalTitle" class="cert-modal__title">Judul Proyek</h3>
                <p id="certModalIssuer" class="cert-modal__issuer"><i class="fas fa-laptop-code"></i> Informasi Sistem</p>
            </div>
            <button type="button" class="cert-modal__close" onclick="closeCertModal()" aria-label="Tutup Preview">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <div class="cert-modal__body">
            <div class="cert-modal__img-container">
                <img id="certModalImg" src="" alt="Screenshot Proyek" class="cert-modal__img">
            </div>
        </div>

        <div class="cert-modal__footer">
            <div id="certModalCredBox" class="cert-modal__cred" style="display:none;">
                <span class="cred-label">Status:</span>
                <code id="certModalCredId">-</code>
            </div>
            <div class="cert-modal__actions">
                <a id="certModalFullLink" href="#" target="_blank" rel="noopener" class="btn-cert-modal btn-cert-modal--primary">
                    <i class="fas fa-arrow-up-right-from-square"></i> Buka Gambar Penuh
                </a>
                <button type="button" class="btn-cert-modal btn-cert-modal--secondary" onclick="closeCertModal()">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Filter Proyek Interaktif
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        
        const filter = btn.dataset.filter;
        document.querySelectorAll('.project-main-card').forEach(card => {
            const cat = card.dataset.category || '';
            if (filter === 'all' || cat.includes(filter)) {
                card.style.display = 'flex';
                setTimeout(() => card.style.opacity = '1', 50);
            } else {
                card.style.opacity = '0';
                setTimeout(() => card.style.display = 'none', 300);
            }
        });
    });
});

// Lightbox Modal Script
function openCertModal(imgSrc, title, issuer, credId, verifyUrl) {
    const modal = document.getElementById('certLightboxModal');
    const modalImg = document.getElementById('certModalImg');
    const modalTitle = document.getElementById('certModalTitle');
    const modalIssuer = document.getElementById('certModalIssuer');
    const fullLink = document.getElementById('certModalFullLink');

    if (!modal) return;

    modalImg.src = imgSrc;
    modalTitle.textContent = title;
    modalIssuer.innerHTML = '<i class="fas fa-laptop-code"></i> ' + issuer;
    fullLink.href = imgSrc;

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
</script>
@endpush
