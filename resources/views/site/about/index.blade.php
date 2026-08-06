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
        style="background-image: url({{ url('site/wp-content/themes/edplus/assets/img/bg/banner2.jpeg') }});">
        <div class="container text-center">
            <div class="mbanner_content">
                <h2>Sobre Nós </h2>
                <p><a href="{{ route('site.home') }}">Página Principal</a> <i class="ph ph-caret-right"></i> Sobre Nós</p>
            </div>
        </div>
        <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/blshape.svg') }}" alt="" class="blshape">
        <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/brshape.svg') }}" alt="" class="brshape">
    </section>

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
                                    </div>

                                    <div class="feature_item">
                                        <div class="ficon">
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/uploads/2025/03/certificate.svg') }}"
                                                alt="">
                                        </div>
                                        <h3>Soluções Personalizadas</h3>
                                        <p>Projetos adaptados às necessidades da sua organização.</p>
                                    </div>

                                    <div class="feature_item">
                                        <div class="ficon">
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/uploads/2025/03/graduation-hat.svg') }}"
                                                alt="">
                                        </div>
                                        <h3>Compromisso com a Segurança</h3>
                                        <p>Priorizamos a proteção das pessoas e dos ativos.</p>
                                    </div>

                                    <div class="feature_item">
                                        <div class="ficon">
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/uploads/2025/03/teacher.svg') }}"
                                                alt="">
                                        </div>
                                        <h3>Conformidade Legal</h3>
                                        <p>Apoiamos a sua empresa no cumprimento das normas e regulamentos aplicáveis.</p>
                                    </div>

                                    <div class="feature_item">
                                        <div class="ficon">
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/uploads/2025/03/graduation-hat.svg') }}"
                                                alt="">
                                        </div>
                                        <h3>Melhoria Contínua</h3>
                                        <p>Foco permanente na eficiência, qualidade e sustentabilidade.</p>
                                    </div>

                                </div>
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

                                            <h2>Criamos experiências de Trabalho únicas.</h2>
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/linha-laranja.png') }}"
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
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End Features -->
                    </div>
                </div>
            </div>
            {{-- formadores --}}
            @include('components.formadores')

            {{-- parceiros --}}
            @if ($partners->isNotEmpty())
                @include('components.patners', ['patners' => $partners])
            @endif
        </div>
    </div>

@endsection
