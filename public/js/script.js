/* ================================================================
   script.js — Portofolio Muhamad Farhan
   Master JavaScript File (IT Industry Standard)
   Features: Full System i18n Translation (ID/EN), Theme Switcher, Toast
   ================================================================ */

/* ----------------------------------------------------------------
   1. FULL SYSTEM BILINGUAL i18n DICTIONARY (INDONESIAN & ENGLISH)
   ---------------------------------------------------------------- */
const translations = {
    id: {
        // Navbar
        'nav.role': 'Fullstack Developer | Web Developer',
        'nav.home': 'Home',
        'nav.about': 'Tentang',
        'nav.skills': 'Skills',
        'nav.projects': 'Proyek',
        'nav.more': 'Lainnya',
        'nav.experience': 'Pengalaman',
        'nav.exp_desc': 'Karir & organisasi',
        'nav.education': 'Pendidikan',
        'nav.edu_desc': 'Akademik & sertifikasi',
        'nav.status': 'Tersedia untuk Kerja',
        'nav.contact': 'Hubungi Saya',
        'nav.lang_label': 'Bahasa System:',
        'nav.theme_label': 'Tema Tampilan:',
        'nav.theme_btn': 'Ubah Mode',

        // Hero Section
        'hero.available': 'Tersedia untuk Kerja & Kolaborasi Proyek',
        'hero.greeting': '👋 Halo, Saya',
        'hero.prefix': 'Seorang ',
        'hero.desc': 'Fresh Graduate Sistem Informasi yang antusias di bidang pengembangan web. Saya bersemangat membangun aplikasi web modern, rapi, dan solutif menggunakan Laravel, PHP, dan MySQL.',
        'hero.stack': 'Teknologi Utama:',
        'hero.btn_projects': 'Lihat Proyek Saya',
        'hero.btn_cv': 'Unduh CV',
        'hero.social': 'Temukan saya di:',
        'hero.float_title': 'Fresh Graduate',
        'hero.float_sub': 'Sistem Informasi',

        // Stats Section
        'stats.p1': 'Proyek Selesai',
        'stats.p2': 'Teknologi Dikuasai',
        'stats.p3': 'Tahun Belajar',
        'stats.p4': 'Semangat Belajar',

        // About Preview (Home)
        'about.tag': 'Tentang Saya',
        'about.heading': 'Kenapa memilih',
        'about.accent': 'saya?',
        'about.sub': 'Saya adalah developer yang tidak hanya menulis kode, tetapi membangun solusi.',
        'about.p1': 'Saya adalah Fresh Graduate Sistem Informasi yang berfokus pada web development. Memiliki minat mendalam pada ekosistem Laravel, perancangan database MySQL, analisis sistem informasi, dan antarmuka pengguna (UI/UX) yang intuitif.',
        'about.p2': 'Saya percaya bahwa kombinasi antara kemampuan teknis yang kuat dan pemahaman terhadap kebutuhan pengguna adalah kunci membuat produk digital yang baik.',
        'about.fact1': 'Kode bersih dan terstruktur',
        'about.fact2': 'Detail oriented & problem solver',
        'about.fact3': 'Fast learner & kolaboratif',
        'about.fact4': 'Berpengalaman dengan Laravel & MySQL',
        'about.btn': 'Selengkapnya Tentang Saya',
        'about.card1_t': 'Pendidikan',
        'about.card1_s': 'Fresh Graduate S1 SI',
        'about.card2_t': 'Lokasi',
        'about.card3_t': 'Pengalaman',
        'about.card3_s': 'Magang & Freelance',

        // Services Section
        'services.tag': 'Layanan',
        'services.heading': 'Apa yang bisa saya',
        'services.accent': 'lakukan?',
        'services.sub': 'Saya siap membantu Anda membangun solusi digital yang tepat sasaran.',
        'services.s1_desc': 'Membangun website dinamis dan responsif menggunakan Laravel, PHP, HTML, dan CSS yang bersih dan terstruktur.',
        'services.s2_title': 'Manajemen Database',
        'services.s2_desc': 'Merancang struktur database yang efisien dengan MySQL, relasi antar tabel, dan query yang optimal.',
        'services.s3_desc': 'Membuat tampilan antarmuka yang bersih, modern, dan nyaman digunakan oleh pengguna di berbagai perangkat.',
        'services.s4_title': 'Sistem Informasi',
        'services.s4_desc': 'Mengembangkan sistem informasi berbasis web seperti sistem pengelolaan data, laporan, dan monitoring.',

        // Skills Section
        'skills.tag': 'Kemampuan',
        'skills.heading': 'Teknologi yang saya',
        'skills.accent': 'kuasai',
        'skills.sub': 'Beberapa teknologi yang saya gunakan dalam setiap proyek.',
        'skills.all_btn': 'Lihat Semua Skills',

        // Projects Section
        'projects.tag': 'Portfolio',
        'projects.heading': 'Proyek',
        'projects.accent': 'terbaru saya',
        'projects.sub': 'Beberapa karya terbaik yang pernah saya kerjakan.',
        'projects.done': '✅ Selesai',
        'projects.p1_title': 'Sistem Informasi Pengelolaan & Penagihan Hosting',
        'projects.p1_desc': 'Sistem informasi berbasis web untuk mengelola data pelanggan hosting, paket layanan, dan penagihan otomatis.',
        'projects.p2_title': 'Host Reminder — Pemantau Jatuh Tempo Hosting & Domain',
        'projects.p2_desc': 'Aplikasi monitoring masa aktif domain dan server hosting dengan indikator status mendesak dan notifikasi WhatsApp langsung.',
        'projects.p3_title': 'Website Portofolio Interaktif & Personal',
        'projects.p3_desc': 'Website portofolio modern berstandar industri IT untuk memperkenalkan diri dan menampilkan karya.',
        'projects.p4_title': 'Kasir POS — Sistem Kasir & Toko Digital',
        'projects.p4_desc': 'Aplikasi POS multi-role terintegrasi kasir barcode, multi-payment QRIS/Tunai, manajemen stok, dan laporan laba rugi.',
        'projects.all_btn': 'Lihat Semua Proyek',

        // Journey Section
        'journey.tag': 'Perjalanan',
        'journey.heading': 'Bagaimana saya',
        'journey.accent': 'berkembang',
        'journey.j1_title': 'SMA / SMK',
        'journey.j1_desc': 'Mulai mengenal dunia komputer dan pemrograman dasar.',
        'journey.j2_title': 'Kuliah S1',
        'journey.j2_desc': 'Menempuh S1 Sistem Informasi, mendalami Laravel & web development secara terstruktur.',
        'journey.j3_title': 'Magang / PKL',
        'journey.j3_desc': 'Pengalaman nyata membangun sistem informasi di dunia kerja.',
        'journey.j4_title': 'Fresh Graduate',
        'journey.j4_desc': 'Lulusan baru Sistem Informasi yang siap berkontribusi penuh di industri profesional!',

        // CTA Section
        'cta.tag': '👋 Siap Berkolaborasi?',
        'cta.heading': 'Mari Wujudkan Ide Anda',
        'cta.accent': 'Bersama Saya',
        'cta.desc': 'Punya proyek yang ingin dikerjakan? Butuh developer untuk tim Anda? Saya siap mendengar dan berdiskusi!',
        'cta.btn_contact': 'Hubungi Saya',

        // Footer Section
        'footer.tagline': 'Membangun aplikasi web modern, efisien, dan siap pakai dengan Laravel, PHP, dan MySQL.',
        'footer.pages': 'Halaman',
        'footer.connect': 'Koneksi & Media'
    },
    en: {
        // Navbar
        'nav.role': 'Fullstack Developer | Web Developer',
        'nav.home': 'Home',
        'nav.about': 'About',
        'nav.skills': 'Skills',
        'nav.projects': 'Projects',
        'nav.more': 'More',
        'nav.experience': 'Experience',
        'nav.exp_desc': 'Career & Organization',
        'nav.education': 'Education',
        'nav.edu_desc': 'Academic & Credentials',
        'nav.status': 'Available for Hire',
        'nav.contact': 'Contact Me',
        'nav.lang_label': 'System Language:',
        'nav.theme_label': 'Theme Mode:',
        'nav.theme_btn': 'Switch Mode',

        // Hero Section
        'hero.available': 'Available for Full-time & Project Collaboration',
        'hero.greeting': '👋 Hi, I am',
        'hero.prefix': 'A ',
        'hero.desc': 'An enthusiastic Information Systems Fresh Graduate specialized in web development. Passionate about building modern, clean, and efficient web applications using Laravel, PHP, and MySQL.',
        'hero.stack': 'Core Tech Stack:',
        'hero.btn_projects': 'Explore My Projects',
        'hero.btn_cv': 'Download CV',
        'hero.social': 'Connect with me:',
        'hero.float_title': 'Fresh Graduate',
        'hero.float_sub': 'Information Systems',

        // Stats Section
        'stats.p1': 'Projects Completed',
        'stats.p2': 'Technologies Mastered',
        'stats.p3': 'Years of Learning',
        'stats.p4': 'Learning Enthusiasm',

        // About Preview (Home)
        'about.tag': 'About Me',
        'about.heading': 'Why choose',
        'about.accent': 'me?',
        'about.sub': 'I am a developer who does not just write code, but crafts real solutions.',
        'about.p1': 'I am an Information Systems Fresh Graduate focused on web development. Deep interest in the Laravel ecosystem, MySQL database design, information systems analysis, and intuitive UI/UX.',
        'about.p2': 'I believe that blending strong technical expertise with user-centric thinking is the key to building great digital products.',
        'about.fact1': 'Clean and well-structured code',
        'about.fact2': 'Detail-oriented & problem solver',
        'about.fact3': 'Fast learner & collaborative team player',
        'about.fact4': 'Experienced with Laravel & MySQL',
        'about.btn': 'More About Me',
        'about.card1_t': 'Education',
        'about.card1_s': 'Fresh Graduate B.Sc. IS',
        'about.card2_t': 'Location',
        'about.card3_t': 'Experience',
        'about.card3_s': 'Internship & Freelance',

        // Services Section
        'services.tag': 'Services',
        'services.heading': 'What can I',
        'services.accent': 'do for you?',
        'services.sub': 'Ready to help you build tailored digital solutions that deliver results.',
        'services.s1_desc': 'Building dynamic and responsive websites using clean Laravel, PHP, HTML, and CSS architecture.',
        'services.s2_title': 'Database Management',
        'services.s2_desc': 'Designing efficient relational database structures with MySQL, optimized schema, and fast queries.',
        'services.s3_desc': 'Crafting clean, modern, and user-friendly web interfaces responsive across all modern devices.',
        'services.s4_title': 'Information Systems',
        'services.s4_desc': 'Developing web-based management systems such as data administration, automated reports, and dashboards.',

        // Skills Section
        'skills.tag': 'Skills & Tech',
        'skills.heading': 'Technologies I',
        'skills.accent': 'master',
        'skills.sub': 'Tools and frameworks I actively use in real-world projects.',
        'skills.all_btn': 'View All Tech Stack',

        // Projects Section
        'projects.tag': 'Portfolio',
        'projects.heading': 'Featured',
        'projects.accent': 'recent projects',
        'projects.sub': 'Selection of my best web development and system engineering projects.',
        'projects.done': '✅ Completed',
        'projects.p1_title': 'Hosting Management & Billing System',
        'projects.p1_desc': 'Web-based information system to manage hosting clients, service packages, and automated invoice billing.',
        'projects.p2_title': 'Host Reminder — Hosting & Domain Expiry Reminder',
        'projects.p2_desc': 'Web monitoring system to track client domain and server expiration dates with priority alerts and direct WhatsApp notifications.',
        'projects.p3_title': 'Interactive & Personal Portfolio Website',
        'projects.p3_desc': 'Modern IT-grade portfolio website built with Laravel 12 to showcase experience and projects.',
        'projects.p4_title': 'Kasir POS — Retail POS & Digital Store Management',
        'projects.p4_desc': 'Integrated multi-role POS application featuring barcode checkout, QRIS/Cash payments, inventory tracking, and profit & loss analytics.',
        'projects.all_btn': 'Explore All Projects',

        // Journey Section
        'journey.tag': 'Journey',
        'journey.heading': 'How I have',
        'journey.accent': 'grown',
        'journey.j1_title': 'High School',
        'journey.j1_desc': 'First introduced to computers and basic logic programming.',
        'journey.j2_title': 'University Degree',
        'journey.j2_desc': 'Completed B.Sc. in Information Systems, deeply studying Laravel & software engineering.',
        'journey.j3_title': 'Web Developer Internship',
        'journey.j3_desc': 'Real-world experience building information systems for enterprises.',
        'journey.j4_title': 'Fresh Graduate',
        'journey.j4_desc': 'Information Systems fresh graduate eager to deliver value in professional roles!',

        // CTA Section
        'cta.tag': '👋 Ready to Collaborate?',
        'cta.heading': 'Let us Bring Your Ideas',
        'cta.accent': 'to Life Together',
        'cta.desc': 'Have a project in mind? Looking for a dedicated developer for your team? I am open for discussion!',
        'cta.btn_contact': 'Get In Touch',

        // Footer Section
        'footer.tagline': 'Building modern, efficient, and production-ready web applications with Laravel, PHP, and MySQL.',
        'footer.pages': 'Navigation',
        'footer.connect': 'Connect & Media'
    }
};

