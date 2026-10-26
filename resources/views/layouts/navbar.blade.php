<nav class="navbar" id="navbar">
    <div class="nav-container">

        {{-- LOGO BRAND --}}
        <a href="{{ route('home') }}" class="nav-logo" aria-label="Home Portofolio Muhamad Farhan">
            <div class="nav-logo__mark">
                <span>MF</span>
            </div>
            <div class="nav-logo__text">
                <span class="nav-logo__name">Muhamad Farhan</span>
                <span class="nav-logo__title" data-i18n="nav.role">Fullstack Developer | Web Developer</span>
            </div>
        </a>

        {{-- DESKTOP MENU --}}
        <ul class="nav-menu" id="navMenu">
            <li class="nav-item">
                <a href="{{ route('home') }}"
                   class="nav-link {{ request()->routeIs('home') ? 'nav-link--active' : '' }}">
                    <i class="fas fa-home"></i>
                    <span data-i18n="nav.home">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('about') }}"
                   class="nav-link {{ request()->routeIs('about') ? 'nav-link--active' : '' }}">
                    <i class="fas fa-user-code"></i>
                    <span data-i18n="nav.about">Tentang</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('skills') }}"
                   class="nav-link {{ request()->routeIs('skills') ? 'nav-link--active' : '' }}">
                    <i class="fas fa-terminal"></i>
                    <span data-i18n="nav.skills">Skills</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('projects') }}"
                   class="nav-link {{ request()->routeIs('projects') ? 'nav-link--active' : '' }}">
                    <i class="fas fa-cubes"></i>
                    <span data-i18n="nav.projects">Proyek</span>
                </a>
            </li>

            {{-- DROPDOWN: MORE --}}
            <li class="nav-item nav-item--dropdown">
                <button class="nav-link nav-dropdown-toggle {{ (request()->routeIs('experience') || request()->routeIs('education')) ? 'nav-link--active' : '' }}"
                        aria-expanded="false" aria-label="Menu tambahan"
                        id="navDropdownBtn">
                    <i class="fas fa-compass"></i>
                    <span data-i18n="nav.more">Lainnya</span>
                    <i class="fas fa-chevron-down nav-dropdown-arrow"></i>
                </button>
                <div class="nav-dropdown" id="navDropdown">
                    <a href="{{ route('experience') }}"
                       class="nav-dropdown-item {{ request()->routeIs('experience') ? 'nav-dropdown-item--active' : '' }}">
                        <div class="nav-dropdown-icon" style="background:#eef2ff;color:#4f46e5">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div>
                            <span class="nav-dropdown-title" data-i18n="nav.experience">Pengalaman</span>
                            <span class="nav-dropdown-desc" data-i18n="nav.exp_desc">Karir &amp; organisasi</span>
                        </div>
                    </a>
                    <a href="{{ route('education') }}"
                       class="nav-dropdown-item {{ request()->routeIs('education') ? 'nav-dropdown-item--active' : '' }}">
                        <div class="nav-dropdown-icon" style="background:#f0fdf4;color:#16a34a">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div>
                            <span class="nav-dropdown-title" data-i18n="nav.education">Pendidikan</span>
                            <span class="nav-dropdown-desc" data-i18n="nav.edu_desc">Akademik &amp; sertifikasi</span>
                        </div>
                    </a>
                </div>
            </li>
        </ul>

        {{-- RIGHT ACTIONS --}}
        <div class="nav-right">
            {{-- Language Segmented Pill Switcher --}}
            <div class="lang-pill-switcher" id="langPillSwitcher">
                <button type="button" class="lang-pill-btn active" data-lang="id" title="Bahasa Indonesia">ID</button>
                <button type="button" class="lang-pill-btn" data-lang="en" title="English">EN</button>
            </div>

            {{-- Theme Toggle Switch --}}
            <button class="theme-toggle-btn" id="themeToggleBtn" aria-label="Toggle Theme Mode" title="Mode Terang / Gelap">
                <i class="fas fa-sun theme-icon-sun"></i>
                <i class="fas fa-moon theme-icon-moon"></i>
            </button>

            <a href="{{ route('contact') }}"
               class="nav-contact-btn {{ request()->routeIs('contact') ? 'nav-contact-btn--active' : '' }}">
                <i class="fas fa-paper-plane"></i>
                <span data-i18n="nav.contact">Hubungi Saya</span>
            </a>

            {{-- HAMBURGER TOGGLE --}}
            <button class="nav-toggle" id="navToggle" aria-label="Toggle Navigation Drawer" aria-expanded="false">
                <div class="nav-toggle__icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
        </div>

    </div>

    {{-- MOBILE DRAWER --}}
    <div class="nav-drawer" id="navDrawer" aria-hidden="true">
        <div class="nav-drawer__inner">

            {{-- Profile Card in Drawer --}}
            <div class="nav-drawer__profile">
                <div class="nav-drawer__avatar">MF</div>
                <div class="nav-drawer__info">
                    <p class="nav-drawer__name">Muhamad Farhan</p>
                    <p class="nav-drawer__role"><i class="fas fa-circle-check" style="color:#10b981"></i> <span data-i18n="nav.status">Tersedia untuk Kerja</span></p>
                </div>
            </div>

            <div class="nav-drawer__divider"></div>

            {{-- Mobile Language & Theme Bar --}}
            <div class="drawer-controls-bar">
                <div class="drawer-control-group">
                    <span data-i18n="nav.lang_label">Bahasa:</span>
                    <div class="drawer-lang-pills">
                        <button type="button" class="drawer-lang-btn active" data-lang="id">🇮🇩 ID</button>
                        <button type="button" class="drawer-lang-btn" data-lang="en">🇬🇧 EN</button>
                    </div>
                </div>
                <div class="drawer-control-group">
                    <span data-i18n="nav.theme_label">Tema Tampilan:</span>
                    <button class="drawer-control-btn" id="drawerThemeBtn">
                        <i class="fas fa-moon"></i> <span data-i18n="nav.theme_btn">Ubah Mode</span>
                    </button>
                </div>
            </div>

            <div class="nav-drawer__divider"></div>

            {{-- Links --}}
            <nav class="nav-drawer__menu">
                <a href="{{ route('home') }}"
                   class="nav-drawer-link {{ request()->routeIs('home') ? 'nav-drawer-link--active' : '' }}">
                    <span class="nav-drawer-link__icon"><i class="fas fa-home"></i></span>
                    <span data-i18n="nav.home">Home</span>
                </a>
                <a href="{{ route('about') }}"
                   class="nav-drawer-link {{ request()->routeIs('about') ? 'nav-drawer-link--active' : '' }}">
                    <span class="nav-drawer-link__icon"><i class="fas fa-user-code"></i></span>
                    <span data-i18n="nav.about">Tentang Saya</span>
                </a>
                <a href="{{ route('skills') }}"
                   class="nav-drawer-link {{ request()->routeIs('skills') ? 'nav-drawer-link--active' : '' }}">
                    <span class="nav-drawer-link__icon"><i class="fas fa-terminal"></i></span>
                    <span data-i18n="nav.skills">Skills &amp; Tech</span>
                </a>
                <a href="{{ route('projects') }}"
                   class="nav-drawer-link {{ request()->routeIs('projects') ? 'nav-drawer-link--active' : '' }}">
                    <span class="nav-drawer-link__icon"><i class="fas fa-cubes"></i></span>
                    <span data-i18n="nav.projects">Proyek</span>
                </a>
                <a href="{{ route('experience') }}"
                   class="nav-drawer-link {{ request()->routeIs('experience') ? 'nav-drawer-link--active' : '' }}">
                    <span class="nav-drawer-link__icon"><i class="fas fa-briefcase"></i></span>
                    <span data-i18n="nav.experience">Pengalaman</span>
                </a>
                <a href="{{ route('education') }}"
                   class="nav-drawer-link {{ request()->routeIs('education') ? 'nav-drawer-link--active' : '' }}">
                    <span class="nav-drawer-link__icon"><i class="fas fa-graduation-cap"></i></span>
                    <span data-i18n="nav.education">Pendidikan</span>
                </a>
            </nav>

            <div class="nav-drawer__divider"></div>

            <a href="{{ route('contact') }}" class="btn btn-primary btn-full" style="margin-top:12px;">
                <i class="fas fa-paper-plane"></i> <span data-i18n="nav.contact">Hubungi Saya</span>
            </a>

        </div>
    </div>

    {{-- Overlay --}}
    <div class="nav-overlay" id="navOverlay"></div>
</nav>
