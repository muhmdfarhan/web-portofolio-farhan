@extends('layouts.app')

@section('title', 'Contact — Muhamad Farhan | Get In Touch')
@section('meta_description', 'Hubungi Muhamad Farhan melalui Email, WhatsApp, LinkedIn, atau form kontak untuk diskusi proyek web development dan kolaborasi.')

@section('content')

{{-- PAGE HERO --}}
<section class="page-hero-v2">
    <div class="page-hero-v2__bg">
        <div class="phv2-blob phv2-blob--1"></div>
        <div class="phv2-blob phv2-blob--2"></div>
    </div>
    <div class="container">
        <div class="page-hero-v2__content">
            <span class="section-tag">Let's Connect</span>
            <h1 class="page-hero-v2__title">Mari <span class="text-accent">Terhubung</span>!</h1>
            <p class="page-hero-v2__sub">Punya ide proyek, tawaran kolaborasi, atau kesempatan kerja? Jangan ragu untuk menghubungi saya!</p>
        </div>
    </div>
</section>

{{-- CONTACT SECTION --}}
<section class="contact-v2 section-lg">
    <div class="container">
        <div class="contact-v2__grid">

            {{-- KIRI: Form Kirim Pesan & Salin Kontak --}}
            <div class="contact-v2__left">
                <div class="section-header" style="text-align:left;margin-bottom:28px">
                    <span class="section-tag">Direct Message</span>
                    <h2 class="section-heading" style="font-size:1.85rem">
                        Kirim Pesan <span class="text-accent">Langsung</span>
                    </h2>
                </div>

                {{-- Interactive Message Form --}}
                <form class="contact-form" id="contactForm" onsubmit="handleFormSubmit(event)">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="formNama"><i class="fas fa-user"></i> Nama Lengkap</label>
                            <input type="text" id="formNama" class="form-control" placeholder="Contoh: Budi Santoso" required>
                        </div>
                        <div class="form-group">
                            <label for="formEmail"><i class="fas fa-envelope"></i> Email Anda</label>
                            <input type="email" id="formEmail" class="form-control" placeholder="nama@email.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="formSubjek"><i class="fas fa-heading"></i> Subjek / Topik Pesan</label>
                        <input type="text" id="formSubjek" class="form-control" placeholder="Contoh: Penawaran Freelance Web Developer" required>
                    </div>

                    <div class="form-group">
                        <label for="formPesan"><i class="fas fa-comment-dots"></i> Isi Pesan</label>
                        <textarea id="formPesan" class="form-control" rows="5" placeholder="Tuliskan detail proyek atau pertanyaan Anda..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-full" id="btnSubmitForm">
                        <i class="fas fa-paper-plane"></i> Kirim Pesan via WhatsApp
                    </button>
                </form>

                {{-- List Kontak & Quick Action Buttons --}}
                <div class="contact-v2__items" style="margin-top:36px;">
                    <div class="contact-v2-item" onclick="copyToClipboard('{{ $kontak['email'] }}', 'Email')">
                        <div class="contact-v2-item__icon" style="background:linear-gradient(135deg,#6366f1,#8b5cf6)">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-v2-item__text">
                            <span class="contact-v2-item__label">Email (Klik untuk Salin)</span>
                            <span class="contact-v2-item__val">{{ $kontak['email'] }}</span>
                            <span class="contact-v2-item__hint">Klik di sini untuk menyalin alamat email</span>
                        </div>
                        <i class="fas fa-copy contact-v2-item__arrow"></i>
                    </div>

                    <a href="https://wa.me/{{ $kontak['whatsapp'] }}?text=Halo%20Farhan%2C%20saya%20tertarik%20berdiskusi!" target="_blank" rel="noopener" class="contact-v2-item">
                        <div class="contact-v2-item__icon" style="background:linear-gradient(135deg,#25d366,#1ebe5c)">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="contact-v2-item__text">
                            <span class="contact-v2-item__label">WhatsApp Direct</span>
                            <span class="contact-v2-item__val">+{{ $kontak['whatsapp'] }}</span>
                            <span class="contact-v2-item__hint">Chat cepat 1-on-1 via WhatsApp</span>
                        </div>
                        <i class="fas fa-arrow-right contact-v2-item__arrow"></i>
                    </a>
                </div>
            </div>

            {{-- KANAN: Status Ketersediaan & WhatsApp CTA Card --}}
            <div class="contact-v2__right">

                {{-- Status Card --}}
                <div class="availability-card">
                    <div class="availability-card__header">
                        <div class="avail-dot-wrap">
                            <span class="avail-dot"></span>
                        </div>
                        <span>Status Ketersediaan</span>
                    </div>
                    <h3>Tersedia untuk proyek &amp; kesempatan berikut:</h3>
                    <ul class="avail-list">
                        <li><i class="fas fa-circle-check"></i> Project Development (Laravel/PHP)</li>
                        <li><i class="fas fa-circle-check"></i> Internship / Magang Web Developer</li>
                        <li><i class="fas fa-circle-check"></i> System Analysis &amp; DB Design</li>
                        <li><i class="fas fa-circle-check"></i> Remotely &amp; Hybrid Collaboration</li>
                    </ul>
                </div>

                {{-- WhatsApp Card --}}
                <div class="wa-cta-card">
                    <div class="wa-cta-card__icon">💬</div>
                    <h3>Respon Cepat via WhatsApp</h3>
                    <p>Respon instan dalam waktu kurang dari 24 jam untuk diskusi proyek dan kebutuhan IT Anda.</p>
                    <a href="https://wa.me/{{ $kontak['whatsapp'] }}?text=Halo%20Farhan%2C%20saya%20ingin%20berdiskusi!"
                       target="_blank" rel="noopener" class="btn btn-whatsapp btn-full" style="margin-top:20px">
                        <i class="fab fa-whatsapp"></i> Chat WhatsApp Sekarang
                    </a>
                </div>

                {{-- Response Metadata Card --}}
                <div class="response-info">
                    <div class="response-info__item">
                        <i class="fas fa-clock" style="color:var(--primary)"></i>
                        <div>
                            <strong>Waktu Balas</strong>
                            <span>Senin – Sabtu, 08:00 – 21:00 WIB</span>
                        </div>
                    </div>
                    <div class="response-info__item">
                        <i class="fas fa-map-marker-alt" style="color:var(--primary)"></i>
                        <div>
                            <strong>Lokasi</strong>
                            <span>Indonesia (WIB / UTC+7)</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
// Handle Form Submission -> Redirection to WhatsApp with pre-filled text
function handleFormSubmit(e) {
    e.preventDefault();
    const nama = document.getElementById('formNama').value;
    const email = document.getElementById('formEmail').value;
    const subjek = document.getElementById('formSubjek').value;
    const pesan = document.getElementById('formPesan').value;

    const waText = `Halo Farhan, nama saya ${nama} (${email}).%0A%0A*Subjek:* ${subjek}%0A*Pesan:* ${pesan}`;
    const waUrl = `https://wa.me/{{ $kontak['whatsapp'] }}?text=${waText}`;

    showToast('Mengarahkan ke WhatsApp...', 'success');
    setTimeout(() => {
        window.open(waUrl, '_blank');
    }, 800);
}

// Copy to Clipboard with Toast Notification
function copyToClipboard(text, label) {
    navigator.clipboard.writeText(text).then(() => {
        showToast(`${label} berhasil disalin ke clipboard!`, 'success');
    }).catch(err => {
        showToast('Gagal menyalin ke clipboard', 'error');
    });
}
</script>
@endpush
