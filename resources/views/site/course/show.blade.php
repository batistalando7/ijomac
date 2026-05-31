@extends('layouts._site.main')
@section('title', 'Detalhes do Curso')
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
                <h2>
                    {{ $course->name }} </h2>
                <p>
                    <a href="{{ route('site.home') }}">Home</a> <i class="ph ph-caret-right"></i>
                    {{ $course->name }}
                </p>
            </div>
        </div>
        <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/blshape.svg') }}" alt="" class="blshape">
        <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/brshape.svg') }}" alt="" class="brshape">
    </section>
    <!-- End Main Banner -->


    <!-- Start Courses -->
    <section class="courses-details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 wow fadeIn">



                    <div class="scourse_image">
                        <div class="tutor-course-thumbnail">
                            <img src="{{ asset('storage/' . $course->image) }}" />
                        </div>
                    </div>


                    <div class="scourse_meta">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="smeta">
                                    <div class="tutor-avatar">
                                        <div class="tutor-ratio tutor-ratio-1x1"><img
                                                src="{{ url('site/wp-content/uploads/2025/03/3-4-150x150.jpg') }}" alt="Masum Billah" />
                                        </div>
                                    </div>
                                    <div class="smeta_text">
                                        <span>Formador:</span>
                                        <p>
                                            <a href="../../profile/edplus/indexd527.html?view=instructor">Masum Billah</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="smeta sm_cat">
                                    <span>Category:</span>
                                    <p>
                                        <a
                                            href="../../course-category/marketing/index737f.html?tutor-course-filter-category=72">{{ $course->category->name }}</a>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="smeta">
                                    <span>Última actualização:</span>
                                    <p>
                                        {{ $course->updated_at->format('d/m/Y') }} </p>

                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="smeta smrating">
                                    <p>
                                    <div class="tutor-course-details-ratings">
                                        <div class="tutor-ratings-stars"><i class="tutor-icon-star-bold"
                                                data-rating-value="1"></i><i class="tutor-icon-star-bold"
                                                data-rating-value="2"></i><i class="tutor-icon-star-bold"
                                                data-rating-value="3"></i><i class="tutor-icon-star-bold"
                                                data-rating-value="4"></i><i class="tutor-icon-star-line"
                                                data-rating-value="5"></i></div><input type="hidden"
                                            name="tutor_rating_gen_input" value="4.00" /> <span>(4.00)</span>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Meta -->

                    <h2 class="scourse-title">{{ $course->name }}</h2>

                    <nav class="cd_tab">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-overview-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-overview" type="button" role="tab" aria-controls="nav-overview"
                                aria-selected="true">Descrição</button>
                            <button class="nav-link" id="nav-curriculum-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-curriculum" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Curriculum</button>
                            <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review"
                                type="button" role="tab" aria-controls="nav-review"
                                aria-selected="false">Avaliação</button>
                            <button class="nav-link" id="nav-instructor-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-instructor" type="button" role="tab" aria-controls="nav-disabled"
                                aria-selected="false">Formador</button>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-overview" role="tabpanel"
                            aria-labelledby="nav-overview-tab" tabindex="0">
                            <p>{{ $course->description }}</p>
                            {{-- <p>Knowing PHP has allowed me to make enough money to stay home and make courses like this one
                                for students all over the world. Being a PHP developer can allow anyone to make really good
                                money online and offline, developing dynamic applications.<br />
                                Knowing PHP will allow you to build web applications, websites or Content Management
                                systems, like WordPress, Facebook, Twitter or even Google.</p>
                            <p>There is no limit to what you can do with this knowledge. PHP is one of the most important
                                web programming languages to learn, and knowing it, will give you SUPER POWERS in the web
                                development world and job market place.<br />
                                Why?</p>
                            <p>Because Millions of websites and applications (the majority) use PHP. You can find a job
                                anywhere or even work on your own, online and in places like freelancer or Odesk. You can
                                definitely make a substantial income once you learn it.</p>
                            <p>I will not bore you 🙂<br />
                                I take my courses very seriously but at the same time I try to make it fun since I know how
                                difficult learning from an instructor with a monotone voice or boring attitude is. This
                                course is fun, and when you need some energy to keep going, you will get it from me.</p>
                            <p>My Approach<br />
                                Practice, practice and more practice. Every section inside this course has a practice
                                lecture at the end, reinforcing everything with went over in the lectures. I also created a
                                small application the you will be able to download to help you practice PHP. To top it off,
                                we will build and awesome CMS like WordPress, Joomla or Drupal.</p> --}}

                            <div
                                class="tutor-course-details-widget tutor-course-details-widget-col-2 tutor-mt-lg-50 tutor-mt-32">
                                <h3
                                    class="tutor-course-details-widget-title tutor-fs-5 tutor-fw-bold tutor-color-black tutor-mb-16">
                                    What Will You Learn? </h3>
                                <ul
                                    class="tutor-course-details-widget-list tutor-color-black tutor-fs-6 tutor-m-0 tutor-mt-16">
                                    <li class="tutor-d-flex tutor-mb-12">
                                        <span
                                            class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"></span>
                                        <span>A true understanding of how JavaScript works behind the scenes</span>
                                    </li>
                                    <li class="tutor-d-flex tutor-mb-12">
                                        <span
                                            class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"></span>
                                        <span>What&#039;s new in ES6: arrow functions, classes, default and rest parameters,
                                            etc.</span>
                                    </li>
                                    <li class="tutor-d-flex tutor-mb-12">
                                        <span
                                            class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"></span>
                                        <span>Practice your new skills with coding challenges (solutions included)</span>
                                    </li>
                                    <li class="tutor-d-flex tutor-mb-12">
                                        <span
                                            class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"></span>
                                        <span>Organize and structure your code using JavaScript patterns like modules</span>
                                    </li>
                                    <li class="tutor-d-flex tutor-mb-12">
                                        <span
                                            class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"></span>
                                        <span>Get friendly and fast support in the course Q&amp;A</span>
                                    </li>
                                    <li class="tutor-d-flex tutor-mb-12">
                                        <span
                                            class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"></span>
                                        <span>Downloadable lectures, code and design assets for all projects</span>
                                    </li>
                                </ul>
                            </div>


                        </div>

                        <div class="tab-pane fade" id="nav-curriculum" role="tabpanel"
                            aria-labelledby="nav-curriculum-tab" tabindex="0">
                            <div class="cd_curriculum">
                                <div class="courser_topics">
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab"
                            tabindex="0">
                            <div class="cd_rating">

                                <div class="tutor-pagination-wrapper-replaceable">
                                    <h3 class="tutor-fs-5 tutor-fw-bold tutor-color-black tutor-mb-24">
                                        Avaliação dos Alunos </h3>

                                    <div class="tutor-card tutor-review-card">
                                        <div class="tutor-review-summary tutor-p-24 tutor-p-lg-40">
                                            <div class="tutor-row tutor-gx-xl-5 tutor-align-center">
                                                <div class="tutor-col-lg-auto tutor-text-center tutor-mb-16 tutor-mb-lg-0">
                                                    <div class="tutor-review-summary-average-rating tutor-mb-20">
                                                        4.0 </div>

                                                    <div>
                                                        <div class="tutor-d-inline-block">
                                                            <div class="tutor-ratings tutor-ratings-lg">
                                                                <div class="tutor-ratings-stars">
                                                                    <span class="tutor-icon-star-bold"></span><span
                                                                        class="tutor-icon-star-bold"></span><span
                                                                        class="tutor-icon-star-bold"></span><span
                                                                        class="tutor-icon-star-bold"></span><span
                                                                        class="tutor-icon-star-line"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="tutor-fs-6 tutor-color-secondary tutor-mt-12 tutor-total-rating-count">
                                                        Total 2 Ratings </div>
                                                </div>

                                                <div class="tutor-col-lg">
                                                    <div class="tutor-review-summary-ratings">
                                                        <div
                                                            class="tutor-row tutor-align-center tutor-review-summary-rating">
                                                            <div class="tutor-col-auto">
                                                                <div class="tutor-ratings">
                                                                    <div class="tutor-ratings-stars">
                                                                        <span class="tutor-icon-star-line"
                                                                            area-hidden="true"></span>
                                                                    </div>
                                                                    <div class="tutor-ratings-average">
                                                                        5 </div>
                                                                </div>
                                                            </div>

                                                            <div class="tutor-col">
                                                                <div class="tutor-progress-bar tutor-ratings-progress-bar"
                                                                    style="--tutor-progress-value: 50%">
                                                                    <span class="tutor-progress-value"
                                                                        area-hidden="true"></span>
                                                                </div>
                                                            </div>

                                                            <div class="tutor-col-4 tutor-col-lg-3">
                                                                <span
                                                                    class="tutor-fs-6 tutor-color-secondary tutor-individual-star-rating">
                                                                    1 Rating </span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="tutor-row tutor-align-center tutor-review-summary-rating">
                                                            <div class="tutor-col-auto">
                                                                <div class="tutor-ratings">
                                                                    <div class="tutor-ratings-stars">
                                                                        <span class="tutor-icon-star-line"
                                                                            area-hidden="true"></span>
                                                                    </div>
                                                                    <div class="tutor-ratings-average">
                                                                        4 </div>
                                                                </div>
                                                            </div>

                                                            <div class="tutor-col">
                                                                <div class="tutor-progress-bar tutor-ratings-progress-bar"
                                                                    style="--tutor-progress-value: 0%">
                                                                    <span class="tutor-progress-value"
                                                                        area-hidden="true"></span>
                                                                </div>
                                                            </div>

                                                            <div class="tutor-col-4 tutor-col-lg-3">
                                                                <span
                                                                    class="tutor-fs-6 tutor-color-secondary tutor-individual-star-rating">
                                                                    0 Rating </span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="tutor-row tutor-align-center tutor-review-summary-rating">
                                                            <div class="tutor-col-auto">
                                                                <div class="tutor-ratings">
                                                                    <div class="tutor-ratings-stars">
                                                                        <span class="tutor-icon-star-line"
                                                                            area-hidden="true"></span>
                                                                    </div>
                                                                    <div class="tutor-ratings-average">
                                                                        3 </div>
                                                                </div>
                                                            </div>

                                                            <div class="tutor-col">
                                                                <div class="tutor-progress-bar tutor-ratings-progress-bar"
                                                                    style="--tutor-progress-value: 50%">
                                                                    <span class="tutor-progress-value"
                                                                        area-hidden="true"></span>
                                                                </div>
                                                            </div>

                                                            <div class="tutor-col-4 tutor-col-lg-3">
                                                                <span
                                                                    class="tutor-fs-6 tutor-color-secondary tutor-individual-star-rating">
                                                                    1 Rating </span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="tutor-row tutor-align-center tutor-review-summary-rating">
                                                            <div class="tutor-col-auto">
                                                                <div class="tutor-ratings">
                                                                    <div class="tutor-ratings-stars">
                                                                        <span class="tutor-icon-star-line"
                                                                            area-hidden="true"></span>
                                                                    </div>
                                                                    <div class="tutor-ratings-average">
                                                                        2 </div>
                                                                </div>
                                                            </div>

                                                            <div class="tutor-col">
                                                                <div class="tutor-progress-bar tutor-ratings-progress-bar"
                                                                    style="--tutor-progress-value: 0%">
                                                                    <span class="tutor-progress-value"
                                                                        area-hidden="true"></span>
                                                                </div>
                                                            </div>

                                                            <div class="tutor-col-4 tutor-col-lg-3">
                                                                <span
                                                                    class="tutor-fs-6 tutor-color-secondary tutor-individual-star-rating">
                                                                    0 Rating </span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="tutor-row tutor-align-center tutor-review-summary-rating">
                                                            <div class="tutor-col-auto">
                                                                <div class="tutor-ratings">
                                                                    <div class="tutor-ratings-stars">
                                                                        <span class="tutor-icon-star-line"
                                                                            area-hidden="true"></span>
                                                                    </div>
                                                                    <div class="tutor-ratings-average">
                                                                        1 </div>
                                                                </div>
                                                            </div>

                                                            <div class="tutor-col">
                                                                <div class="tutor-progress-bar tutor-ratings-progress-bar"
                                                                    style="--tutor-progress-value: 0%">
                                                                    <span class="tutor-progress-value"
                                                                        area-hidden="true"></span>
                                                                </div>
                                                            </div>

                                                            <div class="tutor-col-4 tutor-col-lg-3">
                                                                <span
                                                                    class="tutor-fs-6 tutor-color-secondary tutor-individual-star-rating">
                                                                    0 Rating </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tutor-hr" area-hidden="true"></div>

                                        <div class="tutor-reviews tutor-card-list tutor-pagination-content-appendable">
                                            <div
                                                class="tutor-review-list-item tutor-card-list-item tutor-p-24 tutor-p-lg-40">
                                                <div class="tutor-row">
                                                    <div class="tutor-col-lg-3 tutor-mb-16 tutor-mb-lg-0">
                                                        <div class="tutor-mb-12">
                                                        </div>

                                                        <div class="tutor-reviewer-name tutor-fs-6 tutor-mb-4">
                                                            <a href="../../profile/user_name/index2ccb.html?view=student"
                                                                class="tutor-color-black">
                                                            </a>
                                                        </div>

                                                        <div class="tutor-reviewed-on tutor-fs-7 tutor-color-muted">
                                                            7 years ago </div>
                                                    </div>

                                                    <div class="tutor-col-lg-9">

                                                        <div class="tutor-ratingstutor-is-sm tutor-ratings-">
                                                            <div class="tutor-ratings-stars">
                                                                <span class="tutor-icon-star-bold"></span><span
                                                                    class="tutor-icon-star-bold"></span><span
                                                                    class="tutor-icon-star-bold"></span><span
                                                                    class="tutor-icon-star-line"></span><span
                                                                    class="tutor-icon-star-line"></span>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="tutor-fs-7 tutor-color-secondary tutor-mt-12 tutor-review-comment">
                                                            Amazing Tutor, Many thanks for the course. You have explained
                                                            the course so nicely. I thoroughly enjoyed the course and will
                                                            be looking forward to your new courses. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="tutor-review-list-item tutor-card-list-item tutor-p-24 tutor-p-lg-40">
                                                <div class="tutor-row">
                                                    <div class="tutor-col-lg-3 tutor-mb-16 tutor-mb-lg-0">
                                                        <div class="tutor-mb-12">
                                                        </div>

                                                        <div class="tutor-reviewer-name tutor-fs-6 tutor-mb-4">
                                                            <a href="../../profile/user_name/index2ccb.html?view=student"
                                                                class="tutor-color-black">
                                                            </a>
                                                        </div>

                                                        <div class="tutor-reviewed-on tutor-fs-7 tutor-color-muted">
                                                            7 years ago </div>
                                                    </div>

                                                    <div class="tutor-col-lg-9">

                                                        <div class="tutor-ratingstutor-is-sm tutor-ratings-">
                                                            <div class="tutor-ratings-stars">
                                                                <span class="tutor-icon-star-bold"></span><span
                                                                    class="tutor-icon-star-bold"></span><span
                                                                    class="tutor-icon-star-bold"></span><span
                                                                    class="tutor-icon-star-bold"></span><span
                                                                    class="tutor-icon-star-bold"></span>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="tutor-fs-7 tutor-color-secondary tutor-mt-12 tutor-review-comment">
                                                            This is the best course online that you can get. I learn online
                                                            everything about web development, but this is amazing. Thank's
                                                            Jonas, you are my Hero. You give me a good knowledge of Html,
                                                            CSS and Javascript. </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tutor-row tutor-mt-40 tutor-mb-20">
                                        <div class="tutor-col">
                                        </div>

                                        <div class="tutor-col-auto">
                                            <nav data-tutor_pagination_ajax="{&quot;action&quot;:&quot;tutor_single_course_reviews_load_more&quot;,&quot;course_id&quot;:2094}"
                                                data-tutor_pagination_layout="{&quot;type&quot;:&quot;load_more&quot;,&quot;load_more_text&quot;:&quot;Load More&quot;}"
                                                class=""></nav>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-instructor" role="tabpanel"
                            aria-labelledby="nav-instructor-tab" tabindex="0">
                            <h3 class="tutor-fs-5 tutor-fw-bold tutor-color-black tutor-mb-24">
                                Formador </h3>

                            <div class="cd_instructor">
                                <div class="cdin_image">

                                    <img width="361" height="377" src="../../wp-content/uploads/2025/03/3-4.jpg"
                                        class="attachment-full size-full" alt="" decoding="async"
                                        srcset="https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-4.jpg 361w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-4-287x300.jpg 287w"
                                        sizes="(max-width: 361px) 100vw, 361px" />
                                    <ul>
                                        <li>
                                            <a href="https://getmasum.com/themes-wp/edplus"> <i
                                                    class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://getmasum.com/themes-wp/edplus"> <i
                                                    class="fa-brands fa-x-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://getmasum.com/themes-wp/edplus"> <i
                                                    class="fa-brands fa-linkedin-in"></i></a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="cdin_content">
                                    <h4><a href="../../profile/edplus/indexd527.html?view=instructor">Masum Billah</a></h4>
                                    <span>
                                        Web Desinger </span>

                                    <p>Duis aute irure dolor in reprehenderit in volupta velit esse cillum dolore eu fugiat
                                        nulla.</p>
                                    <div class="cdin_meta">
                                        <div class="cdin_meta_item"><i class="fa-solid fa-graduation-cap"></i> 27 Students
                                        </div>
                                        <div class="cdin_meta_item"><i class='fa-solid fa-file-circle-check'></i> 32
                                            Courses</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>


                <div class="col-xl-4 wow fadeIn">
                    <div class="course-sidebar">
                        <div class="cs_top">


                            <div class="tutor-card tutor-card-md tutor-sidebar-card">
                                <div class="tutor-card-body">
                                    <div class="tutor-course-single-pricing">
                                        <span class="tutor-fs-4 tutor-fw-bold tutor-color-black">
                                            Inscrever-se </span>
                                    </div>

                                    <div class="tutor-course-single-btn-group tutor-course-entry-box-login"
                                        data-login_url="">
                                        <form class="tutor-enrol-course-form" method="post">
                                            <input type="hidden" id="_tutor_nonce" name="_tutor_nonce"
                                                value="942283c3eb" /><input type="hidden" name="_wp_http_referer"
                                                value="/edplus/courses/the-complete-javascript-course-2019-build-real-projects/" />
                                            <input type="hidden" name="tutor_course_id" value="2094">
                                            <input type="hidden" name="tutor_course_action"
                                                value="_tutor_course_enroll_now">
                                            <button type="submit"
                                                class="tutor-btn tutor-btn-primary tutor-btn-lg tutor-btn-block tutor-mt-24 tutor-enroll-course-button ">
                                                Aplicar </button>
                                        </form>
                                    </div>

                                    <div class="tutor-fs-7 tutor-color-muted tutor-mt-20 tutor-text-center">
                                         Inscrever-se neste curso </div>
                                </div>
                                <!-- Course Info -->
                                <div class="tutor-card-footer ">
                                    <ul class="tutor-ul">
                                        <li class="tutor-d-flex ">
                                            <span class="tutor-icon-level tutor-color-black tutor-mt-4 tutor-mr-12"
                                                aria-labelledby="Level"></span>
                                            <span class="tutor-fs-6 tutor-color-secondary">
                                                Intermediate </span>
                                        </li>
                                        <li class="tutor-d-flex tutor-mt-12 ">
                                            <span class="tutor-icon-mortarboard tutor-color-black tutor-mt-4 tutor-mr-12"
                                                aria-labelledby="Total Enrolled"></span>
                                            <span class="tutor-fs-6 tutor-color-secondary">
                                                0 Total Enrolled </span>
                                        </li>
                                        <li class="tutor-d-flex tutor-mt-12 ">
                                            <span class="tutor-icon-clock-line tutor-color-black tutor-mt-4 tutor-mr-12"
                                                aria-labelledby="Duration"></span>
                                            <span class="tutor-fs-6 tutor-color-secondary">
                                                <span class="tutor-meta-level"> 18</span><span
                                                    class="tutor-meta-value tutor-color-secondary tutor-mr-4">
                                                    hours</span><span class="tutor-meta-level"> 20</span><span
                                                    class="tutor-meta-value tutor-color-secondary tutor-mr-4">
                                                    minutes</span> Duration </span>
                                        </li>
                                        <li class="tutor-d-flex tutor-mt-12 ">
                                            <span class="tutor-icon-refresh-o tutor-color-black tutor-mt-4 tutor-mr-12"
                                                aria-labelledby="Last Updated"></span>
                                            <span class="tutor-fs-6 tutor-color-secondary">
                                                December 2, 2025 Last Updated </span>
                                        </li>
                                        <li class="tutor-d-flex tutor-mt-12 tutor-course-certificate-meta">
                                            <span class="tutor-icon-ribbon-o tutor-color-black tutor-mt-4 tutor-mr-12"
                                                aria-labelledby="Certificate"></span>
                                            <span class="tutor-fs-6 tutor-color-secondary">
                                                Certificate of completion </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tutor-modal tutor-login-modal">
                                <div class="tutor-modal-overlay"></div>
                                <div class="tutor-modal-window tutor-modal-window-sm">
                                    <div class="tutor-modal-content tutor-modal-content-white">
                                        <button class="tutor-iconic-btn tutor-modal-close-o" data-tutor-modal-close>
                                            <span class="tutor-icon-times" area-hidden="true"></span>
                                        </button>

                                        <div class="tutor-modal-body">
                                            <div class="tutor-py-48">
                                                <div class="tutor-fs-4 tutor-fw-medium tutor-color-black tutor-mb-32">Hi,
                                                    Welcome back!</div>
                                                <form id="tutor-login-form" method="post">
                                                    <input type="hidden" name="tutor_course_enroll_attempt"
                                                        value="2094">
                                                    <input type="hidden" id="_tutor_nonce" name="_tutor_nonce"
                                                        value="942283c3eb" /><input type="hidden"
                                                        name="_wp_http_referer"
                                                        value="/edplus/courses/the-complete-javascript-course-2019-build-real-projects/" />
                                                    <input type="hidden" name="tutor_action" value="tutor_user_login" />
                                                    <input type="hidden" name="redirect_to" value="index.html" />

                                                    <div class="tutor-mb-20">
                                                        <input type="text" class="tutor-form-control"
                                                            placeholder="Username or Email Address" name="log"
                                                            value="" size="20" required />
                                                    </div>

                                                    <div class="tutor-mb-32">
                                                        <input type="password" class="tutor-form-control"
                                                            placeholder="Password" name="pwd" value=""
                                                            size="20" required />
                                                    </div>

                                                    <div class="tutor-login-error"></div>
                                                    <input type="hidden" name="timezone" value="+00:00" />
                                                    <script>
                                                        document.addEventListener('DOMContentLoaded', function() {
                                                            const timezone = document.querySelector('input[name="timezone"]');
                                                            if (timezone) {
                                                                const tz = Intl.DateTimeFormat().resolvedOptions().timeZone;
                                                                timezone.value = tz
                                                            }
                                                        });
                                                    </script>
                                                    <div
                                                        class="tutor-d-flex tutor-justify-between tutor-align-center tutor-mb-40">
                                                        <div class="tutor-form-check">
                                                            <input id="tutor-login-agmnt-1" type="checkbox"
                                                                class="tutor-form-check-input tutor-bg-black-40"
                                                                name="rememberme" value="forever" />
                                                            <label for="tutor-login-agmnt-1"
                                                                class="tutor-fs-7 tutor-color-muted">
                                                                Keep me signed in </label>
                                                        </div>
                                                        <a href="../../dashboard/retrieve-password/index.html"
                                                            class="tutor-btn tutor-btn-ghost">
                                                            Forgot Password? </a>
                                                    </div>

                                                    <button type="submit"
                                                        class="tutor-btn tutor-btn-primary tutor-btn-block">
                                                        Sign In </button>

                                                    <div
                                                        class="tutor-text-center tutor-fs-6 tutor-color-secondary tutor-mt-20">
                                                        Don&#039;t have an account?&nbsp;
                                                        <a href="../../student-registration/index2a52.html?redirect_to=https://wpdemothemes.com/edplus/courses/the-complete-javascript-course-2019-build-real-projects/&amp;enrol_course_id=2094"
                                                            class="tutor-btn tutor-btn-link">
                                                            Register Now </a>
                                                    </div>
                                                </form>
                                                <script>
                                                    document.addEventListener('DOMContentLoaded', function() {
                                                        var {
                                                            __
                                                        } = wp.i18n;
                                                        var loginModal = document.querySelector('.tutor-modal.tutor-login-modal');
                                                        var errors = [];
                                                        if (loginModal && errors.length) {
                                                            loginModal.classList.add('tutor-is-active');
                                                        }
                                                    });
                                                </script>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tutor-course-details-widget">
                            <h3
                                class="tutor-course-details-widget-title tutor-fs-5 tutor-color-black tutor-fw-bold tutor-mb-16">
                                Material Includes </h3>
                            <ul class="tutor-course-details-widget-list tutor-fs-6 tutor-color-black">
                                <li class="tutor-d-flex tutor-mb-12">
                                    <span
                                        class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"
                                        area-hidden="true"></span>
                                    <span>18 hours on-demand video</span>
                                </li>
                                <li class="tutor-d-flex tutor-mb-12">
                                    <span
                                        class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"
                                        area-hidden="true"></span>
                                    <span>10 articles</span>
                                </li>
                                <li class="tutor-d-flex tutor-mb-12">
                                    <span
                                        class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"
                                        area-hidden="true"></span>
                                    <span>1 downloadable resource</span>
                                </li>
                                <li class="tutor-d-flex tutor-mb-12">
                                    <span
                                        class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"
                                        area-hidden="true"></span>
                                    <span>Full lifetime access</span>
                                </li>
                                <li class="tutor-d-flex tutor-mb-12">
                                    <span
                                        class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"
                                        area-hidden="true"></span>
                                    <span>Access on mobile and TV</span>
                                </li>
                                <li class="tutor-d-flex tutor-mb-12">
                                    <span
                                        class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"
                                        area-hidden="true"></span>
                                    <span>Certificate of Completion</span>
                                </li>
                            </ul>
                        </div>

                        <div class="tutor-course-details-widget">
                            <h3
                                class="tutor-course-details-widget-title tutor-fs-5 tutor-color-black tutor-fw-bold tutor-mb-16">
                                Requirements </h3>
                            <ul class="tutor-course-details-widget-list tutor-fs-6 tutor-color-black">
                                <li class="tutor-d-flex tutor-mb-12"><span
                                        class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"
                                        area-hidden="true"></span><span>No coding experience is necessary to take this
                                        course! I take you from beginner to expert!</span></li>
                                <li class="tutor-d-flex tutor-mb-12"><span
                                        class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"
                                        area-hidden="true"></span><span>Any computer and OS will work — Windows, macOS or
                                        Linux. We will set up your text editor the course.</span></li>
                                <li class="tutor-d-flex tutor-mb-12"><span
                                        class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"
                                        area-hidden="true"></span><span>A basic understanding of HTML and CSS is a plus,
                                        but not a must! The course includes a 5-minutes HTML and CSS crash course.</span>
                                </li>
                            </ul>
                        </div>


                        <div class="tutor-course-details-widget">
                            <h3
                                class="tutor-course-details-widget-title tutor-fs-5 tutor-color-black tutor-fw-bold tutor-mb-16">
                                Material Includes </h3>
                            <ul class="tutor-course-details-widget-list tutor-fs-6 tutor-color-black">
                                <li class="tutor-d-flex tutor-mb-12">
                                    <span
                                        class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"
                                        area-hidden="true"></span>
                                    <span>18 hours on-demand video</span>
                                </li>
                                <li class="tutor-d-flex tutor-mb-12">
                                    <span
                                        class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"
                                        area-hidden="true"></span>
                                    <span>10 articles</span>
                                </li>
                                <li class="tutor-d-flex tutor-mb-12">
                                    <span
                                        class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"
                                        area-hidden="true"></span>
                                    <span>1 downloadable resource</span>
                                </li>
                                <li class="tutor-d-flex tutor-mb-12">
                                    <span
                                        class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"
                                        area-hidden="true"></span>
                                    <span>Full lifetime access</span>
                                </li>
                                <li class="tutor-d-flex tutor-mb-12">
                                    <span
                                        class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"
                                        area-hidden="true"></span>
                                    <span>Access on mobile and TV</span>
                                </li>
                                <li class="tutor-d-flex tutor-mb-12">
                                    <span
                                        class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"
                                        area-hidden="true"></span>
                                    <span>Certificate of Completion</span>
                                </li>
                            </ul>
                        </div>
                        <div class="tutor-course-details-widget">
                            <h3
                                class="tutor-course-details-widget-title tutor-fs-5 tutor-fw-bold tutor-color-black tutor-mb-16">
                                Tags </h3>
                            <div class="tutor-course-details-widget-tags">
                                <ul class="tutor-tag-list">
                                    <li><a href='../../course-tag/app-development/index.html'> App Development </a></li>
                                    <li><a href='../../course-tag/javascript/index.html'> JavaScript </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="tutor-course-details-widget">
                            <h3
                                class="tutor-course-details-widget-title tutor-fs-5 tutor-color-black tutor-fw-bold tutor-mb-16">
                                Audience </h3>
                            <ul class="tutor-course-details-widget-list tutor-fs-6 tutor-color-black">
                                <li class="tutor-d-flex tutor-mb-12">
                                    <span
                                        class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"
                                        area-hidden="true"></span>
                                    <span>Take this course if you want to gain a deep understanding of the most popular
                                        programming language in the world: JavaScript.</span>
                                </li>
                                <li class="tutor-d-flex tutor-mb-12">
                                    <span
                                        class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"
                                        area-hidden="true"></span>
                                    <span>Take this course if you have taken other JavaScript courses but: 1) still
                                        don&#039;t really understand JavaScript, or 2) still don&#039;t feel confident to
                                        code real-world apps. This course is perfect for you!</span>
                                </li>
                                <li class="tutor-d-flex tutor-mb-12">
                                    <span
                                        class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"
                                        area-hidden="true"></span>
                                    <span>Take this course if you&#039;re interested in using popular libraries/frameworks
                                        like React, Angular or Node.</span>
                                </li>
                                <li class="tutor-d-flex tutor-mb-12">
                                    <span
                                        class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"
                                        area-hidden="true"></span>
                                    <span>Take this course if you want to get started with programming in general:
                                        JavaScript is a great language to learn how to code.</span>
                                </li>
                            </ul>
                        </div>

                        <div class="text-center">


                            <a data-tutor-modal-target="tutor-course-share-opener" href="#" class="cshare_btn">
                                <i class='bx bx-share-alt me-2'></i></span> Share This Course</a>
                            <div id="tutor-course-share-opener" class="tutor-modal">
                                <span class="tutor-modal-overlay"></span>
                                <div class="tutor-modal-window">
                                    <div class="tutor-modal-content tutor-modal-content-white">
                                        <button class="tutor-iconic-btn tutor-modal-close-o" data-tutor-modal-close>
                                            <span class="tutor-icon-times" area-hidden="true"></span>
                                        </button>
                                        <div class="tutor-modal-body">
                                            <div class="tutor-fs-5 tutor-fw-medium tutor-color-black tutor-mb-16">
                                                Share Course </div>
                                            <div class="tutor-fs-7 tutor-color-secondary tutor-mb-12">
                                                Page Link </div>
                                            <div class="tutor-mb-32">
                                                <input class="tutor-form-control"
                                                    value="https://wpdemothemes.com/edplus/courses/the-complete-javascript-course-2019-build-real-projects/" />
                                            </div>
                                            <div>
                                                <div class="tutor-color-black tutor-fs-6 tutor-fw-medium tutor-mb-16">
                                                    Share On Social Media </div>
                                                <div class="tutor-social-share-wrap"
                                                    data-social-share-config="{&quot;title&quot;:&quot;The Complete JavaScript Course 2019&quot;,&quot;text&quot;:&quot;Do you want to learn the number #1 programming language that powers the internet? Are you tired of wasting your time and money on random youtube videos or JavaScript courses that are either too simple, or too difficult to follow? Or are you struggling to deeply understand and apply JavaScript to real projects? If your answer is a big YES... Then this is exactly the course you are looking for!&quot;,&quot;image&quot;:&quot;https:\/\/wpdemothemes.com\/edplus\/wp-content\/uploads\/2019\/05\/course1-1-1.jpg&quot;}">
                                                    <button class="tutor_share s_facebook" style="background:#3877EA"><i
                                                            class="tutor-valign-middle tutor-icon-brand-facebook"></i>
                                                        <span></span>
                                                    </button><button class="tutor_share s_twitter"
                                                        style="background:#000000"><i
                                                            class="tutor-valign-middle tutor-icon-brand-x-twitter"></i>
                                                        <span></span>
                                                    </button><button class="tutor_share s_linkedin"
                                                        style="background:#3967B6"><i
                                                            class="tutor-valign-middle tutor-icon-brand-linkedin"></i>
                                                        <span></span>
                                                    </button>
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

            <div class="related-courses">
                <h3 class="created-title mb-4">
                    Cursos relacionados
                </h3>
                <div class="relcourse_slider owl-carousel position-relative">
                    <div class="single_course">
                        <div class="course_img">
                            <div class="ccategory">
                                <a
                                    href="../../course-category/data-science/index3a21.html?tutor-course-filter-category=73"><i
                                        class="ph ph-folder-open"></i> Data Science</a>


                            </div>
                            <img width="690" height="430" src="../../wp-content/uploads/2025/03/6.jpg"
                                class="attachment-edplus_course size-edplus_course wp-post-image" alt=""
                                decoding="async"
                                srcset="https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6.jpg 690w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6-600x374.jpg 600w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6-300x187.jpg 300w"
                                sizes="(max-width: 690px) 100vw, 690px" /> <a
                                href="../../../../www.youtube.com/watch9a6e.html?v=yGDwk4z9EEg" class="cvbtn"
                                data-source="youtube">
                                <i class="ph ph-video-camera"></i>
                            </a>
                        </div>

                        <div class="course_content">
                            <div class="crating_number">
                                <i class="fa-solid fa-star"></i>
                                <strong>4.00</strong> (2 Rating)
                            </div>

                            <h3>
                                <a href="../interior-design-concepts-masterclass-3/index.html">
                                    Interior design concepts Masterclass </a>
                            </h3>

                            <div class="cmeta d-flex gap-5">
                                <div class="single_meta">
                                    <i class="fa-regular fa-user"></i> 2 Students
                                </div>

                                <div class="single_meta">
                                    <i class="fa-solid fa-book"></i> 0 Lessons
                                </div>


                            </div>

                            <div class="cbtm">
                                <div class="c_price float-start">
                                    <div class="price">
                                        <del aria-hidden="true"><span class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">&#036;</span>65.00</span></del>
                                        <span class="screen-reader-text">Original price was: &#036;65.00.</span><ins
                                            aria-hidden="true"><span class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">&#036;</span>55.00</span></ins><span
                                            class="screen-reader-text">Current price is: &#036;55.00.</span>
                                    </div>

                                </div>
                                <div class="c_author float-end"><img alt=''
                                        src='../../wp-content/uploads/2025/03/3-4.jpg'
                                        srcset='https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-4.jpg 2x'
                                        class='avatar avatar-30 photo' height='30' width='30' decoding='async' />
                                    <a href="../../profile/edplus/indexd527.html?view=instructor">Masum Billah</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="single_course">
                        <div class="course_img">
                            <div class="ccategory">
                                <a
                                    href="../../course-category/finance-account/index0c9d.html?tutor-course-filter-category=75"><i
                                        class="ph ph-folder-open"></i> Finance Account</a>


                            </div>
                            <img width="690" height="430" src="../../wp-content/uploads/2025/03/6.jpg"
                                class="attachment-edplus_course size-edplus_course wp-post-image" alt=""
                                decoding="async"
                                srcset="https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6.jpg 690w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6-600x374.jpg 600w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6-300x187.jpg 300w"
                                sizes="(max-width: 690px) 100vw, 690px" /> <a
                                href="../../../../www.youtube.com/watch9a6e.html?v=yGDwk4z9EEg" class="cvbtn"
                                data-source="youtube">
                                <i class="ph ph-video-camera"></i>
                            </a>
                        </div>

                        <div class="course_content">
                            <div class="crating_number">
                                <i class="fa-solid fa-star"></i>
                                <strong>4.00</strong> (2 Rating)
                            </div>

                            <h3>
                                <a href="../seo-as-the-core-of-your-new-business-venture/index.html">
                                    SEO as the Core of Your New Business Venture </a>
                            </h3>

                            <div class="cmeta d-flex gap-5">
                                <div class="single_meta">
                                    <i class="fa-regular fa-user"></i> 0 Students
                                </div>

                                <div class="single_meta">
                                    <i class="fa-solid fa-book"></i> 15 Lessons
                                </div>


                            </div>

                            <div class="cbtm">
                                <div class="c_price float-start">
                                    <div class="price">
                                        <del aria-hidden="true"><span class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">&#036;</span>450.00</span></del>
                                        <span class="screen-reader-text">Original price was: &#036;450.00.</span><ins
                                            aria-hidden="true"><span class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">&#036;</span>400.00</span></ins><span
                                            class="screen-reader-text">Current price is: &#036;400.00.</span>
                                    </div>

                                </div>
                                <div class="c_author float-end"><img alt=''
                                        src='../../wp-content/uploads/2025/03/3-4.jpg'
                                        srcset='https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-4.jpg 2x'
                                        class='avatar avatar-30 photo' height='30' width='30' decoding='async' />
                                    <a href="../../profile/edplus/indexd527.html?view=instructor">Masum Billah</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="single_course">
                        <div class="course_img">
                            <div class="ccategory">
                                <a
                                    href="../../course-category/mobile-application/indexc8a6.html?tutor-course-filter-category=74"><i
                                        class="ph ph-folder-open"></i> Mobile Application</a>


                            </div>
                            <img width="690" height="430" src="../../wp-content/uploads/2025/03/3-2.jpg"
                                class="attachment-edplus_course size-edplus_course wp-post-image" alt=""
                                decoding="async"
                                srcset="https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-2.jpg 690w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-2-600x374.jpg 600w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-2-300x187.jpg 300w"
                                sizes="(max-width: 690px) 100vw, 690px" /> <a
                                href="../../../../www.youtube.com/watch9a6e.html?v=yGDwk4z9EEg" class="cvbtn"
                                data-source="youtube">
                                <i class="ph ph-video-camera"></i>
                            </a>
                        </div>

                        <div class="course_content">
                            <div class="crating_number">
                                <i class="fa-solid fa-star"></i>
                                <strong>4.50</strong> (2 Rating)
                            </div>

                            <h3>
                                <a href="../the-ultimate-guide-to-building-a-restful-api-3/index.html">
                                    The Ultimate Guide to Building a RESTful API </a>
                            </h3>

                            <div class="cmeta d-flex gap-5">
                                <div class="single_meta">
                                    <i class="fa-regular fa-user"></i> 0 Students
                                </div>

                                <div class="single_meta">
                                    <i class="fa-solid fa-book"></i> 0 Lessons
                                </div>


                            </div>

                            <div class="cbtm">
                                <div class="c_price float-start">
                                    <div class="price">
                                        <del aria-hidden="true"><span class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">&#036;</span>500.00</span></del>
                                        <span class="screen-reader-text">Original price was: &#036;500.00.</span><ins
                                            aria-hidden="true"><span class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">&#036;</span>430.00</span></ins><span
                                            class="screen-reader-text">Current price is: &#036;430.00.</span>
                                    </div>

                                </div>
                                <div class="c_author float-end"><img alt=''
                                        src='../../wp-content/uploads/2025/03/3-4.jpg'
                                        srcset='https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-4.jpg 2x'
                                        class='avatar avatar-30 photo' height='30' width='30' decoding='async' />
                                    <a href="../../profile/edplus/indexd527.html?view=instructor">Masum Billah</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="single_course">
                        <div class="course_img">
                            <div class="ccategory">
                                <a
                                    href="../../course-category/web-development/index8c92.html?tutor-course-filter-category=76"><i
                                        class="ph ph-folder-open"></i> Web Development</a>


                            </div>
                            <img width="690" height="430" src="../../wp-content/uploads/2025/03/5.jpg"
                                class="attachment-edplus_course size-edplus_course wp-post-image" alt=""
                                decoding="async"
                                srcset="https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/5.jpg 690w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/5-600x374.jpg 600w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/5-300x187.jpg 300w"
                                sizes="(max-width: 690px) 100vw, 690px" /> <a
                                href="../../../../www.youtube.com/watch9a6e.html?v=yGDwk4z9EEg" class="cvbtn"
                                data-source="youtube">
                                <i class="ph ph-video-camera"></i>
                            </a>
                        </div>

                        <div class="course_content">
                            <div class="crating_number">
                                <i class="fa-solid fa-star"></i>
                                <strong>4.50</strong> (2 Rating)
                            </div>

                            <h3>
                                <a href="../the-complete-guide-to-build-application-3/index.html">
                                    The complete guide to build application </a>
                            </h3>

                            <div class="cmeta d-flex gap-5">
                                <div class="single_meta">
                                    <i class="fa-regular fa-user"></i> 0 Students
                                </div>

                                <div class="single_meta">
                                    <i class="fa-solid fa-book"></i> 0 Lessons
                                </div>


                            </div>

                            <div class="cbtm">
                                <div class="c_price float-start">
                                    <div class="price">
                                        <del aria-hidden="true"><span class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">&#036;</span>400.00</span></del>
                                        <span class="screen-reader-text">Original price was: &#036;400.00.</span><ins
                                            aria-hidden="true"><span class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">&#036;</span>350.00</span></ins><span
                                            class="screen-reader-text">Current price is: &#036;350.00.</span>
                                    </div>

                                </div>
                                <div class="c_author float-end"><img alt=''
                                        src='../../wp-content/uploads/2025/03/3-4.jpg'
                                        srcset='https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-4.jpg 2x'
                                        class='avatar avatar-30 photo' height='30' width='30' decoding='async' />
                                    <a href="../../profile/edplus/indexd527.html?view=instructor">Masum Billah</a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Courses -->

@endsection
