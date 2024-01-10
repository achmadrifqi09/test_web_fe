<!DOCTYPE>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GRAHA WISATA KITA</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
            />

    
        <link rel="icon" href={{ asset('favicon.ico') }}>
        @vite([ 'resources/scss/app.scss'])
 
    </head>
    <body>
      <nav class="nav">
        <div class="container">

            <div class="menu-wrapper">
                <div class="brand">
                    <a href="/">
                        <img src={{ asset('assets/images/logo.svg') }} alt="Graha Wisata Kita logo">
                    </a>
                </div>
                <ul class="nav-items">
                    <li>
                        <a href="#" class="nav-item">Homepage</a>
                    </li>
                    <li>
                        <a href="#" class="nav-item">Tentang</a>
                    </li>
                    <li>
                        <a href="#" class="nav-item">Daftar Hotel</a>
                    </li>
                    <li>
                        <a href="#" class="nav-item">Bantuan</a>
                    </li>
                </ul>
            </div>
            <div class="button-wrapper">
                <div class="lang-wrapper">
                    <button class="lang-dropdown">
                        <img src={{ asset('assets/images/ID.png') }} alt="Indonesia flag" class="flag">
                        <span class="lang-text">Indonesia (ID)</span>
                        <img src={{ asset('assets/icons/ic-chevron-down.svg') }} alt="Indonesia flag" class="icon">
                    </button>
                    <ul>
                        <li class="lang-header">
                            <span>Pilih Bahasa</span>
                            <button class="close-lang">X</button>
                        </li>
                        <li>
                            <button class="lang-button">
                                <img src={{ asset('assets/images/ID.png') }} alt="Indonesia flag" class="flag">
                                Indonesia
                            </button>
                        </li>
                        <li>
                            <button class="lang-button">
                                <img src={{ asset('assets/images/en.png') }} alt="English flag" class="flag">
                                English
                            </button>
                        </li>
                    </ul>
                </div>
                <button class="toggle-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
      </nav>
      <section class="hero">
            <div class="container">
                <div class="hero-text-wrapper">
                    <div>
                        <div class="strip-text">
                            <span class="strip"></span>
                            <h6 class="text">HOTEL OPERATOR</h6>
                        </div>
                        <h1>Membantu Menjalankan<br> Operasi Bisnis Pariwisata Anda</h1>
                        <p>GWA membantu mengoperasikan keseluruhan layanan hotel, menajadikan mitra lebih percaya diri dalam menjalankan bisnis.</p>
                        <button class="cta-button">
                            Konsultasikan Bisnis Saya
                        </button>
                    </div>
                </div>
                <div class="hero-image-wrapper">
                    <img src={{ asset('/assets/images/hotel.svg') }} alt="" class="hero-image">
                </div>
            </div>
      </section>
      <section class="workflow">
        <div class="container">
            <div class="strip-text">
                <span class="strip"></span>
                <h6 class="text">OUR WORKFLOW</h6>
            </div>
            <h2 class="title">Proses Kerja Kami dalam Meningkatkan Kualitas Properti</h2>

            <div class="workflow-items">
                <div class="workflow-item">
                    <div class="rounded-icon-wrapper">
                        <img src={{ asset('/assets/images/challenge.svg') }} alt="" class="workflow-icon">
                    </div>
                    <div class="workflow-text-wrapper">
                        <h3>Tantangan</h3>
                        <p class="paragraph">Setiap property memiliki tantangan tersendiri dan GWA sangat memahami hal tersebut.</p>
                    </div>
                </div>
                <div class="workflow-item">
                    <div class="rounded-icon-wrapper">
                        <img src={{ asset('/assets/images/formulation.svg') }} alt="" class="workflow-icon">
                    </div>
                    <div class="workflow-text-wrapper">
                        <h3>Rumusan</h3>
                        <p class="paragraph">Setiap tantangan akan dirumuskan menjadi sebuah hal yang harus dicari jalan keluarnya oleh kami</p>
                    </div>
                </div>
                <div class="workflow-item">
                    <div class="rounded-icon-wrapper">
                        <img src={{ asset('/assets/images/goals.svg') }} alt="" class="workflow-icon">
                    </div>
                    <div class="workflow-text-wrapper">
                        <h3>Goals</h3>
                        <p class="paragraph">Dari rumusan masalah, kami memberikan respon cepat dan jalan keluar jangka pendek - menengah - panjang.</p>
                    </div>
                </div>
                <div class="workflow-item">
                    <div class="rounded-icon-wrapper">
                        <img src={{ asset('/assets/images/ideas.svg') }} alt="" class="workflow-icon">
                    </div>
                    <div class="workflow-text-wrapper">
                        <h3>Ideas</h3>
                        <p class="paragraph">Setiap rumusan menjadikan ide-ide kreatif bagi kami untuk meningkatkan kualitas property mitra.</p>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <section class="service">
            <div class="container">
                 <div class="strip-text">
                    <span class="strip"></span>
                    <h6 class="text">OUR SERVICE</h6>
                </div>
                <h2 class="title">Apa Saja yang Bisa Kami Bantu ?</h2>
                <div class=" service-items">
                        <div class=" service-item">
                            <div class="service-header">
                                <img src={{ asset('assets/images/revenue.svg') }} alt="Revenue image">
                                <h3 class="service-number">01</h3>
                            </div>
                            <h4 class="service-title">Revenue <br> Management Service</h4>
                            <button class="button-primary">
                                Saya Tertarik
                                <img src={{ asset('assets/icons/ic-arrow-right.svg') }} alt="icon arrow right">
                            </button>
                        </div>
                        <div class=" service-item">
                            <div class="service-header">
                                <img src={{ asset('assets/images/manage-service.svg') }} alt="Revenue Manage Service">
                                <h3 class="service-number">02</h3>
                            </div>
                            <h4 class="service-title">Full Manage<br>Service</h4>
                            <button class="button-primary">
                                Saya Tertarik
                                <img src={{ asset('assets/icons/ic-arrow-right.svg') }} alt="Full Manage Service">
                            </button>
                        </div>
                        <div class=" service-item">
                            <div class="service-header">
                                <img src={{ asset('assets/images/monetize-service.svg') }} alt="Asset Monetize Service">
                                <h3 class="service-number">03</h3>
                            </div>
                            <h4 class="service-title">Asset Monetize <br> Service</h4>
                            <button class="button-primary">
                                Saya Tertarik
                                <img src={{ asset('assets/icons/ic-arrow-right.svg') }} alt="icon arrow right">
                            </button>
                        </div>
                    </div>
            </div>
        </section>
        <section class="project">
            <div class="container">
                <div class="title-wrapper">
                    <div class="strip-text">
                        <span class="strip"></span>
                        <h6 class="text">OUR LATEST PROJECT</h6>
                        <span class="strip"></span>
                    </div>
                    <h2 class="title">Project Terbaru Kami</h2>
                </div>
                <div class="swiper project-items">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide project-item">
                            <img src={{ asset('assets/images/project-image.png') }} alt="Twonhouse Oak" class="project-image">
                            <div class="project-content">
                                <span class="subtitle">1/4 OPERATIONAL PROJECT</span>
                                <h1 class="title">Twonhouse Oak</h1>
                                <span class="description">Brand tertinggi di OYO</span>
                                <div class="project-detail">
                                       <a href="#" class="button-detail">
                                            <img src={{ asset('assets/icons/ic-chevron-right-light.svg') }} alt="chevron right icon">
                                             Lihat Detail
                                       </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide project-item">
                            <img src={{ asset('assets/images/project-image.png') }} alt="Twonhouse Oak" class="project-image">
                            <div class="project-content">
                                <span class="subtitle">1/4 OPERATIONAL PROJECT</span>
                                <h1 class="title">Twonhouse Oak</h1>
                                <span class="description">Brand tertinggi di OYO</span>
                                <div class="project-detail">
                                       <a href="#" class="button-detail">
                                            <img src={{ asset('assets/icons/ic-chevron-right-light.svg') }} alt="chevron right icon">
                                             Lihat Detail
                                       </a>
                                </div>
                            </div>
                        </div>
                       
                       
                    </div>
                     <div class="swpiper-button swiper-button-next"></div>
                    <div class="swpiper-button swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <section class="testimonial">
            <div class="container">
                <div class="testimonial-detail-wrapper">
                    <div class="strip-text">
                        <span class="strip"></span>
                        <h6 class="text">OUR TESTIMONIALS</h6>
                    </div>
                    <h2 class="title">Yang Klien Kami Katakan</h2>
                
                   <div class="swiper testimonials">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-content">
                                <div class="quotes">
                                    <img src={{ asset('assets/icons/ic-quotes.svg') }} alt="icon quotes">
                                    <p class="paragraph">
                                        GWA Group membantu hotel
                                        saya untuk menjangkau lebih banyak 
                                        client dan memberikan saran monetisasi 
                                        yang tidak pernah saya bayangkan sebelumnya
                                    </p>
                                </div>
                                <div class="client">
                                    <img src={{ asset('assets/images/yellow-hotel-logo.svg') }} alt="client image">
                                    <div>
                                        <h5 class="title">Chaim Desmond</h5>
                                        <p class="description">CEO of Yellow Hotel</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-content">
                                <div class="quotes">
                                    <img src={{ asset('assets/icons/ic-quotes.svg') }} alt="icon quotes">
                                    <p class="paragraph">
                                        GWA Group membantu hotel
                                        saya untuk menjangkau lebih banyak 
                                        client dan memberikan saran monetisasi 
                                        yang tidak pernah saya bayangkan sebelumnya
                                    </p>
                                </div>
                                <div class="client">
                                    <img src={{ asset('assets/images/yellow-hotel-logo.svg') }} alt="client image">
                                    <div>
                                        <h5 class="title">Chaim Desmond 2</h5>
                                        <p class="description">CEO of Yellow Hotel</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   </div>
                </div>
                <div class="testimonial-image-wrapper">
                    <div class="inner-image">
                        <div class="button-wrapper">
                            <div class="button-group">
                                <button class="testimonial-button-next">
                                    <img src={{ asset('assets/icons/ic-chevron-left-light.svg') }} alt="icon arrow left">
                                </button>
                                <button class="testimonial-button-prev">
                                    <img src={{ asset('assets/icons/ic-chevron-right-light.svg') }} alt="icon arrow right">
                                </button>
                            </div>
                        </div>
                        <img class="client-image" src={{ asset('assets/images/client.svg') }} alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-us">
            <div class="container">
                <div class="text-wrapper">
                     <div class="strip-text">
                        <span class="strip"></span>
                        <h6 class="text">HUBUNGIN KAMI</h6>
                    </div>
                    <h2 class="title">Ingin Mendiskusikan<br>Bisnis Pariwisata Anda ?</h2>
                    <span class="line"></span>
                    <p class="paragraph">Ada kepentingan bisnismu yang ingin didikusikan dengan kami, yuk segera isi form disamping, konsultasinya gratis kok !</p>
                </div>
                <div class="form-wrapper">
                    <form action="">
                        <div class="input-wrapper">
                            <label for="name">Nama Lengakap</label>
                            <input type="text" name="name" id="name" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="input-wrapper">
                            <label for="company_name">Nama Perusahaan</label>
                            <input type="text" name="company_name" id="company_name" placeholder="Masukkan Nama Perusahaan">
                        </div>
                         <div class="input-wrapper">
                            <label for="whatsapp_number">Nomor Whatsapp Aktif</label>
                            <input type="text" name="whatsapp_number" id="whatsapp_number" placeholder="Masukkan Nomor Whatsapp">
                        </div>
                        <button type="submit" class="button-submit">
                            Jadwalkan Konsultasi
                            <img src={{ asset('assets/icons/ic-arrow-right.svg') }} alt="">
                        </button>
                    </form>
                </div>
            </div>
        </section>
    <footer>
        <div class="container">
            <div class="footer-brand">
                <img src={{ asset('assets/images/logo.svg') }} alt="Graha Wisata Kita Logo">
            </div>
            <div class="footer-menu-wrapper">
                <div class="menu">
                    <h5 class="title">Halaman Utama</h5>
                    <ul class="menu-items">
                        <li class="menu-item">
                            <a href="#">Homepage</a>
                        </li>
                    </ul>
                </div>
                <div class="menu">
                    <h5 class="title">Perusahaan</h5>
                    <ul class="menu-items">
                        <li class="menu-item">
                            <a href="#">Tentang Kami</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Daftar Hotel</a>
                        </li>
                    </ul>
                </div>
                <div class="menu">
                    <h5 class="title">Tenmukan Kami</h5>
                    <ul class="menu-items">
                        <li class="menu-item">
                            <a href="#">Bantuan</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>
                 <div class="menu">
                    <h5 class="title">Social Media</h5>
                    <ul class="menu-items">
                        <li class="menu-item">
                            <a href="#">Bantuan</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="site-props">
                <div class="term-condition">
                    <a href="#">Pemberitahuan Privasi</a>
                    <a href="#">Syarat dan Ketentuan</a>
                </div>
                <div class="lang-wrapper">
                    <img src={{ asset('assets/icons/ic-language.svg') }} alt="language icon">
                  
                     <div class="dropdown-language">

                         <select name="language" id="language" class="language">
                             <option value="volvo">Bahasa Indonesia</option>
                             <option value="saab">English</option>
                         </select>
                     </div>
                  
                </div>
            </div>
            <span class="footer-text">© 2024 Graha Wisata Kita | PT Graha Wisata Kita Tbk. </span>
        </div>
    </footer>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.project-items', {
            slidesPerView: 1,
            spaceBetween: 0,
            freeMode: false,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        const testimonials = new Swiper('.testimonials', {
            slidesPerView: 1,
            spaceBetween: 0,
            freeMode: false,
            navigation: {
                nextEl: ".testimonial-button-next",
                prevEl: ".testimonial-button-prev",
            },
        });
    </script>
</html>