/* ----------------------------------------------------------------
   2. LANGUAGE SWITCHER LOGIC
   ---------------------------------------------------------------- */
function initLanguage() {
    const savedLang = localStorage.getItem('farhan_portfolio_lang') || 'id';
    setLanguage(savedLang);
}

function setLanguage(lang) {
    document.documentElement.setAttribute('lang', lang);
    localStorage.setItem('farhan_portfolio_lang', lang);

    // Update segmented buttons
    document.querySelectorAll('.lang-pill-btn').forEach(btn => {
        if (btn.dataset.lang === lang) {
            btn.classList.add('active');
        } else {
            btn.classList.remove('active');
        }
    });

    document.querySelectorAll('.drawer-lang-btn').forEach(btn => {
        if (btn.dataset.lang === lang) {
            btn.classList.add('active');
        } else {
            btn.classList.remove('active');
        }
    });

    // Translate all elements with data-i18n
    document.querySelectorAll('[data-i18n]').forEach(el => {
        const key = el.getAttribute('data-i18n');
        if (translations[lang] && translations[lang][key]) {
            el.textContent = translations[lang][key];
        }
    });
}

// Event Listeners for Navbar Language Buttons
document.querySelectorAll('.lang-pill-btn, .drawer-lang-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const targetLang = btn.dataset.lang;
        if (targetLang) {
            setLanguage(targetLang);
            showToast(`Bahasa diubah ke ${targetLang === 'id' ? 'Bahasa Indonesia 🇮🇩' : 'English 🇬🇧'}`, 'info');
        }
    });
});

