<!DOCTYPE html>
<html lang="en">
@php
    use Stichoza\GoogleTranslate\GoogleTranslate;

    // Gunakan default 'en' jika session('locale') kosong
    $locale = session('locale', 'en');

    // Pastikan locale bukan null
    $translator = new GoogleTranslate($locale);
@endphp

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Home - Denpasar Hotel School</title>

    <link rel="shortcut icon" type="education" href="img/logo_192509100957_ 1.png" />
    <link rel="shortcut icon" type="education" href="img/logo.png" />

    {{-- Nav Style --}}

    <link rel="stylesheet" href="../css/nav.css" />

    {{-- Text Style --}}

    <link rel="stylesheet" href="css/text.css" />

    {{-- Main Style --}}

    <link rel="stylesheet" href="css/home.css" />

    {{-- Swiper Style --}}

    <link rel="stylesheet" href="css/swiper.css">

    {{-- Button Style --}}

    <link rel="stylesheet" href="css/button.css" />

    {{-- footer Style --}}

    <link rel="stylesheet" href="css/footer.css">

    <!-- Fade in Animation CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <!-- Header -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />


    <!-- Swiper Photo -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/galery.css">


</head>

<body>



    <!-- ------ HEADER SECTION ------ -->
    <header class="header">

        {{-- Navbar Phone --}}
        <nav class="navbar-phone">
            <!-- Nav Left -->
            <ul class=" left nav-button">
                <a>Login</a>
            </ul>

            <!-- Logo -->
            <div class="logo">
                <a href="home"><img src="img/logo_192509100957_ 1.png" alt="Logo" width="80px"></a>
            </div>

            <!-- Nav Right -->
            <!-- Menu -->
            <a onclick="showSidebar()" href="#"><svg class="menu-button" xmlns="http://www.w3.org/2000/svg" height="24px"
                    viewBox="0 -960 960 960" width="24px" fill="#e3e3e3">
                    <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                </svg></a>

            <ul class="nav-menu sidebar">
                <a onclick="hideSidebar()" class="closeSidebar" href="#"><svg class="X"
                        xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#e3e3e3">
                        <path
                            d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                    </svg></a>
                <li><a href="login">Login</a></li>
                <li><a href="news">News & Event</a></li>

                <!-- Profile -->
                <li class="dropdown-sidebar">
                    <a href="#" class="dropbtn" onclick="toggleDropdown(event, 'profileDropdown', this)">Profile
                        <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-sidebar-content" id="profileDropdown">
                        <a href="about">About us</a>
                        <a href="achievement">Achievement</a>
                        <a href="contact">Contact Us</a>
                        <a href="team">Our Team</a>
                        <a href="galery">Foto</a>
                        <a href="video">Videos</a>
                    </div>
                </li>

                <!-- Program -->
                <li class="dropdown-sidebar">
                    <a href="#" class="dropbtn" onclick="toggleDropdown(event, 'programDropdown', this)">Program
                        <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-sidebar-content" id="programDropdown">
                        <a href="national">National Program</a>
                        <a href="international">International Program</a>
                        <a href="tailor-program">Tailor-Made Program For Hospitality</a>
                        <a href="house-training">In-House Training Program</a>
                        <a href="hourly-training">Hourly-Based Training Program</a>
                    </div>
                </li>

                <!-- Register -->
                <li><a href="register">Register</a></li>

                <!-- Language -->
                <li>
                    <select class="changeLang ">
                        <option value="" selected disabled hidden>Select Language</option>
                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                        <option value="zh-CN" {{ session()->get('locale') == 'zh-CN' ? 'selected' : '' }}>Mandarin
                            Chinese</option>
                        <option value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
                        <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>French</option>
                        <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabic</option>
                        <option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Russian</option>
                        <option value="pt" {{ session()->get('locale') == 'pt' ? 'selected' : '' }}>Portuguese
                        </option>
                        <option value="de" {{ session()->get('locale') == 'de' ? 'selected' : '' }}>German</option>
                        <option value="ja" {{ session()->get('locale') == 'ja' ? 'selected' : '' }}>Japanese
                        </option>
                        <option value="hi" {{ session()->get('locale') == 'hi' ? 'selected' : '' }}>Hindi</option>
                        <option value="bn" {{ session()->get('locale') == 'bn' ? 'selected' : '' }}>Bengali
                        </option>
                        <option value="ur" {{ session()->get('locale') == 'ur' ? 'selected' : '' }}>Urdu</option>
                        <option value="id" {{ session()->get('locale') == 'id' ? 'selected' : '' }}>Indonesian
                        </option>
                        <option value="tr" {{ session()->get('locale') == 'tr' ? 'selected' : '' }}>Turkish
                        </option>
                        <option value="ko" {{ session()->get('locale') == 'ko' ? 'selected' : '' }}>Korean
                        </option>
                        <option value="it" {{ session()->get('locale') == 'it' ? 'selected' : '' }}>Italian
                        </option>
                        <option value="fa" {{ session()->get('locale') == 'fa' ? 'selected' : '' }}>Persian
                            (Farsi)
                        </option>
                        <option value="th" {{ session()->get('locale') == 'th' ? 'selected' : '' }}>Thai</option>
                        <option value="pl" {{ session()->get('locale') == 'pl' ? 'selected' : '' }}>Polish
                        </option>
                        <option value="uk" {{ session()->get('locale') == 'uk' ? 'selected' : '' }}>Ukrainian
                        </option>
                        <option value="nl" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Dutch</option>
                        <option value="vi" {{ session()->get('locale') == 'vi' ? 'selected' : '' }}>Vietnamese
                        </option>
                        <option value="sw" {{ session()->get('locale') == 'sw' ? 'selected' : '' }}>Swahili
                        </option>
                        <option value="he" {{ session()->get('locale') == 'he' ? 'selected' : '' }}>Hebrew
                        </option>
                        <option value="el" {{ session()->get('locale') == 'el' ? 'selected' : '' }}>Greek</option>
                        <option value="ms" {{ session()->get('locale') == 'ms' ? 'selected' : '' }}>Malay</option>
                        <option value="ta" {{ session()->get('locale') == 'ta' ? 'selected' : '' }}>Tamil</option>
                        <option value="te" {{ session()->get('locale') == 'te' ? 'selected' : '' }}>Telugu
                        </option>
                        <option value="mr" {{ session()->get('locale') == 'mr' ? 'selected' : '' }}>Marathi
                        </option>
                        <option value="pa" {{ session()->get('locale') == 'pa' ? 'selected' : '' }}>Punjabi
                        </option>
                        <option value="gu" {{ session()->get('locale') == 'gu' ? 'selected' : '' }}>Gujarati
                        </option>
                        <option value="ml" {{ session()->get('locale') == 'ml' ? 'selected' : '' }}>Malayalam
                        </option>
                        <option value="my" {{ session()->get('locale') == 'my' ? 'selected' : '' }}>Burmese
                        </option>
                        <option value="cs" {{ session()->get('locale') == 'cs' ? 'selected' : '' }}>Czech</option>
                        <option value="ro" {{ session()->get('locale') == 'ro' ? 'selected' : '' }}>Romanian
                        </option>
                        <option value="hu" {{ session()->get('locale') == 'hu' ? 'selected' : '' }}>Hungarian
                        </option>
                        <option value="sr" {{ session()->get('locale') == 'sr' ? 'selected' : '' }}>Serbian
                        </option>
                        <option value="sk" {{ session()->get('locale') == 'sk' ? 'selected' : '' }}>Slovak
                        </option>
                        <option value="sl" {{ session()->get('locale') == 'sl' ? 'selected' : '' }}>Slovenian
                        </option>
                        <option value="fi" {{ session()->get('locale') == 'fi' ? 'selected' : '' }}>Finnish
                        </option>
                        <option value="ca" {{ session()->get('locale') == 'ca' ? 'selected' : '' }}>Catalan
                        </option>
                        <option value="ha" {{ session()->get('locale') == 'ha' ? 'selected' : '' }}>Hausa</option>
                        <option value="ps" {{ session()->get('locale') == 'ps' ? 'selected' : '' }}>Pashto
                        </option>
                        <option value="sd" {{ session()->get('locale') == 'sd' ? 'selected' : '' }}>Sindhi
                        </option>
                        <option value="si" {{ session()->get('locale') == 'si' ? 'selected' : '' }}>Sinhala
                        </option>
                        <option value="eu" {{ session()->get('locale') == 'eu' ? 'selected' : '' }}>Basque
                        </option>
                        <option value="az" {{ session()->get('locale') == 'az' ? 'selected' : '' }}>Azerbaijani
                        </option>
                        <option value="ku" {{ session()->get('locale') == 'ku' ? 'selected' : '' }}>Kurdish
                            (Kurmanji)</option>
                        <option value="ckb" {{ session()->get('locale') == 'ckb' ? 'selected' : '' }}>Kurdish
                            (Sorani)</option>
                        <option value="lo" {{ session()->get('locale') == 'lo' ? 'selected' : '' }}>Lao</option>
                        <option value="lt" {{ session()->get('locale') == 'lt' ? 'selected' : '' }}>Lithuanian
                        </option>
                        <option value="lv" {{ session()->get('locale') == 'lv' ? 'selected' : '' }}>Latvian
                        </option>
                        <option value="et" {{ session()->get('locale') == 'et' ? 'selected' : '' }}>Estonian
                        </option>
                        <option value="mk" {{ session()->get('locale') == 'mk' ? 'selected' : '' }}>Macedonian
                        </option>
                        <option value="sq" {{ session()->get('locale') == 'sq' ? 'selected' : '' }}>Albanian
                        </option>
                        <option value="bs" {{ session()->get('locale') == 'bs' ? 'selected' : '' }}>Bosnian
                        </option>
                        <option value="af" {{ session()->get('locale') == 'af' ? 'selected' : '' }}>Afrikaans
                        </option>
                        <option value="mt" {{ session()->get('locale') == 'mt' ? 'selected' : '' }}>Maltese
                        </option>
                        <option value="tg" {{ session()->get('locale') == 'tg' ? 'selected' : '' }}>Tajik</option>
                        <option value="uz" {{ session()->get('locale') == 'uz' ? 'selected' : '' }}>Uzbek</option>
                        <option value="kk" {{ session()->get('locale') == 'kk' ? 'selected' : '' }}>Kazakh
                        </option>
                        <option value="ky" {{ session()->get('locale') == 'ky' ? 'selected' : '' }}>Kyrgyz
                        </option>
                        <option value="hy" {{ session()->get('locale') == 'hy' ? 'selected' : '' }}>Armenian
                        </option>
                        <option value="ka" {{ session()->get('locale') == 'ka' ? 'selected' : '' }}>Georgian
                        </option>
                        <option value="ti" {{ session()->get('locale') == 'ti' ? 'selected' : '' }}>Tigrinya
                        </option>
                        <option value="so" {{ session()->get('locale') == 'so' ? 'selected' : '' }}>Somali
                        </option>
                        <option value="xh" {{ session()->get('locale') == 'xh' ? 'selected' : '' }}>Xhosa</option>
                        <option value="zu" {{ session()->get('locale') == 'zu' ? 'selected' : '' }}>Zulu</option>
                        <option value="yo" {{ session()->get('locale') == 'yo' ? 'selected' : '' }}>Yoruba
                        </option>
                        <option value="ig" {{ session()->get('locale') == 'ig' ? 'selected' : '' }}>Igbo</option>
                        <option value="mi" {{ session()->get('locale') == 'mi' ? 'selected' : '' }}>Maori</option>
                        <option value="ht" {{ session()->get('locale') == 'ht' ? 'selected' : '' }}>Haitian Creole
                        </option>
                        <option value="su" {{ session()->get('locale') == 'su' ? 'selected' : '' }}>Sundanese
                        </option>
                        <option value="jv" {{ session()->get('locale') == 'jv' ? 'selected' : '' }}>Javanese
                        </option>
                        <option value="bal" {{ session()->get('locale') == 'bal' ? 'selected' : '' }}>Balochi
                        </option>
                        <option value="lus" {{ session()->get('locale') == 'lus' ? 'selected' : '' }}>Mizo</option>
                        <option value="ba" {{ session()->get('locale') == 'ba' ? 'selected' : '' }}>Bashkir
                        </option>
                        <option value="bm" {{ session()->get('locale') == 'bm' ? 'selected' : '' }}>Bambara
                        </option>
                        <option value="crh" {{ session()->get('locale') == 'crh' ? 'selected' : '' }}>Crimean Tatar
                        </option>
                        <option value="ny" {{ session()->get('locale') == 'ny' ? 'selected' : '' }}>Chichewa
                            (Nyanja)</option>
                        <option value="ace" {{ session()->get('locale') == 'ace' ? 'selected' : '' }}>Acehnese
                        </option>
                        <option value="ban" {{ session()->get('locale') == 'ban' ? 'selected' : '' }}>Balinese
                        </option>
                        <option value="bew" {{ session()->get('locale') == 'bew' ? 'selected' : '' }}>Betawi
                        </option>
                        <option value="btx" {{ session()->get('locale') == 'btx' ? 'selected' : '' }}>Batak Karo
                        </option>
                        <option value="bbc" {{ session()->get('locale') == 'bbc' ? 'selected' : '' }}>Batak Toba
                        </option>
                        <option value="bts" {{ session()->get('locale') == 'bts' ? 'selected' : '' }}>Batak
                            Simalungun</option>
                        <option value="min" {{ session()->get('locale') == 'min' ? 'selected' : '' }}>Minang
                        </option>
                        <option value="mak" {{ session()->get('locale') == 'mak' ? 'selected' : '' }}>Makassar
                        </option>
                        <option value="pam" {{ session()->get('locale') == 'pam' ? 'selected' : '' }}>Kapampangan
                        </option>
                        <option value="ilo" {{ session()->get('locale') == 'ilo' ? 'selected' : '' }}>Iloko
                        </option>
                        <option value="hil" {{ session()->get('locale') == 'hil' ? 'selected' : '' }}>Hiligaynon
                        </option>
                        <option value="ceb" {{ session()->get('locale') == 'ceb' ? 'selected' : '' }}>Cebuano
                        </option>
                        <option value="fil" {{ session()->get('locale') == 'fil' ? 'selected' : '' }}>Tagalog
                        </option>
                        <option value="om" {{ session()->get('locale') == 'om' ? 'selected' : '' }}>Oromo</option>
                        <option value="lg" {{ session()->get('locale') == 'lg' ? 'selected' : '' }}>Luganda
                        </option>
                        <option value="ln" {{ session()->get('locale') == 'ln' ? 'selected' : '' }}>Lingala
                        </option>
                        <option value="tn" {{ session()->get('locale') == 'tn' ? 'selected' : '' }}>Tswana
                        </option>
                        <option value="st" {{ session()->get('locale') == 'st' ? 'selected' : '' }}>Sesotho
                        </option>
                        <option value="ss" {{ session()->get('locale') == 'ss' ? 'selected' : '' }}>Swati</option>
                        <option value="ts" {{ session()->get('locale') == 'ts' ? 'selected' : '' }}>Tsonga
                        </option>
                        <option value="lg" {{ session()->get('locale') == 'lg' ? 'selected' : '' }}>Ganda
                        </option>
                        <option value="ee" {{ session()->get('locale') == 'ee' ? 'selected' : '' }}>Ewe</option>
                        <option value="gaa" {{ session()->get('locale') == 'gaa' ? 'selected' : '' }}>Ga</option>
                        <option value="din" {{ session()->get('locale') == 'din' ? 'selected' : '' }}>Dinka
                        </option>
                        <option value="nus" {{ session()->get('locale') == 'nus' ? 'selected' : '' }}>Nuer
                        </option>
                        <option value="sn" {{ session()->get('locale') == 'sn' ? 'selected' : '' }}>Shona
                        </option>
                        <option value="bem" {{ session()->get('locale') == 'bem' ? 'selected' : '' }}>Bemba
                        </option>
                        <option value="sg" {{ session()->get('locale') == 'sg' ? 'selected' : '' }}>Sango
                        </option>
                        <option value="ak" {{ session()->get('locale') == 'ak' ? 'selected' : '' }}>Twi (Akan)
                        </option>
                        <option value="fj" {{ session()->get('locale') == 'fj' ? 'selected' : '' }}>Fijian
                        </option>
                        <option value="dz" {{ session()->get('locale') == 'dz' ? 'selected' : '' }}>Dzongkha
                        </option>
                        <option value="new" {{ session()->get('locale') == 'new' ? 'selected' : '' }}>Newari
                        </option>
                        <option value="crs" {{ session()->get('locale') == 'crs' ? 'selected' : '' }}>Seychellois
                            Creole</option>
                        <option value="yua" {{ session()->get('locale') == 'yua' ? 'selected' : '' }}>Yucatec Maya
                        </option>
                        <option value="qu" {{ session()->get('locale') == 'qu' ? 'selected' : '' }}>Quechua
                        </option>
                        <option value="ay" {{ session()->get('locale') == 'ay' ? 'selected' : '' }}>Aymara
                        </option>
                        <option value="rom" {{ session()->get('locale') == 'rom' ? 'selected' : '' }}>Romani
                        </option>
                        <option value="oc" {{ session()->get('locale') == 'oc' ? 'selected' : '' }}>Occitan
                        </option>
                        <option value="co" {{ session()->get('locale') == 'co' ? 'selected' : '' }}>Corsican
                        </option>
                        <option value="br" {{ session()->get('locale') == 'br' ? 'selected' : '' }}>Breton
                        </option>
                        <option value="scn" {{ session()->get('locale') == 'scn' ? 'selected' : '' }}>Sicilian
                        </option>
                        <option value="szl" {{ session()->get('locale') == 'szl' ? 'selected' : '' }}>Silesian
                        </option>
                        <option value="lmo" {{ session()->get('locale') == 'lmo' ? 'selected' : '' }}>Lombard
                        </option>
                        <option value="lij" {{ session()->get('locale') == 'lij' ? 'selected' : '' }}>Ligurian
                        </option>
                        <option value="fy" {{ session()->get('locale') == 'fy' ? 'selected' : '' }}>Frisian
                        </option>
                        <option value="chm" {{ session()->get('locale') == 'chm' ? 'selected' : '' }}>Meadow Mari
                        </option>
                        <option value="bua" {{ session()->get('locale') == 'bua' ? 'selected' : '' }}>Buryat
                        </option>
                        <option value="cv" {{ session()->get('locale') == 'cv' ? 'selected' : '' }}>Chuvash
                        </option>
                        <option value="cnh" {{ session()->get('locale') == 'cnh' ? 'selected' : '' }}>Hakha Chin
                        </option>
                        <option value="mni-Mtei" {{ session()->get('locale') == 'mni-Mtei' ? 'selected' : '' }}>
                            Meiteilon (Manipuri)</option>
                        <option value="tt" {{ session()->get('locale') == 'tt' ? 'selected' : '' }}>Tatar
                        </option>
                        <option value="ug" {{ session()->get('locale') == 'ug' ? 'selected' : '' }}>Uyghur
                        </option>
                        <option value="ak" {{ session()->get('locale') == 'ak' ? 'selected' : '' }}>Twi</option>
                        <option value="ktu" {{ session()->get('locale') == 'ktu' ? 'selected' : '' }}>Kituba
                        </option>
                        <option value="pag" {{ session()->get('locale') == 'pag' ? 'selected' : '' }}>Pangasinan
                        </option>
                        <option value="pap" {{ session()->get('locale') == 'pap' ? 'selected' : '' }}>Papiamento
                        </option>
                        <option value="shn" {{ session()->get('locale') == 'shn' ? 'selected' : '' }}>Shan
                        </option>
                        <option value="doi" {{ session()->get('locale') == 'doi' ? 'selected' : '' }}>Dogri
                        </option>
                        <option value="sd" {{ session()->get('locale') == 'sd' ? 'selected' : '' }}>Sindhi
                        </option>
                        <option value="mai" {{ session()->get('locale') == 'mai' ? 'selected' : '' }}>Maithili
                        </option>
                        <option value="cgg" {{ session()->get('locale') == 'cgg' ? 'selected' : '' }}>Kiga
                        </option>
                        <option value="ltg" {{ session()->get('locale') == 'ltg' ? 'selected' : '' }}>Latgalian
                        </option>
                        <option value="gd" {{ session()->get('locale') == 'gd' ? 'selected' : '' }}>Scots Gaelic
                        </option>
                        <option value="cy" {{ session()->get('locale') == 'cy' ? 'selected' : '' }}>Welsh
                        </option>
                        <option value="ga" {{ session()->get('locale') == 'ga' ? 'selected' : '' }}>Irish
                        </option>
                        <option value="haw" {{ session()->get('locale') == 'haw' ? 'selected' : '' }}>Hawaiian
                        </option>
                        <option value="eo" {{ session()->get('locale') == 'eo' ? 'selected' : '' }}>Esperanto
                        </option>
                        <option value="sa" {{ session()->get('locale') == 'sa' ? 'selected' : '' }}>Sanskrit
                        </option>
                        <option value="la" {{ session()->get('locale') == 'la' ? 'selected' : '' }}>Latin
                        </option>
                        <option value="yi" {{ session()->get('locale') == 'yi' ? 'selected' : '' }}>Yiddish
                        </option>
                        <option value="awa" {{ session()->get('locale') == 'awa' ? 'selected' : '' }}>Awadhi
                        </option>
                        <option value="bho" {{ session()->get('locale') == 'bho' ? 'selected' : '' }}>Bhojpuri
                        </option>
                        <option value="dov" {{ session()->get('locale') == 'dov' ? 'selected' : '' }}>Dombe
                        </option>
                        <option value="hrx" {{ session()->get('locale') == 'hrx' ? 'selected' : '' }}>Hunsrik
                        </option>
                        <option value="kri" {{ session()->get('locale') == 'kri' ? 'selected' : '' }}>Krio
                        </option>
                        <option value="lb" {{ session()->get('locale') == 'lb' ? 'selected' : '' }}>Luxembourgish
                        </option>
                        <option value="no" {{ session()->get('locale') == 'no' ? 'selected' : '' }}>Norwegian
                        </option>
                        <option value="mn" {{ session()->get('locale') == 'mn' ? 'selected' : '' }}>Mongolian
                        </option>
                        <option value="am" {{ session()->get('locale') == 'am' ? 'selected' : '' }}>Amharic
                        </option>
                        <option value="sd" {{ session()->get('locale') == 'sd' ? 'selected' : '' }}>Sindhi
                        </option>
                        <option value="gom" {{ session()->get('locale') == 'gom' ? 'selected' : '' }}>Konkani
                        </option>
                        <option value="ps" {{ session()->get('locale') == 'ps' ? 'selected' : '' }}>Pashto
                        </option>
                        <option value="nr" {{ session()->get('locale') == 'nr' ? 'selected' : '' }}>Ndebele
                        </option>
                        <option value="tum" {{ session()->get('locale') == 'tum' ? 'selected' : '' }}>Tumbuka
                        </option>
                        <option value="nso" {{ session()->get('locale') == 'nso' ? 'selected' : '' }}>Northern
                            Sotho</option>
                        <option value="be" {{ session()->get('locale') == 'be' ? 'selected' : '' }}>Belarusian
                        </option>
                        <option value="is" {{ session()->get('locale') == 'is' ? 'selected' : '' }}>Icelandic
                        </option>
                        <option value="sk" {{ session()->get('locale') == 'sk' ? 'selected' : '' }}>Slovak
                        </option>
                        <option value="yue" {{ session()->get('locale') == 'yue' ? 'selected' : '' }}>Cantonese
                        </option>
                    </select>
                </li>

            </ul>
        </nav>




        {{-- Navbar Desktop --}}

        <nav class="navbar">
            <!-- Nav Left -->
            <ul class="nav-links left">

                <!-- profile -->
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
                </li>

                <!-- Program -->
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

                <!-- Register -->
                <li><a href="register">{{ $translator->translate('Register') }}</a></li>
            </ul>

            <!-- Logo -->
            <div class="logo">
                <a href="home"><img src="img/logo_192509100957_ 1.png" alt="Logo" width="80px"></a>
            </div>

            <!-- Nav right -->
            <ul class="nav-links right">

                <!-- Login -->
                <li><a href="login">{{ $translator->translate('Login') }}</a></li>

                <!-- News -->
                <li><a href="news">{{ $translator->translate('News & Event') }}</a></li>


                <!-- Language -->
                <li>
                    <select class="changeLang ">
                        <option value="" selected disabled hidden>Select Language</option>
                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English
                        </option>
                        <option value="zh-CN" {{ session()->get('locale') == 'zh-CN' ? 'selected' : '' }}>Mandarin
                            Chinese</option>
                        <option value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish
                        </option>
                        <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>French
                        </option>
                        <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabic
                        </option>
                        <option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Russian
                        </option>
                        <option value="pt" {{ session()->get('locale') == 'pt' ? 'selected' : '' }}>Portuguese
                        </option>
                        <option value="de" {{ session()->get('locale') == 'de' ? 'selected' : '' }}>German
                        </option>
                        <option value="ja" {{ session()->get('locale') == 'ja' ? 'selected' : '' }}>Japanese
                        </option>
                        <option value="hi" {{ session()->get('locale') == 'hi' ? 'selected' : '' }}>Hindi
                        </option>
                        <option value="bn" {{ session()->get('locale') == 'bn' ? 'selected' : '' }}>Bengali
                        </option>
                        <option value="ur" {{ session()->get('locale') == 'ur' ? 'selected' : '' }}>Urdu</option>
                        <option value="id" {{ session()->get('locale') == 'id' ? 'selected' : '' }}>Indonesian
                        </option>
                        <option value="tr" {{ session()->get('locale') == 'tr' ? 'selected' : '' }}>Turkish
                        </option>
                        <option value="ko" {{ session()->get('locale') == 'ko' ? 'selected' : '' }}>Korean
                        </option>
                        <option value="it" {{ session()->get('locale') == 'it' ? 'selected' : '' }}>Italian
                        </option>
                        <option value="fa" {{ session()->get('locale') == 'fa' ? 'selected' : '' }}>Persian
                            (Farsi)</option>
                        <option value="th" {{ session()->get('locale') == 'th' ? 'selected' : '' }}>Thai</option>
                        <option value="pl" {{ session()->get('locale') == 'pl' ? 'selected' : '' }}>Polish
                        </option>
                        <option value="uk" {{ session()->get('locale') == 'uk' ? 'selected' : '' }}>Ukrainian
                        </option>
                        <option value="nl" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Dutch
                        </option>
                        <option value="vi" {{ session()->get('locale') == 'vi' ? 'selected' : '' }}>Vietnamese
                        </option>
                        <option value="sw" {{ session()->get('locale') == 'sw' ? 'selected' : '' }}>Swahili
                        </option>
                        <option value="he" {{ session()->get('locale') == 'he' ? 'selected' : '' }}>Hebrew
                        </option>
                        <option value="el" {{ session()->get('locale') == 'el' ? 'selected' : '' }}>Greek
                        </option>
                        <option value="ms" {{ session()->get('locale') == 'ms' ? 'selected' : '' }}>Malay
                        </option>
                        <option value="ta" {{ session()->get('locale') == 'ta' ? 'selected' : '' }}>Tamil
                        </option>
                        <option value="te" {{ session()->get('locale') == 'te' ? 'selected' : '' }}>Telugu
                        </option>
                        <option value="mr" {{ session()->get('locale') == 'mr' ? 'selected' : '' }}>Marathi
                        </option>
                        <option value="pa" {{ session()->get('locale') == 'pa' ? 'selected' : '' }}>Punjabi
                        </option>
                        <option value="gu" {{ session()->get('locale') == 'gu' ? 'selected' : '' }}>Gujarati
                        </option>
                        <option value="ml" {{ session()->get('locale') == 'ml' ? 'selected' : '' }}>Malayalam
                        </option>
                        <option value="my" {{ session()->get('locale') == 'my' ? 'selected' : '' }}>Burmese
                        </option>
                        <option value="cs" {{ session()->get('locale') == 'cs' ? 'selected' : '' }}>Czech
                        </option>
                        <option value="ro" {{ session()->get('locale') == 'ro' ? 'selected' : '' }}>Romanian
                        </option>
                        <option value="hu" {{ session()->get('locale') == 'hu' ? 'selected' : '' }}>Hungarian
                        </option>
                        <option value="sr" {{ session()->get('locale') == 'sr' ? 'selected' : '' }}>Serbian
                        </option>
                        <option value="sk" {{ session()->get('locale') == 'sk' ? 'selected' : '' }}>Slovak
                        </option>
                        <option value="sl" {{ session()->get('locale') == 'sl' ? 'selected' : '' }}>Slovenian
                        </option>
                        <option value="fi" {{ session()->get('locale') == 'fi' ? 'selected' : '' }}>Finnish
                        </option>
                        <option value="ca" {{ session()->get('locale') == 'ca' ? 'selected' : '' }}>Catalan
                        </option>
                        <option value="ha" {{ session()->get('locale') == 'ha' ? 'selected' : '' }}>Hausa
                        </option>
                        <option value="ps" {{ session()->get('locale') == 'ps' ? 'selected' : '' }}>Pashto
                        </option>
                        <option value="sd" {{ session()->get('locale') == 'sd' ? 'selected' : '' }}>Sindhi
                        </option>
                        <option value="si" {{ session()->get('locale') == 'si' ? 'selected' : '' }}>Sinhala
                        </option>
                        <option value="eu" {{ session()->get('locale') == 'eu' ? 'selected' : '' }}>Basque
                        </option>
                        <option value="az" {{ session()->get('locale') == 'az' ? 'selected' : '' }}>Azerbaijani
                        </option>
                        <option value="ku" {{ session()->get('locale') == 'ku' ? 'selected' : '' }}>Kurdish
                            (Kurmanji)</option>
                        <option value="ckb" {{ session()->get('locale') == 'ckb' ? 'selected' : '' }}>Kurdish
                            (Sorani)</option>
                        <option value="lo" {{ session()->get('locale') == 'lo' ? 'selected' : '' }}>Lao</option>
                        <option value="lt" {{ session()->get('locale') == 'lt' ? 'selected' : '' }}>Lithuanian
                        </option>
                        <option value="lv" {{ session()->get('locale') == 'lv' ? 'selected' : '' }}>Latvian
                        </option>
                        <option value="et" {{ session()->get('locale') == 'et' ? 'selected' : '' }}>Estonian
                        </option>
                        <option value="mk" {{ session()->get('locale') == 'mk' ? 'selected' : '' }}>Macedonian
                        </option>
                        <option value="sq" {{ session()->get('locale') == 'sq' ? 'selected' : '' }}>Albanian
                        </option>
                        <option value="bs" {{ session()->get('locale') == 'bs' ? 'selected' : '' }}>Bosnian
                        </option>
                        <option value="af" {{ session()->get('locale') == 'af' ? 'selected' : '' }}>Afrikaans
                        </option>
                        <option value="mt" {{ session()->get('locale') == 'mt' ? 'selected' : '' }}>Maltese
                        </option>
                        <option value="tg" {{ session()->get('locale') == 'tg' ? 'selected' : '' }}>Tajik
                        </option>
                        <option value="uz" {{ session()->get('locale') == 'uz' ? 'selected' : '' }}>Uzbek
                        </option>
                        <option value="kk" {{ session()->get('locale') == 'kk' ? 'selected' : '' }}>Kazakh
                        </option>
                        <option value="ky" {{ session()->get('locale') == 'ky' ? 'selected' : '' }}>Kyrgyz
                        </option>
                        <option value="hy" {{ session()->get('locale') == 'hy' ? 'selected' : '' }}>Armenian
                        </option>
                        <option value="ka" {{ session()->get('locale') == 'ka' ? 'selected' : '' }}>Georgian
                        </option>
                        <option value="ti" {{ session()->get('locale') == 'ti' ? 'selected' : '' }}>Tigrinya
                        </option>
                        <option value="so" {{ session()->get('locale') == 'so' ? 'selected' : '' }}>Somali
                        </option>
                        <option value="xh" {{ session()->get('locale') == 'xh' ? 'selected' : '' }}>Xhosa
                        </option>
                        <option value="zu" {{ session()->get('locale') == 'zu' ? 'selected' : '' }}>Zulu</option>
                        <option value="yo" {{ session()->get('locale') == 'yo' ? 'selected' : '' }}>Yoruba
                        </option>
                        <option value="ig" {{ session()->get('locale') == 'ig' ? 'selected' : '' }}>Igbo</option>
                        <option value="mi" {{ session()->get('locale') == 'mi' ? 'selected' : '' }}>Maori
                        </option>
                        <option value="ht" {{ session()->get('locale') == 'ht' ? 'selected' : '' }}>Haitian
                            Creole</option>
                        <option value="su" {{ session()->get('locale') == 'su' ? 'selected' : '' }}>Sundanese
                        </option>
                        <option value="jv" {{ session()->get('locale') == 'jv' ? 'selected' : '' }}>Javanese
                        </option>
                        <option value="bal" {{ session()->get('locale') == 'bal' ? 'selected' : '' }}>Balochi
                        </option>
                        <option value="lus" {{ session()->get('locale') == 'lus' ? 'selected' : '' }}>Mizo
                        </option>
                        <option value="ba" {{ session()->get('locale') == 'ba' ? 'selected' : '' }}>Bashkir
                        </option>
                        <option value="bm" {{ session()->get('locale') == 'bm' ? 'selected' : '' }}>Bambara
                        </option>
                        <option value="crh" {{ session()->get('locale') == 'crh' ? 'selected' : '' }}>Crimean
                            Tatar</option>
                        <option value="ny" {{ session()->get('locale') == 'ny' ? 'selected' : '' }}>Chichewa
                            (Nyanja)</option>
                        <option value="ace" {{ session()->get('locale') == 'ace' ? 'selected' : '' }}>Acehnese
                        </option>
                        <option value="ban" {{ session()->get('locale') == 'ban' ? 'selected' : '' }}>Balinese
                        </option>
                        <option value="bew" {{ session()->get('locale') == 'bew' ? 'selected' : '' }}>Betawi
                        </option>
                        <option value="btx" {{ session()->get('locale') == 'btx' ? 'selected' : '' }}>Batak Karo
                        </option>
                        <option value="bbc" {{ session()->get('locale') == 'bbc' ? 'selected' : '' }}>Batak Toba
                        </option>
                        <option value="bts" {{ session()->get('locale') == 'bts' ? 'selected' : '' }}>Batak
                            Simalungun</option>
                        <option value="min" {{ session()->get('locale') == 'min' ? 'selected' : '' }}>Minang
                        </option>
                        <option value="mak" {{ session()->get('locale') == 'mak' ? 'selected' : '' }}>Makassar
                        </option>
                        <option value="pam" {{ session()->get('locale') == 'pam' ? 'selected' : '' }}>Kapampangan
                        </option>
                        <option value="ilo" {{ session()->get('locale') == 'ilo' ? 'selected' : '' }}>Iloko
                        </option>
                        <option value="hil" {{ session()->get('locale') == 'hil' ? 'selected' : '' }}>Hiligaynon
                        </option>
                        <option value="ceb" {{ session()->get('locale') == 'ceb' ? 'selected' : '' }}>Cebuano
                        </option>
                        <option value="fil" {{ session()->get('locale') == 'fil' ? 'selected' : '' }}>Tagalog
                        </option>
                        <option value="om" {{ session()->get('locale') == 'om' ? 'selected' : '' }}>Oromo
                        </option>
                        <option value="lg" {{ session()->get('locale') == 'lg' ? 'selected' : '' }}>Luganda
                        </option>
                        <option value="ln" {{ session()->get('locale') == 'ln' ? 'selected' : '' }}>Lingala
                        </option>
                        <option value="tn" {{ session()->get('locale') == 'tn' ? 'selected' : '' }}>Tswana
                        </option>
                        <option value="st" {{ session()->get('locale') == 'st' ? 'selected' : '' }}>Sesotho
                        </option>
                        <option value="ss" {{ session()->get('locale') == 'ss' ? 'selected' : '' }}>Swati
                        </option>
                        <option value="ts" {{ session()->get('locale') == 'ts' ? 'selected' : '' }}>Tsonga
                        </option>
                        <option value="lg" {{ session()->get('locale') == 'lg' ? 'selected' : '' }}>Ganda
                        </option>
                        <option value="ee" {{ session()->get('locale') == 'ee' ? 'selected' : '' }}>Ewe</option>
                        <option value="gaa" {{ session()->get('locale') == 'gaa' ? 'selected' : '' }}>Ga</option>
                        <option value="din" {{ session()->get('locale') == 'din' ? 'selected' : '' }}>Dinka
                        </option>
                        <option value="nus" {{ session()->get('locale') == 'nus' ? 'selected' : '' }}>Nuer
                        </option>
                        <option value="sn" {{ session()->get('locale') == 'sn' ? 'selected' : '' }}>Shona
                        </option>
                        <option value="bem" {{ session()->get('locale') == 'bem' ? 'selected' : '' }}>Bemba
                        </option>
                        <option value="sg" {{ session()->get('locale') == 'sg' ? 'selected' : '' }}>Sango
                        </option>
                        <option value="ak" {{ session()->get('locale') == 'ak' ? 'selected' : '' }}>Twi (Akan)
                        </option>
                        <option value="fj" {{ session()->get('locale') == 'fj' ? 'selected' : '' }}>Fijian
                        </option>
                        <option value="dz" {{ session()->get('locale') == 'dz' ? 'selected' : '' }}>Dzongkha
                        </option>
                        <option value="new" {{ session()->get('locale') == 'new' ? 'selected' : '' }}>Newari
                        </option>
                        <option value="crs" {{ session()->get('locale') == 'crs' ? 'selected' : '' }}>Seychellois
                            Creole</option>
                        <option value="yua" {{ session()->get('locale') == 'yua' ? 'selected' : '' }}>Yucatec Maya
                        </option>
                        <option value="qu" {{ session()->get('locale') == 'qu' ? 'selected' : '' }}>Quechua
                        </option>
                        <option value="ay" {{ session()->get('locale') == 'ay' ? 'selected' : '' }}>Aymara
                        </option>
                        <option value="rom" {{ session()->get('locale') == 'rom' ? 'selected' : '' }}>Romani
                        </option>
                        <option value="oc" {{ session()->get('locale') == 'oc' ? 'selected' : '' }}>Occitan
                        </option>
                        <option value="co" {{ session()->get('locale') == 'co' ? 'selected' : '' }}>Corsican
                        </option>
                        <option value="br" {{ session()->get('locale') == 'br' ? 'selected' : '' }}>Breton
                        </option>
                        <option value="scn" {{ session()->get('locale') == 'scn' ? 'selected' : '' }}>Sicilian
                        </option>
                        <option value="szl" {{ session()->get('locale') == 'szl' ? 'selected' : '' }}>Silesian
                        </option>
                        <option value="lmo" {{ session()->get('locale') == 'lmo' ? 'selected' : '' }}>Lombard
                        </option>
                        <option value="lij" {{ session()->get('locale') == 'lij' ? 'selected' : '' }}>Ligurian
                        </option>
                        <option value="fy" {{ session()->get('locale') == 'fy' ? 'selected' : '' }}>Frisian
                        </option>
                        <option value="chm" {{ session()->get('locale') == 'chm' ? 'selected' : '' }}>Meadow Mari
                        </option>
                        <option value="bua" {{ session()->get('locale') == 'bua' ? 'selected' : '' }}>Buryat
                        </option>
                        <option value="cv" {{ session()->get('locale') == 'cv' ? 'selected' : '' }}>Chuvash
                        </option>
                        <option value="cnh" {{ session()->get('locale') == 'cnh' ? 'selected' : '' }}>Hakha Chin
                        </option>
                        <option value="mni-Mtei" {{ session()->get('locale') == 'mni-Mtei' ? 'selected' : '' }}>
                            Meiteilon (Manipuri)</option>
                        <option value="tt" {{ session()->get('locale') == 'tt' ? 'selected' : '' }}>Tatar
                        </option>
                        <option value="ug" {{ session()->get('locale') == 'ug' ? 'selected' : '' }}>Uyghur
                        </option>
                        <option value="ak" {{ session()->get('locale') == 'ak' ? 'selected' : '' }}>Twi</option>
                        <option value="ktu" {{ session()->get('locale') == 'ktu' ? 'selected' : '' }}>Kituba
                        </option>
                        <option value="pag" {{ session()->get('locale') == 'pag' ? 'selected' : '' }}>Pangasinan
                        </option>
                        <option value="pap" {{ session()->get('locale') == 'pap' ? 'selected' : '' }}>Papiamento
                        </option>
                        <option value="shn" {{ session()->get('locale') == 'shn' ? 'selected' : '' }}>Shan
                        </option>
                        <option value="doi" {{ session()->get('locale') == 'doi' ? 'selected' : '' }}>Dogri
                        </option>
                        <option value="sd" {{ session()->get('locale') == 'sd' ? 'selected' : '' }}>Sindhi
                        </option>
                        <option value="mai" {{ session()->get('locale') == 'mai' ? 'selected' : '' }}>Maithili
                        </option>
                        <option value="cgg" {{ session()->get('locale') == 'cgg' ? 'selected' : '' }}>Kiga
                        </option>
                        <option value="ltg" {{ session()->get('locale') == 'ltg' ? 'selected' : '' }}>Latgalian
                        </option>
                        <option value="gd" {{ session()->get('locale') == 'gd' ? 'selected' : '' }}>Scots Gaelic
                        </option>
                        <option value="cy" {{ session()->get('locale') == 'cy' ? 'selected' : '' }}>Welsh
                        </option>
                        <option value="ga" {{ session()->get('locale') == 'ga' ? 'selected' : '' }}>Irish
                        </option>
                        <option value="haw" {{ session()->get('locale') == 'haw' ? 'selected' : '' }}>Hawaiian
                        </option>
                        <option value="eo" {{ session()->get('locale') == 'eo' ? 'selected' : '' }}>Esperanto
                        </option>
                        <option value="sa" {{ session()->get('locale') == 'sa' ? 'selected' : '' }}>Sanskrit
                        </option>
                        <option value="la" {{ session()->get('locale') == 'la' ? 'selected' : '' }}>Latin
                        </option>
                        <option value="yi" {{ session()->get('locale') == 'yi' ? 'selected' : '' }}>Yiddish
                        </option>
                        <option value="awa" {{ session()->get('locale') == 'awa' ? 'selected' : '' }}>Awadhi
                        </option>
                        <option value="bho" {{ session()->get('locale') == 'bho' ? 'selected' : '' }}>Bhojpuri
                        </option>
                        <option value="dov" {{ session()->get('locale') == 'dov' ? 'selected' : '' }}>Dombe
                        </option>
                        <option value="hrx" {{ session()->get('locale') == 'hrx' ? 'selected' : '' }}>Hunsrik
                        </option>
                        <option value="kri" {{ session()->get('locale') == 'kri' ? 'selected' : '' }}>Krio
                        </option>
                        <option value="lb" {{ session()->get('locale') == 'lb' ? 'selected' : '' }}>Luxembourgish
                        </option>
                        <option value="no" {{ session()->get('locale') == 'no' ? 'selected' : '' }}>Norwegian
                        </option>
                        <option value="mn" {{ session()->get('locale') == 'mn' ? 'selected' : '' }}>Mongolian
                        </option>
                        <option value="am" {{ session()->get('locale') == 'am' ? 'selected' : '' }}>Amharic
                        </option>
                        <option value="sd" {{ session()->get('locale') == 'sd' ? 'selected' : '' }}>Sindhi
                        </option>
                        <option value="gom" {{ session()->get('locale') == 'gom' ? 'selected' : '' }}>Konkani
                        </option>
                        <option value="ps" {{ session()->get('locale') == 'ps' ? 'selected' : '' }}>Pashto
                        </option>
                        <option value="nr" {{ session()->get('locale') == 'nr' ? 'selected' : '' }}>Ndebele
                        </option>
                        <option value="tum" {{ session()->get('locale') == 'tum' ? 'selected' : '' }}>Tumbuka
                        </option>
                        <option value="nso" {{ session()->get('locale') == 'nso' ? 'selected' : '' }}>Northern
                            Sotho</option>
                        <option value="be" {{ session()->get('locale') == 'be' ? 'selected' : '' }}>Belarusian
                        </option>
                        <option value="is" {{ session()->get('locale') == 'is' ? 'selected' : '' }}>Icelandic
                        </option>
                        <option value="sk" {{ session()->get('locale') == 'sk' ? 'selected' : '' }}>Slovak
                        </option>
                        <option value="yue" {{ session()->get('locale') == 'yue' ? 'selected' : '' }}>Cantonese
                        </option>
                    </select>
                </li>
            </ul>
        </nav>
    </header>

    <!-- ------ JUMBOTRON SECTION ------ -->
    <div class="jumbotron">
        <video src="img/Untitled video - Made with Clipchamp (1).mp4" autoplay loop muted
            class="background-video"></video>
        <div class="overlay">
            <p data-aos="fade-in" data-aos-duration="1200" data-aos-delay="200">
                {{ $translator->translate('Start your career') }}</p>
            <h1 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="600">
                {{ $translator->translate('Your Dream Hotel School in Bali') }}</h1>
            <div class="kotak"></div>
        </div>
    </div>

    <!-- ------ ABOUT SECTION ------ -->
    <section id="about" class="hidden">
        <div class="container-title" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
            <h2>{{ $translator->translate('About Us') }}</h2>
        </div>

        <div class="wrapper-text">
            <div class="text" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <h3 class="about">{{ $translator->translate('About') }}</h3>
                <h1 class="DHS">{{ $translator->translate('Denpasar Hotel School') }}</h1>
                <p>{{ $translator->translate('
                                                                                                                                                                                                                                Denpasar Hotel School is a premier institution dedicated to training
                                                                                                                                                                                                                                the next generation of professionals in the hospitality and tourism
                                                                                                                                                                                                                                industries. Located in the heart of Bali—a global hub for
                                                                                                                                                                                                                                tourism—the school offers students a blend of theoretical knowledge
                                                                                                                                                                                                                                and hands-on experience, fostering a deep understanding of
                                                                                                                                                                                                                                world-class hospitality standards, service excellence, and Balinese
                                                                                                                                                                                                                                cultural values.
                                                                                                                                                                                                                               ') }}
                </p>
                <div class="button" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                    <a href="#program" class="btn">{{ $translator->translate('Learn More') }}</a>
                </div>
                <div class="button-middle" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                    <a href="#program" class="btn-middle">{{ $translator->translate('Learn More') }}</a>
                </div>
            </div>
            <div class="laba" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <img src="img/homefoto.png" width="400px" alt="" />
            </div>
        </div>
    </section>

    <!-- ------ SECTION PROGRAM ------ -->
    <section id="program">

        {{-- ------ Mobile ------ --}}
        <div class="program-mobile">
            <div class="container-title2" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                <h2>{{ $translator->translate('Program') }}</h2>
            </div>
            <div class="program-container">
                    
                    <div class="program-card">
                        <a href="after-click-inter">
                            <img src="img/program.png" alt="Internship Image">
                            <div class="program-title-text">
                                <p>{{ $translator->translate('Australian Internship &gt;') }}</p>
                            </div>
                        </a>
                    </div>

                    <div class="program-card">
                        <a href="after-click-inter2">
                            <img src="img/program.png" alt="program 2">
                            <div class="program-title-text">
                                <p>{{ $translator->translate('Structured Work Based Learning &gt;') }}</p>
                            </div>
                        </a>
                    </div>

                    <div class="program-card">
                        <a href="after-click-inter5">
                            <img src="img/program.png" alt="program 2">
                            <div class="program-title-text">
                                <p>{{ $translator->translate('Mentorship from Global Hospitality Leaders &gt;') }}</p>
                            </div>
                        </a>
                    </div>

                    <div class="program-card">
                        <a href="after-click-inter4">
                            <img src="img/program.png" alt="program 2">
                            <div class="program-title-text">
                                <p>{{ $translator->translate('Cross cultural skill development &gt;') }}</p>
                            </div>
                        </a>
                    </div>
            </div>
        </div>

        {{-- ------ Desktop ------ --}}
        <div class="program-desktop">
            <div class="program hidden-right">
                <div class="program-text">
                    <div class="program-title">
                        <h1>{{ $translator->translate('Australian Intership') }}</h1>
                        <h4>{{ $translator->translate('
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      Dual Certification Program with Australian Hospitality Schools.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ') }}
                        </h4>
                    </div>
                    <p>{{ $translator->translate('
                                                                                                                                                                                                                                                                                                                                                                                                                                After completing the initial training in Bali, students can
                                                                                                                                                                                                                                                                                                                                                                                                                                participate in an internship at a partnered hotel or resort in
                                                                                                                                                                                                                                                                                                                                                                                                                                Australia, gaining real-world experience in an international
                                                                                                                                                                                                                                                                                                                                                                                                                                setting.
                                                                                                                                                                                                                                                                                                                                                                                                                                ') }}
                    </p>
                    <div class="button-middle" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                        <a href="after-click-inter" class="btn-middle">{{ $translator->translate('See more') }}</a>
                    </div>
                </div>
                <div class="image-vision" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                    <img src="img/vision.png" width="400px" />
                </div>
            </div>

            <div class="program hidden-left">
                <div class="image-vision" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                    <img src="img/vision.png" width="400px" />
                </div>
                <div class="program-text" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                    <h1>{{ $translator->translate('Structured Work Based Learning') }}</h1>
                    <h4>{{ $translator->translate('German Ausbildung program (2 to 3 Years)') }}</h4>
                    <p>{{ $translator->translate('
                                                                                                                                                                                                                                                                                                                                                                                                                                Strudents alternate between classroom sessions classroom session and
                                                                                                                                                                                                                                                                                                                                                                                                                                hands-on work at hotels, restaurants, or resorts in Germany.
                                                                                                                                                                                                                                                                                                                                                                                                                                ') }}
                    </p>
                    <div class="button-middle" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                        <a href="after-click-inter2" class="btn-middle">{{ $translator->translate('See more') }}</a>
                    </div>
                </div>
            </div>

            <div class="program hidden-right">
                <div class="program-text" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                    <div class="program-title">
                        <h1>{{ $translator->translate('mentorship from Global Hospitality Leaders') }}</h1>
                        <h4>{{ $translator->translate('
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      Hospitality Management Internship Program with Global Hotel Chains
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      (6 to 12 Months)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ') }}
                        </h4>
                    </div>
                    <p>{{ $translator->translate('
                                                                                                                                                                                                                                                                                                                                                                                                                                Students receive mentorship from experienced managers and trainers
                                                                                                                                                                                                                                                                                                                                                                                                                                within the partner hotel chains.
                                                                                                                                                                                                                                                                                                                                                                                                                                ') }}
                    </p>
                    <div class="button-middle" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                        <a href="after-click-inter5" class="btn-middle">{{ $translator->translate('See more') }}</a>
                    </div>
                </div>
                <div class="image-vision" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                    <img src="img/vision.png" width="400px" />
                </div>
            </div>

            <div class="program hidden-left">
                <div class="image-vision" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                    <img src="img/vision.png" width="400px" />
                </div>
                <div class="program-text" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                    <h1>{{ $translator->translate('Cross cultural skill development') }}</h1>
                    <h4>{{ $translator->translate('
                                                                                                                                                                                                                                                                                                                                                                                                                                Internasional Culinary Exchange Program with European Schools (1
                                                                                                                                                                                                                                                                                                                                                                                                                                Years)
                                                                                                                                                                                                                                                                                                                                                                                                                                ') }}
                    </h4>
                    <p>{{ $translator->translate('
                                                                                                                                                                                                                                                                                                                                                                                                                                Students learn to work in diverse, multicultural teams, a key skill
                                                                                                                                                                                                                                                                                                                                                                                                                                in the international culinary industry.
                                                                                                                                                                                                                                                                                                                                                                                                                                ') }}
                    </p>
                    <div class="button-middle" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                        <a href="after-click-inter4" class="btn-middle">{{ $translator->translate('See more') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------ SECTION PHOTO ------ -->
    <section class="collection">
        <div class="container-title" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
            <h2>{{ $translator->translate('Most Popular Photo') }}</h2>
        </div>

        <div class="swiper mySwiper" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="img/jumbotron-news.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="img/g9.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="img/g3.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="img/g4.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="img/hotnews1.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="img/g1.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="img/jumbotron.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="img/g8.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="img/hotnews1.jpg" />
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-------------- RECENT NEWS -------------->
    <section class="hidden">
        

        <div class="container-title">
            <h2>{{ $translator->translate('Achievement') }}</h1>
        </div>

        <div class="container">
            <a href="#">
                <div class="card">
                    <img alt="Group of people standing in a hallway" height="200"
                        src="https://storage.googleapis.com/a1aa/image/T3M3bVdjCtbjEEHeiLw-MwdJrkmvkSj9qqelof2Lyc0.jpg"
                        width="300" />
                    <div class="card-content">
                        <h3>{{ $translator->translate('
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Siti Ari, Peserta Didik Persiapan Bahasa Jerman Sukses diterim...
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ') }}
                        </h3>
                        <p>{{ $translator->translate('
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            16/01/2025
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ') }}
                        </p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card">
                    <img alt="Group of people holding a banner in a public place" height="200"
                        src="https://storage.googleapis.com/a1aa/image/D3yQyvEs98fYlHhCXXkWDB4J3fuSuauff5bl2_906kE.jpg"
                        width="300" />
                    <div class="card-content">
                        <h3>{{ $translator->translate('
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Dio & Suparta Mahasiswa DHS Klungkung diterima bekerj...
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ') }}
                        </h3>
                        <p>
                            14/01/2025
                        </p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card">
                    <img alt="Group of people having a meeting in a conference room" height="200"
                        src="https://storage.googleapis.com/a1aa/image/Cp-JX990m-WKVwfO9uuo4idVzwasZC6EmZDZGkfggMY.jpg"
                        width="300" />
                    <div class="card-content">
                        <h3>{{ $translator->translate('
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Guest Lecture dari Prof.Dr.Subash Chandra Dash, India
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ') }}
                        </h3>
                        <p>
                            04/01/2025
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="button-middle">
            <a href="#" class="btn-middle">{{ $translator->translate('See more') }}</a>
        </div>

    </section>

    <!-- ------ CLIENT ------ -->

    <section id="clients" class="hidden">
        <div class="container-title">
            <h2>{{ $translator->translate('Clients & Partners') }}</h2>
        </div>
        <div class="slider-container">
            <div class="slider" id="slider">
                <div class="client"><img src="img/OYO.png" alt="Logo"></div>
                <div class="client"><img src="img/LATIFABA.png" alt="Logo"></div>
                <div class="client"><img src="img/IKEA.png" alt="Logo"></div>
                <div class="client"><img src="img/STARBAK.png" alt="Logo"></div>
            </div>
        </div>
    </section>

    <!-- ------ FOOTER ------ -->

    <footer>
        <div class="column contact-info">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d493.0687060857335!2d115.23241324742432!3d-8.63915825517267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f8661ef31cd%3A0x663c45c04ca4cfb3!2sPT.%20Indo%20Apps%20Solusindo%20-%20Apps%20%26%20Web%20Development%20%7C%20Software%20Services%20%7C%20Seo%20Services%20di%20Bali%20%7C%20Domain%20%26%20Hosting%20%7C%20IoT!5e0!3m2!1sid!2sid!4v1737358264944!5m2!1sid!2sid"
                width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="contact-details">
                <img src="img/FOOTER.png" alt="">
                <p>{{ $translator->translate('Jln. Ganetri IV No. 4 DPS 80237 Bali ') }}</p>
                <p>{{ $translator->translate('Phone: +62 81228840166 ') }}</p>
                <p>{{ $translator->translate('Email: partners@indoapps.id ') }}</p>
                <p>{{ $translator->translate('Website: www.indoapps.id ') }}</p>
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
                <a href="#"><i class='bx bx-chevron-right'></i>{{ $translator->translate('Info') }}</a>
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

    <script>
        (function(){if(!window.chatbase||window.chatbase("getState")!=="initialized"){window.chatbase=(...arguments)=>{if(!window.chatbase.q){window.chatbase.q=[]}window.chatbase.q.push(arguments)};window.chatbase=new Proxy(window.chatbase,{get(target,prop){if(prop==="q"){return target.q}return(...args)=>target(prop,...args)}})}const onLoad=function(){const script=document.createElement("script");script.src="https://www.chatbase.co/embed.min.js";script.id="vfUL835Gz6PZIU6hu9MRF";script.domain="www.chatbase.co";document.body.appendChild(script)};if(document.readyState==="complete"){onLoad()}else{window.addEventListener("load",onLoad)}})();
        </script>
    <script src="js/home.js"></script>
    <script src="js/galery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/swiper.js"></script>


    {{-- Change Language --}}
    <script type="text/javascript">
        var url = "{{ route('changeLang') }}";
        $('.changeLang').change(function(event) {
            window.location.herf = url + "?lang=" + $(this).val();
        })
    </script>


    {{-- Animation --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const observer = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("show");
                            observer.unobserve(entry.target); // Biar nggak nge-loop terus
                        }
                    });
                }, {
                    threshold: 0.5
                } // Elemen muncul 20% sebelum efek berjalan
            );

            const hiddenElements = document.querySelectorAll(".hidden");
            hiddenElements.forEach((el) => observer.observe(el));
        });

        document.addEventListener("DOMContentLoaded", function() {
            const elements = document.querySelectorAll(".hidden-left, .hidden-right");

            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry, index) => {
                        if (entry.isIntersecting) {
                            setTimeout(() => {
                                entry.target.classList.add("show");
                            }, index * 300); // Delay 300ms per elemen biar masuk satu-satu
                            observer.unobserve(entry.target); // Stop observer setelah animasi jalan
                        }
                    });
                }, {
                    threshold: 0.5
                } // Mulai animasi saat elemen 20% masuk viewport
            );

            elements.forEach((el) => observer.observe(el));
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    {{-- Change Language --}}
    <script type="text/javascript">
        var url = "{{ route('changeLang') }}";
        $('.changeLang').change(function() {
            window.location.href = url + "?lang=" + $(this).val();
        });
    </script>


    {{-- Swiper Function --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            loop: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 150,
                modifier: 1,
                slideShadows: true,
            },
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            }

        });
    </script>


    <!-- Animation Fade js -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 1,
        });
    </script>

    {{-- Sidebar dropdown --}}
    <script src="js/sidebar.js"></script>

    {{-- Show Sidebar --}}
    <script>
        function showSidebar() {
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'flex'
        }
    </script>


    {{-- Hide Sidebar --}}
    <script>
        function hideSidebar() {
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'none'
        }
    </script>


</body>

</html>
