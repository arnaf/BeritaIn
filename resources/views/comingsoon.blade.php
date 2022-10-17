
<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Khronos 2.0 - Particles</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('csscs') }}/vendor.css">

    <link rel="stylesheet" href="{{ asset('csscs') }}/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body id="top" class="theme-particles">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div class="s-pagewrap">


        <!-- # header
        ================================================== -->
        <header class="s-header">
            <div class="row s-header__content">

                <div class="s-header__logo">
                    <a class="logo" href="index-particles.html">
                        <img src="{{ asset('imagecs') }}/logo.png" alt="Homepage">
                    </a>
                </div>

                <ul class="s-header__social">
                    <li>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                            <span class="screen-reader-text">Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                            <span class="screen-reader-text">Twitter</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M-111.052-244.992c-5.518,0-9.99,4.473-9.99,9.99c0,4.232,2.633,7.85,6.35,9.306 c-0.088-0.79-0.166-2.006,0.034-2.868c0.182-0.78,1.172-4.966,1.172-4.966s-0.299-0.599-0.299-1.484 c0-1.388,0.805-2.425,1.808-2.425c0.853,0,1.264,0.64,1.264,1.407c0,0.858-0.546,2.139-0.827,3.327 c-0.235,0.994,0.499,1.805,1.479,1.805c1.775,0,3.141-1.872,3.141-4.575c0-2.392-1.719-4.064-4.173-4.064 c-2.843,0-4.512,2.132-4.512,4.335c0,0.858,0.331,1.779,0.744,2.28c0.081,0.099,0.093,0.185,0.069,0.286 c-0.076,0.315-0.245,0.994-0.277,1.133c-0.044,0.183-0.145,0.222-0.335,0.134c-1.247-0.581-2.027-2.405-2.027-3.871 c0-3.151,2.289-6.045,6.601-6.045c3.466,0,6.159,2.469,6.159,5.77c0,3.444-2.171,6.213-5.184,6.213 c-1.013,0-1.964-0.525-2.29-1.146c0,0-0.501,1.907-0.623,2.374c-0.225,0.868-0.834,1.956-1.241,2.62 c0.935,0.289,1.928,0.445,2.958,0.445c5.517,0,9.99-4.473,9.99-9.99S-105.535-244.992-111.052-244.992" transform="translate(123.042 246.992)"></path></svg>
                            <span class="screen-reader-text">Pinterest</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                            <span class="screen-reader-text">Instagram</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20.66,6.98c-0.894-1.533-2.107-2.747-3.641-3.64C15.486,2.447,13.813,2,12,2S8.514,2.447,6.98,3.34 C5.447,4.233,4.233,5.447,3.34,6.98S2,10.187,2,12s0.446,3.487,1.34,5.02c0.894,1.534,2.107,2.747,3.641,3.64 C8.514,21.553,10.187,22,12,22s3.486-0.447,5.02-1.34c1.533-0.893,2.747-2.106,3.641-3.64C21.554,15.487,22,13.813,22,12 S21.554,8.513,20.66,6.98z M12,3.66c2,0,3.772,0.64,5.32,1.919c-0.92,1.174-2.286,2.14-4.1,2.9c-1.002-1.813-2.088-3.327-3.261-4.54 C10.641,3.753,11.319,3.66,12,3.66z M5.51,6.8c0.754-0.947,1.656-1.686,2.711-2.22c1.212,1.201,2.325,2.7,3.34,4.5 c-2,0.6-4.114,0.9-6.341,0.9c-0.573,0-1.006-0.013-1.3-0.04C4.227,8.793,4.757,7.747,5.51,6.8z M3.66,12 c0-0.054,0.003-0.12,0.01-0.2c0.007-0.08,0.01-0.146,0.01-0.2c0.254,0.014,0.641,0.02,1.161,0.02c2.666,0,5.146-0.367,7.439-1.1 c0.187,0.373,0.381,0.793,0.58,1.26c-1.32,0.293-2.674,1.006-4.061,2.14S6.4,16.247,5.76,17.5C4.36,15.913,3.66,14.08,3.66,12z M12,20.34c-1.894,0-3.594-0.587-5.101-1.759C7.5,17.394,8.423,16.259,9.67,15.18c1.246-1.08,2.483-1.753,3.71-2.02 c0.772,2.133,1.293,4.339,1.56,6.62C13.966,20.153,12.986,20.34,12,20.34z M19.08,16.38c-0.666,1.066-1.526,1.94-2.58,2.621 c-0.24-2.08-0.7-4.107-1.379-6.081c0.932-0.066,1.765-0.1,2.5-0.1c0.799,0,1.686,0.034,2.659,0.1 C20.146,14.16,19.746,15.313,19.08,16.38z M17.84,11.38c-1.16,0-2.233,0.047-3.22,0.14c-0.254-0.653-0.48-1.193-0.68-1.62 c2.066-0.906,3.532-2.006,4.399-3.3c1.2,1.414,1.854,3.027,1.96,4.84C19.487,11.4,18.667,11.38,17.84,11.38z"></path></svg>
                            <span class="screen-reader-text">Dribbble</span>
                        </a>
                    </li>
                </ul>

            </div> <!-- end s-header__content -->
        </header> <!-- end s-header -->


        <!-- # intro
        ================================================== -->
        <section id="intro" class="s-intro">

            <div id="particles-js" class="s-intro__particles"></div>

            <div class="row s-intro__content">
                <div class="column lg-24">

                    <div class="counter">
                        <div class="counter__time">
                            <span class="ss-days">200</span>
                            <span>days</span>
                        </div>
                        <div class="counter__time">
                            <span class="ss-hours">01</span>
                            <span>hours</span>
                        </div>
                        <div class="counter__time minutes">
                            <span class="ss-minutes">01</span>
                            <span>mins</span>
                        </div>
                        <div class="counter__time">
                            <span class="ss-seconds">55</span>
                            <span>secs</span>
                        </div>
                    </div>  <!-- end counter -->

                    <div class="s-intro__content-bottom">
                        <h1 class="s-intro__content-title">Coming Soon</h1>
                        <p>
                        Beritain adalah portal berita yang lengkap <br>
                        dibuat untuk keperluan tugas pembuatan webdev <br>
                        portal berita ygy.
                        </p>
                    </div>

                </div>

                {{-- <div class="s-intro__scroll">
                    <p class="scroll-text">Scroll For More</p>
                    <a href="#info" class="smoothscroll">
                        <div class="mouse"></div>
                    </a>
                    <div class="end-top"></div>
                </div> <!-- end s-intro__scroll -->

            </div> <!-- intro__content -->

        </section> <!-- end s-intro --> --}}


        <!-- # info
        ================================================== -->
        <section id="info" class="s-info">

            <div class="s-info__bg"></div>

            <div class="row">
                <div class="column lg-24">

                    {{-- <nav class="tab-nav">
                        <ul class="tab-nav__list">
                            <li class="active" data-id="tab-about">
                                <a href="#tab-about">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="#tab-services">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="#tab-contact">
                                    Subscribe
                                </a>
                            </li>
                        </ul>
                    </nav> <!-- end tab-nav -->

                    <div class="tab-content">

                        <!-- 01 - tab about -->
                        <div id="tab-about" class='tab-content__item'>

                            <div class="row tab-content__item-header">
                                <div class="column">
                                    <h2>Get To Know Us.</h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="column">
                                    <p class="lead">
                                    Quidem molestiae natus ipsa ut nihil molestiae numquam tenetur. Ipsum quia
                                    sit vitae ipsam et temporibus est. Consequatur recusandae aut aut. Aut esse
                                    sed sint. Sit ipsa velit possimus est. Atque doloribus dicta sit beatae
                                    necessitatibus. Aut voluptate asperiores nostrum eveniet magnam et consequatur
                                    ab accusamus magni.
                                    </p>

                                    <p>
                                    Tempora debitis perspiciatis eum. Repudiandae et aperiam quos exercitationem
                                    enim voluptatem quam sequi temporibus. Ratione quis nihil voluptatem placeat
                                    nemo. Quibusdam delectus magni quas et architecto et repellat a nam.
                                    Quasi et voluptates libero sed vel quos in nisi. Error et quis. Impedit autem
                                    porro facilis. Aut voluptate asperiores nostrum eveniet magnam et consequatur
                                    ab accusamus.
                                    </p>

                                    <div class="row">
                                        <div class="column lg-6 tab-12">
                                            <h4>More About Us.</h4>
                                            <p>
                                            Sed consequatur quia delectus praesentium. Ut unde velit maiores aut sint
                                            quia molestiae accusamus. Nihil et quidem qui natus ut et. Autem error
                                            architecto. Pariatur ex repellendus. Occaecati voluptatibus dolorem magni
                                            molestiae dolore voluptas occaecati asperiores nemo. Est fugiat fuga nesciunt
                                            ducimus quaerat et placeat natus.
                                            </p>
                                        </div>
                                        <div class="column lg-6 tab-12">
                                            <h4>Need Web Hosting?</h4>
                                            <p>
                                            Need a great reliable web hosting?
                                            We highly recommend <a href="https://www.dreamhost.com/r.cgi?287326">DreamHost</a>.
                                            Powerful web and Wordpress hosting. Guaranteed. Starting at $2.95 per month.
                                            </p>
                                            <a href="https://www.dreamhost.com/r.cgi?287326" class="btn btn--primary u-fullwidth">Get Started Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end 01 - tab about -->

                        <!-- 02 - tab services -->
                        <div id="tab-services" class='tab-content__item'>

                            <div class="row tab-content__item-header">
                                <div class="column">
                                    <h2>What We Do.</h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="column">
                                    <p class="lead">
                                    Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                                    a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                                    asperiores est commodi amet quia architecto. Dolores necessitatibus et. Voluptatibus
                                    optio natus asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                                    </p>
                                </div>
                            </div>

                            <div class="row services-list block-lg-one-half block-md-one-half block-tab-whole">

                                <div class="column services-list__item">
                                    <div class="services-list__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M12,6c-3.309,0-6,2.691-6,6s2.691,6,6,6s6-2.691,6-6S15.309,6,12,6z M12,16c-2.206,0-4-1.794-4-4s1.794-4,4-4s4,1.794,4,4 S14.206,16,12,16z"></path><path d="M12,2C6.579,2,2,6.579,2,12s4.579,10,10,10s10-4.579,10-10S17.421,2,12,2z M12,20c-4.337,0-8-3.663-8-8s3.663-8,8-8 s8,3.663,8,8S16.337,20,12,20z"></path><path d="M12,10c-1.081,0-2,0.919-2,2s0.919,2,2,2s2-0.919,2-2S13.081,10,12,10z"></path></svg>
                                    </div>
                                    <div class="services-list__item-content">
                                        <h4 class="item-title">Brand Identity</h4>
                                        <p>
                                        Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                                        a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                                        asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                                        </p>
                                    </div>
                                </div>

                                <div class="column services-list__item">
                                    <div class="services-list__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M18.277,8C18.624,8.596,19.262,9,20,9c1.104,0,2-0.896,2-2s-0.896-2-2-2c-0.738,0-1.376,0.404-1.723,1H16V4 c0-0.553-0.447-1-1-1H9C8.448,3,8,3.447,8,4v2H5.723C5.376,5.404,4.738,5,4,5C2.896,5,2,5.896,2,7s0.896,2,2,2 c0.738,0,1.376-0.404,1.723-1H8v0.369C5.133,9.84,4.318,12.534,4.091,14H3c-0.552,0-1,0.447-1,1v4c0,0.553,0.448,1,1,1h4 c0.552,0,1-0.447,1-1v-4c0-0.553-0.448-1-1-1H6.123c0.197-0.959,0.718-2.406,2.085-3.418C8.391,10.829,8.669,11,9,11h6 c0.331,0,0.61-0.171,0.792-0.419c1.373,1.013,1.895,2.458,2.089,3.419H17c-0.553,0-1,0.447-1,1v4c0,0.553,0.447,1,1,1h4 c0.553,0,1-0.447,1-1v-4c0-0.553-0.447-1-1-1h-1.092C19.681,12.534,18.866,9.839,16,8.368V8H18.277z M6,18H4v-2h2V18z M20,18h-2v-2 h2V18z M14,9h-4V8V6V5h4V9z"></path></svg>
                                    </div>
                                    <div class="services-list__item-content">
                                        <h4 class="item-title">Illustration</h4>
                                        <p>
                                        Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                                        a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                                        asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                                        </p>
                                    </div>
                                </div>

                                <div class="column services-list__item">
                                    <div class="services-list__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19,3H5C3.897,3,3,3.897,3,5v14c0,1.103,0.897,2,2,2h14c1.103,0,2-0.897,2-2V5C21,3.897,20.103,3,19,3z M19,5l0.001,4H15h-2 H5V5H19z M5,11h8v8H5V11z M15,19v-8h4.001l0.001,8H15z"></path></svg>
                                    </div>
                                    <div class="services-list__item-content">
                                        <h4 class="item-title">Web Design</h4>
                                        <p>
                                        Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                                        a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                                        asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                                        </p>
                                    </div>
                                </div>

                                <div class="column services-list__item">
                                    <div class="services-list__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C2.897,3,2,3.897,2,5v11c0,1.103,0.897,2,2,2h4l-1.8,2.4l1.6,1.2l2.7-3.6h3l2.7,3.6l1.6-1.2L16,18h4 c1.103,0,2-0.897,2-2V5C22,3.897,21.103,3,20,3z M4,16V5h16l0.001,11H4z"></path><path d="M6 12H10V14H6z"></path></svg>
                                    </div>
                                    <div class="services-list__item-content">
                                        <h4 class="item-title">Product Strategy</h4>
                                        <p>
                                        Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                                        a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                                        asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                                        </p>
                                    </div>
                                </div>

                                <div class="column services-list__item">
                                    <div class="services-list__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H7C5.897,3,5,3.897,5,5v2H4C2.897,7,2,7.897,2,9v10c0,1.103,0.897,2,2,2h6c1.103,0,2-0.897,2-2h8c1.103,0,2-0.897,2-2 V5C22,3.897,21.103,3,20,3z M9.997,19H4V9h2h4L9.997,19z M19.997,17H12V9c0-1.103-0.897-2-2-2H7V5h13L19.997,17z"></path></svg>
                                    </div>
                                    <div class="services-list__item-content">
                                        <h4 class="item-title">UI/UX Design</h4>
                                        <p>
                                        Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                                        a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                                        asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                                        </p>
                                    </div>
                                </div>

                                <div class="column services-list__item">
                                    <div class="services-list__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z"></path></svg>
                                    </div>
                                    <div class="services-list__item-content">
                                        <h4 class="item-title">E-Commerce</h4>
                                        <p>
                                        Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                                        a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                                        asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                                        </p>
                                    </div>
                                </div>

                            </div> <!-- end services-list -->

                        </div> <!-- end 02 - tab services -->

                        <!-- 03 - tab contact -->
                        <div id="tab-contact" class="tab-content__item">

                            <div class="row tab-content__item-header">
                                <div class="column">
                                    <h2>Subscribe To Our Newsletter.</h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="column">

                                    <p class="lead">
                                    Voluptates laborum eum quas. Pariatur impedit sit veniam est
                                    et quasi voluptas voluptatem. Cumque hic enim perferendis
                                    amet odit in molestias debitis. Facere nulla qui pariatur
                                    quasi mollitia et. Et dolorem dolorum quo in sit architecto.
                                    </p>

                                    <p>
                                    Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                                    a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                                    asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                                    </p>

                                    <form id="mc-form" class="mc-form">
                                        <input type="email" name="EMAIL" id="mce-EMAIL" class="u-fullwidth text-center" placeholder="Email Address" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required>
                                        <input type="submit" name="subscribe" value="Subscribe" class="btn--small btn--primary u-fullwidth">
                                        <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cdb7b577e41181934ed6a6a44_9a91cfe7b3" tabindex="-1" value=""></div> -->
                                        <div class="mc-status"></div>
                                    </form>

                                </div>
                            </div>

                        </div> <!-- end 03 - tab contact -->

                    </div> <!-- end tab content --> --}}

                </div> <!-- end column -->
            </div> <!-- end row -->

        </section> <!-- end s-info -->


        <!-- # footer
        ================================================== -->
        <footer class="s-footer">

            <div class="row s-footer__top">

                <div class="column lg-6 stack-on-700 s-footer__block s-footer__info">

                    <h4 class="h6">BeritaIn</h4>

                    <p class="desc">
                    Beatae voluptatum reprehenderit et debitis consequatur. Quidem est velit hic culpa.
                    Veritatis id tempora voluptas et provident maxime maiores dignissimos non. Incidunt
                    asperiores non. Consequatur nostrum itaque.
                    </p>

                    <ul class="s-footer__social">
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                                <span class="screen-reader-text">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                                <span class="screen-reader-text">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M-111.052-244.992c-5.518,0-9.99,4.473-9.99,9.99c0,4.232,2.633,7.85,6.35,9.306 c-0.088-0.79-0.166-2.006,0.034-2.868c0.182-0.78,1.172-4.966,1.172-4.966s-0.299-0.599-0.299-1.484 c0-1.388,0.805-2.425,1.808-2.425c0.853,0,1.264,0.64,1.264,1.407c0,0.858-0.546,2.139-0.827,3.327 c-0.235,0.994,0.499,1.805,1.479,1.805c1.775,0,3.141-1.872,3.141-4.575c0-2.392-1.719-4.064-4.173-4.064 c-2.843,0-4.512,2.132-4.512,4.335c0,0.858,0.331,1.779,0.744,2.28c0.081,0.099,0.093,0.185,0.069,0.286 c-0.076,0.315-0.245,0.994-0.277,1.133c-0.044,0.183-0.145,0.222-0.335,0.134c-1.247-0.581-2.027-2.405-2.027-3.871 c0-3.151,2.289-6.045,6.601-6.045c3.466,0,6.159,2.469,6.159,5.77c0,3.444-2.171,6.213-5.184,6.213 c-1.013,0-1.964-0.525-2.29-1.146c0,0-0.501,1.907-0.623,2.374c-0.225,0.868-0.834,1.956-1.241,2.62 c0.935,0.289,1.928,0.445,2.958,0.445c5.517,0,9.99-4.473,9.99-9.99S-105.535-244.992-111.052-244.992" transform="translate(123.042 246.992)"></path></svg>
                                <span class="screen-reader-text">Pinterest</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                <span class="screen-reader-text">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20.66,6.98c-0.894-1.533-2.107-2.747-3.641-3.64C15.486,2.447,13.813,2,12,2S8.514,2.447,6.98,3.34 C5.447,4.233,4.233,5.447,3.34,6.98S2,10.187,2,12s0.446,3.487,1.34,5.02c0.894,1.534,2.107,2.747,3.641,3.64 C8.514,21.553,10.187,22,12,22s3.486-0.447,5.02-1.34c1.533-0.893,2.747-2.106,3.641-3.64C21.554,15.487,22,13.813,22,12 S21.554,8.513,20.66,6.98z M12,3.66c2,0,3.772,0.64,5.32,1.919c-0.92,1.174-2.286,2.14-4.1,2.9c-1.002-1.813-2.088-3.327-3.261-4.54 C10.641,3.753,11.319,3.66,12,3.66z M5.51,6.8c0.754-0.947,1.656-1.686,2.711-2.22c1.212,1.201,2.325,2.7,3.34,4.5 c-2,0.6-4.114,0.9-6.341,0.9c-0.573,0-1.006-0.013-1.3-0.04C4.227,8.793,4.757,7.747,5.51,6.8z M3.66,12 c0-0.054,0.003-0.12,0.01-0.2c0.007-0.08,0.01-0.146,0.01-0.2c0.254,0.014,0.641,0.02,1.161,0.02c2.666,0,5.146-0.367,7.439-1.1 c0.187,0.373,0.381,0.793,0.58,1.26c-1.32,0.293-2.674,1.006-4.061,2.14S6.4,16.247,5.76,17.5C4.36,15.913,3.66,14.08,3.66,12z M12,20.34c-1.894,0-3.594-0.587-5.101-1.759C7.5,17.394,8.423,16.259,9.67,15.18c1.246-1.08,2.483-1.753,3.71-2.02 c0.772,2.133,1.293,4.339,1.56,6.62C13.966,20.153,12.986,20.34,12,20.34z M19.08,16.38c-0.666,1.066-1.526,1.94-2.58,2.621 c-0.24-2.08-0.7-4.107-1.379-6.081c0.932-0.066,1.765-0.1,2.5-0.1c0.799,0,1.686,0.034,2.659,0.1 C20.146,14.16,19.746,15.313,19.08,16.38z M17.84,11.38c-1.16,0-2.233,0.047-3.22,0.14c-0.254-0.653-0.48-1.193-0.68-1.62 c2.066-0.906,3.532-2.006,4.399-3.3c1.2,1.414,1.854,3.027,1.96,4.84C19.487,11.4,18.667,11.38,17.84,11.38z"></path></svg>
                                <span class="screen-reader-text">Dribbble</span>
                            </a>
                        </li>
                    </ul>

                </div> <!-- end s-footer__info -->

                <div class="column lg-6 stack-on-700 s-footer__block s-footer__contact">

                    <h4 class="h6">Contact Info</h4>

                    <div class="row">
                        <div class="column lg-6 stack-on-1000">
                            <p>
                            <strong>Phone</strong> <br>
                            <a href="tel:123-456-9000">+123 456 9000</a>
                            </p>
                        </div>
                        <div class="column lg-6 stack-on-1000">
                            <p>
                            <strong>Email</strong> <br>
                            <a href="mailto:#0">hello@khronos.com</a>
                            </p>
                        </div>
                    </div>

                    <p>
                    <strong>Office Address</strong> <br>
                    1600 Amphitheatre Parkway <br>
                    Mountain View, CA
                    94043 US <br>
                    </p>

                </div> <!-- end s-footer__contact -->

            </div> <!-- end s-footer__top -->

            <div class="row s-footer__bottom">
                <div class="column lg-12">
                    <div class="ss-copyright">
                        <span>© Copyright Khronos 2021</span>
                        <span>Design by <a href="https://www.styleshout.com/">StyleShout</a></span>
                    </div>
                </div>

                <div class="ss-go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M6 4H18V6H6zM11 14L11 20 13 20 13 14 18 14 12 8 6 14z"></path></svg>
                     </a>
                </div>
            </div> <!--end s-footer__bottom -->

        </footer> <!--end s-footer -->

    </div> <!-- end pagewrap -->


    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('jscs') }}/plugins.js"></script>

    <script src="{{ asset('jscs') }}/main.js"></script>
    <script src="{{ asset('jscs') }}/particles.min.js"></script>
    <script src="{{ asset('jscs') }}/particle-settings.js"></script>

</body>
</html>
