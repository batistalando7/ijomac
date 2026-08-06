@extends('layouts._site.main')
@section('title', 'IJOMAC - Verificação de Certificado')
@section('content')

    <!-- Start Main Banner -->
    <section class="main-banner"
        style="background-image: url({{ url('site/wp-content/themes/edplus/assets/img/bg/banner2.jpeg') }});">
        <div class="container text-center">
            <div class="mbanner_content">
                <h2>Verificação de Certificado </h2>
                <p><a href="{{ route('site.home') }}">Página Inicial</a> <i class="ph ph-caret-right"></i> Verificação de
                    Certificado</p>
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
                                src="{{ url('site/wp-content/uploads/2025/12/ceo.png') }}"
                                class="attachment-large size-large wp-image-1763" alt=""
                                srcset="{{ url('site/wp-content/uploads/2025/12/ceo.png') }} 660w, {{ url('site/wp-content/uploads/2025/12/ceo.png') }} 272w, {{ url('site/wp-content/uploads/2025/12/ceo.png') }} 600w"
                                sizes="(max-width: 640px) 100vw, 640px" />
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-541abb5 elementor-widget elementor-widget-image"
                        data-id="541abb5" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">

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
                                                <h4>Verificação de Certificado</h4>
                                                <p>
                                                    Verifique a validade do seu certificado preenchendo o formulário abaixo,
                                                    com o seu codigo secreto.
                                                </p>
                                            </div>

                                            <div class="wow fadeInUp">
                                                <div class="wpcf7 no-js" id="wpcf7-f1097-p1074-o1" lang="en-US"
                                                    dir="ltr" data-wpcf7-id="1097">
                                                    <div class="screen-reader-response">
                                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                        <ul></ul>
                                                    </div>
                                                    <form action="{{ route('site.verify.show', ['student' => $student->slug]) }}" method="get" class="wpcf7-form init">
                                                        @csrf

                                                        <input type="text" name="secret_code" id="secret_code"
                                                            size="40" placeholder="Código Secreto*" autocomplete="off" /><br />
                                                        <button type="submit" class="fbtn">
                                                            Verificar Certificado
                                                            <i class="ph ph-arrow-right"></i>
                                                        </button>

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
                </div>
            </div>
        </div>
    </div>
@endsection
