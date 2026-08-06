@extends('layouts._site.main')
@section('title', 'Todos Cursos')
@section('content')

    <!-- Start Main Banner -->
    <section class="main-banner"
        style="background-image: url({{ url('site/wp-content/themes/edplus/assets/img/bg/banner2.jpeg') }});">
        <div class="container text-center">
            <div class="mbanner_content">
                <h2>
                    Cursos
                </h2>
                <p>
                    <a href="{{ route('site.home') }}">Pagina Inicial</a> <i class="ph ph-caret-right"></i>
                    Cursos
                </p>
            </div>
        </div>
        <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/blshape.svg') }}" alt="" class="blshape">
        <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/brshape.svg') }}" alt="" class="brshape">
    </section>
    <div class="tutor-wrap tutor-wrap-parent tutor-courses-wrap tutor-container course-archive-page section-padding"
        data-tutor_courses_meta="{&quot;course_filter&quot;:false,&quot;supported_filters&quot;:{&quot;search&quot;:&quot;search&quot;,&quot;category&quot;:&quot;category&quot;,&quot;tag&quot;:&quot;tag&quot;,&quot;difficulty_level&quot;:&quot;difficulty_level&quot;,&quot;price_type&quot;:&quot;price_type&quot;},&quot;loop_content_only&quot;:false,&quot;column_per_row&quot;:&quot;3&quot;,&quot;course_per_page&quot;:&quot;6&quot;,&quot;show_pagination&quot;:true}">
        <div class="tutor-row tutor-gx-xl-5">
            <div class="tutor-col-12">
                <div class="">
                    <br />
                </div>
                <div class="tutor-pagination-wrapper-replaceable" tutor-course-list-container>
                    <div class="tutor-course-list  tutor-grid  tutor-grid-3">
                        @foreach ($courses as $item)
                            <div class="tutor-card tutor-course-card">
                                @include('components.singleCourse', ['course' => $item])
                            </div>
                        @endforeach
                    </div>
                    <nav class="tutor-pagination tutor-mt-40 "
                        data-tutor_pagination_ajax="{&quot;loading_container&quot;:&quot;.tutor-course-filter-loop-container&quot;,&quot;action&quot;:&quot;tutor_course_filter_ajax&quot;,&quot;course_per_page&quot;:&quot;6&quot;,&quot;column_per_row&quot;:&quot;3&quot;}"
                        data-push_state_link="index24ac.html?supported_filters%5Bsearch%5D=search&amp;supported_filters%5Bcategory%5D=category&amp;supported_filters%5Btag%5D=tag&amp;supported_filters%5Bdifficulty_level%5D=difficulty_level&amp;supported_filters%5Bprice_type%5D=price_type&amp;column_per_row=3&amp;course_per_page=6&amp;show_pagination=1">
                        <div class="tutor-pagination-hints">
                        </div>
                        <ul class="tutor-pagination-numbers">
                            {{ $courses->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
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
                        <div class="tutor-fs-4 tutor-fw-medium tutor-color-black tutor-mb-32">Hi, Welcome back!</div>
                        <form id="tutor-login-form" method="post">
                            <input type="hidden" id="_tutor_nonce" name="_tutor_nonce" value="942283c3eb" /><input
                                type="hidden" name="_wp_http_referer" value="/edplus/courses/" /> <input type="hidden"
                                name="tutor_action" value="tutor_user_login" />
                            <input type="hidden" name="redirect_to" value="index.html" />

                            <div class="tutor-mb-20">
                                <input type="text" class="tutor-form-control" placeholder="Username or Email Address"
                                    name="log" value="" size="20" required />
                            </div>

                            <div class="tutor-mb-32">
                                <input type="password" class="tutor-form-control" placeholder="Password" name="pwd"
                                    value="" size="20" required />
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
                            <div class="tutor-d-flex tutor-justify-between tutor-align-center tutor-mb-40">
                                <div class="tutor-form-check">
                                    <input id="tutor-login-agmnt-1" type="checkbox"
                                        class="tutor-form-check-input tutor-bg-black-40" name="rememberme"
                                        value="forever" />
                                    <label for="tutor-login-agmnt-1" class="tutor-fs-7 tutor-color-muted">
                                        Keep me signed in </label>
                                </div>
                                <a href="../dashboard/retrieve-password/index.html" class="tutor-btn tutor-btn-ghost">
                                    Forgot Password? </a>
                            </div>

                            <button type="submit" class="tutor-btn tutor-btn-primary tutor-btn-block">
                                Sign In </button>

                            <div class="tutor-text-center tutor-fs-6 tutor-color-secondary tutor-mt-20">
                                Don&#039;t have an account?&nbsp;
                                <a href="../student-registration/index2c2d.html?redirect_to=https://wpdemothemes.com/edplus/courses/"
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

@endsection
