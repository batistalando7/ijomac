@extends('layouts._site.main')
@section('title', 'Página Inicial | IJOMAC')
@section('content')

    <div id="mini_cart" class="min_cart_wrapper">
        <div class="cart_drawer">
            <div class="cart_top">
                <a href="#" class="cart_close"><i class="bx bx-x"></i></a>
                <h3 class="title">Courses List</h3>
                <span class="cart_number"> 0 </span>
            </div>

            <p class="woocommerce-mini-cart__empty-message">
                No products in the cart.
            </p>
        </div>
    </div>

    <div class="page-builder-template">
        <div data-elementor-type="wp-page" data-elementor-id="22" class="elementor elementor-22"
            data-elementor-post-type="page">
            <div class="elementor-element elementor-element-3eec0a7 e-con-full e-flex e-con e-parent" data-id="3eec0a7"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-e66b92a elementor-widget elementor-widget-edplus-banner"
                    data-id="e66b92a" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-banner.default">
                    <div class="elementor-widget-container">
                        <!-- Start Home Banner -->
                        <section class="home-banner"
                            style="
                                    background-image: url({{ url('site/wp-content/uploads/2025/11/slide1.jpg') }});
                                ">
                            <div class="container position-relative">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-5 col-12 align-self-center">
                                        <div class="banner_content">
                                            <span class="wow fadeInUp" data-wow-delay=".3s"><img decoding="async"
                                                    src="{{ url('site/wp-content/themes/edplus/assets/img/icons/graduation-hat-white.svg') }}"
                                                    alt="" />Continue Aprendendo
                                            </span>
                                            <h2 class="wow fadeInUp" data-wow-delay=".5s">
                                                Gestão Segura. Ambiente Sustentável.
                                            </h2>

                                            <p class="wow fadeInUp" data-wow-delay=".7s">
                                                A IJOMAC é uma empresa angolana especializada em soluções de Higiene,
                                                Segurança e Saúde no Trabalho (HST), Gestão Ambiental, Controlo da Qualidade
                                                e Formação Profissional. <br />
                                                Ajudamos organizações a criar ambientes de trabalho mais seguros, produtivos
                                                e sustentáveis, garantindo conformidade legal, redução de riscos e melhoria
                                                contínua dos seus processos.
                                            </p>

                                            <div class="d-flex gap-4 wow fadeInUp" data-wow-delay=".9s">
                                                <a href="{{ route('site.services') }}" class="blue_btn round_btn">Nossos
                                                    serviços
                                                    <i class="ph ph-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-xl-6 col-lg-7 col-12 align-self-center">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-4 align-self-center">
                                                <div class="badge_wrap wow fadeInUp" data-wow-delay=".5s">
                                                </div>
                                            </div>
                                            <!-- End Col -->

                                            <div class="col-lg-7 col-md-8 align-self-center wow fadeInUp"
                                                data-wow-delay=".9s">
                                                <div class="banner_courses">
                                                    @isset($bannerCourse)
                                                        @include('components.singleCourse', [
                                                            'course' => $bannerCourse,
                                                        ])
                                                    @endisset
                                                </div>
                                            </div>
                                            <!-- End Col -->
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                </div>
                                <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/b1.svg') }}"
                                    alt="" class="bshape1 aniupDown position-absolute" />

                                <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/b2.svg') }}"
                                    alt="" class="bshape2 position-absolute" />

                                <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/b3.svg') }}"
                                    alt="" class="bshape3 aniupDown position-absolute" />

                                <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/b4.svg') }}"
                                    alt="" class="bshape4 anileftRight position-absolute" />
                            </div>
                        </section>
                        <!-- End Home Banner -->
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-741c749 e-con-full e-flex e-con e-parent" data-id="741c749"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-bd5a44d elementor-widget elementor-widget-edplus-course-category"
                    data-id="bd5a44d" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-course-category.default">
                    <div class="elementor-widget-container">
                        <!-- End Course Category -->
                        <section class="course-category section-padding">
                            <div class="container">
                                <div class="section-title text-center wow fadeInUp">
                                    <span>
                                        <span class="ticon">
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/themes/edplus/assets/img/icons/title-icon.svg') }}"
                                                alt="" />
                                        </span>
                                        Serviços
                                    </span>
                                    <h2>Nossos Serviços</h2>
                                    <img decoding="async"
                                        src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/linha-laranja.png') }}"
                                        alt="" />
                                </div>

                                <div class="row">
                                    @foreach ($services as $item)
                                        <div class="col-xl-4 col-md-6 col-12 wow fadeInUp">
                                            @include('components.blogItem', ['item' => $item])
                                        </div>
                                    @endforeach

                                    <div class="col-12 text-center mt-4 wow fadeInUp">
                                        <a class="blue_btn round_btn" href="course-categories/index.html">Todos
                                            Serviços
                                            <i class="ph ph-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End Course Category -->
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-9dd6922 e-flex e-con-boxed e-con e-parent" data-id="9dd6922"
                data-element_type="container" data-e-type="container" data-settings='{"background_background":"classic"}'>
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-924703d e-con-full e-flex e-con e-child"
                        data-id="924703d" data-element_type="container" data-e-type="container">
                        <div class="elementor-element elementor-element-c2e2fac elementor-widget-mobile__width-inherit elementor-widget elementor-widget-edplus-about-image"
                            data-id="c2e2fac" data-element_type="widget" data-e-type="widget"
                            data-widget_type="edplus-about-image.default">
                            <div class="elementor-widget-container">
                                <div class="about-img about-us-two position-relative wow fadeInUp">
                                    <div class="about_badge2 aniupDown">
                                        <span class="ab_icon">
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/uploads/2025/03/graduation-hat-white.svg') }}"
                                                alt="" />
                                        </span>
                                        <h4>
                                            Experience <br />
                                            Advisor
                                        </h4>
                                    </div>

                                    <div class="ab_images position-relative z-1">
                                        <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/3-1.jpg') }}"
                                            class="about_img_1" alt="" />
                                        <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/4-1.jpg') }}"
                                            class="about_img_2" alt="" />
                                    </div>

                                    <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/ab_wave2.svg') }}"
                                        class="ab_top_shape aniupDown position-absolute" alt="" />
                                    <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/ab_dots.svg') }}"
                                        class="ab_btm_shape position-absolute" alt="" />
                                    <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/ab_shape.svg') }}"
                                        class="ab_right_shape anileftRight position-absolute" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-cb129b7 e-con-full e-flex e-con e-child"
                        data-id="cb129b7" data-element_type="container" data-e-type="container">
                        <div class="elementor-element elementor-element-e834c7c elementor-widget elementor-widget-edplus-about-content"
                            data-id="e834c7c" data-element_type="widget" data-e-type="widget"
                            data-widget_type="edplus-about-content.default">
                            <div class="elementor-widget-container">
                                <div class="about-content position-relative wow fadeInUp">
                                    <div class="section-title mb30 wow fadeInUp">
                                        <span>
                                            <span class="ticon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/themes/edplus/assets/img/icons/title-icon.svg') }}"
                                                    alt="" />
                                            </span>
                                            Sobre Nós IJOMAC
                                        </span>
                                        <h2>
                                            Quem somos?
                                        </h2>
                                        <img decoding="async"
                                            src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/linha-laranja.png') }}"
                                            alt="" />
                                    </div>
                                    <p class="wow fadeInUp">
                                        A IJOMAC é uma empresa angolana dedicada à prestação de serviços de Higiene,
                                        Segurança e Saúde no Trabalho (HST), Gestão Ambiental e Controlo da Qualidade.
                                    </p>
                                    <p class="wow fadeInUp">
                                        Trabalhamos para apoiar organizações de diferentes setores na implementação de boas
                                        práticas operacionais, promovendo ambientes de trabalho mais seguros, maior
                                        eficiência operacional e o cumprimento dos requisitos legais e normativos.
                                    </p>

                                    <div class="d-md-flex gap-3 position-relative z-2 wow fadeInUp">
                                        <ul>
                                            <li>
                                                <i class="ph ph-check"></i>
                                                Melhores Formadores &amp;
                                                Cursos
                                            </li>
                                            <li>
                                                <i class="ph ph-check"></i>
                                                Serviço de Qualidade
                                            </li>
                                            <li>
                                                <i class="ph ph-check"></i>
                                                Certificado de Válido
                                            </li>
                                        </ul>

                                        <ul>
                                            <li>
                                                <i class="ph ph-check"></i>
                                                Formações Profissionais
                                            </li>
                                            <li>
                                                <i class="ph ph-check"></i>
                                                Aulas ao Vivo
                                            </li>
                                            <li>
                                                <i class="ph ph-check"></i>
                                                Suporte 24 horas
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('site.about') }}" class="blue_btn round_btn wow fadeInUp">ver mais
                                        <i class="ph ph-arrow-right"></i></a>
                                    <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/ed_cap.svg') }}"
                                        class="ab_book_shape aniupDown position-absolute" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-3fad5e1 e-con-full e-flex e-con e-parent" data-id="3fad5e1"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-7295c56 elementor-widget elementor-widget-edplus-counter-up"
                    data-id="7295c56" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-counter-up.default">
                    <div class="elementor-widget-container">
                        <!-- Start Counter Up -->
                        <section class="container">
                            <div class="counter-up"
                                style="
                                        background-color: rgba(255, 109, 1, 0.9);
                                    ">
                                <div class="row gy-5">
                                    <div class="col-xxl-3 col-xl-4 col-md-6 col-12 mx-xl-auto wow fadeInUp">
                                        <div class="counter-item">
                                            <div class="coicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/peoples.svg') }}"
                                                    alt="" />
                                            </div>

                                            <div class="ccontent">
                                                <h3>
                                                    <span class="count">118</span>K
                                                </h3>
                                                <span>Clientes Satisfeitos</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-xxl-3 col-xl-4 col-md-6 col-12 mx-xl-auto wow fadeInUp">
                                        <div class="counter-item">
                                            <div class="coicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/graduate-hat.svg') }}"
                                                    alt="" />
                                            </div>

                                            <div class="ccontent">
                                                <h3>
                                                    <span class="count">25</span>K
                                                </h3>
                                                <span>
                                                    Formados
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-xxl-3 col-xl-4 col-md-6 col-12 mx-xl-auto wow fadeInUp">
                                        <div class="counter-item">
                                            <div class="coicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/expert.svg') }}"
                                                    alt="" />
                                            </div>

                                            <div class="ccontent">
                                                <h3>
                                                    <span class="count">120</span>K
                                                </h3>
                                                <span>
                                                    Proficionais
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div
                                        class="col-xxl-3 col-xl-4 col-md-6 col-12 mx-xl-auto wow fadeInUp d-xl-none d-xxl-block">
                                        <div class="counter-item">
                                            <div class="coicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/satisfaction.svg') }}"
                                                    alt="" />
                                            </div>

                                            <div class="ccontent">
                                                <h3>
                                                    <span class="count">96</span>%
                                                </h3>
                                                <span>Taxa de Satisfação</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                </div>
                            </div>
                        </section>
                        <!-- End Counter Up -->
                    </div>
                </div>
            </div>
            {{-- <div class="elementor-element elementor-element-6e9f1fa e-flex e-con-boxed e-con e-parent" data-id="6e9f1fa"
                data-element_type="container" data-e-type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-b2a168b e-con-full e-flex e-con e-child"
                        data-id="b2a168b" data-element_type="container" data-e-type="container">
                        <div class="elementor-element elementor-element-cae2c2d elementor-widget__width-initial elementor-widget elementor-widget-image"
                            data-id="cae2c2d" data-element_type="widget" data-e-type="widget"
                            data-settings='{"_animation":"none"}' data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="879" height="436"
                                    src="{{ url('site/wp-content/uploads/2025/03/1-3.png') }}"
                                    class="attachment-full size-full wp-image-776" alt=""
                                    srcset="
                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/1-3.png         879w,
                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/1-3-600x298.png 600w,
                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/1-3-300x149.png 300w,
                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/1-3-768x381.png 768w
                                        "
                                    sizes="(max-width: 879px) 100vw, 879px" />
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-0cd6f2a elementor-absolute elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile elementor-widget elementor-widget-image"
                            data-id="0cd6f2a" data-element_type="widget" data-e-type="widget"
                            data-settings='{"_position":"absolute"}' data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="35" height="150"
                                    src="{{ url('site/wp-content/uploads/2025/03/live-class.svg') }}"
                                    class="attachment-full size-full wp-image-924" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-927ee69 e-con-full e-flex e-con e-child"
                        data-id="927ee69" data-element_type="container" data-e-type="container">
                        <div class="elementor-element elementor-element-23bcdb6 elementor-widget elementor-widget-edplus-live-class-content"
                            data-id="23bcdb6" data-element_type="widget" data-e-type="widget"
                            data-widget_type="edplus-live-class-content.default">
                            <div class="elementor-widget-container">
                                <div class="lclass_content">
                                    <img decoding="async"
                                        src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/wave.svg') }}"
                                        class="lclass_wave_shape" alt="" />
                                    <div class="lc_author">
                                        <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/1-2.png') }}"
                                            alt="" />
                                        <a href="#">Dev. Masum Billah</a>
                                    </div>
                                    <h3>
                                        <a href="#">The complete guide to build
                                            restful API
                                        </a>
                                    </h3>
                                    <div class="lc_rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <span>4.8</span>
                                    </div>

                                    <div class="lc_btm d-md-flex gap-5">
                                        <div class="lc_btm_left align-self-center">
                                            <span>Online Students</span>
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/uploads/2025/03/avator.png') }}"
                                                alt="" />
                                        </div>

                                        <div class="lc_btm_right align-self-center">
                                            <a href="#" class="border_btn"><i class="ph ph-video-camera"></i>
                                                Join Now
                                                <i class="ph ph-arrow-right iright"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="elementor-element elementor-element-dff3f98 e-con-full e-flex e-con e-parent" data-id="dff3f98"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-ac34084 elementor-widget elementor-widget-edplus-courses"
                    data-id="ac34084" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-courses.default">
                    <div class="elementor-widget-container">
                        <!-- Start Courses -->
                        <section class="courses">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 wow fadeInUp">
                                        <div class="section-title">
                                            <span>
                                                <span class="ticon">
                                                    <img decoding="async"
                                                        src="{{ url('site/wp-content/themes/edplus/assets/img/icons/title-icon.svg') }}"
                                                        alt="" />
                                                </span>
                                                Cursos
                                            </span>
                                            <h2>Os cursos mais populares</h2>
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/linha-laranja.png') }}"
                                                alt="" />
                                        </div>
                                    </div>

                                    {{-- <div class="col-lg-7 align-self-center wow fadeInUp">
                                        <nav class="course_nav text-lg-end">
                                            <ul>
                                                <li data-filter="all">
                                                    All Courses
                                                </li>

                                                <li data-filter=".data-science">
                                                    Data Science
                                                </li>
                                                <li data-filter=".finance-account">
                                                    Finance Account
                                                </li>
                                                <li data-filter=".mobile-application">
                                                    Mobile Application
                                                </li>
                                                <li data-filter=".web-development">
                                                    Web Development
                                                </li>
                                            </ul>
                                        </nav>
                                    </div> --}}
                                </div>
                                <!-- End Col-->

                                <div class="row gy-4 course_item">
                                    @foreach ($courses as $item)
                                        <div class="col-xl-4 col-md-6 col-12 mix data-science wow fadeInUp">
                                            @include('components.singleCourse', ['course' => $item])
                                        </div>
                                        <!-- End Col-->
                                    @endforeach

                                </div>
                            </div>
                        </section>
                        <!-- End Courses -->
                    </div>
                </div>
            </div>

            {{-- formadores --}}
            @include('components.formadores')

            <div class="elementor-element elementor-element-763ada1 e-con-full e-flex e-con e-parent" data-id="763ada1"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-7c73090 elementor-widget elementor-widget-edplus-clients"
                    data-id="7c73090" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-clients.default">
                    <div class="elementor-widget-container">
                        <!-- Start Client two -->
                        <div class="client-two">
                            <div class="container">
                                <div class="client_slider2 position-relative owl-carousel wow fadeInUp">
                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/5.svg') }}"
                                            alt="image" /></a>

                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/4.svg') }}"
                                            alt="image" /></a>

                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/3.svg') }}"
                                            alt="image" /></a>

                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/2.svg') }}"
                                            alt="image" /></a>

                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/1.svg') }}"
                                            alt="image" /></a>

                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/3.svg') }}"
                                            alt="image" /></a>

                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/4.svg') }}"
                                            alt="image" /></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Client -->
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-c85d15a e-con-full e-flex e-con e-parent" data-id="c85d15a"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-675904c elementor-widget elementor-widget-edplus-blog"
                    data-id="675904c" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-blog.default">
                    <div class="elementor-widget-container">
                        <!-- Start Blog -->
                        {{--  <section class="blog">
                            <div class="container">
                                <div class="section-title text-center wow fadeInUp">
                                    <span>
                                        <span class="ticon">
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/themes/edplus/assets/img/icons/title-icon.svg') }}"
                                                alt="" />
                                        </span>
                                        Blog
                                    </span>
                                    <h2>Latest News From our Blog</h2>
                                    <img decoding="async"
                                        src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/title.svg') }}"
                                        alt="" />
                                </div>

                                <div class="blog_slider owl-carousel wow fadeInUp">
                                    <div class="blog_item">
                                        <div class="blog_img">
                                            <img loading="lazy" decoding="async" width="978" height="714"
                                                src="{{ url('site/wp-content/uploads/2025/03/b3.jpg') }}"
                                                class="attachment-edplus_blog size-edplus_blog wp-post-image"
                                                alt=""
                                                srcset="
                                                        https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/b3.jpg         978w,
                                                        https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/b3-600x438.jpg 600w,
                                                        https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/b3-300x219.jpg 300w,
                                                        https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/b3-768x561.jpg 768w
                                                    "
                                                sizes="(max-width: 978px) 100vw, 978px" />
                                            <span class="b_cat">
                                                <i class="ph ph-file"></i>
                                                <a href="category/web-design/index.html">Web Design</a>
                                            </span>
                                        </div>

                                        <div class="blog_content">
                                            <div class="blog_meta">
                                                <span><i class="ph ph-user"></i>
                                                    Masum Billah</span>
                                                <span><i class="ph ph-clock"></i>
                                                    Oct 30, 2025
                                                </span>
                                            </div>
                                            <h3>
                                                <a href="leverage-agile-frameworks-to-provide/index.html">Leverage agile
                                                    frameworks to provide</a>
                                            </h3>
                                            <a href="leverage-agile-frameworks-to-provide/index.html" class="blog_btn2"><i
                                                    class="ph ph-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- End blog_item -->

                                    <div class="blog_item">
                                        <div class="blog_img">
                                            <img loading="lazy" decoding="async" width="978" height="714"
                                                src="{{ url('site/wp-content/uploads/2025/03/b2.jpg') }}"
                                                class="attachment-edplus_blog size-edplus_blog wp-post-image"
                                                alt=""
                                                srcset="
                                                        https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/b2.jpg         978w,
                                                        https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/b2-600x438.jpg 600w,
                                                        https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/b2-300x219.jpg 300w,
                                                        https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/b2-768x561.jpg 768w
                                                    "
                                                sizes="(max-width: 978px) 100vw, 978px" />
                                            <span class="b_cat">
                                                <i class="ph ph-file"></i>
                                                <a href="category/wordpress/index.html">WordPress</a>
                                            </span>
                                        </div>

                                        <div class="blog_content">
                                            <div class="blog_meta">
                                                <span><i class="ph ph-user"></i>
                                                    Masum Billah</span>
                                                <span><i class="ph ph-clock"></i>
                                                    Oct 28, 2025
                                                </span>
                                            </div>
                                            <h3>
                                                <a href="student-learning-through-an-online-computer/index.html">Student
                                                    Learning
                                                    Through an Online
                                                    Computer</a>
                                            </h3>
                                            <a href="student-learning-through-an-online-computer/index.html"
                                                class="blog_btn2"><i class="ph ph-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- End blog_item -->

                                    <div class="blog_item">
                                        <div class="blog_img">
                                            <img loading="lazy" decoding="async" width="978" height="726"
                                                src="{{ url('site/wp-content/uploads/2025/03/b1.jpg') }}"
                                                class="attachment-edplus_blog size-edplus_blog wp-post-image"
                                                alt=""
                                                srcset="
                                                        https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/b1.jpg         978w,
                                                        https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/b1-600x445.jpg 600w,
                                                        https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/b1-300x223.jpg 300w,
                                                        https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/b1-768x570.jpg 768w
                                                    "
                                                sizes="(max-width: 978px) 100vw, 978px" />
                                            <span class="b_cat">
                                                <i class="ph ph-file"></i>
                                                <a href="category/web-design/index.html">Web Design</a>
                                            </span>
                                        </div>

                                        <div class="blog_content">
                                            <div class="blog_meta">
                                                <span><i class="ph ph-user"></i>
                                                    Masum Billah</span>
                                                <span><i class="ph ph-clock"></i>
                                                    Oct 26, 2025
                                                </span>
                                            </div>
                                            <h3>
                                                <a href="online-learning-program-for-students-2/index.html">Online
                                                    Learning Program
                                                    for Students</a>
                                            </h3>
                                            <a href="online-learning-program-for-students-2/index.html"
                                                class="blog_btn2"><i class="ph ph-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- End blog_item -->
                                </div>
                            </div>
                        </section> --}}
                        <!-- End Blog -->
                    </div>
                </div>
            </div>
            {{-- <div class="elementor-element elementor-element-95b4bb1 e-grid e-con-boxed e-con e-parent" data-id="95b4bb1"
                data-element_type="container" data-e-type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-58ea98b cta2_content1 elementor-widget elementor-widget-edplus-cta"
                        data-id="58ea98b" data-element_type="widget" data-e-type="widget"
                        data-widget_type="edplus-cta.default">
                        <div class="elementor-widget-container">
                            <div class="cta2"
                                style="
                                        background-image: url({{ url('site/wp-content/uploads/2025/03/cta1.svg') }});
                                    ">
                                <div class="cta-content wow fadeInUp">
                                    <h2>
                                        Get Free <span>Courses</span>
                                        <img decoding="async"
                                            src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/cta_line.svg') }}"
                                            class="ctitle_shape" alt="" />
                                    </h2>

                                    <p>
                                        Top instructors from around the
                                        world teach <br />
                                        Millions student on EduPlus
                                    </p>
                                    <a href="student-registration/index.html" class="white_btn round_btn">Apply Now</a>
                                </div>
                                <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/1-5.png') }}"
                                    class="cta_img" alt="" />
                                <img decoding="async"
                                    src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/ccircle.svg') }}"
                                    class="ccircle_shape" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-f183977 elementor-widget elementor-widget-edplus-cta"
                        data-id="f183977" data-element_type="widget" data-e-type="widget"
                        data-widget_type="edplus-cta.default">
                        <div class="elementor-widget-container">
                            <div class="cta2 color_green"
                                style="
                                        background-image: url({{ url('site/wp-content/uploads/2025/03/cta2.svg') }});
                                    ">
                                <div class="cta-content wow fadeInUp">
                                    <h2>
                                        Become a <span>Tutor</span>
                                        <img decoding="async"
                                            src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/cta_line.svg') }}"
                                            class="ctitle_shape" alt="" />
                                    </h2>

                                    <p>
                                        Top instructors from around the
                                        world teach <br />
                                        Millions student on EduPlus
                                    </p>
                                    <a href="instructor-registration/index.html" class="white_btn round_btn">Apply
                                        Now</a>
                                </div>
                                <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/2-3.png') }}"
                                    class="cta_img" alt="" />
                                <img decoding="async"
                                    src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/ccircle.svg') }}"
                                    class="ccircle_shape" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

@endsection
