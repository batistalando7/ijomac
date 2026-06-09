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
                                    {{-- <ul class="sub-menu">
                                        <li id="menu-item-1011"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-22 current_page_item menu-item-1011">
                                            <a href="index.html" aria-current="page" onClick="return true">Online
                                                Course</a>
                                        </li>
                                        <li id="menu-item-1010"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1010">
                                            <a href="university/index.html" onClick="return true">University</a>
                                        </li>
                                        <li id="menu-item-1740"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1740">
                                            <a href="distance/index.html" onClick="return true">Distance</a>
                                        </li>
                                        <li id="menu-item-1818"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1818">
                                            <a href="rtl/index.html" onClick="return true">RTL Homepage</a>
                                        </li>
                                    </ul> --}}
                                </li>
                                <li id="menu-item-1071"
                                    class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-1071">
                                    <a href="{{ route('site.courses') }}" onClick="return true">Cursos</a>
                                    {{-- <ul class="sub-menu">
                                        <li id="menu-item-1160"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1160">
                                            <a href="courses/index.html" onClick="return true">Courses</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-1808"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1808">
                                                    <a href="courses/index.html" onClick="return true">Course Style
                                                        1</a>
                                                </li>
                                                <li id="menu-item-1809"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1809">
                                                    <a href="courses/index8738.html?course_style=2"
                                                        onClick="return true">Course Style
                                                        2</a>
                                                </li>
                                                <li id="menu-item-1810"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1810">
                                                    <a href="courses/index20fd.html?course_style=3"
                                                        onClick="return true">Course Style
                                                        3</a>
                                                </li>
                                                <li id="menu-item-1823"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1823">
                                                    <a href="courses/indexff98.html?course_style=4"
                                                        onClick="return true">Course Style
                                                        4</a>
                                                </li>
                                                <li id="menu-item-1824"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1824">
                                                    <a href="courses/index54c4.html?course_style=5"
                                                        onClick="return true">Course Style
                                                        5</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1356"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1356">
                                            <a href="#" onClick="return true">Course Details</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-1353"
                                                    class="menu-item menu-item-type-post_type menu-item-object-courses menu-item-1353">
                                                    <a href="courses/the-ultimate-guide-to-building-a-restful-api/index.html"
                                                        onClick="return true">Style 1</a>
                                                </li>
                                                <li id="menu-item-1354"
                                                    class="menu-item menu-item-type-post_type menu-item-object-courses menu-item-1354">
                                                    <a href="courses/enhance-your-personal-financial-analysis-skills/index.html"
                                                        onClick="return true">Style 2</a>
                                                </li>
                                                <li id="menu-item-1355"
                                                    class="menu-item menu-item-type-post_type menu-item-object-courses menu-item-1355">
                                                    <a href="courses/seo-as-the-core-of-your-new-business-venture/index.html"
                                                        onClick="return true">Style 3</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul> --}}
                                </li>
                                <li id="menu-item-1149"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1149">
                                    <a href="#" onClick="return true">Sobre Nós</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-1202"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1202">
                                            <a href="{{ route('site.about') }}" onClick="return true">Quem Somos</a>
                                        </li>
                                        {{-- <li id="menu-item-1659"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1659">
                                            <a href="all-events/index.html" onClick="return true">Events</a>
                                        </li> --}}
                                        <li id="menu-item-1155"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1155">
                                            <a href="teachers-and-instructors/index.html"
                                                onClick="return true">Formadores</a>
                                        </li>
                                        {{-- <li id="menu-item-1660"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1660">
                                            <a href="profile/edplus/indexd527.html?view=instructor"
                                                onClick="return true">Instructor Details</a>
                                        </li>
                                        <li id="menu-item-1153"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1153">
                                            <a href="instructor-registration/index.html"
                                                onClick="return true">Instructor
                                                Registration</a>
                                        </li>
                                        <li id="menu-item-1154"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1154">
                                            <a href="student-registration/index.html" onClick="return true">Student
                                                Registration</a>
                                        </li>
                                        <li id="menu-item-1150"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1150">
                                            <a href="dashboard/index.html" onClick="return true">Dashboard</a>
                                        </li>
                                        <li id="menu-item-1013"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1013">
                                            <a href="blog/index.html" onClick="return true">Blog</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-1152"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1152">
                                                    <a href="grid-blog/index.html" onClick="return true">Grid Blog</a>
                                                </li>
                                                <li id="menu-item-1159"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1159">
                                                    <a href="blog/index.html" onClick="return true">Standard
                                                        Blog</a>
                                                </li>
                                                <li id="menu-item-1203"
                                                    class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1203">
                                                    <a href="online-learning-program-for-students/index.html"
                                                        onClick="return true">Blog Details</a>
                                                </li>
                                            </ul>
                                        </li> --}}
                                        <li id="menu-item-1151"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1151">
                                            <a href="{{ route('site.about.faq') }}" onClick="return true">FAQ</a>
                                        </li>
                                        {{-- <li id="menu-item-1156"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1156">
                                            <a href="404.html" onClick="return true">404</a>
                                        </li> --}}
                                    </ul>
                                </li>
                                <li id="menu-item-1970"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1970">
                                    <a href="{{ route('site.services') }}" onClick="return true">Serviços</a>
                                    {{-- <ul class="sub-menu">
                                        <li id="menu-item-1921"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1921">
                                            <a href="shop/index.html" onClick="return true">Product List</a>
                                        </li>
                                        <li id="menu-item-1988"
                                            class="menu-item menu-item-type-post_type menu-item-object-product menu-item-1988">
                                            <a href="product/advanced-spanish/index.html" onClick="return true">Single
                                                Product</a>
                                        </li>
                                        <li id="menu-item-1158"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1158">
                                            <a href="cart/index.html" onClick="return true">Cart</a>
                                        </li>
                                        <li id="menu-item-1157"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1157">
                                            <a href="checkout/index.html" onClick="return true">Checkout</a>
                                        </li>
                                    </ul> --}}
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
                        {{-- <a class="cart_btn mcart_icon align-self-center" data-menu="#mini_cart" href="#"><i
                                class="ph ph-shopping-cart"></i>
                            <span>0</span></a> --}}
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
