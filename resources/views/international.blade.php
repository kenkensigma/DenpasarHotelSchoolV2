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
    <title>International Program - Denpasar Hotel School</title>
    <link rel="stylesheet" href="css/international.css" />
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
           
    <!-- Fade in Animation CSS -->
            <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <!--  -->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
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
                        <a href="tailor-program">{{ $translator->translate('Tailor-Made Program For Hospitality') }}</a>
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
                    <option value="" selected disabled hidden>Select Language</option> 
                      <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                      <option value="zh-CN" {{ session()->get('locale') == 'zh-CN' ? 'selected' : '' }}>Mandarin Chinese</option>
                      <option value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
                      <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>French</option>
                      <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabic</option>
                      <option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Russian</option>
                      <option value="pt" {{ session()->get('locale') == 'pt' ? 'selected' : '' }}>Portuguese</option>
                      <option value="de" {{ session()->get('locale') == 'de' ? 'selected' : '' }}>German</option>
                      <option value="ja" {{ session()->get('locale') == 'ja' ? 'selected' : '' }}>Japanese</option>
                      <option value="hi" {{ session()->get('locale') == 'hi' ? 'selected' : '' }}>Hindi</option>
                      <option value="bn" {{ session()->get('locale') == 'bn' ? 'selected' : '' }}>Bengali</option>
                      <option value="ur" {{ session()->get('locale') == 'ur' ? 'selected' : '' }}>Urdu</option>
                      <option value="id" {{ session()->get('locale') == 'id' ? 'selected' : '' }}>Indonesian</option>
                      <option value="tr" {{ session()->get('locale') == 'tr' ? 'selected' : '' }}>Turkish</option>
                      <option value="ko" {{ session()->get('locale') == 'ko' ? 'selected' : '' }}>Korean</option>
                      <option value="it" {{ session()->get('locale') == 'it' ? 'selected' : '' }}>Italian</option>
                      <option value="fa" {{ session()->get('locale') == 'fa' ? 'selected' : '' }}>Persian (Farsi)</option>
                      <option value="th" {{ session()->get('locale') == 'th' ? 'selected' : '' }}>Thai</option>
                      <option value="pl" {{ session()->get('locale') == 'pl' ? 'selected' : '' }}>Polish</option>
                      <option value="uk" {{ session()->get('locale') == 'uk' ? 'selected' : '' }}>Ukrainian</option>
                      <option value="nl" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Dutch</option>
                      <option value="vi" {{ session()->get('locale') == 'vi' ? 'selected' : '' }}>Vietnamese</option>
                      <option value="sw" {{ session()->get('locale') == 'sw' ? 'selected' : '' }}>Swahili</option>
                      <option value="he" {{ session()->get('locale') == 'he' ? 'selected' : '' }}>Hebrew</option>
                      <option value="el" {{ session()->get('locale') == 'el' ? 'selected' : '' }}>Greek</option>
                      <option value="ms" {{ session()->get('locale') == 'ms' ? 'selected' : '' }}>Malay</option>
                      <option value="ta" {{ session()->get('locale') == 'ta' ? 'selected' : '' }}>Tamil</option>
                      <option value="te" {{ session()->get('locale') == 'te' ? 'selected' : '' }}>Telugu</option>
                      <option value="mr" {{ session()->get('locale') == 'mr' ? 'selected' : '' }}>Marathi</option>
                      <option value="pa" {{ session()->get('locale') == 'pa' ? 'selected' : '' }}>Punjabi</option>
                      <option value="gu" {{ session()->get('locale') == 'gu' ? 'selected' : '' }}>Gujarati</option>
                      <option value="ml" {{ session()->get('locale') == 'ml' ? 'selected' : '' }}>Malayalam</option>
                      <option value="my" {{ session()->get('locale') == 'my' ? 'selected' : '' }}>Burmese</option>
                      <option value="cs" {{ session()->get('locale') == 'cs' ? 'selected' : '' }}>Czech</option>
                      <option value="ro" {{ session()->get('locale') == 'ro' ? 'selected' : '' }}>Romanian</option>
                      <option value="hu" {{ session()->get('locale') == 'hu' ? 'selected' : '' }}>Hungarian</option>
                      <option value="sr" {{ session()->get('locale') == 'sr' ? 'selected' : '' }}>Serbian</option>
                      <option value="sk" {{ session()->get('locale') == 'sk' ? 'selected' : '' }}>Slovak</option>
                      <option value="sl" {{ session()->get('locale') == 'sl' ? 'selected' : '' }}>Slovenian</option>
                      <option value="fi" {{ session()->get('locale') == 'fi' ? 'selected' : '' }}>Finnish</option>
                      <option value="ca" {{ session()->get('locale') == 'ca' ? 'selected' : '' }}>Catalan</option>
                      <option value="ha" {{ session()->get('locale') == 'ha' ? 'selected' : '' }}>Hausa</option>
                     <option value="ps" {{ session()->get('locale') == 'ps' ? 'selected' : '' }}>Pashto</option>
                        <option value="sd" {{ session()->get('locale') == 'sd' ? 'selected' : '' }}>Sindhi</option>
                        <option value="si" {{ session()->get('locale') == 'si' ? 'selected' : '' }}>Sinhala</option>
                        <option value="eu" {{ session()->get('locale') == 'eu' ? 'selected' : '' }}>Basque</option>
                        <option value="az" {{ session()->get('locale') == 'az' ? 'selected' : '' }}>Azerbaijani</option>
                        <option value="ku" {{ session()->get('locale') == 'ku' ? 'selected' : '' }}>Kurdish (Kurmanji)</option>
                        <option value="ckb" {{ session()->get('locale') == 'ckb' ? 'selected' : '' }}>Kurdish (Sorani)</option>
                        <option value="lo" {{ session()->get('locale') == 'lo' ? 'selected' : '' }}>Lao</option>
                        <option value="lt" {{ session()->get('locale') == 'lt' ? 'selected' : '' }}>Lithuanian</option>
                        <option value="lv" {{ session()->get('locale') == 'lv' ? 'selected' : '' }}>Latvian</option>
                        <option value="et" {{ session()->get('locale') == 'et' ? 'selected' : '' }}>Estonian</option>
                        <option value="mk" {{ session()->get('locale') == 'mk' ? 'selected' : '' }}>Macedonian</option>
                        <option value="sq" {{ session()->get('locale') == 'sq' ? 'selected' : '' }}>Albanian</option>
                        <option value="bs" {{ session()->get('locale') == 'bs' ? 'selected' : '' }}>Bosnian</option>
                        <option value="af" {{ session()->get('locale') == 'af' ? 'selected' : '' }}>Afrikaans</option>
                        <option value="mt" {{ session()->get('locale') == 'mt' ? 'selected' : '' }}>Maltese</option>
                        <option value="tg" {{ session()->get('locale') == 'tg' ? 'selected' : '' }}>Tajik</option>
                        <option value="uz" {{ session()->get('locale') == 'uz' ? 'selected' : '' }}>Uzbek</option>
                        <option value="kk" {{ session()->get('locale') == 'kk' ? 'selected' : '' }}>Kazakh</option>
                        <option value="ky" {{ session()->get('locale') == 'ky' ? 'selected' : '' }}>Kyrgyz</option>
                        <option value="hy" {{ session()->get('locale') == 'hy' ? 'selected' : '' }}>Armenian</option>
                        <option value="ka" {{ session()->get('locale') == 'ka' ? 'selected' : '' }}>Georgian</option>
                        <option value="ti" {{ session()->get('locale') == 'ti' ? 'selected' : '' }}>Tigrinya</option>
                        <option value="so" {{ session()->get('locale') == 'so' ? 'selected' : '' }}>Somali</option>
                        <option value="xh" {{ session()->get('locale') == 'xh' ? 'selected' : '' }}>Xhosa</option>
                        <option value="zu" {{ session()->get('locale') == 'zu' ? 'selected' : '' }}>Zulu</option>
                        <option value="yo" {{ session()->get('locale') == 'yo' ? 'selected' : '' }}>Yoruba</option>
                        <option value="ig" {{ session()->get('locale') == 'ig' ? 'selected' : '' }}>Igbo</option>
                        <option value="mi" {{ session()->get('locale') == 'mi' ? 'selected' : '' }}>Maori</option>
                        <option value="ht" {{ session()->get('locale') == 'ht' ? 'selected' : '' }}>Haitian Creole</option>
                        <option value="su" {{ session()->get('locale') == 'su' ? 'selected' : '' }}>Sundanese</option>
                        <option value="jv" {{ session()->get('locale') == 'jv' ? 'selected' : '' }}>Javanese</option>
                        <option value="bal" {{ session()->get('locale') == 'bal' ? 'selected' : '' }}>Balochi</option>
                        <option value="lus" {{ session()->get('locale') == 'lus' ? 'selected' : '' }}>Mizo</option>
                        <option value="ba" {{ session()->get('locale') == 'ba' ? 'selected' : '' }}>Bashkir</option>
                        <option value="bm" {{ session()->get('locale') == 'bm' ? 'selected' : '' }}>Bambara</option>
                        <option value="crh" {{ session()->get('locale') == 'crh' ? 'selected' : '' }}>Crimean Tatar</option>
                        <option value="ny" {{ session()->get('locale') == 'ny' ? 'selected' : '' }}>Chichewa (Nyanja)</option>
                     <option value="ace" {{ session()->get('locale') == 'ace' ? 'selected' : '' }}>Acehnese</option>
                        <option value="ban" {{ session()->get('locale') == 'ban' ? 'selected' : '' }}>Balinese</option>
                        <option value="bew" {{ session()->get('locale') == 'bew' ? 'selected' : '' }}>Betawi</option>
                        <option value="btx" {{ session()->get('locale') == 'btx' ? 'selected' : '' }}>Batak Karo</option>
                        <option value="bbc" {{ session()->get('locale') == 'bbc' ? 'selected' : '' }}>Batak Toba</option>
                        <option value="bts" {{ session()->get('locale') == 'bts' ? 'selected' : '' }}>Batak Simalungun</option>
                        <option value="min" {{ session()->get('locale') == 'min' ? 'selected' : '' }}>Minang</option>
                        <option value="mak" {{ session()->get('locale') == 'mak' ? 'selected' : '' }}>Makassar</option>
                        <option value="pam" {{ session()->get('locale') == 'pam' ? 'selected' : '' }}>Kapampangan</option>
                        <option value="ilo" {{ session()->get('locale') == 'ilo' ? 'selected' : '' }}>Iloko</option>
                        <option value="hil" {{ session()->get('locale') == 'hil' ? 'selected' : '' }}>Hiligaynon</option>
                        <option value="ceb" {{ session()->get('locale') == 'ceb' ? 'selected' : '' }}>Cebuano</option>
                        <option value="fil" {{ session()->get('locale') == 'fil' ? 'selected' : '' }}>Tagalog</option>
                        <option value="om" {{ session()->get('locale') == 'om' ? 'selected' : '' }}>Oromo</option>
                        <option value="lg" {{ session()->get('locale') == 'lg' ? 'selected' : '' }}>Luganda</option>
                        <option value="ln" {{ session()->get('locale') == 'ln' ? 'selected' : '' }}>Lingala</option>
                        <option value="tn" {{ session()->get('locale') == 'tn' ? 'selected' : '' }}>Tswana</option>
                        <option value="st" {{ session()->get('locale') == 'st' ? 'selected' : '' }}>Sesotho</option>
                        <option value="ss" {{ session()->get('locale') == 'ss' ? 'selected' : '' }}>Swati</option>
                        <option value="ts" {{ session()->get('locale') == 'ts' ? 'selected' : '' }}>Tsonga</option>
                        <option value="lg" {{ session()->get('locale') == 'lg' ? 'selected' : '' }}>Ganda</option>
                        <option value="ee" {{ session()->get('locale') == 'ee' ? 'selected' : '' }}>Ewe</option>
                        <option value="gaa" {{ session()->get('locale') == 'gaa' ? 'selected' : '' }}>Ga</option>
                        <option value="din" {{ session()->get('locale') == 'din' ? 'selected' : '' }}>Dinka</option>
                        <option value="nus" {{ session()->get('locale') == 'nus' ? 'selected' : '' }}>Nuer</option>
                        <option value="sn" {{ session()->get('locale') == 'sn' ? 'selected' : '' }}>Shona</option>
                        <option value="bem" {{ session()->get('locale') == 'bem' ? 'selected' : '' }}>Bemba</option>
                        <option value="sg" {{ session()->get('locale') == 'sg' ? 'selected' : '' }}>Sango</option>
                        <option value="ak" {{ session()->get('locale') == 'ak' ? 'selected' : '' }}>Twi (Akan)</option>
                        <option value="fj" {{ session()->get('locale') == 'fj' ? 'selected' : '' }}>Fijian</option>
                        <option value="dz" {{ session()->get('locale') == 'dz' ? 'selected' : '' }}>Dzongkha</option>
                        <option value="new" {{ session()->get('locale') == 'new' ? 'selected' : '' }}>Newari</option>
                        <option value="crs" {{ session()->get('locale') == 'crs' ? 'selected' : '' }}>Seychellois Creole</option>
                        <option value="yua" {{ session()->get('locale') == 'yua' ? 'selected' : '' }}>Yucatec Maya</option>
                        <option value="qu" {{ session()->get('locale') == 'qu' ? 'selected' : '' }}>Quechua</option>
                        <option value="ay" {{ session()->get('locale') == 'ay' ? 'selected' : '' }}>Aymara</option>
                        <option value="rom" {{ session()->get('locale') == 'rom' ? 'selected' : '' }}>Romani</option>
                        <option value="oc" {{ session()->get('locale') == 'oc' ? 'selected' : '' }}>Occitan</option>
                        <option value="co" {{ session()->get('locale') == 'co' ? 'selected' : '' }}>Corsican</option>
                        <option value="br" {{ session()->get('locale') == 'br' ? 'selected' : '' }}>Breton</option>
                        <option value="scn" {{ session()->get('locale') == 'scn' ? 'selected' : '' }}>Sicilian</option>
                        <option value="szl" {{ session()->get('locale') == 'szl' ? 'selected' : '' }}>Silesian</option>
                        <option value="lmo" {{ session()->get('locale') == 'lmo' ? 'selected' : '' }}>Lombard</option>
                        <option value="lij" {{ session()->get('locale') == 'lij' ? 'selected' : '' }}>Ligurian</option>
                        <option value="fy" {{ session()->get('locale') == 'fy' ? 'selected' : '' }}>Frisian</option>
                        <option value="chm" {{ session()->get('locale') == 'chm' ? 'selected' : '' }}>Meadow Mari</option>
                        <option value="bua" {{ session()->get('locale') == 'bua' ? 'selected' : '' }}>Buryat</option>
                        <option value="cv" {{ session()->get('locale') == 'cv' ? 'selected' : '' }}>Chuvash</option>
                        <option value="cnh" {{ session()->get('locale') == 'cnh' ? 'selected' : '' }}>Hakha Chin</option>
                        <option value="mni-Mtei" {{ session()->get('locale') == 'mni-Mtei' ? 'selected' : '' }}>Meiteilon (Manipuri)</option>
                        <option value="tt" {{ session()->get('locale') == 'tt' ? 'selected' : '' }}>Tatar</option>
                        <option value="ug" {{ session()->get('locale') == 'ug' ? 'selected' : '' }}>Uyghur</option>
                      <option value="ak" {{ session()->get('locale') == 'ak' ? 'selected' : '' }}>Twi</option>
                        <option value="ktu" {{ session()->get('locale') == 'ktu' ? 'selected' : '' }}>Kituba</option>
                        <option value="pag" {{ session()->get('locale') == 'pag' ? 'selected' : '' }}>Pangasinan</option>
                        <option value="pap" {{ session()->get('locale') == 'pap' ? 'selected' : '' }}>Papiamento</option>
                        <option value="shn" {{ session()->get('locale') == 'shn' ? 'selected' : '' }}>Shan</option>
                        <option value="doi" {{ session()->get('locale') == 'doi' ? 'selected' : '' }}>Dogri</option>
                        <option value="sd" {{ session()->get('locale') == 'sd' ? 'selected' : '' }}>Sindhi</option>
                        <option value="mai" {{ session()->get('locale') == 'mai' ? 'selected' : '' }}>Maithili</option>
                        <option value="cgg" {{ session()->get('locale') == 'cgg' ? 'selected' : '' }}>Kiga</option>
                        <option value="ltg" {{ session()->get('locale') == 'ltg' ? 'selected' : '' }}>Latgalian</option>
                        <option value="gd" {{ session()->get('locale') == 'gd' ? 'selected' : '' }}>Scots Gaelic</option>
                        <option value="cy" {{ session()->get('locale') == 'cy' ? 'selected' : '' }}>Welsh</option>
                        <option value="ga" {{ session()->get('locale') == 'ga' ? 'selected' : '' }}>Irish</option>
                        <option value="haw" {{ session()->get('locale') == 'haw' ? 'selected' : '' }}>Hawaiian</option>
                        <option value="eo" {{ session()->get('locale') == 'eo' ? 'selected' : '' }}>Esperanto</option>
                        <option value="sa" {{ session()->get('locale') == 'sa' ? 'selected' : '' }}>Sanskrit</option>
                        <option value="la" {{ session()->get('locale') == 'la' ? 'selected' : '' }}>Latin</option>
                        <option value="yi" {{ session()->get('locale') == 'yi' ? 'selected' : '' }}>Yiddish</option>
                        <option value="awa" {{ session()->get('locale') == 'awa' ? 'selected' : '' }}>Awadhi</option>
                        <option value="bho" {{ session()->get('locale') == 'bho' ? 'selected' : '' }}>Bhojpuri</option>
                        <option value="dov" {{ session()->get('locale') == 'dov' ? 'selected' : '' }}>Dombe</option>
                        <option value="hrx" {{ session()->get('locale') == 'hrx' ? 'selected' : '' }}>Hunsrik</option>
                        <option value="kri" {{ session()->get('locale') == 'kri' ? 'selected' : '' }}>Krio</option>
                        <option value="lb" {{ session()->get('locale') == 'lb' ? 'selected' : '' }}>Luxembourgish</option>
                        <option value="no" {{ session()->get('locale') == 'no' ? 'selected' : '' }}>Norwegian</option>
                        <option value="mn" {{ session()->get('locale') == 'mn' ? 'selected' : '' }}>Mongolian</option>
                        <option value="am" {{ session()->get('locale') == 'am' ? 'selected' : '' }}>Amharic</option>
                        <option value="sd" {{ session()->get('locale') == 'sd' ? 'selected' : '' }}>Sindhi</option>
                        <option value="gom" {{ session()->get('locale') == 'gom' ? 'selected' : '' }}>Konkani</option>
                        <option value="ps" {{ session()->get('locale') == 'ps' ? 'selected' : '' }}>Pashto</option>
                        <option value="nr" {{ session()->get('locale') == 'nr' ? 'selected' : '' }}>Ndebele</option>
                        <option value="tum" {{ session()->get('locale') == 'tum' ? 'selected' : '' }}>Tumbuka</option>
                        <option value="nso" {{ session()->get('locale') == 'nso' ? 'selected' : '' }}>Northern Sotho</option>
                        <option value="be" {{ session()->get('locale') == 'be' ? 'selected' : '' }}>Belarusian</option>
                        <option value="is" {{ session()->get('locale') == 'is' ? 'selected' : '' }}>Icelandic</option>
                        <option value="sk" {{ session()->get('locale') == 'sk' ? 'selected' : '' }}>Slovak</option>
                        <option value="yue" {{ session()->get('locale') == 'yue' ? 'selected' : '' }}>Cantonese</option>
                    </select>
            </ul>
        </nav>
    </header>

  <!-- Jumbotron Section -->
  <div class="jumbotron">
    <img src="img/jumbotron.jpg" alt="">
    <div class="overlay">
        <p data-aos="fade-in"data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('Welcome to the Denpasar Hotel School') }}</p>
        <h1 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="600">{{ $translator->translate('PROGRAM') }}</h1>
        <div class="kotak"></div>
    </div>
