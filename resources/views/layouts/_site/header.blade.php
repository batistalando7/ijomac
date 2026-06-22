<!-- Start Header -->
<header id="navigation" class="header_2">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 text-center htleft d-lg-flex align-self-center">
                    <p class="align-self-center">
                        <i class="fa-regular fa-user"></i>
                        <a href="{{ route('login') }}">Registrar-se / Entrar</a>
                    </p>
                    <ul class="align-self-center text-center">
                        <li>
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-12 text-center htright d-lg-flex justify-content-end">
                    <p class="align-self-center">
                        <i class="fa-solid fa-headset"></i>
                        <span>Ligar Nos:</span>
                        <a href="tel:+244941991533">+244941991533</a>
                    </p>

                    <p class="align-self-center">
                        <i class="fa-regular fa-envelope"></i>
                        <span>Email:</span>
                        <a href="mailto:support@example.com">support@example.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-md-3 col-4 align-self-center">
                    <div class="header-left d-flex justify-content-start">
                        <div class="site-logo">
                            <a href="{{ route('site.home') }}"><img src="{{ url('site/logo/logo.png') }}"
                                    alt="Edplus" /></a>
                        </div>
                    </div>
                </div>
                <!-- End site-logo -->

                <div class="col-xl-10 col-md-9 col-8 align-self-center">
                    <div class="header_right d-flex gap-4 justify-content-end">
                        <nav id="main-menu">
                            <ul id="menu-main-menu" class=" ">
                                <li id="menu-item-1468"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-22 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor">
                                    <a href="{{ route('site.home') }}" aria-current="page" onClick="return true">Página Inicial</a>                                   
                                </li>
                                <li id="menu-item-1071"
                                    class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-1071">
                                    <a href="{{ route('site.courses') }}" onClick="return true">Cursos</a>
                                </li>
                                <li id="menu-item-1149"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1149">
                                    <a href="#" onClick="return true">Sobre Nós</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-1202"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1202">
                                            <a href="{{ route('site.about') }}" onClick="return true">Quem Somos</a>
                                        </li>
                                        {{-- <li id="menu-item-1155"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1155">
                                            <a href="teachers-and-instructors/index.html"
                                                onClick="return true">Formadores</a>
                                        </li> --}}
                                        <li id="menu-item-1151"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1151">
                                            <a href="{{ route('site.about.faq') }}" onClick="return true">FAQ</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-1970"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1970">
                                    <a href="{{ route('site.services') }}" onClick="return true">Serviços</a>
                                </li>
                                <li id="menu-item-1088"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1088">
                                    <a href="{{ route('site.contacts') }}" onClick="return true">Contactos</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- End Main Menu -->

                        <a class="search_btn align-self-center" data-menu="#popup_searchbox" href="#"><i
                                class="ph ph-magnifying-glass"></i></a>
                        <a href="{{ route('site.contacts') }}" class="blue_btn round_btn align-self-center">Contacte-Nos</a>

                        <a class="menu_btn sidebar__toggle align-self-center" href="#"><img
                                src="{{ url('site/wp-content/themes/edplus/assets/img/menu.svg') }}" alt="" /></a>
                    </div>
                </div>
                <!-- End Header Right -->
            </div>
        </div>
    </div>
</header>
<!-- End Header -->