initLanguage();

/* ----------------------------------------------------------------
   3. THEME SWITCHER (DARK / LIGHT MODE & PERSISTENCE)
   ---------------------------------------------------------------- */
const themeToggleBtn = document.getElementById('themeToggleBtn');
const drawerThemeBtn = document.getElementById('drawerThemeBtn');

function initTheme() {
    const savedTheme = localStorage.getItem('farhan_portfolio_theme');
    if (savedTheme) {
        document.documentElement.setAttribute('data-theme', savedTheme);
    } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.documentElement.setAttribute('data-theme', 'dark');
    }
}

function toggleTheme() {
    const currentTheme = document.documentElement.getAttribute('data-theme') || 'light';
    const newTheme     = currentTheme === 'dark' ? 'light' : 'dark';
    
    document.documentElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('farhan_portfolio_theme', newTheme);
    
    showToast(`Mode ${newTheme === 'dark' ? 'Gelap 🌙' : 'Terang ☀️'} diaktifkan`, 'info');
}

if (themeToggleBtn) {
    themeToggleBtn.addEventListener('click', toggleTheme);
}

if (drawerThemeBtn) {
    drawerThemeBtn.addEventListener('click', toggleTheme);
}

initTheme();

/* ----------------------------------------------------------------
   4. NAVBAR — Scroll effect, Dropdown, Mobile Drawer
   ---------------------------------------------------------------- */
