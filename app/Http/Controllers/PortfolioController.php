<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| PortfolioController
|--------------------------------------------------------------------------
| Controller utama portofolio Muhamad Farhan.
| Mengelola data dinamis untuk 7 halaman:
| Home, About, Skills, Projects, Experience, Education, dan Contact.
|
*/

class PortfolioController extends Controller
{
    /**
     * Halaman Home (/)
     */
    public function home()
    {
        $profil = [
            'nama'         => 'Muhamad Farhan',
            'nama_lengkap' => 'Muhamad Farhan',
            'profesi'      => 'Fullstack Developer | Web Developer',
            'deskripsi'    => 'Fresh Graduate Sistem Informasi yang antusias di bidang pengembangan web. Saya bersemangat membangun aplikasi web modern, rapi, dan solutif menggunakan Laravel, PHP, dan MySQL.',
            'email'        => 'mhdfarhan760@gmail.com',
            'whatsapp'     => '6281363459461',
            'github'       => 'https://github.com/muhmdfarhan',
            'linkedin'     => 'https://www.linkedin.com/in/mhmdfarhann/',
            'instagram'    => 'https://www.instagram.com/muhamadfarhann__/',
            'kota'         => 'Padang, Indonesia',
            'cv_url'       => asset('files/CV-Muhamad-Farhan.pdf'),
        ];

        return view('home', compact('profil'));
    }

    /**
     * Halaman About (/about)
     */
    public function about()
    {
        $profil = [
            'nama'         => 'Muhamad Farhan',
            'nama_lengkap' => 'Muhamad Farhan',
            'email'        => 'mhdfarhan760@gmail.com',
            'whatsapp'     => '6281363459461',
            'github'       => 'https://github.com/muhmdfarhan',
            'linkedin'     => 'https://www.linkedin.com/in/mhmdfarhann/',
            'instagram'    => 'https://www.instagram.com/muhamadfarhann__/',
            'kota'         => 'Padang, Indonesia',
            'cv_url'       => asset('files/CV-Muhamad-Farhan.pdf'),
            'deskripsi'    => 'Saya adalah Fresh Graduate Sistem Informasi yang berfokus pada web development. Memiliki minat mendalam pada ekosistem Laravel, perancangan database MySQL, analisis sistem informasi, dan antarmuka pengguna (UI/UX) yang intuitif.',
            'minat'        => [
                'Web Development',
                'UI/UX Design',
                'Database Management',
                'Problem Solving',
            ],
        ];

        return view('about', compact('profil'));
    }

    /**
     * Halaman Skills (/skills)
     */
    public function skills()
    {
        $skills = [
            'Backend Development' => [
                ['nama' => 'PHP 8.x',   'nilai' => 80, 'level' => 'Mahir'],
                ['nama' => 'Laravel',   'nilai' => 75, 'level' => 'Menengah'],
                ['nama' => 'MySQL',     'nilai' => 70, 'level' => 'Menengah'],
                ['nama' => 'REST API',  'nilai' => 65, 'level' => 'Menengah'],
            ],
            'Frontend Development' => [
                ['nama' => 'HTML5 & Blade', 'nilai' => 90, 'level' => 'Mahir'],
                ['nama' => 'CSS3 & Flex/Grid','nilai' => 80, 'level' => 'Mahir'],
                ['nama' => 'JavaScript (ES6)', 'nilai' => 65, 'level' => 'Menengah'],
                ['nama' => 'Responsive Design','nilai' => 85, 'level' => 'Mahir'],
            ],
            'Tools & System Analysis' => [
                ['nama' => 'Git & GitHub',   'nilai' => 75, 'level' => 'Menengah'],
                ['nama' => 'UI/UX & Figma',  'nilai' => 65, 'level' => 'Menengah'],
                ['nama' => 'Analisis Sistem','nilai' => 70, 'level' => 'Menengah'],
                ['nama' => 'Microsoft Office','nilai' => 85, 'level' => 'Mahir'],
            ],
        ];

        return view('skills', compact('skills'));
    }

