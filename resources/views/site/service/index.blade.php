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
                                    <!-- End blog_item -->
                                    {{-- <div class="col-xl-4 col-md-6 col-12 wow fadeInUp">
                                        <div class="blog_item">
                                            <div class="blog_img">
                                                <img decoding="async" width="978" height="714"
                                                    src="../wp-content/uploads/2025/03/b2.jpg"
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
                                                    <a href="../category/wordpress/index.html">WordPress</a>
                                                </span>
                                            </div>

                                            <div class="blog_content">
                                                <div class="blog_meta">
                                                    <span><i class="ph ph-user"></i>
                                                        <a href="../author/edplus/index.html">Masum Billah</a></span>
                                                    <span><i class="ph ph-clock"></i>
                                                        Oct 28, 2025
                                                    </span>
                                                </div>
                                                <h3>
                                                    <a href="../student-learning-through-an-online-computer/index.html">Student
                                                        Learning
                                                        Through an Online
                                                        Computer</a>
                                                </h3>
                                                <a href="../student-learning-through-an-online-computer/index.html"
                                                    class="blog_btn">Learn More
                                                    <i class="ph ph-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End blog_item -->
                                    <div class="col-xl-4 col-md-6 col-12 wow fadeInUp">
                                        <div class="blog_item">
                                            <div class="blog_img">
                                                <img decoding="async" width="978" height="726"
                                                    src="../wp-content/uploads/2025/03/b1.jpg"
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
                                                    <a href="../category/web-design/index.html">Web Design</a>
                                                </span>
                                            </div>

                                            <div class="blog_content">
                                                <div class="blog_meta">
                                                    <span><i class="ph ph-user"></i>
                                                        <a href="../author/edplus/index.html">Masum Billah</a></span>
                                                    <span><i class="ph ph-clock"></i>
                                                        Oct 26, 2025
                                                    </span>
                                                </div>
                                                <h3>
                                                    <a href="../online-learning-program-for-students-2/index.html">Online
                                                        Learning
                                                        Program for
                                                        Students</a>
                                                </h3>
                                                <a href="../online-learning-program-for-students-2/index.html"
                                                    class="blog_btn">Learn More
                                                    <i class="ph ph-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End blog_item -->
                                    <div class="col-xl-4 col-md-6 col-12 wow fadeInUp">
                                        <div class="blog_item">
                                            <div class="blog_img">
                                                <img fetchpriority="high" decoding="async" width="978" height="714"
                                                    src="../wp-content/uploads/2025/03/b3.jpg"
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
                                                    <a href="../category/wordpress/index.html">WordPress</a>
                                                </span>
                                            </div>

                                            <div class="blog_content">
                                                <div class="blog_meta">
                                                    <span><i class="ph ph-user"></i>
                                                        <a href="../author/edplus/index.html">Masum Billah</a></span>
                                                    <span><i class="ph ph-clock"></i>
                                                        Oct 24, 2025
                                                    </span>
                                                </div>
                                                <h3>
                                                    <a href="../leverage-agile-frameworks-to-provide-2/index.html">Leverage
                                                        agile
                                                        frameworks to
                                                        provide</a>
                                                </h3>
                                                <a href="../leverage-agile-frameworks-to-provide-2/index.html"
                                                    class="blog_btn">Learn More
                                                    <i class="ph ph-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End blog_item -->
                                    <div class="col-xl-4 col-md-6 col-12 wow fadeInUp">
                                        <div class="blog_item">
                                            <div class="blog_img">
                                                <img decoding="async" width="978" height="714"
                                                    src="../wp-content/uploads/2025/03/b2.jpg"
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
                                                    <a href="../category/education/index.html">Education</a>
                                                </span>
                                            </div>

                                            <div class="blog_content">
                                                <div class="blog_meta">
                                                    <span><i class="ph ph-user"></i>
                                                        <a href="../author/edplus/index.html">Masum Billah</a></span>
                                                    <span><i class="ph ph-clock"></i>
                                                        Oct 24, 2025
                                                    </span>
                                                </div>
                                                <h3>
                                                    <a href="../student-learning-through-an-online-computer-2/index.html">Student
                                                        Learning
                                                        Through an Online
                                                        Computer</a>
                                                </h3>
                                                <a href="../student-learning-through-an-online-computer-2/index.html"
                                                    class="blog_btn">Learn More
                                                    <i class="ph ph-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End blog_item -->
                                    <div class="col-xl-4 col-md-6 col-12 wow fadeInUp">
                                        <div class="blog_item">
                                            <div class="blog_img">
                                                <img decoding="async" width="978" height="726"
                                                    src="../wp-content/uploads/2025/03/b1.jpg"
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
                                                    <a href="../category/education/index.html">Education</a>
                                                </span>
                                            </div>

                                            <div class="blog_content">
                                                <div class="blog_meta">
                                                    <span><i class="ph ph-user"></i>
                                                        <a href="../author/edplus/index.html">Masum Billah</a></span>
                                                    <span><i class="ph ph-clock"></i>
                                                        Mar 24, 2025
                                                    </span>
                                                </div>
                                                <h3>
                                                    <a href="../online-learning-program-for-students/index.html">Online
                                                        Learning
                                                        Program for
                                                        Students</a>
                                                </h3>
                                                <a href="../online-learning-program-for-students/index.html"
                                                    class="blog_btn">Learn More
                                                    <i class="ph ph-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End blog_item --> --}}

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