const navbar        = document.getElementById('navbar');
const navToggle     = document.getElementById('navToggle');
const navDrawer     = document.getElementById('navDrawer');
const navOverlay    = document.getElementById('navOverlay');
const navDropdownBtn = document.getElementById('navDropdownBtn');
const dropdownParent = navDropdownBtn ? navDropdownBtn.closest('.nav-item--dropdown') : null;

window.addEventListener('scroll', function () {
    if (!navbar) return;
    if (window.scrollY > 40) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
    toggleBackToTop();
});

function openDrawer() {
    if (!navDrawer) return;
    navDrawer.classList.add('open');
    navOverlay.classList.add('open');
    navToggle.classList.add('open');
    navToggle.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
}

function closeDrawer() {
    if (!navDrawer) return;
    navDrawer.classList.remove('open');
    navOverlay.classList.remove('open');
    navToggle.classList.remove('open');
    navToggle.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
}

if (navToggle) {
    navToggle.addEventListener('click', function () {
        if (navDrawer.classList.contains('open')) {
            closeDrawer();
        } else {
            openDrawer();
        }
    });
}

if (navOverlay) {
    navOverlay.addEventListener('click', closeDrawer);
}

document.querySelectorAll('.nav-drawer-link').forEach(function (link) {
    link.addEventListener('click', closeDrawer);
});

