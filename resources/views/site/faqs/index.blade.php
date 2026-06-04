@extends('layouts._site.main')
@section('title', 'IJOMAC - FAQs')
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
    <section class="main-banner" style="background-image: url({{ url('site/wp-content/themes/edplus/assets/img/bg/main-banner.jpg') }});">
        <div class="container text-center">
            <div class="mbanner_content">
                <h2>FAQ </h2>
                <p><a href="{{ url('site/index.html') }}">Página Inicial</a> <i class="ph ph-caret-right"></i> FAQ</p>
            </div>
        </div>
        <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/blshape.svg') }}" alt="" class="blshape">
        <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/brshape.svg') }}" alt="" class="brshape">
    </section>
    <!-- End Main Banner -->



    <div class="page-builder-template">
        <div data-elementor-type="wp-page" data-elementor-id="1110" class="elementor elementor-1110"
            data-elementor-post-type="page">
            <div class="elementor-element elementor-element-4941288 e-grid e-con-boxed e-con e-parent" data-id="4941288"
                data-element_type="container" data-e-type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-541abb5 elementor-widget elementor-widget-image"
                        data-id="541abb5" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img fetchpriority="high" decoding="async" width="640" height="707"
                                src="{{ url('site/wp-content/uploads/2025/12/faq.png') }}"
                                class="attachment-large size-large wp-image-1763" alt=""
                                srcset="https://wpdemothemes.com/edplus/wp-content/uploads/2025/12/faq.png 660w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/12/faq-272x300.png 272w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/12/faq-600x663.png 600w"
                                sizes="(max-width: 640px) 100vw, 640px" />
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-5bda132 elementor-widget__width-inherit elementor-widget elementor-widget-edplus-faq"
                        data-id="5bda132" data-element_type="widget" data-e-type="widget"
                        data-widget_type="edplus-faq.default">
                        <div class="elementor-widget-container">

                            <div class="accordion" id="faq_accordion">



                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            O que é HST? </button>
                                    </h2>

                                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                        data-bs-parent="#faq_accordion">
                                        <div class="accordion-body">
                                            HST significa Higiene, Segurança e Saúde no Trabalho, um conjunto de práticas destinadas a proteger trabalhadores e organizações contra riscos ocupacionais.
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse2" aria-controls="collapse2">
                                            A IJOMAC realiza auditorias de segurança? </button>
                                    </h2>

                                    <div id="collapse2" class="accordion-collapse collapse " aria-labelledby="heading2"
                                        data-bs-parent="#faq_accordion">
                                        <div class="accordion-body">
                                            Sim. Realizamos auditorias, inspeções e avaliações de conformidade em diferentes ambientes de trabalho.
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse3" aria-controls="collapse3">
                                            Os cursos possuem certificado? </button>
                                    </h2>

                                    <div id="collapse3" class="accordion-collapse collapse " aria-labelledby="heading3"
                                        data-bs-parent="#faq_accordion">
                                        <div class="accordion-body">
                                            Sim. Os participantes recebem certificado após a conclusão da formação e cumprimento dos requisitos definidos.
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse4" aria-controls="collapse4">
                                            A empresa atende apenas em Luanda? </button>
                                    </h2>

                                    <div id="collapse4" class="accordion-collapse collapse " aria-labelledby="heading4"
                                        data-bs-parent="#faq_accordion">
                                        <div class="accordion-body">
                                            Não. Podemos prestar serviços em diferentes províncias de Angola, dependendo das necessidades do projeto.
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
