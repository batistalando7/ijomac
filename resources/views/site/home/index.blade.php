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
                                    background-image: url({{ url('site/wp-content/uploads/2025/11/slide1.png') }});
                                ">
                            <div class="container position-relative">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-5 col-12 align-self-center">
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

                                    {{-- <div class="col-xl-6 col-lg-7 col-12 align-self-center">
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
                                    </div> --}}
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
            @if ($services->isNotEmpty())
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
                                            <a class="blue_btn round_btn" href="{{ route('site.services') }}">Todos
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
            @endif
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
                                        <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/b1.png') }}"
                                            class="about_img_1" alt="" />
                                        <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/b2.png') }}"
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
                                                Certificado Válido
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
            {{-- <div class="elementor-element elementor-element-3fad5e1 e-con-full e-flex e-con e-parent" data-id="3fad5e1"
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
                                                    <span class="count">{{ $clientTotal ?? '' }}</span>
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
                                                    <span class="count">{{ $finalistTotal ?? '' }}</span>
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
                                                    <span class="count">{{ $teacher ?? '' }}</span>
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
                                                    <span class="count">{{ $successPercent ?? '' }}</span>%
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
            </div> --}}
            @if ($courses->isNotEmpty())
                <div class="elementor-element elementor-element-dff3f98 e-con-full e-flex e-con e-parent"
                    data-id="dff3f98" data-element_type="container" data-e-type="container">
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
            @endif

            {{-- formadores --}}
           {{--  @if ($teachers->isNotEmpty())
                @include('components.formadores')
            @endif --}}
            {{-- parceiros --}}
            @if ($partners->isNotEmpty())
                @include('components.patners', ['patners' => $partners])
            @endif
        </div>
    </div>

@endsection
