@extends('layouts._site.main')
@section('title', 'Todos Cursos')
@section('content')
    <!-- Start Main Banner -->
    <section class="main-banner"
        style="background-image: url('{{ url('site/wp-content/themes/edplus/assets/img/bg/banner2.jpeg') }}');">
        <div class="container text-center">
            <div class="mbanner_content">
                <h2>Galeria - {{ $galery->name }} </h2>
                <p><a href="{{ route('site.home') }}">Página Inicial</a> <i class="ph ph-caret-right"></i> Galeria <i
                        class="ph ph-caret-right"></i><span>{{ $galery->name }}</span></p>
            </div>
        </div>
        <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/blshape.svg') }}" alt="" class="blshape">
        <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/brshape.svg') }}" alt="" class="brshape">
    </section>
    <!-- End Main Banner -->



    <!-- Start Blog -->
    <section class="standard-blog section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-12 wow fadeIn">

                    @foreach ($images as $item)
                        <article id="post-1189"
                            class="post-1189 post type-post status-publish format-standard has-post-thumbnail hentry category-web-design tag-design tag-software tag-wordpress">
                            <div class="blog_item wow fadeInUp">
                                <div class="blog_img">
                                    <img fetchpriority="high" width="978" height="714"
                                        src="{{ asset('storage/' . $item->image) }}"
                                        class="attachment-edplus_blog_img size-edplus_blog_img wp-post-image" alt=""
                                        decoding="async"
                                        srcset="{{ asset('storage/' . $item->image) }} 978w, {{ asset('storage/' . $item->image) }} 600w, {{ asset('storage/' . $item->image) }} 300w, {{ asset('storage/' . $item->image) }} 768w"
                                        sizes="(max-width: 978px) 100vw, 978px" />
                                    {{-- <span class="b_cat">
                                        <a href="../../category/web-design/index.html">Web Design</a> </span> --}}
                                </div>

                                {{-- <div class="blog_content "> --}}
                                {{-- <div class="blog_meta">
                                         <span><i class="ph ph-user"></i> <a href="index.html">Masum Billah</a></span> 
                                        <span><i class="ph ph-clock"></i> Oct 30, 2025 </span>
                                    </div> --}}
                                {{-- < h2 class="post-title"><a href="../../leverage-agile-frameworks-to-provide/index.html"
                                            rel="bookmark">Leverage agile frameworks to provide</a></>
                                    <p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut luctus eget dolor non
                                        condimentum. Mauris ac augue eu ex elementum dictum. Quisque [&hellip;]</p>
                                    </p> --}}
                                {{-- <a href="{{ asset('storage/' . $item->image) }}" class="blog_btn2"><i
                                        class="ph ph-arrow-right"></i></a> --}}
                                {{-- </div> --}}
                            </div>
                        </article>
                    @endforeach
                    {{-- <article id="post-1195"
                        class="post-1195 post type-post status-publish format-standard has-post-thumbnail hentry category-wordpress tag-computer tag-learning tag-student">
                        <div class="blog_item wow fadeInUp">
                            <div class="blog_img">
                                <img width="978" height="714" src="../../wp-content/uploads/2025/03/b2.jpg"
                                    class="attachment-edplus_blog_img size-edplus_blog_img wp-post-image" alt=""
                                    decoding="async"
                                    srcset="https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/b2.jpg 978w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/b2-600x438.jpg 600w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/b2-300x219.jpg 300w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/b2-768x561.jpg 768w"
                                    sizes="(max-width: 978px) 100vw, 978px" />
                                <span class="b_cat">
                                    <a href="../../category/wordpress/index.html">WordPress</a> </span>
                            </div>

                            <div class="blog_content ">
                                <div class="blog_meta">
                                    <span><i class="ph ph-user"></i> <a href="index.html">Masum Billah</a></span>
                                    <span><i class="ph ph-clock"></i> Oct 28, 2025 </span>
                                </div>
                                <h2 class="post-title"><a
                                        href="../../student-learning-through-an-online-computer/index.html"
                                        rel="bookmark">Student Learning Through an Online Computer</a></h2>
                                <p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut luctus eget dolor non
                                    condimentum. Mauris ac augue eu ex elementum dictum. Quisque [&hellip;]</p>
                                </p>
                                <a href="../../student-learning-through-an-online-computer/index.html" class="blog_btn2"><i
                                        class="ph ph-arrow-right"></i></a>
                            </div>
                        </div>
                    </article> --}}

                    <div class="post_pagination text-center fix">


                        <nav class="navigation pagination" aria-label="Posts pagination">
                            <h2 class="screen-reader-text">Posts pagination</h2>
                            <div class="nav-links">{{ $images->links() }}{{-- <span aria-label="Page 1" aria-current="page"
                                    class="page-numbers current">1</span>
                                <a aria-label="Page 2" class="page-numbers" href="page/2/index.html">2</a>
                                <a aria-label="Page 3" class="page-numbers" href="page/3/index.html">3</a>
                                <a class="next page-numbers" href="page/2/index.html"><i
                                        class="fa-solid fa-arrow-right-long"></i></a> --}}
                            </div>
                        </nav>
                    </div><!-- End post-pagination -->


                </div><!-- End Col -->

                <div class="col-xl-4 col-lg-4 col-12 sidebar">

                    <aside id="secondary" class="widget-area">
                        {{-- <div id="search-2" class="widget widget_search wow fadeInUp">
                            <div class="search-form">
                                <form method="get" action="https://wpdemothemes.com/edplus/">
                                    <input type="text" value="" name="s" id="s"
                                        class="search-control" placeholder="Search">
                                    <button type="submit" class="search-btn"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div> --}}
                        <div id="recent-posts-2" class="widget widget_recent_entries wow fadeInUp">
                            <h3 class="widget-title">Publicações Recentes</h3>
                            <ul>
                                @foreach ($recentGaleries as $item)
                                    <li>
                                        <a href="{{ route('site.galery.show', $item->slug) }}">{{ $item->name }}</a>
                                    </li>
                                @endforeach
                                {{-- <li>
                                    <a href="../../student-learning-through-an-online-computer/index.html">Student Learning
                                        Through an Online Computer</a>
                                </li>
                                <li>
                                    <a href="../../online-learning-program-for-students-2/index.html">Online Learning
                                        Program for Students</a>
                                </li>
                                <li>
                                    <a href="../../leverage-agile-frameworks-to-provide-2/index.html">Leverage agile
                                        frameworks to provide</a>
                                </li>
                                <li>
                                    <a href="../../student-learning-through-an-online-computer-2/index.html">Student
                                        Learning Through an Online Computer</a>
                                </li> --}}
                            </ul>

                        </div>
                        <div id="categories-2" class="widget widget_categories wow fadeInUp">
                            <h3 class="widget-title">Cursos</h3>
                            <ul>
                                @foreach ($courses as $item)
                                    <li class="cat-item cat-item-16"><a
                                            href="{{ route('site.courses.details', $item->slug) }}">{{ $item->name }}</a>
                                    </li>
                                @endforeach
                                {{-- <li class="cat-item cat-item-82"><a href="../../category/web-design/index.html">Web
                                        Design</a>
                                </li>
                                <li class="cat-item cat-item-17"><a href="../../category/wordpress/index.html">WordPress</a>
                                </li> --}}
                            </ul>

                        </div>
                        <div id="tag_cloud-2" class="widget widget_tag_cloud wow fadeInUp">
                            <h3 class="widget-title">Serviços</h3>
                            <div class="tagcloud">
                                @foreach ($services as $item)
                                    <a href="{{ route('site.services.details', $item->slug) }}"
                                    class="tag-cloud-link tag-link-87 tag-link-position-1" style="font-size: 8pt;"
                                    aria-label="computer (1 item)">{{ $item->name }}</a>
                                @endforeach
                                {{-- <a href="../../tag/design/index.html" class="tag-cloud-link tag-link-85 tag-link-position-2"
                                    style="font-size: 8pt;" aria-label="design (1 item)">design</a>
                                <a href="../../tag/learning/index.html"
                                    class="tag-cloud-link tag-link-88 tag-link-position-3" style="font-size: 8pt;"
                                    aria-label="learning (1 item)">learning</a>
                                <a href="../../tag/program/index.html"
                                    class="tag-cloud-link tag-link-89 tag-link-position-4" style="font-size: 8pt;"
                                    aria-label="program (1 item)">program</a>
                                <a href="../../tag/software/index.html"
                                    class="tag-cloud-link tag-link-83 tag-link-position-5" style="font-size: 8pt;"
                                    aria-label="software (1 item)">software</a>
                                <a href="../../tag/student/index.html"
                                    class="tag-cloud-link tag-link-86 tag-link-position-6" style="font-size: 22pt;"
                                    aria-label="student (2 items)">student</a>
                                <a href="../../tag/wordpress/index.html"
                                    class="tag-cloud-link tag-link-84 tag-link-position-7" style="font-size: 8pt;"
                                    aria-label="wordpress (1 item)">wordpress</a> --}}
                            </div>
                        </div>
                    </aside><!-- #secondary -->

                </div><!-- End Col -->
            </div>
        </div>
    </section>
    <!-- End Blog -->

@endsection
