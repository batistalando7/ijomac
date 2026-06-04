@extends('layouts._site.main')
@section('title', 'Sobre Nós')
@section('content')


    <div id="mini_cart" class="min_cart_wrapper">
        <div class="cart_drawer">
            <div class="cart_top">
                <a href="#" class="cart_close"><i class='bx bx-x'></i></a>
                <h3 class="title">Courses List</h3>
                <span class="cart_number">
                    0 </span>
            </div>
            <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
        </div>
    </div>

    <!-- Start Main Banner -->
    <section class="main-banner"
        style="background-image: url({{ url('site/wp-content/themes/edplus/assets/img/bg/main-banner.jpg') }});">
        <div class="container text-center">
            <div class="mbanner_content">
                <h2>Sobre Nós </h2>
                <p><a href="{{ url('site.home') }}">Página Principal</a> <i class="ph ph-caret-right"></i> Sobre Nós</p>
            </div>
        </div>
        <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/blshape.svg') }}" alt="" class="blshape">
        <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/brshape.svg') }}" alt="" class="brshape">
    </section>
    <!-- End Main Banner -->



    <div class="page-builder-template">
        <div data-elementor-type="wp-page" data-elementor-id="1199" class="elementor elementor-1199"
            data-elementor-post-type="page">
            <div class="elementor-element elementor-element-5f91927 e-con-full e-flex e-con e-parent" data-id="5f91927"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-1156e0e elementor-widget elementor-widget-edplus-features"
                    data-id="1156e0e" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-features.default">
                    <div class="elementor-widget-container">
                        <section class="features section-padding">
                            <div class="container">
                                <div class="feature_slider position-relative wow fadeInUp owl-carousel">

                                    <div class="feature_item">
                                        <div class="ficon">
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/uploads/2025/03/clock.svg') }}" alt="">
                                        </div>
                                        <h3>Equipa Técnica Especializada</h3>
                                        <p>Profissionais experientes e qualificados.</p>
                                        <a href="#">Learn More...</a>
                                    </div>

                                    <div class="feature_item">
                                        <div class="ficon">
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/uploads/2025/03/certificate.svg') }}"
                                                alt="">
                                        </div>
                                        <h3>Soluções Personalizadas</h3>
                                        <p>Projetos adaptados às necessidades da sua organização.</p>
                                        <a href="#">Learn More...</a>
                                    </div>

                                    <div class="feature_item">
                                        <div class="ficon">
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/uploads/2025/03/graduation-hat.svg') }}"
                                                alt="">
                                        </div>
                                        <h3>Compromisso com a Segurança</h3>
                                        <p>Priorizamos a proteção das pessoas e dos ativos.</p>
                                        <a href="#">Learn More...</a>
                                    </div>

                                    <div class="feature_item">
                                        <div class="ficon">
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/uploads/2025/03/teacher.svg') }}"
                                                alt="">
                                        </div>
                                        <h3>Conformidade Legal</h3>
                                        <p>Apoiamos a sua empresa no cumprimento das normas e regulamentos aplicáveis.</p>
                                        <a href="#">Learn More...</a>
                                    </div>

                                    <div class="feature_item">
                                        <div class="ficon">
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/uploads/2025/03/graduation-hat.svg') }}"
                                                alt="">
                                        </div>
                                        <h3>Melhoria Contínua</h3>
                                        <p>Foco permanente na eficiência, qualidade e sustentabilidade.</p>
                                        <a href="#">Learn More...</a>
                                    </div>


                                </div>

                                {{-- <div class="features_btn text-center wow fadeInUp">
                                    <p>Trusted by The Worlds <a href="#">Best University <i
                                                class="ph ph-arrow-right"></i></a></p>
                                </div> --}}

                            </div>
                        </section>
                        <!-- End Features -->
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-5f91927 e-con-full e-flex e-con e-parent" data-id="5f91927"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-1156e0e elementor-widget elementor-widget-edplus-features"
                    data-id="1156e0e" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-features.default">
                    <div class="elementor-widget-container">
                        <section class="features section-padding">
                            <div class="container">
                                <div class="elementor-widget-container">
                                    <div class="about-content position-relative wow fadeInUp">
                                        <div class="section-title mb30">
                                            <span>
                                                <span class="ticon">
                                                    <img decoding="async"
                                                        src="{{ url('site/wp-content/themes/edplus/assets/img/icons/title-icon.svg') }}"
                                                        alt="">
                                                </span>
                                                Sobre IJOMAC
                                            </span>

                                            <h2>We create unique digital media experiences.</h2>
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/title.svg') }}"
                                                alt="">
                                        </div>

                                        <p>
                                            A IJOMAC é uma empresa angolana dedicada à prestação de serviços de Higiene,
                                            Segurança e Saúde no Trabalho (HST), Gestão Ambiental e Controlo da Qualidade.

                                            Trabalhamos para apoiar organizações de diferentes setores na implementação de
                                            boas práticas operacionais, promovendo ambientes de trabalho mais seguros, maior
                                            eficiência operacional e o cumprimento dos requisitos legais e normativos.

                                            Com uma equipa qualificada e comprometida, desenvolvemos soluções personalizadas
                                            que respondem às necessidades específicas de cada cliente. </p>

                                        <div class="d-md-flex gap-4 aitem_wrap mb-4">
                                            <div class="about_item">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/1-1.svg') }}"
                                                    alt="">
                                                <h4>Missão</h4>
                                                <p>
                                                    Prestar serviços de excelência em Higiene, Segurança e Saúde no
                                                    Trabalho, Gestão Ambiental e Qualidade, assegurando a proteção das
                                                    pessoas, dos processos e do meio ambiente, promovendo o desenvolvimento
                                                    sustentável das organizações. </p>
                                            </div>
                                            <div class="about_item">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/2-1.svg') }}"
                                                    alt="">
                                                <h4>Visão</h4>
                                                <p>
                                                    Ser uma referência nacional em soluções integradas de HST, Qualidade e
                                                    Ambiente, reconhecida pela inovação, credibilidade e impacto positivo
                                                    gerado nas organizações. </p>
                                            </div>


                                        </div>

                                        {{-- <a href="#" class="blue_btn">View All Program</a> --}}

                                        {{-- <img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/ed_cap.svg') }}"
                                            class="ab_book_shape aniupDown position-absolute" alt=""> --}}
                                    </div>


                                </div>

                            </div>
                        </section>
                        <!-- End Features -->
                    </div>
                </div>
            </div>
            {{-- <div class="elementor-element elementor-element-c3c8203 e-flex e-con-boxed e-con e-parent" data-id="c3c8203"
                data-element_type="container" data-e-type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-dad6862 e-con-full e-flex e-con e-child"
                        data-id="dad6862" data-element_type="container" data-e-type="container">
                        <div class="elementor-element elementor-element-38ae878 elementor-widget elementor-widget-edplus-about-image"
                            data-id="38ae878" data-element_type="widget" data-e-type="widget"
                            data-widget_type="edplus-about-image.default">
                            <div class="elementor-widget-container">
                                <div class="about-img position-relative wow fadeInUp">
                                    <div class="about_badge">
                                        <img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/graduate.svg') }}" alt="">
                                        <h4>Experience Advisor</h4>
                                    </div>

                                    <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/a1.jpg') }}"
                                        class="about_img_1" alt="">
                                    <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/2-2.jpg') }}"
                                        class="about_img_2" alt="">
                                    <h2 class="ab_wmark">EST 1950</h2>

                                    <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/ab_wave.svg') }}"
                                        class="ab_top_shape aniupDown position-absolute" alt="">
                                    <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/ab_dots.svg') }}"
                                        class="ab_btm_shape position-absolute" alt="">
                                    <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/ab_shape.svg') }}"
                                        class="ab_right_shape anileftRight position-absolute" alt="">
                                </div>




                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-b7136f6 e-con-full e-flex e-con e-child"
                        data-id="b7136f6" data-element_type="container" data-e-type="container">
                        <div class="elementor-element elementor-element-2c5a6bd elementor-widget elementor-widget-edplus-about-content"
                            data-id="2c5a6bd" data-element_type="widget" data-e-type="widget"
                            data-widget_type="edplus-about-content.default">
                            <div class="elementor-widget-container">
                                <div class="about-content position-relative wow fadeInUp">
                                    <div class="section-title mb30">
                                        <span>
                                            <span class="ticon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/themes/edplus/assets/img/icons/title-icon.svg') }}"
                                                    alt="">
                                            </span>
                                            About Our Edplus
                                        </span>

                                        <h2>We create unique digital media experiences.</h2>
                                        <img decoding="async"
                                            src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/title.svg') }}"
                                            alt="">
                                    </div>

                                    <p>
                                        At University Edplus, we are driven by the transformative power of education and the
                                        limitless potential within each individual. Founded in 1971, we have remained
                                        steadfast in our commitment to nurturing intellectual curiosity, promoting academic
                                        excellence, cultivating a dynamic campus community. </p>

                                    <div class="d-md-flex gap-4 aitem_wrap mb-4">
                                        <div class="about_item">
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/uploads/2025/03/1-1.svg') }}"
                                                alt="">
                                            <h4>Our Mission</h4>
                                            <p>
                                                Magna aliquaenim minim quis nostrud exercitation ulamco labor is Lorem
                                                ipsum. </p>
                                        </div>
                                        <div class="about_item">
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/uploads/2025/03/2-1.svg') }}"
                                                alt="">
                                            <h4>Our Vision</h4>
                                            <p>
                                                Magna aliquaenim minim quis nostrud exercitation ulamco labor is Lorem
                                                ipsum. </p>
                                        </div>


                                    </div>
                                    <a href="#" class="blue_btn">View All Program</a>

                                    <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/ed_cap.svg') }}"
                                        class="ab_book_shape aniupDown position-absolute" alt="">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="elementor-element elementor-element-efd0978 e-con-full e-flex e-con e-parent" data-id="efd0978"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-c920351 elementor-widget elementor-widget-edplus-counter-up"
                    data-id="c920351" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-counter-up.default">
                    <div class="elementor-widget-container">

                        <!-- Start Counter Up -->
                        <section class="container">
                            <div class="counter-up"
                                style="background-image: url(../wp-content/uploads/2025/03/counter.svg);">
                                <div class="row gy-5">

                                    <div class="col-xxl-3 col-xl-4 col-md-6 col-12 mx-xl-auto wow fadeInUp ">
                                        <div class="counter-item">
                                            <div class="coicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/peoples.svg') }}"
                                                    alt="">
                                            </div>

                                            <div class="ccontent">
                                                <h3><span class="count">118</span>K</h3>
                                                <span>Our Happy Students</span>
                                            </div>
                                        </div>
                                    </div><!-- End Col -->

                                    <div class="col-xxl-3 col-xl-4 col-md-6 col-12 mx-xl-auto wow fadeInUp ">
                                        <div class="counter-item">
                                            <div class="coicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/graduate-hat.svg') }}"
                                                    alt="">
                                            </div>

                                            <div class="ccontent">
                                                <h3><span class="count">25</span>K</h3>
                                                <span> Enrolled Learner </span>
                                            </div>
                                        </div>
                                    </div><!-- End Col -->

                                    <div class="col-xxl-3 col-xl-4 col-md-6 col-12 mx-xl-auto wow fadeInUp ">
                                        <div class="counter-item">
                                            <div class="coicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/expert.svg') }}"
                                                    alt="">
                                            </div>

                                            <div class="ccontent">
                                                <h3><span class="count">120</span>K</h3>
                                                <span> Expert Instructor </span>
                                            </div>
                                        </div>
                                    </div><!-- End Col -->

                                    <div
                                        class="col-xxl-3 col-xl-4 col-md-6 col-12 mx-xl-auto wow fadeInUp d-xl-none d-xxl-block">
                                        <div class="counter-item">
                                            <div class="coicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/satisfaction.svg') }}"
                                                    alt="">
                                            </div>

                                            <div class="ccontent">
                                                <h3><span class="count">96</span>%</h3>
                                                <span>Satisfaction Rate</span>
                                            </div>
                                        </div>
                                    </div><!-- End Col -->

                                </div>
                            </div>
                        </section>
                        <!-- End Counter Up -->

                    </div>
                </div>
            </div>
            {{-- testemunhos --}}
           @include('components.testemunhos')
            {{-- formadores --}}
            @include('components.formadores')
            <div class="elementor-element elementor-element-e27138f e-con-full e-flex e-con e-parent" data-id="e27138f"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-2b1934a elementor-widget elementor-widget-edplus-clients"
                    data-id="2b1934a" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-clients.default">
                    <div class="elementor-widget-container">
                        <!-- Start Client two -->
                        <div class="client-two">
                            <div class="container">
                                <div class="client_slider2 position-relative owl-carousel wow fadeInUp">

                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/5.svg') }}" alt="image"></a>

                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/4.svg') }}" alt="image"></a>

                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/3.svg') }}" alt="image"></a>

                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/2.svg') }}" alt="image"></a>

                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/1.svg') }}" alt="image"></a>

                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/3.svg') }}" alt="image"></a>

                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/4.svg') }}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Client -->


                    </div>
                </div>
            </div>
        </div>

    @endsection
