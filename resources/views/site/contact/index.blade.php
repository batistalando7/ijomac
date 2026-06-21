@extends('layouts._site.main')
@section('title', 'IJOMAC - Contactos')
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

<!-- Start Main Banner -->
<section class="main-banner"
    style="
                background-image: url({{ url('site/wp-content/themes/edplus/assets/img/bg/banner.png') }});
            ">
    <div class="container text-center">
        <div class="mbanner_content">
            <h2>Contactos</h2>
            <p>
                <a href="../index.html">Página Inicial</a>
                <i class="ph ph-caret-right"></i> Contactos
            </p>
        </div>
    </div>
    <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/blshape.svg') }}" alt=""
        class="blshape" />
    <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/brshape.svg') }}" alt=""
        class="brshape" />
</section>
<!-- End Main Banner -->

<div class="page-builder-template">
    <div data-elementor-type="wp-page" data-elementor-id="1074" class="elementor elementor-1074"
        data-elementor-post-type="page">
        <div class="elementor-element elementor-element-8a2ddfb e-flex e-con-boxed e-con e-parent" data-id="8a2ddfb"
            data-element_type="container" data-e-type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-e229234 e-con-full e-flex e-con e-child"
                    data-id="e229234" data-element_type="container" data-e-type="container">
                    <div class="elementor-element elementor-element-9043313 elementor-widget elementor-widget-edplus-title"
                        data-id="9043313" data-element_type="widget" data-e-type="widget"
                        data-widget_type="edplus-title.default">
                        <div class="elementor-widget-container">
                            <div class="section-title text-start wow fadeInUp">
                                <span> </span>
                                <h2>
                                    Estamos sempre animados para<br> receber notícias suas!
                                </h2>
                                <img decoding="async"
                                    src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/linha-laranja.png') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-f44caa0 elementor-widget elementor-widget-edplus-contact-info"
                        data-id="f44caa0" data-element_type="widget" data-e-type="widget"
                        data-widget_type="edplus-contact-info.default">
                        <div class="elementor-widget-container">
                            <div class="contact-item">
                                <div class="cont_icon">
                                    <i class="ph ph-map-pin"></i>
                                </div>

                                <div class="cont_content">
                                    <h4>Endereço</h4>
                                    <p>
                                        Luanda, Cacuaco
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-75f1741 elementor-widget elementor-widget-edplus-contact-info"
                        data-id="75f1741" data-element_type="widget" data-e-type="widget"
                        data-widget_type="edplus-contact-info.default">
                        <div class="elementor-widget-container">
                            <div class="contact-item">
                                <div class="cont_icon">
                                    <i class="ph ph-envelope-simple"></i>
                                </div>

                                <div class="cont_content">
                                    <h4>Email Address</h4>
                                    <p>
                                        <a href="mailto:support@example.com">Support @example.com</a><br />
                                        <a href="mailto:support@example.com">Info@example.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-b79bbed elementor-widget elementor-widget-edplus-contact-info"
                        data-id="b79bbed" data-element_type="widget" data-e-type="widget"
                        data-widget_type="edplus-contact-info.default">
                        <div class="elementor-widget-container">
                            <div class="contact-item">
                                <div class="cont_icon">
                                    <i class="ph ph-phone-call"></i>
                                </div>

                                <div class="cont_content">
                                    <h4>Phone Number</h4>
                                    <p>
                                        <a href="tel:support@example.com">+244 941 991 533</a><br />
                                        <a href="tel:support@example.com">+244 923 949 839</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-b8a3612 e-con-full e-flex e-con e-child"
                    data-id="b8a3612" data-element_type="container" data-e-type="container">
                    <div class="elementor-element elementor-element-081a00e elementor-widget elementor-widget-edplus-contact-form"
                        data-id="081a00e" data-element_type="widget" data-e-type="widget"
                        data-widget_type="edplus-contact-form.default">
                        <div class="elementor-widget-container">
                            <div class="contact-form"
                                style="
                                            background-image: url({{ url('site/wp-content/uploads/2025/03/contact.png') }});
                                        ">
                                <div class="cf_title wow fadeInUp"
                                    style="
                                                visibility: visible;
                                                animation-name: fadeInUp;
                                            ">
                                    <h4>Entre em contato</h4>
                                    <p>
                                        Fique à vontade para entrar em contato conosco, não divulgamos seu e-mail.
                                    </p>
                                </div>

                                <div class="wow fadeInUp">
                                    <div class="wpcf7 no-js" id="wpcf7-f1097-p1074-o1" lang="en-US" dir="ltr"
                                        data-wpcf7-id="1097">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>
                                        <form method="post" class="wpcf7-form init" aria-label="Contact form"
                                            novalidate="novalidate" data-status="init"
                                            data-url="{{ route('site.message') }}">
                                            @csrf
                                            <fieldset class="hidden-fields-container">
                                                <input type="hidden" name="_wpcf7" value="1097" /><input
                                                    type="hidden" name="_wpcf7_version" value="6.1.6" /><input
                                                    type="hidden" name="_wpcf7_locale" value="en_US" /><input
                                                    type="hidden" name="_wpcf7_unit_tag"
                                                    value="wpcf7-f1097-p1074-o1" /><input type="hidden"
                                                    name="_wpcf7_container_post" value="1074" /><input
                                                    type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                            </fieldset>
                                            <p>
                                                <input type="text" placeholder="Nome Completo*" /><br />
                                                <input type="email" placeholder="Endereço de Email*" /><br />
                                                <input type="text" placeholder="Assunto *" /><br />
                                                <textarea placeholder="Sua Mensagem*"></textarea><br />
                                                <button type="submit" class="fbtn">
                                                    Enviar Mensagem
                                                    <i class="ph ph-arrow-right"></i>
                                                </button>
                                            </p>
                                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-733c405 e-con-full e-flex e-con e-parent" data-id="733c405"
            data-element_type="container" data-e-type="container">
            <div class="elementor-element elementor-element-891dcdb elementor-widget elementor-widget-google_maps"
                data-id="891dcdb" data-element_type="widget" data-e-type="widget"
                data-widget_type="google_maps.default">
                <div class="elementor-widget-container">
                    <div class="elementor-custom-embed">
                        <iframe loading="lazy"
                            src="https://maps.google.com/maps?q=TemplateMonster&amp;t=m&amp;z=20&amp;output=embed&amp;iwloc=near"
                            title="TemplateMonster" aria-label="TemplateMonster"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection