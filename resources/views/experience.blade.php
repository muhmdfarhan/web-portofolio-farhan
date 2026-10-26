@extends('layouts.app')

@section('title', 'Experience — Muhammad Farhan')
@section('meta_description', 'Pengalaman organisasi, magang, dan proyek Muhammad Farhan.')

@section('content')

{{-- PAGE HERO --}}
<section class="page-hero-v2">
    <div class="page-hero-v2__bg">
        <div class="phv2-blob phv2-blob--1"></div>
        <div class="phv2-blob phv2-blob--2"></div>
    </div>
    <div class="container">
        <div class="page-hero-v2__content">
            <span class="section-tag">Pengalaman</span>
            <h1 class="page-hero-v2__title">Perjalanan &amp; <span class="text-accent">Pengalaman</span> Saya</h1>
            <p class="page-hero-v2__sub">Rangkuman pengalaman organisasi, magang, dan proyek yang telah membentuk kemampuan saya.</p>
        </div>
    </div>
</section>

{{-- EXPERIENCE TIMELINE --}}
<section class="exp-section section-lg">
    <div class="container">

        <div class="exp-timeline">
            @foreach($experiences as $index => $exp)
            <div class="exp-item">

                {{-- Kiri: Waktu & Tipe --}}
                <div class="exp-item__left">
                    <span class="exp-item__period">
                        <i class="fas fa-calendar-alt"></i> {{ $exp['periode'] }}
                    </span>
                    <span class="exp-type-badge exp-type-badge--{{ strtolower($exp['tipe']) }}">
                        {{ $exp['tipe'] }}
                    </span>
                </div>

                {{-- Titik Timeline --}}
                <div class="exp-item__dot">
                    <div class="exp-dot-icon">{{ $exp['icon'] }}</div>
                    <div class="exp-dot-line"></div>
                </div>

                {{-- Kanan: Konten --}}
                <div class="exp-item__right">
                    <div class="exp-card">
                        <div class="exp-card__header">
                            <h3 class="exp-card__title">{{ $exp['judul'] }}</h3>
                        </div>
                        <p class="exp-card__company">
                            <i class="fas fa-building"></i> {{ $exp['perusahaan'] }}
                        </p>
                        <p class="exp-card__desc">{{ $exp['deskripsi'] }}</p>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- SKILLS HIGHLIGHT --}}
<section class="exp-skills-section" style="background:var(--bg-light);padding:60px 0">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Skill</span>
            <h2 class="section-heading">Kemampuan dari <span class="text-accent">pengalaman</span></h2>
        </div>
        <div class="exp-skill-tags">
            @php
                $expSkills = ['Laravel','PHP','MySQL','HTML','CSS','Git','Team Work','Komunikasi','Problem Solving','Manajemen Waktu'];
            @endphp
            @foreach($expSkills as $sk)
            <span class="exp-skill-tag"><i class="fas fa-check"></i> {{ $sk }}</span>
            @endforeach
        </div>
    </div>
</section>

@endsection