document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        closeDrawer();
        closeDropdown();
    }
});

function openDropdown() {
    if (!dropdownParent) return;
    dropdownParent.classList.add('open');
    navDropdownBtn.setAttribute('aria-expanded', 'true');
}

function closeDropdown() {
    if (!dropdownParent) return;
    dropdownParent.classList.remove('open');
    navDropdownBtn.setAttribute('aria-expanded', 'false');
}

if (navDropdownBtn) {
    navDropdownBtn.addEventListener('click', function (e) {
        e.stopPropagation();
        if (dropdownParent.classList.contains('open')) {
            closeDropdown();
        } else {
            openDropdown();
        }
    });
}

document.addEventListener('click', function (e) {
    if (dropdownParent && !dropdownParent.contains(e.target)) {
        closeDropdown();
    }
});

/* ----------------------------------------------------------------
   5. TOAST NOTIFICATION MANAGER
   ---------------------------------------------------------------- */
function showToast(message, type = 'info') {
    const container = document.getElementById('toastContainer');
    if (!container) return;

    const toast = document.createElement('div');
    toast.className = `toast toast--${type}`;

    let iconClass = 'fas fa-info-circle';
    if (type === 'success') iconClass = 'fas fa-check-circle';
    if (type === 'error')   iconClass = 'fas fa-exclamation-circle';

    toast.innerHTML = `<i class="${iconClass}"></i> <span>${message}</span>`;
    container.appendChild(toast);

    setTimeout(() => {
        toast.style.opacity = '0';
        toast.style.transform = 'translateY(20px)';
        setTimeout(() => toast.remove(), 300);
    }, 3000);
}

/* ----------------------------------------------------------------
   6. BACK TO TOP BUTTON
   ---------------------------------------------------------------- */
