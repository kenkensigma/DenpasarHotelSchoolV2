<!DOCTYPE html>
<html lang="en">

<head>
    @php
        use Stichoza\GoogleTranslate\GoogleTranslate;

        // Gunakan default 'en' jika session('locale') kosong
        $locale = session('locale', 'en');

        // Pastikan locale bukan null
        $translator = new GoogleTranslate($locale);
    @endphp


    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="education" href="img/logo_192509100957_ 1.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>National Program - Denpasar Hotel School</title>

    {{-- style --}}
    <link rel="stylesheet" href="css/national.css" />
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/program.css">

    <!-- Fade in Animation CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- additional -->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>

    <!-- Header Section -->
    <header class="header">
        <nav class="navbar">
            <ul class="nav-links left">
                <li class="dropdown">
                    <a href="#program" class="dropbtn">{{ $translator->translate('Profile') }} <i
                            class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                        <a href="about">{{ $translator->translate('About us') }}</a>
                        <a href="achievement">{{ $translator->translate('Achievement') }}</a>
                        <a href="contact">{{ $translator->translate('Contact Us') }}</a>
                        <a href="team">{{ $translator->translate('Our Team') }}</a>
                        <a href="galery">{{ $translator->translate('Foto') }}</a>
                        <a href="video">{{ $translator->translate('Videos') }}</a>
                    </div>
                <li class="dropdown">
                    <a href="#program" class="dropbtn">{{ $translator->translate('Program ') }}<i
                            class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                        <a href="national">{{ $translator->translate('National Program') }}</a>
                        <a href="international">{{ $translator->translate('International Program') }}</a>
                        <a
                            href="tailor-program">{{ $translator->translate('Tailor-Made Program For Hospitality') }}</a>
                        <a href="house-training">{{ $translator->translate('In-House Training Program') }}</a>
                        <a href="hourly-training">{{ $translator->translate('Hourly-Based Training Program') }}</a>
                    </div>
                </li>
                <li><a href="register">{{ $translator->translate('Register') }}</a></li>
            </ul>

            <div class="logo">
                <a href="home"><img src="img/logo_192509100957_ 1.png" alt="Logo" width="80px"></a>
            </div>

            <ul class="nav-links right">
                <li><a href="login">{{ $translator->translate('Login') }}</a></li>
                <li><a href="news">{{ $translator->translate('News & Event') }}</a></li>

                </li>
                <select class="changeLang">

                </select>
            </ul>
        </nav>
    </header>

    <!-- Jumbotron Section -->
    <div class="jumbotron">
        <img src="img/jumbotron.jpg" alt="">
        <div class="overlay">
            <p data-aos="fade-in" data-aos-duration="1200" data-aos-delay="200">
                {{ $translator->translate('Welcome to the Denpasar Hotel School') }}</p>
            <h1 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="600">
                {{ $translator->translate('PROGRAM ') }}</h1>
        </div>
    </div>

    <!-- Jumbotron Section -->

    <section class="about">
        <div class="container-title">
            <h2 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                {{ $translator->translate('National Program') }}</h2>
        </div>
        <div class="text-national">
            <p data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                {{ $translator->translate('These programs range from skill-specific short courses to full professional training for those seeking long-term careers in hospitality. Let us know if you’d like more details on any program!') }}
            </p>
        </div>
    </section>

    <!-- Program Section -->

    <section id="program">
        <div class="program">
            <div class="program-text">
                <div class="program-title" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                    <h1>{{ $translator->translate('3-Month Hospitality Programs') }}</h1>
                </div>
                <p data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                    {{ $translator->translate('A short-term program providing fundamental hospitality training, preparing participants for international work experience at partner hotels or resorts.') }}
                </p>
                <button class="program-btn" onclick="window.location.href='after-click'" data-aos="fade-right"
                    data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('Learn More') }}</button>
            </div>
            <div class="image-vision" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <img src="img/vision.png" width="400px" />
            </div>
        </div>

        <div class="program">
            <div class="image-vision" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <img src="img/vision.png" width="400px" />
            </div>
            <div class="program-text">
                <h1 data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                    {{ $translator->translate('6-Month Hospitality Programs') }}</h1>
                <p data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                    {{ $translator->translate('This program combines classroom training with hands-on experience in the international hospitality industry, offering in-depth operational insights.') }}
                </p>
                <button class="program-btn" onclick="window.location.href='after-click2'" data-aos="fade-left"
                    data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('Learn More') }}</button>
            </div>
        </div>

        <div class="program">
            <div class="program-text">
                <div class="program-title">
                    <h1 data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                        {{ $translator->translate('1-Year Hospitality Programs') }}</h1>
                </div>
                <p data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                    {{ $translator->translate('A comprehensive program that includes professional training and internships at top-rated hotels, building strong management and operational skills.') }}
                </p>
                <button class="program-btn" onclick="window.location.href='after-click3'" data-aos="fade-right"
                    data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('Learn More') }}</button>
            </div>
            <div class="image-vision" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <img src="img/vision.png" width="400px" />
            </div>
        </div>

        <div class="program">
            <div class="image-vision" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <img src="img/vision.png" width="400px" />
            </div>
            <div class="program-text">
                <h1 data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                    {{ $translator->translate('2-Year Hospitality Programs') }}</h1>
                <p data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                    {{ $translator->translate('An intensive program designed to develop global hospitality expertise, focusing on leadership, cross-cultural skills, and real-world experience.') }}
                </p>
                <button class="program-btn" onclick="window.location.href='after-click4'" data-aos="fade-left"
                    data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('Learn More') }}</button>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer>
        <div class="column contact-info">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d493.0687060857335!2d115.23241324742432!3d-8.63915825517267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f8661ef31cd%3A0x663c45c04ca4cfb3!2sPT.%20Indo%20Apps%20Solusindo%20-%20Apps%20%26%20Web%20Development%20%7C%20Software%20Services%20%7C%20Seo%20Services%20di%20Bali%20%7C%20Domain%20%26%20Hosting%20%7C%20IoT!5e0!3m2!1sid!2sid!4v1737358264944!5m2!1sid!2sid"
                width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="contact-details">
                <p>{{ $translator->translate('Jln. Ganetri IV No. 4 DPS 80237 Bali') }}</p>
                <p>{{ $translator->translate('Phone: +62 81228840166') }}</p>
                <p>{{ $translator->translate('Email: partners@indoapps.id') }}</p>
                <p>{{ $translator->translate('Website: www.indoapps.id') }}</p>
            </div>
        </div>
        <div class="column">
            <h3>{{ $translator->translate('Sitemap') }}</h3>
            <div class="sitemap-content">
                <a href="#"><i class='bx bx-chevron-right'></i>{{ $translator->translate(' Home') }}</a>
                <a href="#"><i class='bx bx-chevron-right'></i>{{ $translator->translate(' Program') }}</a>
                <a href="#"><i class='bx bx-chevron-right'></i>{{ $translator->translate(' Portofolio') }}</a>
                <a href="#"><i
                        class='bx bx-chevron-right'></i>{{ $translator->translate(' Partners & Clients') }}</a>
                <a href="#"><i class='bx bx-chevron-right'></i>{{ $translator->translate(' Info') }}</a>
            </div>
        </div>
        <div class="column social-media">
            <h3>{{ $translator->translate('Social Media') }}</h3>
            <div class="icon-sosmed">
                <a href="#"><i class="fab fa-facebook icon1"></i></a>
                <a href="#"><i class="fab fa-twitter icon2"></i></a>
                <a href="#"><i class="fab fa-instagram icon3"></i></a>
            </div>
        </div>
    </footer>
    <div class="footer-bottom">
        © Copyright Denpasar Hotel School. All right reserved 2025
    </div>


    <script src="js/about.js"></script>

    <!-- Animation Fade js -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 1,
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript">
        var url = "{{ route('changeLang') }}";
        $('.changeLang').change(function() {
            window.location.href = url + "?lang=" + $(this).val();
        });
    </script>


</body>

</html>