    /**
     * Halaman Projects (/projects)
     */
    public function projects()
    {
        $projects = [
            [
                'nama'        => 'HostBill — Sistem Pengelolaan & Penagihan Hosting',
                'instansi'    => 'CV. Mediatama Web Indonesia',
                'deskripsi'   => 'Aplikasi web enterprise untuk mengelola siklus operasional web hosting dan pendaftaran domain. Mengintegrasikan Admin Panel untuk monitoring finansial dan Client Panel mandiri untuk pemesanan paket hosting.',
                'fitur'       => [
                    'Dual Role System: Admin Panel & Client Panel terpisah',
                    'Katalog Paket Hosting (Starter, Bisnis, Premium) & Order Domain Baru',
                    'Otomatisasi Penagihan Invoice, Status Pembayaran & Notifikasi',
                    'Dashboard Analitik Grafik Pendapatan Bulanan & Tracking Order Aktif',
                ],
                'teknologi'   => ['Laravel 12', 'PHP 8.2', 'MySQL Relasional', 'Blade Engine', 'Tailwind/CSS3'],
                'gambar'      => 'images/project-1.jpg',
                'gallery'     => [
                    'images/projects/hostbill-landing.png',
                    'images/projects/hostbill-admin-dashboard.png',
                    'images/projects/hostbill-client-panel.png',
                    'images/projects/hostbill-order.png',
                    'images/projects/hostbill-login.png',
                ],
                'github'      => 'https://github.com/muhmdfarhan/hostbill',
                'demo'        => null,
                'status'      => 'Selesai',
            ],
            [
                'nama'        => 'Kasir POS — Sistem Kasir & Manajemen Toko Digital',
                'instansi'    => 'Aplikasi Point of Sale & Retail',
                'deskripsi'   => 'Sistem kasir dan manajemen toko terintegrasi dengan arsitektur multi-peran (Admin/Owner, Kasir, Staff Gudang). Dilengkapi modul POS kasir cepat, barcode scanner, multi-metode pembayaran (Tunai, Transfer, QRIS), manajemen stok inventaris, serta laporan laba rugi komprehensif.',
                'fitur'       => [
                    'Sistem Multi-User Role: Hak akses terpisah untuk Administrator/Owner, Kasir Utama, dan Staff Gudang',
                    'Antarmuka Kasir/POS Cepat: Pencarian instan, filter kategori produk, scan barcode, dan multi-payment (Tunai, Transfer, QRIS)',
                    'Manajemen Inventaris & Stok: Pelacakan stok real-time, peringatan stok menipis, dan rekap pembelian supplier',
                    'Pusat Laporan & Analitik (6 Modul): Laporan Laba Rugi, Penjualan, Mutasi Kas, Pembelian, serta Hutang & Piutang',
                ],
                'teknologi'   => ['Laravel 12', 'PHP 8.2', 'MySQL Relasional', 'Blade Engine', 'Tailwind/CSS3', 'Chart.js'],
                'gambar'      => 'images/project-4.jpg',
                'gallery'     => [
                    'images/projects/kasirpos-login.png',
                    'images/projects/kasirpos-checkout.png',
                    'images/projects/kasirpos-dashboard-owner.png',
                    'images/projects/kasirpos-dashboard-kasir.png',
                    'images/projects/kasirpos-laporan-hub.png',
                ],
                'github'      => 'https://github.com/muhmdfarhan/web-ipos5',
                'demo'        => null,
                'status'      => 'Selesai',
            ],
            [
                'nama'        => 'Host Reminder — Sistem Pemantauan & Pengingat Jatuh Tempo Hosting / Domain',
                'instansi'    => 'Proyek Manajemen Web & Klien Hosting',
                'deskripsi'   => 'Aplikasi web cerdas untuk memantau masa aktif domain dan server hosting klien secara real-time. Dilengkapi klasifikasi status prioritas (Semua Klien, Akan Jatuh Tempo, dan Mendesak), integrasi notifikasi direct WhatsApp, serta pencatatan kredensial panel hosting (cPanel/VPS).',
                'fitur'       => [
                    'Status Indikator Prioritas: Klasifikasi otomatis status klien (Semua Klien, Akan Jatuh Tempo, dan Mendesak)',
                    'Manajemen Data Klien Lengkap: Pencatatan domain, tanggal jatuh tempo, username/password panel, tipe panel (cPanel/VPS), dan riwayat klien',
                    'Integrasi Kontak WhatsApp Cepat: Pengiriman notifikasi pengingat jatuh tempo secara langsung via direct WhatsApp link',
                    'Pencarian & Filter Cepat: Filter pencarian instan berdasarkan nama instansi atau alamat domain',
                ],
                'teknologi'   => ['Laravel', 'PHP 8.2', 'MySQL Relasional', 'JavaScript ES6', 'Tailwind/CSS3', 'WhatsApp API'],
                'gambar'      => 'images/project-2.jpg',
                'gallery'     => [
                    'images/projects/hostreminder-dashboard.png',
                    'images/projects/hostreminder-kategori.png',
                    'images/projects/hostreminder-form-tambah.png',
                ],
                'github'      => 'https://github.com/muhmdfarhan/host-reminder',
                'demo'        => null,
                'status'      => 'Selesai',
            ],
            [
                'nama'        => 'Personal Website & Portofolio Interaktif Modern',
                'instansi'    => 'Portofolio Personal',
                'deskripsi'   => 'Website portofolio berstandar industri IT modern yang dibangun dengan arsitektur Laravel clean. Dilengkapi 19 sertifikat resmi dengan Lightbox Modal, dark mode switcher, dan performa tinggi.',
                'fitur'       => [
                    '19 Kredensial & Penghargaan Resmi dengan Modal Lightbox Zoom',
                    'Filter Kategori Sertifikat Dinamis (Jaringan, AI, Web Dev, Tools)',
                    'Desain UI/UX Responsif dengan Theme Switcher (Dark & Light Mode)',
                    'Download CV Terintegrasi & Kontak Interaktif WhatsApp/Email',
                ],
                'teknologi'   => ['Laravel 12', 'PHP 8.2', 'Blade Architecture', 'Custom CSS', 'Vanilla JS'],
                'gambar'      => 'images/project-3.jpg',
                'gallery'     => [
                    'images/project-3.jpg',
                ],
                'github'      => 'https://github.com/muhmdfarhan/web-portofolio-farhan',
                'demo'        => 'http://127.0.0.1:8000',
                'status'      => 'Selesai',
            ],
        ];

        return view('projects', compact('projects'));
    }