const backToTopBtn = document.getElementById('backToTop');

function toggleBackToTop() {
    if (!backToTopBtn) return;
    if (window.scrollY > 400) {
        backToTopBtn.classList.add('visible');
    } else {
        backToTopBtn.classList.remove('visible');
    }
}

if (backToTopBtn) {
    backToTopBtn.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

/* ----------------------------------------------------------------
   7. SKILL BAR ANIMATION (IntersectionObserver)
   ---------------------------------------------------------------- */
const skillBars = document.querySelectorAll('.skill-bar, .skill-bar-fill, .skill-pill-bar');

if (skillBars.length > 0) {
    const skillObs = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                const target = entry.target;
                const width  = target.getAttribute('data-width') || target.style.getPropertyValue('--target-width');
                if (width) {
                    target.style.transition = 'width 1.2s cubic-bezier(0.4, 0, 0.2, 1)';
                    target.style.width = width + '%';
                }
                skillObs.unobserve(target);
            }
        });
    }, { threshold: 0.2 });

    skillBars.forEach(function (bar) {
        const w = bar.getAttribute('data-width');
        if (w) bar.style.width = '0';
        skillObs.observe(bar);
    });
}

/* ----------------------------------------------------------------
   8. FADE-IN ANIMATION
   ---------------------------------------------------------------- */
const fadeEls = document.querySelectorAll(
    '.skill-card, .skill-detail-card, .skill-pill-card, ' +
    '.project-card, .project-main-card, ' +
    '.fp-card, ' +
    '.timeline-content, .exp-card, ' +
    '.education-card, .edu-card-v2, .cert-card-v2, .achievement-card, .edu-cta-card, ' +
    '.contact-item, .contact-v2-item, ' +
    '.stat-card, .service-card, .value-card, ' +
    '.mini-card, .interest-card, .journey-card'
);

if (fadeEls.length > 0) {
    const styleTag = document.createElement('style');
    styleTag.textContent = `
        .fade-in-ready {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.55s ease, transform 0.55s ease;
        }
        .fade-in-ready.visible {
            opacity: 1;
            transform: translateY(0);
        }
    `;
    document.head.appendChild(styleTag);

    fadeEls.forEach(function (el) {
        el.classList.add('fade-in-ready');
    });

    const fadeObs = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                const idx = Array.from(fadeEls).indexOf(entry.target);
                setTimeout(function () {
                    entry.target.classList.add('visible');
                }, (idx % 6) * 70);
                fadeObs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    fadeEls.forEach(function (el) {
        fadeObs.observe(el);
    });
}

/* ----------------------------------------------------------------
   9. TYPEWRITER EFFECT
   ---------------------------------------------------------------- */
const typewriterEl = document.getElementById('typewriter');
if (typewriterEl) {
    const wordsMap = {
        id: ['Fresh Graduate Sistem Informasi', 'Fullstack Developer', 'Web Developer', 'Laravel Specialist', 'System Analyst'],
        en: ['Information Systems Graduate', 'Fullstack Developer', 'Web Developer', 'Laravel Specialist', 'System Analyst']
    };
    let wordIdx = 0, charIdx = 0, isDeleting = false;

    function type() {
        const currentLang = document.documentElement.getAttribute('lang') || 'id';
        const words = wordsMap[currentLang] || wordsMap['id'];
        const word  = words[wordIdx % words.length];

        const current = isDeleting
            ? word.substring(0, charIdx--)
            : word.substring(0, charIdx++);

        typewriterEl.textContent = current;

        let delay = isDeleting ? 50 : 90;
        if (!isDeleting && charIdx === word.length + 1) {
            delay      = 1800;
            isDeleting = true;
        } else if (isDeleting && charIdx === 0) {
            isDeleting = false;
            wordIdx    = (wordIdx + 1) % words.length;
            delay      = 350;
        }
        setTimeout(type, delay);
    }
    type();
}