</div>

  <!-- Jumbotron Section -->

  <section class="about">
    <div class="container-title" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
        <h2>{{ $translator->translate('International Program') }}</h2>
    </div>
    <div class="text-national" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
        <p>{{ $translator->translate('These programs range from skill-specific short courses to full professional training for those seeking long-term careers in hospitality. Let us know if you’d like more details on any program!') }}</p>
    </div>
    </section>

    <!-- Program Section -->
     
    <section id="program">
        <div class="program">
            <div class="program-text">
                <div class="program-title">
                    <h1 data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('Dual Certification Program with Australian Hospitality Schools') }}</h1>
                </div>
                <p data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('Gain internationally recognized qualifications through a dual certification program, combining academic excellence with practical industry training in Australia.') }}</p>
                <button class="program-btn" onclick="window.location.href='after-click-inter'" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('Learn More') }}</button>
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
                <h1 data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('German Ausbildung Program (2 to 3 Years) ') }}</h1>
                <p data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('A structured vocational program integrating classroom learning with paid on-the-job training in Germany’s top hospitality establishments.') }}</p>
                <button class="program-btn" onclick="window.location.href='after-click-inter2'" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('Learn More') }}</button>
            </div>
        </div>
    
        <div class="program">
            <div class="program-text">
                <div class="program-title">
                    <h1 data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('Short-Term Study Abroad Program in Australia (3 to 6 Months)') }}</h1>
                </div>
                <p data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('Experience world-class hospitality education through a short-term study program, offering a blend of academic courses and hands-on training in Australia.') }}</p>
                <button class="program-btn" onclick="window.location.href='after-click-inter3'" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('Learn More') }}</button>
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
                <h1 data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('International Culinary Exchange Program with European Schools (1 Year)') }}</h1>
                <p data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('Enhance your culinary expertise through an immersive exchange program, learning from top European chefs while experiencing diverse culinary traditions.') }}</p>
                <button class="program-btn" onclick="window.location.href='after-click-inter4'" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('Learn More') }}</button>
            </div>
        </div>

        <div class="program">
            <div class="program-text">
                <div class="program-title">
                    <h1 data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('Hospitality Management Internship Program with Global Hotel Chains (6 to 12 Months)') }}</h1>
                </div>
                <p data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('Develop professional hospitality skills with an internship at leading global hotel chains, gaining hands-on experience in management and operations. ') }}</p>
                <button class="program-btn" onclick="window.location.href='after-click-inter5'" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">{{ $translator->translate('Learn More') }}</button>
            </div>
            <div class="image-vision" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <img src="img/vision.png" width="400px" />
            </div>
        </div>
    </section>
    

      <footer>
        <div class="column contact-info">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d493.0687060857335!2d115.23241324742432!3d-8.63915825517267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f8661ef31cd%3A0x663c45c04ca4cfb3!2sPT.%20Indo%20Apps%20Solusindo%20-%20Apps%20%26%20Web%20Development%20%7C%20Software%20Services%20%7C%20Seo%20Services%20di%20Bali%20%7C%20Domain%20%26%20Hosting%20%7C%20IoT!5e0!3m2!1sid!2sid!4v1737358264944!5m2!1sid!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
            <a href="#"><i class='bx bx-chevron-right'></i>{{ $translator->translate(' Partners & Clients') }}</a>
            <a href="#"><i class='bx bx-chevron-right'></i>{{ $translator->translate(' Info') }}</a>
          </div>
        </div>
        <div class="column">
          <h3>{{ $translator->translate('Sitemap') }}</h3>
          <div class="sitemap-content">
            <a href="#"><i class='bx bx-chevron-right'></i>{{ $translator->translate(' Home') }}</a>
            <a href="#"><i class='bx bx-chevron-right'></i>{{ $translator->translate(' Program') }}</a>
            <a href="#"><i class='bx bx-chevron-right'></i>{{ $translator->translate(' Portofolio') }}</a>
            <a href="#"><i class='bx bx-chevron-right'></i>{{ $translator->translate(' Partners & Clients') }}</a>
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

  <script type="text/javascript">
    var url = "{{ route('changeLang') }}";
    $('.changeLang').change(function() {
        window.location.href = url + "?lang=" + $(this).val();
    });
</script>

</body>
</html>