    /**
     * Halaman Experience (/experience)
     */
    public function experience()
    {
        $experiences = [
            [
                'judul'      => 'Wakil Presiden Mahasiswa (Wapresma)',
                'perusahaan' => 'Badan Eksekutif Mahasiswa (BEM) Universitas Metamedia',
                'periode'    => '2025 – 2026',
                'tipe'       => 'Kepemimpinan & Organisasi',
                'deskripsi'  => 'Memimpin arah kebijakan strategis organisasi mahasiswa tingkat universitas pada Kabinet Integritas. Mengoordinasikan program kerja lintas kementerian, advokasi aspirasi mahasiswa, serta relasi eksternal institusi.',
                'icon'       => '🏛️',
            ],
            [
                'judul'      => 'Sistem Informasi Intern (Magang Industri)',
                'perusahaan' => 'LPK Mediatama Web Indonesia',
                'periode'    => 'Jun 2025 – Agu 2025',
                'tipe'       => 'Magang Industri',
                'deskripsi'  => 'Melaksanakan magang industri dan pelatihan intensif di bidang Sistem Informasi dan Web Development pada LPK Mediatama Web Indonesia dengan perolehan hasil evaluasi Sangat Baik.',
                'icon'       => '💻',
            ],
            [
                'judul'      => 'Layout Designer Intern (Magang Industri)',
                'perusahaan' => 'KBMDG Studio (Multimedia & IT Solution)',
                'periode'    => 'Mar 2021 – Jun 2021',
                'tipe'       => 'Magang Industri',
                'deskripsi'  => 'Melaksanakan magang industri di bidang multimedia dan perancangan tata letak visual (layout design) dengan capaian predikat Sangat Memuaskan.',
                'icon'       => '🎨',
            ],
            [
                'judul'      => 'Freelance Laravel & Web Project',
                'perusahaan' => 'Proyek Mandiri & Klien',
                'periode'    => '2023 – Sekarang',
                'tipe'       => 'Proyek',
                'deskripsi'  => 'Mengembangkan aplikasi web custom sesuai spesifikasi pengguna, mulai dari sistem informasi manajemen hosting, pemantauan domain, hingga antarmuka sistem interaktif berbasis Laravel dan MySQL.',
                'icon'       => '🚀',
            ],
        ];

        return view('experience', compact('experiences'));
    }

