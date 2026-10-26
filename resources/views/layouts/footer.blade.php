<footer class="footer">
    <div class="container">
        <div class="footer-content">

            {{-- Brand --}}
            <div class="footer-brand">
                <a href="{{ route('home') }}" class="nav-logo">
                    <div class="nav-logo__mark">
                        <span>MF</span>
                    </div>
                    <div class="nav-logo__text">
                        <span class="nav-logo__name" style="color:white;">Muhamad Farhan</span>
                        <span class="nav-logo__title" style="color:#94a3b8;" data-i18n="nav.role">Fullstack Developer | Web Developer</span>
                    </div>
                </a>
                <p class="footer-tagline" data-i18n="footer.tagline">Membangun aplikasi web modern, efisien, dan siap pakai dengan Laravel, PHP, dan MySQL.</p>
            </div>

            {{-- Navigasi Cepat --}}
            <div class="footer-nav">
                <h4 data-i18n="footer.pages">Halaman</h4>
                <ul>
                    <li><a href="{{ route('home') }}"><i class="fas fa-chevron-right"></i> <span data-i18n="nav.home">Home</span></a></li>
                    <li><a href="{{ route('about') }}"><i class="fas fa-chevron-right"></i> <span data-i18n="nav.about">About</span></a></li>
                    <li><a href="{{ route('skills') }}"><i class="fas fa-chevron-right"></i> <span data-i18n="nav.skills">Skills &amp; Tech</span></a></li>
                    <li><a href="{{ route('projects') }}"><i class="fas fa-chevron-right"></i> <span data-i18n="nav.projects">Projects</span></a></li>
                    <li><a href="{{ route('experience') }}"><i class="fas fa-chevron-right"></i> <span data-i18n="nav.experience">Experience</span></a></li>
                    <li><a href="{{ route('education') }}"><i class="fas fa-chevron-right"></i> <span data-i18n="nav.education">Education</span></a></li>
                    <li><a href="{{ route('contact') }}"><i class="fas fa-chevron-right"></i> <span data-i18n="nav.contact">Contact</span></a></li>
                </ul>
            </div>

            {{-- Sosial Media & Tech Stack --}}
            <div class="footer-social">
                <h4 data-i18n="footer.connect">Koneksi &amp; Media</h4>
                <div class="social-links">
                    <a href="https://github.com/muhmdfarhan" target="_blank" rel="noopener" aria-label="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://linkedin.com/in/farhan" target="_blank" rel="noopener" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://instagram.com/farhan" target="_blank" rel="noopener" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/6281363459461" target="_blank" rel="noopener" aria-label="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
                <div class="footer-tech-badge">
                    <span>Powered by Laravel 12 &amp; PHP 8.2</span>
                </div>
            </div>

        </div>

        {{-- Copyright --}}
        <div class="footer-bottom">
            <p>@2026 Muhamad Farhan - Portofolio.</p>
        </div>
    </div>
</footer>
