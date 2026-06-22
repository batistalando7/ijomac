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
        style="background-image: url({{ url('site/wp-content/themes/edplus/assets/img/bg/banner.png') }});">
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
                            @isset($course->teacher)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="smeta">
                                        <div class="tutor-avatar">
                                            <div class="tutor-ratio tutor-ratio-1x1"><img
                                                    src="{{ asset('storage/' . $course->teacher->photo) }}"
                                                    alt="{{ $course->teacher->name }}" />
                                            </div>
                                        </div>
                                        <div class="smeta_text">
                                            <span>Formador:</span>
                                            <p>
                                                <a
                                                    href="../../profile/edplus/indexd527.html?view=instructor">{{ $course->teacher->name }}</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endisset

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
                        </div>
                    </div><!-- End Meta -->

                    <h2 class="scourse-title">{{ $course->name }}</h2>

                    <nav class="cd_tab">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-overview-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-overview" type="button" role="tab" aria-controls="nav-overview"
                                aria-selected="true">Descrição</button>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-overview" role="tabpanel"
                            aria-labelledby="nav-overview-tab" tabindex="0">
                            <p>{{ $course->description }}</p>
                        </div>

                        <div class="tab-pane fade" id="nav-curriculum" role="tabpanel" aria-labelledby="nav-curriculum-tab"
                            tabindex="0">
                            <div class="cd_curriculum">
                                <div class="courser_topics">
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

                                    <div class="tutor-course-single-btn-group"
                                        data-login_url="">
                                        <a href="{{ route('site.courses.request', ['course' => $course]) }}"
                                            class="tutor-btn blue_btn tutor-btn-lg tutor-btn-block tutor-mt-24 tutor-enroll-course-button ">
                                            Aplicar </a>
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
                                                {{ $levels[$course->level] ?? $course->level }}
                                            </span>
                                        </li>
                                        <li class="tutor-d-flex tutor-mt-12 ">
                                            <span class="tutor-icon-clock-line tutor-color-black tutor-mt-4 tutor-mr-12"
                                                aria-labelledby="Duration"></span>
                                            <span class="tutor-fs-6 tutor-color-secondary">
                                                <span class="tutor-meta-level"> {{ $course->duration }}
                                                </span>
                                        </li>
                                        <li class="tutor-d-flex tutor-mt-12 ">
                                            <span class="tutor-icon-refresh-o tutor-color-black tutor-mt-4 tutor-mr-12"
                                                aria-labelledby="Last Updated"></span>
                                            <span class="tutor-fs-6 tutor-color-secondary">
                                                {{ $course->updated_at->format('M d, Y') }} última actualização </span>
                                        </li>
                                        <li class="tutor-d-flex tutor-mt-12 tutor-course-certificate-meta">
                                            <span class="tutor-icon-ribbon-o tutor-color-black tutor-mt-4 tutor-mr-12"
                                                aria-labelledby="Certificate"></span>
                                            <span class="tutor-fs-6 tutor-color-secondary">
                                                Certificado de conclusão </span>
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
                    </div>
                </div>
            </div>

            <div class="related-courses">
                <h3 class="created-title mb-4">
                    Cursos relacionados
                </h3>
                <div class="relcourse_slider owl-carousel position-relative">
                    @foreach ($relatedCourses as $item)
                        @include('components.singleCourse', ['course' => $item])
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- End Courses -->
@endsection