    /**
     * Halaman Education (/education)
     */
    public function education()
    {
        $educations = [
            [
                'institusi'   => 'Universitas Metamedia',
                'jurusan'     => 'Sistem Informasi',
                'jenjang'     => 'S1 (Sarjana)',
                'tahun_masuk' => '2022',
                'tahun_lulus' => '2026',
                'deskripsi'   => 'Lulusan Sarjana (S1) Sistem Informasi dengan fokus pada arsitektur sistem informasi, perancangan basis data relasional, pemrograman web tingkat lanjut (Laravel), rekayasa perangkat lunak, dan manajemen proyek IT.',
                'icon'        => '🎓',
            ],
            [
                'institusi'   => 'SMKN 1 Sintuk Toboh Gadang',
                'jurusan'     => 'Rekayasa Perangkat Lunak',
                'jenjang'     => 'SMK',
                'tahun_masuk' => '2019',
                'tahun_lulus' => '2022',
                'deskripsi'   => 'Mempelajari fondasi logika pemrograman, algoritma dasar, jaringan komputer, serta pemodelan sistem.',
                'icon'        => '🏫',
            ],
        ];

        $certificates = [
            [
                'judul'          => 'MikroTik Certified Network Associate (MTCNA)',
                'penerbit'       => 'MikroTikls SIA (Riga, Latvia)',
                'tahun'          => '2023 – 2026',
                'kategori'       => 'Jaringan & Infrastruktur',
                'credential_id'  => '2306NA7271',
                'credential_url' => 'https://mikrotik.com/certificates',
                'icon'           => 'fas fa-network-wired',
                'icon_color'     => '#d9232e',
                'icon_bg'        => 'rgba(217, 35, 46, 0.12)',
                'skills'         => ['RouterOS', 'Routing & Subnetting', 'Firewall & NAT', 'Bandwidth Management', 'Wireless'],
                'deskripsi'      => 'Sertifikasi internasional MikroTik Certified Network Associate (MTCNA) yang memvalidasi kompetensi teknis dalam konfigurasi jaringan, manajemen bandwidth, routing dasar, firewall security, dan administrasi MikroTik RouterOS.',
                'gambar'         => 'images/certificates/cert-mikrotik-mtcna.png',
            ],
            [
                'judul'          => 'Sertifikat Kompetensi — Rekayasa Perangkat Lunak (Web Dev)',
                'penerbit'       => 'Badan Nasional Sertifikasi Profesi (BNSP)',
                'tahun'          => '2022 – 2025',
                'kategori'       => 'Sertifikasi Profesi BNSP',
                'credential_id'  => 'No. 62019 3512 2 0000230 2022',
                'credential_url' => null,
                'icon'           => 'fas fa-award',
                'icon_color'     => '#b45309',
                'icon_bg'        => 'rgba(180, 83, 9, 0.12)',
                'skills'         => ['Rekayasa Perangkat Lunak', 'Web Development', 'PHP & MySQL', 'Analisis Sistem', 'Standar SKKNI'],
                'deskripsi'      => 'Sertifikat kompetensi kerja berstandar SKKNI dari Badan Nasional Sertifikasi Profesi (BNSP) melalui LSP P1 SMKN 1 Sintuk Toboh Gadang, menyatakan kompeten di bidang Rekayasa Perangkat Lunak (Web Development).',
                'gambar'         => 'images/certificates/cert-bnsp-web-dev.jpg',
            ],
            [
                'judul'          => 'AI Basics: Overview of AI (Certificate of Completion)',
                'penerbit'       => 'Huawei Talent (华为人才在线)',
                'tahun'          => '2024',
                'kategori'       => 'Artificial Intelligence',
                'credential_id'  => 'ICT20241218008595',
                'credential_url' => 'https://e.huawei.com/en/talent',
                'icon'           => 'fas fa-brain',
                'icon_color'     => '#cf0a2c',
                'icon_bg'        => 'rgba(207, 10, 44, 0.12)',
                'skills'         => ['Artificial Intelligence', 'Machine Learning', 'Deep Learning Concepts', 'AI Application'],
                'deskripsi'      => 'Sertifikasi kelulusan studi dan ujian resmi dari Huawei Talent mengenai konsep fundamental Artificial Intelligence (AI), alur Machine Learning, Deep Learning, serta implementasi teknologi AI modern.',
                'gambar'         => 'images/certificates/cert-huawei-ai-basics.png',
            ],
            [
                'judul'          => 'How to be Product Minded Software Engineer',
                'penerbit'       => 'Indosat Ooredoo Hutchison & Dicoding',
                'tahun'          => '2023',
                'kategori'       => 'Software Engineering',
                'credential_id'  => 'IDCamp x Dicoding 2023',
                'credential_url' => 'https://www.dicoding.com',
                'icon'           => 'fas fa-laptop-code',
                'icon_color'     => '#0284c7',
                'icon_bg'        => 'rgba(2, 132, 199, 0.12)',
                'skills'         => ['Product Mindset', 'Software Engineering', 'User-Centric Architecture', 'Agile & Problem Solving'],
                'deskripsi'      => 'Sertifikat partisipasi program IDCamp x Dicoding Indonesia yang membahas pembentukan pola pikir insinyur perangkat lunak berbasis produk (product-minded), orientasi nilai pengguna, dan arsitektur solusi sistem IT.',
                'gambar'         => 'images/certificates/cert-dicoding-product-engineer.png',
            ],
            [
                'judul'          => 'Mahasiswa Berprestasi Non Akademik (SK Rektor)',
                'penerbit'       => 'Universitas Metamedia (Rektor)',
                'tahun'          => '2025',
                'kategori'       => 'Penghargaan Institusi',
                'credential_id'  => 'SK: 018/004/11.SRT/META-U/X/2025',
                'credential_url' => null,
                'icon'           => 'fas fa-medal',
                'icon_color'     => '#6366f1',
                'icon_bg'        => 'rgba(99, 102, 241, 0.12)',
                'skills'         => ['Kepemimpinan', 'Prestasi Non Akademik', 'Kontribusi Kampus', 'Inovasi IT'],
                'deskripsi'      => 'Piagam penghargaan resmi yang diterbitkan oleh Rektor Universitas Metamedia (Yossyafra, ST., M.Eng.Sc., Ph.D.) atas prestasi luar biasa sebagai Mahasiswa Berprestasi Non Akademik pada Wisuda Ke-4 TA 2024/2025.',
                'gambar'         => 'images/certificates/cert-metamedia-mahasiswa-berprestasi.jpg',
            ],
            [
                'judul'          => 'Belajar Prinsip Pemrograman SOLID',
                'penerbit'       => 'Dicoding Indonesia',
                'tahun'          => '2023 – 2026',
                'kategori'       => 'Software Architecture',
                'credential_id'  => 'QLZ9Q55NEZ5D',
                'credential_url' => 'https://www.dicoding.com/certificates/QLZ9Q55NEZ5D',
                'icon'           => 'fas fa-cube',
                'icon_color'     => '#8b5cf6',
                'icon_bg'        => 'rgba(139, 92, 246, 0.12)',
                'skills'         => ['OOP Design', 'S.O.L.I.D Principles', 'Clean Architecture', 'Refactoring', 'Design Patterns'],
                'deskripsi'      => 'Sertifikasi kompetensi kelulusan arsitektur perangkat lunak berbasis Object-Oriented Programming (OOP) dan penguasaan 5 prinsip SOLID (Single Responsibility, Open-Closed, Liskov Substitution, Interface Segregation, Dependency Inversion) untuk mencegah code smells.',
                'gambar'         => 'images/certificates/cert-dicoding-prinsip-solid.png',
            ],
            [
                'judul'          => 'Belajar Dasar Structured Query Language (SQL)',
                'penerbit'       => 'Dicoding Indonesia',
                'tahun'          => '2023 – 2026',
                'kategori'       => 'Database & Query',
                'credential_id'  => 'GRX5D7V6KX0M',
                'credential_url' => 'https://www.dicoding.com/certificates/GRX5D7V6KX0M',
                'icon'           => 'fas fa-database',
                'icon_color'     => '#059669',
                'icon_bg'        => 'rgba(5, 150, 105, 0.12)',
                'skills'         => ['Structured Query Language (SQL)', 'Basis Data Relasional', 'DDL & DML', 'DBMS Industry', 'Query Optimization'],
                'deskripsi'      => 'Sertifikasi kompetensi pengelolaan data dan basis data relasional tingkat industri, mencakup sintaks DDL (tabel & constraints), DML (SELECT, INSERT, UPDATE, DELETE), serta perancangan skema data efisien.',
                'gambar'         => 'images/certificates/cert-dicoding-dasar-sql.png',
            ],
            [
                'judul'          => 'Memulai Pemrograman Dengan Java',
                'penerbit'       => 'Dicoding Indonesia',
                'tahun'          => '2023 – 2026',
                'kategori'       => 'Backend & OOP',
                'credential_id'  => '53XEN60MRXRN',
                'credential_url' => 'https://www.dicoding.com/certificates/53XEN60MRXRN',
                'icon'           => 'fab fa-java',
                'icon_color'     => '#ea580c',
                'icon_bg'        => 'rgba(234, 88, 12, 0.12)',
                'skills'         => ['Java SE', 'Object-Oriented Programming', 'Collection Framework', 'Exception Handling', 'IntelliJ IDEA'],
                'deskripsi'      => 'Sertifikasi kompetensi pemrograman Java berstandar industri dengan fokus kuat pada pilar OOP (Class, Object, Inheritance, Encapsulation, Polymorphism, Interface), Collection (List, Set, Map), dan penanganan error.',
                'gambar'         => 'images/certificates/cert-dicoding-pemrograman-java.png',
            ],
            [
                'judul'          => 'Memulai Pemrograman Dengan C',
                'penerbit'       => 'Dicoding Indonesia',
                'tahun'          => '2023 – 2026',
                'kategori'       => 'Dasar Pemrograman',
                'credential_id'  => 'N9ZO687K6XG5',
                'credential_url' => 'https://www.dicoding.com/certificates/N9ZO687K6XG5',
                'icon'           => 'fas fa-code',
                'icon_color'     => '#0284c7',
                'icon_bg'        => 'rgba(2, 132, 199, 0.12)',
                'skills'         => ['Bahasa C', 'Logika Pemrograman', 'Array & Matriks', 'Fungsi & Prosedur', 'Problem Solving'],
                'deskripsi'      => 'Sertifikasi kompetensi dasar algoritma dan pemrograman menggunakan bahasa C, mencakup manajemen tipe data memori, percabangan kondisional, perulangan, pemrosesan array multi-dimensi, dan modularisasi subprogram.',
                'gambar'         => 'images/certificates/cert-dicoding-pemrograman-c.png',
            ],
            [
                'judul'          => 'Belajar Dasar Pemrograman Web',
                'penerbit'       => 'Dicoding & Google Developers Partner',
                'tahun'          => '2023 – 2026',
                'kategori'       => 'Front-End Development',
                'credential_id'  => 'QLZ9R9NGEP5D',
                'credential_url' => 'https://www.dicoding.com/certificates/QLZ9R9NGEP5D',
                'icon'           => 'fab fa-html5',
                'icon_color'     => '#ea580c',
                'icon_bg'        => 'rgba(234, 88, 12, 0.12)',
                'skills'         => ['Semantic HTML5', 'CSS3 Modern', 'Flexbox Responsive', 'Layouting Multi-Device', 'Google Partner'],
                'deskripsi'      => 'Sertifikasi kelulusan kurikulum resmi Google Developers Authorized Training Partner di Dicoding (41 jam pelatihan), mencakup penguasaan struktur HTML5 semantik, CSS Box Model, layout responsif Flexbox, dan validasi submission proyek website.',
                'gambar'         => 'images/certificates/cert-dicoding-dasar-pemrograman-web.png',
            ],
            [
                'judul'          => 'Memulai Dasar Pemrograman untuk Menjadi Pengembang Software',
                'penerbit'       => 'Dicoding Indonesia & Prakerja',
                'tahun'          => '2023 – 2026',
                'kategori'       => 'Software Engineering',
                'credential_id'  => '0LZ09KMKKZ65',
                'credential_url' => 'https://www.dicoding.com/certificates/0LZ09KMKKZ65',
                'icon'           => 'fas fa-laptop-code',
                'icon_color'     => '#0284c7',
                'icon_bg'        => 'rgba(2, 132, 199, 0.12)',
                'skills'         => ['Analisis Kebutuhan Software', 'Diagram Alur Sistem', 'JavaScript (ES6)', 'HTML5 & CSS3', 'Dokumentasi Teknis'],
                'deskripsi'      => 'Sertifikasi kompetensi standar okupasi pengembang software (KBJI: 2512.03) terverifikasi Kartu Prakerja, memvalidasi kemampuan meneliti spesifikasi teknis, merancang diagram alur aplikasi, implementasi sintaks ES6, serta tata kelola dokumentasi pengarsipan kode.',
                'gambar'         => 'images/certificates/cert-dicoding-dasar-pengembang-software.png',
            ],
            [
                'judul'          => 'Belajar Dasar Git dengan GitHub',
                'penerbit'       => 'Dicoding Indonesia',
                'tahun'          => '2023 – 2026',
                'kategori'       => 'Version Control',
                'credential_id'  => 'EYX464105PDL',
                'credential_url' => 'https://www.dicoding.com/certificates/EYX464105PDL',
                'icon'           => 'fab fa-git-alt',
                'icon_color'     => '#f43f5e',
                'icon_bg'        => 'rgba(244, 63, 94, 0.12)',
                'skills'         => ['Git Command', 'GitHub Flow', 'Branching & Merge', 'Resolving Conflict', 'Team Collaboration'],
                'deskripsi'      => 'Sertifikasi kompetensi version control system modern menggunakan Git dan GitHub, mencakup alur branching, pull request, resolusi merge conflict, kolaborasi tim profesional, dan dokumentasi repository.',
                'gambar'         => 'images/certificates/cert-dicoding-git-github.png',
            ],
            [
                'judul'          => 'Wakil Presiden Mahasiswa (Wapresma BEM Kabinet Integritas)',
                'penerbit'       => 'Rektor Universitas Metamedia & Presma BEM',
                'tahun'          => '2025 – 2026',
                'kategori'       => 'Kepemimpinan & Organisasi',
                'credential_id'  => 'BEM01-25 / NIP: 197101111996031001',
                'credential_url' => null,
                'icon'           => 'fas fa-landmark',
                'icon_color'     => '#eab308',
                'icon_bg'        => 'rgba(234, 179, 8, 0.12)',
                'skills'         => ['Leadership', 'Manajemen Strategis Organisasi', 'Public Relations', 'Advokasi Mahasiswa', 'Kolaborasi Tim'],
                'deskripsi'      => 'Sertifikat penghargaan resmi yang ditandatangani oleh Rektor Universitas Metamedia dan Presiden Mahasiswa atas dedikasi dan loyalitas tinggi sebagai Wakil Presiden Mahasiswa BEM Universitas Metamedia Kabinet Integritas.',
                'gambar'         => 'images/certificates/cert-bem-wapresma-metamedia.png',
            ],
            [
                'judul'          => 'Penghargaan Bintang Aktivis (SK Rektor)',
                'penerbit'       => 'Rektor Universitas Metamedia',
                'tahun'          => '2026 – 2027',
                'kategori'       => 'Penghargaan Institusi',
                'credential_id'  => 'SK: 033/01.A/META-U/IX/2026',
                'credential_url' => null,
                'icon'           => 'fas fa-star',
                'icon_color'     => '#f59e0b',
                'icon_bg'        => 'rgba(245, 158, 11, 0.12)',
                'skills'         => ['Integritas', 'Aktivisme Kampus', 'Kontribusi Institusi', 'Kepemimpinan Mahasiswa'],
                'deskripsi'      => 'Penghargaan istimewa Bintang Aktivis yang ditetapkan melalui Surat Keputusan Rektor Universitas Metamedia (Yossyafra, ST., M.Eng.Sc., Ph.D.) pada Wisuda Ke-5 Tahun Ajaran 2026/2027.',
                'gambar'         => 'images/certificates/cert-bintang-aktivis-metamedia.jpg',
            ],
            [
                'judul'          => 'Sertifikat Panitia PKKMB Universitas Metamedia',
                'penerbit'       => 'Universitas Metamedia',
                'tahun'          => '2024',
                'kategori'       => 'Kepanitiaan & Event',
                'credential_id'  => 'No. 003/PKKMB/METAU-I/2024',
                'credential_url' => null,
                'icon'           => 'fas fa-users-cog',
                'icon_color'     => '#3b82f6',
                'icon_bg'        => 'rgba(59, 130, 246, 0.12)',
                'skills'         => ['Event Management', 'Koordinasi Acara', 'Teamwork', 'Komunikasi Publik'],
                'deskripsi'      => 'Sertifikat kepanitiaan Pengenalan Kehidupan Kampus bagi Mahasiswa Baru (PKKMB) TA 2024/2025 bertema "Menciptakan generasi teknologi yang kreatif dan berjiwa solidaritas".',
                'gambar'         => 'images/certificates/cert-panitia-pkkmb-metamedia.jpg',
            ],
            [
                'judul'          => 'Sertifikat Magang Industri — Layout Designer (Sangat Memuaskan)',
                'penerbit'       => 'KBMDG Studio (Multimedia & IT Solution)',
                'tahun'          => '2021',
                'kategori'       => 'Magang & Desain',
                'credential_id'  => 'No. 32.006/KBMDGS/ST/VI/2021',
                'credential_url' => null,
                'icon'           => 'fas fa-palette',
                'icon_color'     => '#10b981',
                'icon_bg'        => 'rgba(16, 185, 129, 0.12)',
                'skills'         => ['Layout Design', 'Graphic Production', 'UI Layouting', 'Multimedia Solution'],
                'deskripsi'      => 'Sertifikat resmi pelaksanaan program magang industri di KBMDG Studio Periode Ke-VII dengan predikat hasil Sangat Memuaskan di bidang Layout Design multimedia & IT solution.',
                'gambar'         => 'images/certificates/cert-kbmdg-studio-magang.jpg',
            ],
            [
                'judul'          => 'Peserta Pelatihan Kafe Koding "PYTHON"',
                'penerbit'       => 'Universitas Metamedia & Kafe Koding',
                'tahun'          => '2022',
                'kategori'       => 'Dasar Pemrograman',
                'credential_id'  => 'NIDN: 1026058701 / NIM: 201100044',
                'credential_url' => null,
                'icon'           => 'fab fa-python',
                'icon_color'     => '#38bdf8',
                'icon_bg'        => 'rgba(56, 189, 248, 0.12)',
                'skills'         => ['Python Basics', 'Syntax & Control Flow', 'Data Types', 'Problem Solving Logic'],
                'deskripsi'      => 'Sertifikat partisipasi aktif sebagai peserta pelatihan pemrograman intensif Kafe Koding Python yang diselenggarakan bersama jajaran pimpinan akademik Universitas Metamedia.',
                'gambar'         => 'images/certificates/cert-kafe-koding-python.jpg',
            ],
            [
                'judul'          => 'Uda Kreatif Kampus Universitas Metamedia 2023',
                'penerbit'       => 'Universitas Metamedia & BEM',
                'tahun'          => '2023',
                'kategori'       => 'Penghargaan Institusi',
                'credential_id'  => 'No. 003/S/PANPEL-PKM/BEM-META-U/VII/2023',
                'credential_url' => null,
                'icon'           => 'fas fa-crown',
                'icon_color'     => '#f59e0b',
                'icon_bg'        => 'rgba(245, 158, 11, 0.12)',
                'skills'         => ['Duta Kampus', 'Kreativitas & Inovasi', 'Public Speaking', 'Festival PKM'],
                'deskripsi'      => 'Penghargaan kehormatan sebagai Uda Kreatif Kampus Universitas Metamedia 2023 dalam kegiatan Uda & Uni pada Festival Pekan Kreativitas Mahasiswa (PKM) yang diselenggarakan oleh Rektorat dan BEM.',
                'gambar'         => 'images/certificates/cert-uda-kreatif-metamedia.jpg',
            ],
            [
                'judul'          => 'Sertifikat Magang Sistem Informasi — Mediatama Web Indonesia',
                'penerbit'       => 'LPK Mediatama Web Indonesia',
                'tahun'          => '2025',
                'kategori'       => 'Magang & Desain',
                'credential_id'  => 'No. 003/MMW/Sertifikat/LPK.MWI/V/2024',
                'credential_url' => null,
                'icon'           => 'fas fa-laptop-code',
                'icon_color'     => '#2563eb',
                'icon_bg'        => 'rgba(37, 99, 235, 0.12)',
                'skills'         => ['Sistem Informasi', 'Web Development', 'Android & Web', 'Analisis Sistem', 'LPK Terakreditasi'],
                'deskripsi'      => 'Sertifikat resmi kelulusan magang industri di LPK Mediatama Web Indonesia (Terakreditasi Lembaga Pelatihan Kerja) pada bidang Sistem Informasi dengan capaian predikat Sangat Baik.',
                'gambar'         => 'images/certificates/cert-mediatama-web-magang.jpg',
            ],
        ];

        $achievements = [
            [
                'judul'         => 'Mahasiswa Berprestasi Non Akademik',
                'penyelenggara' => 'Universitas Metamedia (SK Rektor)',
                'tahun'         => '2025',
                'tingkat'       => 'Tingkat Universitas (Wisuda Ke-4)',
                'badge'         => '🥇 Mahasiswa Berprestasi',
                'badge_variant' => 'gold',
                'icon'          => 'fas fa-medal',
                'credential_id' => 'SK: 018/004/11.SRT/META-U/X/2025',
                'deskripsi'     => 'Dianugerahi penghargaan resmi oleh Rektor Universitas Metamedia (Yossyafra, ST., M.Eng.Sc., Ph.D.) atas pencapaian dan keaktifan luar biasa sebagai Mahasiswa Berprestasi Non Akademik pada Wisuda Ke-4 TA 2024/2025.',
                'gambar'        => 'images/certificates/cert-metamedia-mahasiswa-berprestasi.jpg',
            ],
            [
                'judul'         => 'Penghargaan Bintang Aktivis Kampus',
                'penyelenggara' => 'Universitas Metamedia (SK Rektor)',
                'tahun'         => '2026',
                'tingkat'       => 'Tingkat Universitas (Wisuda Ke-5)',
                'badge'         => '⭐ Bintang Aktivis',
                'badge_variant' => 'gold',
                'icon'          => 'fas fa-star',
                'credential_id' => 'SK: 033/01.A/META-U/IX/2026',
                'deskripsi'     => 'Penghargaan bergengsi Bintang Aktivis dari Rektor Universitas Metamedia atas rekam jejak kepemimpinan, integritas, dan keaktifan berkontribusi nyata bagi almamater.',
                'gambar'        => 'images/certificates/cert-bintang-aktivis-metamedia.jpg',
            ],
            [
                'judul'         => 'Wakil Presiden Mahasiswa (Wapresma BEM)',
                'penyelenggara' => 'BEM Universitas Metamedia & Rektorat',
                'tahun'         => '2025 – 2026',
                'tingkat'       => 'Pimpinan Eksekutif Universitas',
                'badge'         => '🏛️ Dedikasi & Loyalitas Tinggi',
                'badge_variant' => 'indigo',
                'icon'          => 'fas fa-landmark',
                'credential_id' => 'BEM01-25 / NIP: 197101111996031001',
                'deskripsi'     => 'Apresiasi tertinggi dari Rektor dan Presiden Mahasiswa atas dedikasi dan loyalitas tinggi sebagai Wakil Presiden Mahasiswa Badan Eksekutif Mahasiswa Kabinet Integritas.',
                'gambar'        => 'images/certificates/cert-bem-wapresma-metamedia.png',
            ],
            [
                'judul'         => 'Uda Kreatif Kampus Universitas Metamedia 2023',
                'penyelenggara' => 'Universitas Metamedia & BEM',
                'tahun'         => '2023',
                'tingkat'       => 'Tingkat Universitas (Festival PKM)',
                'badge'         => '👑 Uda Kreatif',
                'badge_variant' => 'gold',
                'icon'          => 'fas fa-crown',
                'credential_id' => '003/S/PANPEL-PKM/BEM-META-U/VII/2023',
                'deskripsi'     => 'Terpilih dan dianugerahi gelar Uda Kreatif Kampus Universitas Metamedia 2023 dalam ajang pemilihan Uda & Uni pada Festival Pekan Kreativitas Mahasiswa (PKM).',
                'gambar'        => 'images/certificates/cert-uda-kreatif-metamedia.jpg',
            ],
        ];

        return view('education', compact('educations', 'certificates', 'achievements'));
    }

    /**
     * Halaman Contact (/contact)
     */
    public function contact()
    {
        $kontak = [
            'email'     => 'mhdfarhan760@gmail.com',
            'whatsapp'  => '6281363459461',
            'github'    => 'https://github.com/muhmdfarhan',
            'linkedin'  => 'https://www.linkedin.com/in/mhmdfarhann/',
            'instagram' => 'https://www.instagram.com/muhamadfarhann__/',
            'kota'      => 'Padang, Indonesia',
        ];

        return view('contact', compact('kontak'));
    }
}
