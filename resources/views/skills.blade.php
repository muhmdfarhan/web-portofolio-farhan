@extends('layouts.app')

@section('title', 'Skills — Muhammad Farhan')
@section('meta_description', 'Kemampuan teknis Muhammad Farhan dalam PHP, Laravel, MySQL, HTML, CSS, JavaScript, dan lainnya.')

@section('content')

{{-- PAGE HERO --}}
<section class="page-hero-v2">
    <div class="page-hero-v2__bg">
        <div class="phv2-blob phv2-blob--1"></div>
        <div class="phv2-blob phv2-blob--2"></div>
    </div>
    <div class="container">
        <div class="page-hero-v2__content">
            <span class="section-tag">Kemampuan</span>
            <h1 class="page-hero-v2__title">Teknologi yang saya <span class="text-accent">kuasai</span></h1>
            <p class="page-hero-v2__sub">Kumpulan skill teknis dan non-teknis yang saya pelajari dan gunakan dalam setiap proyek.</p>
        </div>
    </div>
</section>

{{-- SKILLS SECTION --}}
<section class="skills-main section-lg">
    <div class="container">

        @foreach($skills as $kategori => $daftarSkill)
        <div class="skills-block">

            <div class="skills-block__header">
                <div class="skills-block__icon">
                    @if($kategori === 'Backend')
                        <i class="fas fa-server"></i>
                    @elseif($kategori === 'Frontend')
                        <i class="fas fa-palette"></i>
                    @else
                        <i class="fas fa-tools"></i>
                    @endif
                </div>
                <div>
                    <h2 class="skills-block__title">{{ $kategori }}</h2>
                    <p class="skills-block__desc">
                        @if($kategori === 'Backend') Teknologi sisi server yang saya gunakan untuk membangun logika aplikasi.
                        @elseif($kategori === 'Frontend') Teknologi tampilan untuk membuat antarmuka yang menarik dan responsif.
                        @else Tools dan software penunjang produktivitas development.
                        @endif
                    </p>
                </div>
            </div>

            <div class="skills-cards-grid">
                @foreach($daftarSkill as $skill)
                <div class="skill-detail-card">
                    <div class="skill-detail-card__top">
                        <div class="skill-detail-card__name-wrap">
                            <span class="skill-detail-card__name">{{ $skill['nama'] }}</span>
                            <span class="skill-level-badge skill-level-badge--{{ strtolower($skill['level']) }}">{{ $skill['level'] }}</span>
                        </div>
                        <span class="skill-detail-card__pct">{{ $skill['nilai'] }}%</span>
                    </div>

                    <div class="skill-bar-track">
                        <div class="skill-bar-fill" data-width="{{ $skill['nilai'] }}"
                             style="width:0"></div>
                    </div>

                    <p class="skill-detail-card__note">
                        @if($skill['level'] === 'Mahir') Digunakan secara rutin, sangat percaya diri.
                        @elseif($skill['level'] === 'Menengah') Digunakan aktif dalam beberapa proyek nyata.
                        @else Masih dalam tahap aktif belajar dan eksplorasi.
                        @endif
                    </p>
                </div>
                @endforeach
            </div>

        </div>
        @endforeach

    </div>
</section>

{{-- CTA --}}
<section class="skills-cta-section">
    <div class="container">
        <div class="skills-cta-box">
            <h3>💡 Selalu belajar teknologi baru</h3>
            <p>Skill di atas adalah yang sudah saya pelajari hingga saat ini. Saya terus berlatih dan menambah kemampuan baru setiap harinya.</p>
            <a href="{{ route('projects') }}" class="btn btn-primary">
                <i class="fas fa-rocket"></i> Lihat Implementasinya di Proyek
            </a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
const bars = document.querySelectorAll('.skill-bar-fill');
const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.style.transition = 'width 1.2s ease';
            e.target.style.width = e.target.dataset.width + '%';
            obs.unobserve(e.target);
        }
    });
}, { threshold: 0.2 });
bars.forEach(b => obs.observe(b));
</script>
@endpush
