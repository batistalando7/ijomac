@extends('layouts._site.main')
@section('title', 'Serviços | IJOMAC')
@section('content')

    <!-- Start Main Banner -->
    <section class="main-banner"
        style="
                background-image: url({{ url('site/wp-content/themes/edplus/assets/img/bg/main-banner.jpg') }});
            ">
        <div class="container text-center">
            <div class="mbanner_content">
                <h2>Nossos Serviços</h2>
                <p>
                    <a href="{{ route('site.home') }}">Página Inicial</a>
                    <i class="ph ph-caret-right"></i> Serviços
                </p>
            </div>
        </div>
        <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/blshape.svg') }}" alt="" class="blshape" />
        <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/brshape.svg') }}" alt="" class="brshape" />
    </section>
    <!-- End Main Banner -->

    <div class="page-builder-template">
        <div data-elementor-type="wp-page" data-elementor-id="1124" class="elementor elementor-1124"
            data-elementor-post-type="page">
            <div class="elementor-element elementor-element-eb2603c e-con-full e-flex e-con e-parent" data-id="eb2603c"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-4b728f0 elementor-widget elementor-widget-edplus-blog"
                    data-id="4b728f0" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-blog.default">
                    <div class="elementor-widget-container">
                        <!-- Start Blog -->
                        <section class="blog">
                            <div class="container">
                                <div class="row">
                                    @foreach ($services as $item)
                                        <div class="col-xl-4 col-md-6 col-12 wow fadeInUp">
                                            @include('components.blogItem', ['item' => $item])
                                        </div>
                                    @endforeach

                                    <div class="col-12 text-center wow fadeInUp">
                                        <div class="post_pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End Blog -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
