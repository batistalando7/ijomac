@extends('layouts._site.main')
@section('title', 'Todos Cursos')
@section('content')

    <!-- Start Main Banner -->
    <section class="main-banner"
        style="background-image: url('{{ url('site/wp-content/themes/edplus/assets/img/bg/banner2.jpeg') }}');">
        <div class="container text-center">
            <div class="mbanner_content">
                <h2>Galeria </h2>
                <p><a href="{{ route('site.home') }}">Página Inicial</a> <i class="ph ph-caret-right"></i> Galeria</p>
            </div>
        </div>
        <img src="../wp-content/themes/edplus/assets/img/shapes/blshape.svg" alt="" class="blshape">
        <img src="../wp-content/themes/edplus/assets/img/shapes/brshape.svg" alt="" class="brshape">
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
                                    @foreach ($galery as $item)
                                        <div class="col-xl-4 col-md-6 col-12 wow fadeInUp">
                                            <div class="blog_item">
                                                <div class="blog_img">
                                                    <img fetchpriority="high" decoding="async" width="978" height="714"
                                                        src="{{ asset('storage/' . $item->images[0]->image) }}"
                                                        class="attachment-edplus_blog size-edplus_blog wp-post-image"
                                                        alt=""
                                                        srcset="{{ asset('storage/' . $item->images[0]->image) }} 978w, {{ asset('storage/' . $item->images[0]->image) }} 600w, {{ asset('storage/' . $item->images[0]->image) }} 300w, {{ asset('storage/' . $item->images[0]->image) }} 768w"
                                                        sizes="(max-width: 978px) 100vw, 978px" /> <span class="b_cat">
                                                        <i class="ph ph-file"></i> <a
                                                            href="javascript:void(0)">Galeria</a> </span>
                                                </div>

                                                <div class="blog_content ">
                                                    <div class="blog_meta">
                                                        {{-- <span><i class="ph ph-user"></i> <a
                                                                href="../author/edplus/index.html">Masum Billah</a></span> --}}
                                                        <span><i class="ph ph-clock"></i> {{ \Carbon\Carbon::parse($item->date)->format('d,  M, Y') }} </span>
                                                    </div>
                                                    <h3><a href="{{ route('site.galery.show', $item->slug) }}">{{$item->name}}</a></h3>
                                                    <a href="{{ route('site.galery.show', $item->slug) }}"
                                                        class="blog_btn">Ver Mais <i class="ph ph-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="col-12 text-center wow fadeInUp">
                                        <div class="post_pagination">
                                        </div>
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
