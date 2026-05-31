@extends('layouts._site.main')
@section('title', 'Todos Eventos')
@section('content')

    <!-- Start Main Banner -->
    <section class="main-banner"
        style="background-image: url({{ url('site/wp-content/themes/edplus/assets/img/bg/main-banner.jpg') }});">
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
    <!-- End Main Banner -->



    <div class="tutor-wrap tutor-wrap-parent tutor-courses-wrap tutor-container course-archive-page section-padding"
        data-tutor_courses_meta="{&quot;course_filter&quot;:false,&quot;supported_filters&quot;:{&quot;search&quot;:&quot;search&quot;,&quot;category&quot;:&quot;category&quot;,&quot;tag&quot;:&quot;tag&quot;,&quot;difficulty_level&quot;:&quot;difficulty_level&quot;,&quot;price_type&quot;:&quot;price_type&quot;},&quot;loop_content_only&quot;:false,&quot;column_per_row&quot;:&quot;3&quot;,&quot;course_per_page&quot;:&quot;6&quot;,&quot;show_pagination&quot;:true}">

        <div class="tutor-row tutor-gx-xl-5">
            <div class="tutor-col-12">
                <div class="">

                    <!--
         Note: Do not remove tutor-course-filter attr. It required by _archive.js for filter function.
        !-->
                    {{-- <div style="text-align: right;" class="tutor-course-filter" tutor-course-filter>
                        <form style="display: inline-block;">
                            <select class="tutor-form-control tutor-form-select" name="course_order">
                                <option value="newest_first">
                                    Release Date (newest first) </option>
                                <option value="oldest_first">
                                    Release Date (oldest first) </option>
                                <option value="course_title_az">
                                    Course Title (a-z) </option>
                                <option value="course_title_za">
                                    Course Title (z-a) </option>
                            </select>
                        </form>
                    </div> --}}
                    <br />
                </div>
                <div class="tutor-pagination-wrapper-replaceable" tutor-course-list-container>


                    <div class="tutor-course-list  tutor-grid  tutor-grid-3">
                        @foreach ($courses as $item)
                            <div class="tutor-card tutor-course-card">
                                <div class="single_course">
                                    <div class="course_img">
                                        <div class="ccategory">
                                            <a href="{{ route('site.courses.details', ['course' => $item->slug]) }}"><i
                                                    class="ph ph-folder-open"></i> {{ $item->category->name }}</a>


                                        </div>
                                        <img fetchpriority="high" width="690" height="430"
                                            src="{{ asset('storage/' . $item->image) }}"
                                            class="attachment-edplus_course size-edplus_course wp-post-image" alt="{{ $item->name }}"
                                            decoding="async"
                                            srcset="{{ asset('storage/' . $item->image) }}"
                                            sizes="(max-width: 690px) 100vw, 690px" />
                                        <a href="{{ route('site.courses.details', ['course' => $item->slug]) }}" class="cvbtn"
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
                                            <a href="{{ route('site.courses.details', ['course' => $item->slug]) }}">
                                                {{ $item->name }} </a>
                                        </h3>

                                        <div class="cmeta d-flex gap-5">
                                            <div class="single_meta">
                                                <i class="fa-regular fa-user"></i> 2 Students
                                            </div>

                                            <div class="single_meta">
                                                <i class="fa-solid fa-book"></i> 0 Lessons
                                            </div>


                                        </div>

                                        {{-- <div class="cbtm">
                                            <div class="c_price float-start">
                                                <div class="price">
                                                    <del aria-hidden="true"><span
                                                            class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol">&#036;</span>65.00</span></del>
                                                    <span class="screen-reader-text">Original price was:
                                                        &#036;65.00.</span><ins aria-hidden="true"><span
                                                            class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol">&#036;</span>55.00</span></ins><span
                                                        class="screen-reader-text">Current price is: &#036;55.00.</span>
                                                </div>

                                            </div>
                                            <div class="c_author float-end"><img alt=''
                                                    src='{{ url('site/wp-content/uploads/2025/03/3-4.jpg') }}'
                                                    srcset='https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-4.jpg 2x'
                                                    class='avatar avatar-30 photo' height='30' width='30'
                                                    decoding='async' /> <a
                                                    href="../profile/edplus/indexd527.html?view=instructor">Masum Billah</a>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>


                            </div>
                        @endforeach
                        {{-- <div class="tutor-card tutor-course-card">
                            <div class="single_course">
                                <div class="course_img">
                                    <div class="ccategory">
                                        <a
                                            href="../course-category/finance-account/index0c9d.html?tutor-course-filter-category=75"><i
                                                class="ph ph-folder-open"></i> Finance Account</a>


                                    </div>
                                    <img fetchpriority="high" width="690" height="430"
                                        src="../wp-content/uploads/2025/03/6.jpg"
                                        class="attachment-edplus_course size-edplus_course wp-post-image" alt=""
                                        decoding="async"
                                        srcset="https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6.jpg 690w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6-600x374.jpg 600w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6-300x187.jpg 300w"
                                        sizes="(max-width: 690px) 100vw, 690px" />
                                    <a href="../../../www.youtube.com/watch9a6e.html?v=yGDwk4z9EEg" class="cvbtn"
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
                                        <a href="seo-as-the-core-of-your-new-business-venture/index.html">
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
                                                <del aria-hidden="true"><span
                                                        class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#036;</span>450.00</span></del>
                                                <span class="screen-reader-text">Original price was:
                                                    &#036;450.00.</span><ins aria-hidden="true"><span
                                                        class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#036;</span>400.00</span></ins><span
                                                    class="screen-reader-text">Current price is: &#036;400.00.</span>
                                            </div>

                                        </div>
                                        <div class="c_author float-end"><img alt=''
                                                src='../wp-content/uploads/2025/03/3-4.jpg'
                                                srcset='https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-4.jpg 2x'
                                                class='avatar avatar-30 photo' height='30' width='30'
                                                decoding='async' /> <a
                                                href="../profile/edplus/indexd527.html?view=instructor">Masum Billah</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tutor-card tutor-course-card">
                            <div class="single_course">
                                <div class="course_img">
                                    <div class="ccategory">
                                        <a
                                            href="../course-category/mobile-application/indexc8a6.html?tutor-course-filter-category=74"><i
                                                class="ph ph-folder-open"></i> Mobile Application</a>


                                    </div>
                                    <img width="690" height="430" src="../wp-content/uploads/2025/03/3-2.jpg"
                                        class="attachment-edplus_course size-edplus_course wp-post-image" alt=""
                                        decoding="async"
                                        srcset="https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-2.jpg 690w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-2-600x374.jpg 600w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-2-300x187.jpg 300w"
                                        sizes="(max-width: 690px) 100vw, 690px" />
                                    <a href="../../../www.youtube.com/watch9a6e.html?v=yGDwk4z9EEg" class="cvbtn"
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
                                        <a href="the-ultimate-guide-to-building-a-restful-api-3/index.html">
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
                                                <del aria-hidden="true"><span
                                                        class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#036;</span>500.00</span></del>
                                                <span class="screen-reader-text">Original price was:
                                                    &#036;500.00.</span><ins aria-hidden="true"><span
                                                        class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#036;</span>430.00</span></ins><span
                                                    class="screen-reader-text">Current price is: &#036;430.00.</span>
                                            </div>

                                        </div>
                                        <div class="c_author float-end"><img alt=''
                                                src='../wp-content/uploads/2025/03/3-4.jpg'
                                                srcset='https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-4.jpg 2x'
                                                class='avatar avatar-30 photo' height='30' width='30'
                                                decoding='async' /> <a
                                                href="../profile/edplus/indexd527.html?view=instructor">Masum Billah</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tutor-card tutor-course-card">
                            <div class="single_course">
                                <div class="course_img">
                                    <div class="ccategory">
                                        <a
                                            href="../course-category/web-development/index8c92.html?tutor-course-filter-category=76"><i
                                                class="ph ph-folder-open"></i> Web Development</a>


                                    </div>
                                    <img width="690" height="430" src="../wp-content/uploads/2025/03/5.jpg"
                                        class="attachment-edplus_course size-edplus_course wp-post-image" alt=""
                                        decoding="async"
                                        srcset="https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/5.jpg 690w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/5-600x374.jpg 600w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/5-300x187.jpg 300w"
                                        sizes="(max-width: 690px) 100vw, 690px" />
                                    <a href="../../../www.youtube.com/watch9a6e.html?v=yGDwk4z9EEg" class="cvbtn"
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
                                        <a href="the-complete-guide-to-build-application-3/index.html">
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
                                                <del aria-hidden="true"><span
                                                        class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#036;</span>400.00</span></del>
                                                <span class="screen-reader-text">Original price was:
                                                    &#036;400.00.</span><ins aria-hidden="true"><span
                                                        class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#036;</span>350.00</span></ins><span
                                                    class="screen-reader-text">Current price is: &#036;350.00.</span>
                                            </div>

                                        </div>
                                        <div class="c_author float-end"><img alt=''
                                                src='../wp-content/uploads/2025/03/3-4.jpg'
                                                srcset='https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-4.jpg 2x'
                                                class='avatar avatar-30 photo' height='30' width='30'
                                                decoding='async' /> <a
                                                href="../profile/edplus/indexd527.html?view=instructor">Masum Billah</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tutor-card tutor-course-card">
                            <div class="single_course">
                                <div class="course_img">
                                    <div class="ccategory">
                                        <a
                                            href="../course-category/web-development/index8c92.html?tutor-course-filter-category=76"><i
                                                class="ph ph-folder-open"></i> Web Development</a>


                                    </div>
                                    <img width="690" height="430" src="../wp-content/uploads/2025/03/5.jpg"
                                        class="attachment-edplus_course size-edplus_course wp-post-image" alt=""
                                        decoding="async"
                                        srcset="https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/5.jpg 690w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/5-600x374.jpg 600w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/5-300x187.jpg 300w"
                                        sizes="(max-width: 690px) 100vw, 690px" />
                                    <a href="../../../www.youtube.com/watch9a6e.html?v=yGDwk4z9EEg" class="cvbtn"
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
                                        <a href="the-complete-guide-to-build-application-2-2/index.html">
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
                                                <del aria-hidden="true"><span
                                                        class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#036;</span>400.00</span></del>
                                                <span class="screen-reader-text">Original price was:
                                                    &#036;400.00.</span><ins aria-hidden="true"><span
                                                        class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&#036;</span>350.00</span></ins><span
                                                    class="screen-reader-text">Current price is: &#036;350.00.</span>
                                            </div>

                                        </div>
                                        <div class="c_author float-end"><img alt=''
                                                src='../wp-content/uploads/2025/03/3-4.jpg'
                                                srcset='https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-4.jpg 2x'
                                                class='avatar avatar-30 photo' height='30' width='30'
                                                decoding='async' /> <a
                                                href="../profile/edplus/indexd527.html?view=instructor">Masum Billah</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tutor-card tutor-course-card">
                            <div class="single_course">
                                <div class="course_img">
                                    <div class="ccategory">
                                        <a
                                            href="../course-category/art-design/index45ab.html?tutor-course-filter-category=77"><i
                                                class="ph ph-folder-open"></i> Art &amp; Design</a>


                                    </div>
                                    <img fetchpriority="high" width="690" height="430"
                                        src="../wp-content/uploads/2025/03/6.jpg"
                                        class="attachment-edplus_course size-edplus_course wp-post-image" alt=""
                                        decoding="async"
                                        srcset="https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6.jpg 690w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6-600x374.jpg 600w, https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6-300x187.jpg 300w"
                                        sizes="(max-width: 690px) 100vw, 690px" />
                                    <a href="../../../www.youtube.com/watch9a6e.html?v=yGDwk4z9EEg" class="cvbtn"
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
                                        <a href="interior-design-concepts-masterclass-2-2/index.html">
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
                                            Free
                                        </div>
                                        <div class="c_author float-end"><img alt=''
                                                src='../wp-content/uploads/2025/03/3-4.jpg'
                                                srcset='https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-4.jpg 2x'
                                                class='avatar avatar-30 photo' height='30' width='30'
                                                decoding='async' /> <a
                                                href="../profile/edplus/indexd527.html?view=instructor">Masum Billah</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <nav class="tutor-pagination tutor-mt-40 "
                        data-tutor_pagination_ajax="{&quot;loading_container&quot;:&quot;.tutor-course-filter-loop-container&quot;,&quot;action&quot;:&quot;tutor_course_filter_ajax&quot;,&quot;course_per_page&quot;:&quot;6&quot;,&quot;column_per_row&quot;:&quot;3&quot;}"
                        data-push_state_link="index24ac.html?supported_filters%5Bsearch%5D=search&amp;supported_filters%5Bcategory%5D=category&amp;supported_filters%5Btag%5D=tag&amp;supported_filters%5Bdifficulty_level%5D=difficulty_level&amp;supported_filters%5Bprice_type%5D=price_type&amp;column_per_row=3&amp;course_per_page=6&amp;show_pagination=1">
                        <div class="tutor-pagination-hints">
                            <div class="tutor-fs-7 tutor-color-black-60">
                                Page
                                <span class="tutor-fs-7 tutor-fw-medium tutor-color-black">
                                    1 </span>
                                of
                                <span class="tutor-fs-7 tutor-fw-medium tutor-color-black">
                                    6 </span>
                            </div>
                        </div>
                        <ul class="tutor-pagination-numbers">
                            {{ $courses->links() }}
                            {{-- <span aria-label="Page 1" aria-current="page" class="page-numbers current">1</span>
                            <a aria-label="Page 2" class="page-numbers" href="index4a0b.html?current_page=2">2</a>
                            <a aria-label="Page 3" class="page-numbers" href="indexe938.html?current_page=3">3</a>
                            <span class="page-numbers dots">&hellip;</span>
                            <a aria-label="Page 6" class="page-numbers" href="indexca50.html?current_page=6">6</a>
                            <a class="next page-numbers" href="index4a0b.html?current_page=2"><span
                                    class="tutor-icon-angle-right"></span></a> --}}
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
