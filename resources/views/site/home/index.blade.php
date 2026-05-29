@extends('layouts._site.main')
@section('title', 'Home | IJOMAC')
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

    <div class="page-builder-template">
        <div data-elementor-type="wp-page" data-elementor-id="22" class="elementor elementor-22"
            data-elementor-post-type="page">
            <div class="elementor-element elementor-element-3eec0a7 e-con-full e-flex e-con e-parent" data-id="3eec0a7"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-e66b92a elementor-widget elementor-widget-edplus-banner"
                    data-id="e66b92a" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-banner.default">
                    <div class="elementor-widget-container">
                        <!-- Start Home Banner -->
                        <section class="home-banner"
                            style="
                                    background-image: url({{ url('site/wp-content/uploads/2025/11/slide1.jpg') }});
                                ">
                            <div class="container position-relative">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-5 col-12 align-self-center">
                                        <div class="banner_content">
                                            <span class="wow fadeInUp" data-wow-delay=".3s"><img decoding="async"
                                                    src="{{ url('site/wp-content/themes/edplus/assets/img/icons/graduation-hat-white.svg') }}"
                                                    alt="" />Keep Learning
                                            </span>
                                            <h2 class="wow fadeInUp" data-wow-delay=".5s">
                                                Best Online Courses <br />
                                                From EdPlus
                                            </h2>

                                            <p class="wow fadeInUp" data-wow-delay=".7s">
                                                Remember to tailor the
                                                section names to fit the
                                                specific needs and <br />
                                                structure of your university
                                                website.
                                            </p>

                                            <div class="d-flex gap-4 wow fadeInUp" data-wow-delay=".9s">
                                                <a href="courses/index.html" class="blue_btn round_btn">Find Courses
                                                    <i class="ph ph-arrow-right"></i></a>

                                                <div class="brating d-flex">
                                                    <img decoding="async"
                                                        src="{{ url('site/wp-content/themes/edplus/assets/img/icons/trustpilot.svg') }}"
                                                        class="align-self-center" alt="" />
                                                    <p class="align-self-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        4.8 Rating
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-xl-6 col-lg-7 col-12 align-self-center">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-4 align-self-center">
                                                <div class="badge_wrap wow fadeInUp" data-wow-delay=".5s">
                                                    <div class="bbadge">
                                                        <img decoding="async"
                                                            src="{{ url('site/wp-content/uploads/2025/03/bbadge-icon.svg') }}"
                                                            alt="" />
                                                        <h3>
                                                            <span>250</span>
                                                            +
                                                        </h3>
                                                        <p>
                                                            Our Happy
                                                            Students
                                                        </p>
                                                    </div>

                                                    <div class="bbadge two">
                                                        <img decoding="async"
                                                            src="{{ url('site/wp-content/uploads/2025/03/bbadge-icon2.svg') }}"
                                                            alt="" />
                                                        <h3>
                                                            <span>3652</span>
                                                            +
                                                        </h3>
                                                        <p>
                                                            Finished Session
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Col -->

                                            <div class="col-lg-7 col-md-8 align-self-center wow fadeInUp"
                                                data-wow-delay=".9s">
                                                <div class="banner_courses">
                                                    <div class="single_course">
                                                        <div class="course_img">
                                                            <div class="ccategory">
                                                                <a
                                                                    href="course-category/data-science/index3a21.html?tutor-course-filter-category=73"><i
                                                                        class="ph ph-folder-open"></i>
                                                                    Data
                                                                    Science</a>
                                                            </div>
                                                            <img fetchpriority="high" decoding="async" width="690"
                                                                height="430"
                                                                src="{{ url('site/wp-content/uploads/2025/03/6.jpg') }}"
                                                                class="attachment-edplus_course size-edplus_course wp-post-image"
                                                                alt=""
                                                                srcset="
                                                                        https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6.jpg         690w,
                                                                        https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6-600x374.jpg 600w,
                                                                        https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6-300x187.jpg 300w
                                                                    "
                                                                sizes="(max-width: 690px) 100vw, 690px" />
                                                            <a href="../../www.youtube.com/watch9a6e.html?v=yGDwk4z9EEg"
                                                                class="cvbtn" data-source="youtube">
                                                                <i class="ph ph-video-camera"></i>
                                                            </a>
                                                        </div>

                                                        <div class="course_content">
                                                            <div class="crating_number">
                                                                <i class="fa-solid fa-star"></i>
                                                                4.00
                                                            </div>
                                                            <h3>
                                                                <a
                                                                    href="courses/interior-design-concepts-masterclass-3/index.html">
                                                                    Interior
                                                                    design
                                                                    concepts
                                                                    Masterclass
                                                                </a>
                                                            </h3>

                                                            <div class="cmeta d-flex gap-xxl-5 gap-4">
                                                                <div class="single_meta">
                                                                    <i class="fa-solid fa-book"></i>
                                                                    0
                                                                    Lessons
                                                                </div>

                                                                <div class="single_meta">
                                                                    <i class="fa-regular fa-clock"></i>
                                                                    02.20
                                                                    Hours
                                                                </div>
                                                            </div>

                                                            <div class="cbtm">
                                                                <div class="c_price float-start">
                                                                    <div class="price">
                                                                        <del aria-hidden="true"><span
                                                                                class="woocommerce-Price-amount amount"><span
                                                                                    class="woocommerce-Price-currencySymbol">&#036;</span>65.00</span></del>
                                                                        <span class="screen-reader-text">Original
                                                                            price
                                                                            was:
                                                                            &#036;65.00.</span><ins
                                                                            aria-hidden="true"><span
                                                                                class="woocommerce-Price-amount amount"><span
                                                                                    class="woocommerce-Price-currencySymbol">&#036;</span>55.00</span></ins><span
                                                                            class="screen-reader-text">Current
                                                                            price
                                                                            is:
                                                                            &#036;55.00.</span>
                                                                    </div>
                                                                </div>
                                                                <div class="c_author float-end">
                                                                    <img alt=""
                                                                        src="{{ url('site/wp-content/uploads/2025/03/3-4.jpg') }}"
                                                                        srcset="
                                                                                https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-4.jpg 2x
                                                                            "
                                                                        class="avatar avatar-30 photo" height="30"
                                                                        width="30" />
                                                                    <a
                                                                        href="profile/edplus/indexd527.html?view=instructor">Masum
                                                                        Billah</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Col -->
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                </div>
                                <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/b1.svg') }}"
                                    alt="" class="bshape1 aniupDown position-absolute" />

                                <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/b2.svg') }}"
                                    alt="" class="bshape2 position-absolute" />

                                <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/b3.svg') }}"
                                    alt="" class="bshape3 aniupDown position-absolute" />

                                <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/b4.svg') }}"
                                    alt="" class="bshape4 anileftRight position-absolute" />
                            </div>
                        </section>
                        <!-- End Home Banner -->
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-741c749 e-con-full e-flex e-con e-parent" data-id="741c749"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-bd5a44d elementor-widget elementor-widget-edplus-course-category"
                    data-id="bd5a44d" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-course-category.default">
                    <div class="elementor-widget-container">
                        <!-- End Course Category -->
                        <section class="course-category section-padding">
                            <div class="container">
                                <div class="section-title text-center wow fadeInUp">
                                    <span>
                                        <span class="ticon">
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/themes/edplus/assets/img/icons/title-icon.svg') }}"
                                                alt="" />
                                        </span>
                                        Top Category
                                    </span>
                                    <h2>Browse Our Top Categories</h2>
                                    <img decoding="async"
                                        src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/title.svg') }}"
                                        alt="" />
                                </div>

                                <div class="row">
                                    <div class="col-xl-4 col-md-6 col-12 wow fadeInUp">
                                        <div class="category-item">
                                            <div class="cicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/1-2.svg') }}"
                                                    alt="" />
                                            </div>
                                            <h3>3D Animation</h3>
                                            <span>2 Courses</span>
                                            <a href="course-category/3d-animation/index9782.html?tutor-course-filter-category=70"
                                                class="cbtn"><i class="ph ph-arrow-right"></i></a>
                                            <div class="cat_img"
                                                style="
                                                        background-image: url({{ url('site/wp-content/uploads/2025/03/1-2.jpg') }});
                                                    ">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-xl-4 col-md-6 col-12 wow fadeInUp">
                                        <div class="category-item">
                                            <div class="cicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/1-2.svg') }}"
                                                    alt="" />
                                            </div>
                                            <h3>Art &amp; Design</h3>
                                            <span>2 Courses</span>
                                            <a href="course-category/art-design/index45ab.html?tutor-course-filter-category=77"
                                                class="cbtn"><i class="ph ph-arrow-right"></i></a>
                                            <div class="cat_img"
                                                style="
                                                        background-image: url({{ url('site/wp-content/uploads/2025/03/2-4.jpg') }});
                                                    ">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-xl-4 col-md-6 col-12 wow fadeInUp">
                                        <div class="category-item">
                                            <div class="cicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/6.svg') }}"
                                                    alt="" />
                                            </div>
                                            <h3>Data Science</h3>
                                            <span>8 Courses</span>
                                            <a href="course-category/data-science/index3a21.html?tutor-course-filter-category=73"
                                                class="cbtn"><i class="ph ph-arrow-right"></i></a>
                                            <div class="cat_img"
                                                style="
                                                        background-image: url({{ url('site/wp-content/uploads/2025/03/3-3.jpg') }});
                                                    ">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-xl-4 col-md-6 col-12 wow fadeInUp">
                                        <div class="category-item">
                                            <div class="cicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/3-1.svg') }}"
                                                    alt="" />
                                            </div>
                                            <h3>Finance Account</h3>
                                            <span>8 Courses</span>
                                            <a href="course-category/finance-account/index0c9d.html?tutor-course-filter-category=75"
                                                class="cbtn"><i class="ph ph-arrow-right"></i></a>
                                            <div class="cat_img"
                                                style="
                                                        background-image: url({{ url('site/wp-content/uploads/2025/03/5-1.jpg') }});
                                                    ">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-xl-4 col-md-6 col-12 wow fadeInUp">
                                        <div class="category-item">
                                            <div class="cicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/8.svg') }}"
                                                    alt="" />
                                            </div>
                                            <h3>Health and Fitness</h3>
                                            <span>4 Courses</span>
                                            <a href="course-category/health-and-fitness/indexcbc4.html?tutor-course-filter-category=71"
                                                class="cbtn"><i class="ph ph-arrow-right"></i></a>
                                            <div class="cat_img"
                                                style="
                                                        background-image: url({{ url('site/wp-content/uploads/2025/03/4-3.jpg') }});
                                                    ">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-xl-4 col-md-6 col-12 wow fadeInUp">
                                        <div class="category-item">
                                            <div class="cicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/4-1.svg') }}"
                                                    alt="" />
                                            </div>
                                            <h3>Marketing</h3>
                                            <span>6 Courses</span>
                                            <a href="course-category/marketing/index737f.html?tutor-course-filter-category=72"
                                                class="cbtn"><i class="ph ph-arrow-right"></i></a>
                                            <div class="cat_img"
                                                style="
                                                        background-image: url({{ url('site/wp-content/uploads/2025/03/6-1.jpg') }});
                                                    ">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-xl-4 col-md-6 col-12 wow fadeInUp">
                                        <div class="category-item">
                                            <div class="cicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/5-1.svg') }}"
                                                    alt="" />
                                            </div>
                                            <h3>Mobile Application</h3>
                                            <span>4 Courses</span>
                                            <a href="course-category/mobile-application/indexc8a6.html?tutor-course-filter-category=74"
                                                class="cbtn"><i class="ph ph-arrow-right"></i></a>
                                            <div class="cat_img"
                                                style="
                                                        background-image: url({{ url('site/wp-content/uploads/2025/03/7.jpg') }});
                                                    ">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-xl-4 col-md-6 col-12 wow fadeInUp">
                                        <div class="category-item">
                                            <div class="cicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/4-1.svg') }}"
                                                    alt="" />
                                            </div>
                                            <h3>SEO</h3>
                                            <span>2 Courses</span>
                                            <a href="course-category/seo/index7ef7.html?tutor-course-filter-category=78"
                                                class="cbtn"><i class="ph ph-arrow-right"></i></a>
                                            <div class="cat_img"
                                                style="
                                                        background-image: url({{ url('site/wp-content/uploads/2025/03/8.jpg') }});
                                                    ">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-xl-4 col-md-6 col-12 wow fadeInUp">
                                        <div class="category-item">
                                            <div class="cicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/2-2.svg') }}"
                                                    alt="" />
                                            </div>
                                            <h3>Web Development</h3>
                                            <span>8 Courses</span>
                                            <a href="course-category/web-development/index8c92.html?tutor-course-filter-category=76"
                                                class="cbtn"><i class="ph ph-arrow-right"></i></a>
                                            <div class="cat_img"
                                                style="
                                                        background-image: url({{ url('site/wp-content/uploads/2025/03/9.jpg') }});
                                                    ">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-12 text-center mt-4 wow fadeInUp">
                                        <a class="blue_btn round_btn" href="course-categories/index.html">View All
                                            Categories
                                            <i class="ph ph-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End Course Category -->
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-9dd6922 e-flex e-con-boxed e-con e-parent" data-id="9dd6922"
                data-element_type="container" data-e-type="container"
                data-settings='{"background_background":"classic"}'>
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-924703d e-con-full e-flex e-con e-child"
                        data-id="924703d" data-element_type="container" data-e-type="container">
                        <div class="elementor-element elementor-element-c2e2fac elementor-widget-mobile__width-inherit elementor-widget elementor-widget-edplus-about-image"
                            data-id="c2e2fac" data-element_type="widget" data-e-type="widget"
                            data-widget_type="edplus-about-image.default">
                            <div class="elementor-widget-container">
                                <div class="about-img about-us-two position-relative wow fadeInUp">
                                    <div class="about_badge2 aniupDown">
                                        <span class="ab_icon">
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/uploads/2025/03/graduation-hat-white.svg') }}"
                                                alt="" />
                                        </span>
                                        <h4>
                                            Experience <br />
                                            Advisor
                                        </h4>
                                    </div>

                                    <div class="ab_images position-relative z-1">
                                        <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/3-1.jpg') }}"
                                            class="about_img_1" alt="" />
                                        <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/4-1.jpg') }}"
                                            class="about_img_2" alt="" />
                                    </div>

                                    <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/ab_wave2.svg') }}"
                                        class="ab_top_shape aniupDown position-absolute" alt="" />
                                    <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/ab_dots.svg') }}"
                                        class="ab_btm_shape position-absolute" alt="" />
                                    <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/ab_shape.svg') }}"
                                        class="ab_right_shape anileftRight position-absolute" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-cb129b7 e-con-full e-flex e-con e-child"
                        data-id="cb129b7" data-element_type="container" data-e-type="container">
                        <div class="elementor-element elementor-element-e834c7c elementor-widget elementor-widget-edplus-about-content"
                            data-id="e834c7c" data-element_type="widget" data-e-type="widget"
                            data-widget_type="edplus-about-content.default">
                            <div class="elementor-widget-container">
                                <div class="about-content position-relative wow fadeInUp">
                                    <div class="section-title mb30 wow fadeInUp">
                                        <span>
                                            <span class="ticon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/themes/edplus/assets/img/icons/title-icon.svg') }}"
                                                    alt="" />
                                            </span>
                                            About Our Edplus
                                        </span>
                                        <h2>
                                            We create unique digital media
                                            experiences.
                                        </h2>
                                        <img decoding="async"
                                            src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/title.svg') }}"
                                            alt="" />
                                    </div>
                                    <p class="wow fadeInUp">
                                        At University Edplus, we are driven
                                        by the transformative power of
                                        education and the limitless
                                        potential within each individual.
                                        Founded in 1971, we have remained
                                        steadfast in our commitment to
                                        nurturing intellectual curiosity,
                                        promoting academic excellence,
                                        cultivating a dynamic campus
                                        community.
                                    </p>

                                    <div class="d-md-flex gap-3 position-relative z-2 wow fadeInUp">
                                        <ul>
                                            <li>
                                                <i class="ph ph-check"></i>
                                                Best Instructors &amp;
                                                Courses
                                            </li>
                                            <li>
                                                <i class="ph ph-check"></i>
                                                Trusted by Students
                                            </li>
                                            <li>
                                                <i class="ph ph-check"></i>
                                                100% ISO Certified
                                            </li>
                                        </ul>

                                        <ul>
                                            <li>
                                                <i class="ph ph-check"></i>
                                                Online Courses
                                            </li>
                                            <li>
                                                <i class="ph ph-check"></i>
                                                Live Classes
                                            </li>
                                            <li>
                                                <i class="ph ph-check"></i>
                                                24 Hours Support
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="courses/index.html" class="blue_btn round_btn wow fadeInUp">View All Program
                                        <i class="ph ph-arrow-right"></i></a>
                                    <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/ed_cap.svg') }}"
                                        class="ab_book_shape aniupDown position-absolute" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-3fad5e1 e-con-full e-flex e-con e-parent" data-id="3fad5e1"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-7295c56 elementor-widget elementor-widget-edplus-counter-up"
                    data-id="7295c56" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-counter-up.default">
                    <div class="elementor-widget-container">
                        <!-- Start Counter Up -->
                        <section class="container">
                            <div class="counter-up"
                                style="
                                        background-image: url({{ url('site/wp-content/uploads/2025/03/counter.svg') }});
                                    ">
                                <div class="row gy-5">
                                    <div class="col-xxl-3 col-xl-4 col-md-6 col-12 mx-xl-auto wow fadeInUp">
                                        <div class="counter-item">
                                            <div class="coicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/peoples.svg') }}"
                                                    alt="" />
                                            </div>

                                            <div class="ccontent">
                                                <h3>
                                                    <span class="count">118</span>K
                                                </h3>
                                                <span>Our Happy
                                                    Students</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-xxl-3 col-xl-4 col-md-6 col-12 mx-xl-auto wow fadeInUp">
                                        <div class="counter-item">
                                            <div class="coicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/graduate-hat.svg') }}"
                                                    alt="" />
                                            </div>

                                            <div class="ccontent">
                                                <h3>
                                                    <span class="count">25</span>K
                                                </h3>
                                                <span>
                                                    Enrolled Learner
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-xxl-3 col-xl-4 col-md-6 col-12 mx-xl-auto wow fadeInUp">
                                        <div class="counter-item">
                                            <div class="coicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/expert.svg') }}"
                                                    alt="" />
                                            </div>

                                            <div class="ccontent">
                                                <h3>
                                                    <span class="count">120</span>K
                                                </h3>
                                                <span>
                                                    Expert Instructor
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div
                                        class="col-xxl-3 col-xl-4 col-md-6 col-12 mx-xl-auto wow fadeInUp d-xl-none d-xxl-block">
                                        <div class="counter-item">
                                            <div class="coicon">
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/uploads/2025/03/satisfaction.svg') }}"
                                                    alt="" />
                                            </div>

                                            <div class="ccontent">
                                                <h3>
                                                    <span class="count">96</span>%
                                                </h3>
                                                <span>Satisfaction Rate</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                </div>
                            </div>
                        </section>
                        <!-- End Counter Up -->
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-6e9f1fa e-flex e-con-boxed e-con e-parent" data-id="6e9f1fa"
                data-element_type="container" data-e-type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-b2a168b e-con-full e-flex e-con e-child"
                        data-id="b2a168b" data-element_type="container" data-e-type="container">
                        <div class="elementor-element elementor-element-cae2c2d elementor-widget__width-initial elementor-widget elementor-widget-image"
                            data-id="cae2c2d" data-element_type="widget" data-e-type="widget"
                            data-settings='{"_animation":"none"}' data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="879" height="436"
                                    src="{{ url('site/wp-content/uploads/2025/03/1-3.png') }}"
                                    class="attachment-full size-full wp-image-776" alt=""
                                    srcset="
                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/1-3.png         879w,
                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/1-3-600x298.png 600w,
                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/1-3-300x149.png 300w,
                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/1-3-768x381.png 768w
                                        "
                                    sizes="(max-width: 879px) 100vw, 879px" />
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-0cd6f2a elementor-absolute elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile elementor-widget elementor-widget-image"
                            data-id="0cd6f2a" data-element_type="widget" data-e-type="widget"
                            data-settings='{"_position":"absolute"}' data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="35" height="150"
                                    src="{{ url('site/wp-content/uploads/2025/03/live-class.svg') }}"
                                    class="attachment-full size-full wp-image-924" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-927ee69 e-con-full e-flex e-con e-child"
                        data-id="927ee69" data-element_type="container" data-e-type="container">
                        <div class="elementor-element elementor-element-23bcdb6 elementor-widget elementor-widget-edplus-live-class-content"
                            data-id="23bcdb6" data-element_type="widget" data-e-type="widget"
                            data-widget_type="edplus-live-class-content.default">
                            <div class="elementor-widget-container">
                                <div class="lclass_content">
                                    <img decoding="async"
                                        src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/wave.svg') }}"
                                        class="lclass_wave_shape" alt="" />
                                    <div class="lc_author">
                                        <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/1-2.png') }}"
                                            alt="" />
                                        <a href="#">Dev. Masum Billah</a>
                                    </div>
                                    <h3>
                                        <a href="#">The complete guide to build
                                            restful API
                                        </a>
                                    </h3>
                                    <div class="lc_rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <span>4.8</span>
                                    </div>

                                    <div class="lc_btm d-md-flex gap-5">
                                        <div class="lc_btm_left align-self-center">
                                            <span>Online Students</span>
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/uploads/2025/03/avator.png') }}"
                                                alt="" />
                                        </div>

                                        <div class="lc_btm_right align-self-center">
                                            <a href="#" class="border_btn"><i class="ph ph-video-camera"></i>
                                                Join Now
                                                <i class="ph ph-arrow-right iright"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-dff3f98 e-con-full e-flex e-con e-parent" data-id="dff3f98"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-ac34084 elementor-widget elementor-widget-edplus-courses"
                    data-id="ac34084" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-courses.default">
                    <div class="elementor-widget-container">
                        <!-- Start Courses -->
                        <section class="courses">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 wow fadeInUp">
                                        <div class="section-title">
                                            <span>
                                                <span class="ticon">
                                                    <img decoding="async"
                                                        src="{{ url('site/wp-content/themes/edplus/assets/img/icons/title-icon.svg') }}"
                                                        alt="" />
                                                </span>
                                                Courses
                                            </span>
                                            <h2>Most Popular Courses</h2>
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/title.svg') }}"
                                                alt="" />
                                        </div>
                                    </div>

                                    <div class="col-lg-7 align-self-center wow fadeInUp">
                                        <nav class="course_nav text-lg-end">
                                            <ul>
                                                <li data-filter="all">
                                                    All Courses
                                                </li>

                                                <li data-filter=".data-science">
                                                    Data Science
                                                </li>
                                                <li data-filter=".finance-account">
                                                    Finance Account
                                                </li>
                                                <li data-filter=".mobile-application">
                                                    Mobile Application
                                                </li>
                                                <li data-filter=".web-development">
                                                    Web Development
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!-- End Col-->

                                <div class="row gy-4 course_item">
                                    <div class="col-xl-4 col-md-6 col-12 mix data-science wow fadeInUp">
                                        <div class="single_course course_style2">
                                            <div class="course_img">
                                                <div class="ccategory">
                                                    <a
                                                        href="course-category/data-science/index3a21.html?tutor-course-filter-category=73"><i
                                                            class="ph ph-folder-open"></i>
                                                        Data Science</a>
                                                </div>
                                                <img fetchpriority="high" decoding="async" width="690" height="430"
                                                    src="{{ url('site/wp-content/uploads/2025/03/6.jpg') }}"
                                                    class="attachment-edplus_course size-edplus_course wp-post-image"
                                                    alt=""
                                                    srcset="
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6.jpg         690w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6-600x374.jpg 600w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6-300x187.jpg 300w
                                                        "
                                                    sizes="(max-width: 690px) 100vw, 690px" />
                                                <a href="../../www.youtube.com/watch9a6e.html?v=yGDwk4z9EEg"
                                                    class="cvbtn" data-source="youtube">
                                                    <i class="ph ph-video-camera"></i>
                                                </a>
                                            </div>

                                            <div class="course_content">
                                                <div class="crating_number">
                                                    <div class="tutor-ratings-stars">
                                                        <i class="tutor-icon-star-bold" data-rating-value="1"></i><i
                                                            class="tutor-icon-star-bold" data-rating-value="2"></i><i
                                                            class="tutor-icon-star-bold" data-rating-value="3"></i><i
                                                            class="tutor-icon-star-bold" data-rating-value="4"></i><i
                                                            class="tutor-icon-star-line" data-rating-value="5"></i>
                                                    </div>
                                                    <input type="hidden" name="tutor_rating_gen_input" value="4.00" />
                                                    <span>(4.00 / 2
                                                        Ratings)</span>
                                                </div>
                                                <h3>
                                                    <a href="courses/interior-design-concepts-masterclass-3/index.html">
                                                        Interior design
                                                        concepts Masterclass
                                                    </a>
                                                </h3>

                                                <div class="cmeta d-flex gap-5">
                                                    <div class="single_meta">
                                                        <i class="fa-regular fa-user"></i>
                                                        2 Students
                                                    </div>

                                                    <div class="single_meta">
                                                        <i class="fa-solid fa-book"></i>
                                                        0 Lessons
                                                    </div>
                                                </div>

                                                <div class="cbtm">
                                                    <div class="c_price float-start">
                                                        <div class="price">
                                                            <del aria-hidden="true"><span
                                                                    class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#036;</span>65.00</span></del>
                                                            <span class="screen-reader-text">Original
                                                                price was:
                                                                &#036;65.00.</span><ins aria-hidden="true"><span
                                                                    class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#036;</span>55.00</span></ins><span
                                                                class="screen-reader-text">Current
                                                                price is:
                                                                &#036;55.00.</span>
                                                        </div>
                                                    </div>
                                                    <div class="c_author float-end">
                                                        <img alt=""
                                                            src="{{ url('site/wp-content/uploads/2025/03/3-4.jpg') }}"
                                                            srcset="
                                                                    https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-4.jpg 2x
                                                                "
                                                            class="avatar avatar-30 photo" height="30"
                                                            width="30" />
                                                        <a href="profile/edplus/indexd527.html?view=instructor">Masum
                                                            Billah</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col-->

                                    <div class="col-xl-4 col-md-6 col-12 mix finance-account wow fadeInUp">
                                        <div class="single_course course_style2">
                                            <div class="course_img">
                                                <div class="ccategory">
                                                    <a
                                                        href="course-category/finance-account/index0c9d.html?tutor-course-filter-category=75"><i
                                                            class="ph ph-folder-open"></i>
                                                        Finance Account</a>
                                                </div>
                                                <img fetchpriority="high" decoding="async" width="690" height="430"
                                                    src="{{ url('site/wp-content/uploads/2025/03/6.jpg') }}"
                                                    class="attachment-edplus_course size-edplus_course wp-post-image"
                                                    alt=""
                                                    srcset="
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6.jpg         690w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6-600x374.jpg 600w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/6-300x187.jpg 300w
                                                        "
                                                    sizes="(max-width: 690px) 100vw, 690px" />
                                                <a href="../../www.youtube.com/watch9a6e.html?v=yGDwk4z9EEg"
                                                    class="cvbtn" data-source="youtube">
                                                    <i class="ph ph-video-camera"></i>
                                                </a>
                                            </div>

                                            <div class="course_content">
                                                <div class="crating_number">
                                                    <div class="tutor-ratings-stars">
                                                        <i class="tutor-icon-star-bold" data-rating-value="1"></i><i
                                                            class="tutor-icon-star-bold" data-rating-value="2"></i><i
                                                            class="tutor-icon-star-bold" data-rating-value="3"></i><i
                                                            class="tutor-icon-star-bold" data-rating-value="4"></i><i
                                                            class="tutor-icon-star-line" data-rating-value="5"></i>
                                                    </div>
                                                    <input type="hidden" name="tutor_rating_gen_input" value="4.00" />
                                                    <span>(4.00 / 2
                                                        Ratings)</span>
                                                </div>
                                                <h3>
                                                    <a
                                                        href="courses/seo-as-the-core-of-your-new-business-venture/index.html">
                                                        SEO as the Core of
                                                        Your New Business
                                                        Venture
                                                    </a>
                                                </h3>

                                                <div class="cmeta d-flex gap-5">
                                                    <div class="single_meta">
                                                        <i class="fa-regular fa-user"></i>
                                                        0 Students
                                                    </div>

                                                    <div class="single_meta">
                                                        <i class="fa-solid fa-book"></i>
                                                        15 Lessons
                                                    </div>
                                                </div>

                                                <div class="cbtm">
                                                    <div class="c_price float-start">
                                                        <div class="price">
                                                            <del aria-hidden="true"><span
                                                                    class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#036;</span>450.00</span></del>
                                                            <span class="screen-reader-text">Original
                                                                price was:
                                                                &#036;450.00.</span><ins aria-hidden="true"><span
                                                                    class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#036;</span>400.00</span></ins><span
                                                                class="screen-reader-text">Current
                                                                price is:
                                                                &#036;400.00.</span>
                                                        </div>
                                                    </div>
                                                    <div class="c_author float-end">
                                                        <img alt=""
                                                            src="{{ url('site/wp-content/uploads/2025/03/3-4.jpg') }}"
                                                            srcset="
                                                                    https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-4.jpg 2x
                                                                "
                                                            class="avatar avatar-30 photo" height="30"
                                                            width="30" />
                                                        <a href="profile/edplus/indexd527.html?view=instructor">Masum
                                                            Billah</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col-->

                                    <div class="col-xl-4 col-md-6 col-12 mix mobile-application wow fadeInUp">
                                        <div class="single_course course_style2">
                                            <div class="course_img">
                                                <div class="ccategory">
                                                    <a
                                                        href="course-category/mobile-application/indexc8a6.html?tutor-course-filter-category=74"><i
                                                            class="ph ph-folder-open"></i>
                                                        Mobile
                                                        Application</a>
                                                </div>
                                                <img loading="lazy" decoding="async" width="690" height="430"
                                                    src="{{ url('site/wp-content/uploads/2025/03/3-2.jpg') }}"
                                                    class="attachment-edplus_course size-edplus_course wp-post-image"
                                                    alt=""
                                                    srcset="
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-2.jpg         690w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-2-600x374.jpg 600w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-2-300x187.jpg 300w
                                                        "
                                                    sizes="(max-width: 690px) 100vw, 690px" />
                                                <a href="../../www.youtube.com/watch9a6e.html?v=yGDwk4z9EEg"
                                                    class="cvbtn" data-source="youtube">
                                                    <i class="ph ph-video-camera"></i>
                                                </a>
                                            </div>

                                            <div class="course_content">
                                                <div class="crating_number">
                                                    <div class="tutor-ratings-stars">
                                                        <i class="tutor-icon-star-bold" data-rating-value="1"></i><i
                                                            class="tutor-icon-star-bold" data-rating-value="2"></i><i
                                                            class="tutor-icon-star-bold" data-rating-value="3"></i><i
                                                            class="tutor-icon-star-bold" data-rating-value="4"></i><i
                                                            class="tutor-icon-star-half-bold" data-rating-value="5"></i>
                                                    </div>
                                                    <input type="hidden" name="tutor_rating_gen_input" value="4.50" />
                                                    <span>(4.50 / 2
                                                        Ratings)</span>
                                                </div>
                                                <h3>
                                                    <a
                                                        href="courses/the-ultimate-guide-to-building-a-restful-api-3/index.html">
                                                        The Ultimate Guide
                                                        to Building a
                                                        RESTful API
                                                    </a>
                                                </h3>

                                                <div class="cmeta d-flex gap-5">
                                                    <div class="single_meta">
                                                        <i class="fa-regular fa-user"></i>
                                                        0 Students
                                                    </div>

                                                    <div class="single_meta">
                                                        <i class="fa-solid fa-book"></i>
                                                        0 Lessons
                                                    </div>
                                                </div>

                                                <div class="cbtm">
                                                    <div class="c_price float-start">
                                                        <div class="price">
                                                            <del aria-hidden="true"><span
                                                                    class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#036;</span>500.00</span></del>
                                                            <span class="screen-reader-text">Original
                                                                price was:
                                                                &#036;500.00.</span><ins aria-hidden="true"><span
                                                                    class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#036;</span>430.00</span></ins><span
                                                                class="screen-reader-text">Current
                                                                price is:
                                                                &#036;430.00.</span>
                                                        </div>
                                                    </div>
                                                    <div class="c_author float-end">
                                                        <img alt=""
                                                            src="{{ url('site/wp-content/uploads/2025/03/3-4.jpg') }}"
                                                            srcset="
                                                                    https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-4.jpg 2x
                                                                "
                                                            class="avatar avatar-30 photo" height="30"
                                                            width="30" />
                                                        <a href="profile/edplus/indexd527.html?view=instructor">Masum
                                                            Billah</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col-->

                                    <div class="col-xl-4 col-md-6 col-12 mix web-development wow fadeInUp">
                                        <div class="single_course course_style2">
                                            <div class="course_img">
                                                <div class="ccategory">
                                                    <a
                                                        href="course-category/web-development/index8c92.html?tutor-course-filter-category=76"><i
                                                            class="ph ph-folder-open"></i>
                                                        Web Development</a>
                                                </div>
                                                <img loading="lazy" decoding="async" width="690" height="430"
                                                    src="{{ url('site/wp-content/uploads/2025/03/5.jpg') }}"
                                                    class="attachment-edplus_course size-edplus_course wp-post-image"
                                                    alt=""
                                                    srcset="
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/5.jpg         690w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/5-600x374.jpg 600w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/5-300x187.jpg 300w
                                                        "
                                                    sizes="(max-width: 690px) 100vw, 690px" />
                                                <a href="../../www.youtube.com/watch9a6e.html?v=yGDwk4z9EEg"
                                                    class="cvbtn" data-source="youtube">
                                                    <i class="ph ph-video-camera"></i>
                                                </a>
                                            </div>

                                            <div class="course_content">
                                                <div class="crating_number">
                                                    <div class="tutor-ratings-stars">
                                                        <i class="tutor-icon-star-bold" data-rating-value="1"></i><i
                                                            class="tutor-icon-star-bold" data-rating-value="2"></i><i
                                                            class="tutor-icon-star-bold" data-rating-value="3"></i><i
                                                            class="tutor-icon-star-bold" data-rating-value="4"></i><i
                                                            class="tutor-icon-star-half-bold" data-rating-value="5"></i>
                                                    </div>
                                                    <input type="hidden" name="tutor_rating_gen_input" value="4.50" />
                                                    <span>(4.50 / 2
                                                        Ratings)</span>
                                                </div>
                                                <h3>
                                                    <a href="courses/the-complete-guide-to-build-application-3/index.html">
                                                        The complete guide
                                                        to build application
                                                    </a>
                                                </h3>

                                                <div class="cmeta d-flex gap-5">
                                                    <div class="single_meta">
                                                        <i class="fa-regular fa-user"></i>
                                                        0 Students
                                                    </div>

                                                    <div class="single_meta">
                                                        <i class="fa-solid fa-book"></i>
                                                        0 Lessons
                                                    </div>
                                                </div>

                                                <div class="cbtm">
                                                    <div class="c_price float-start">
                                                        <div class="price">
                                                            <del aria-hidden="true"><span
                                                                    class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#036;</span>400.00</span></del>
                                                            <span class="screen-reader-text">Original
                                                                price was:
                                                                &#036;400.00.</span><ins aria-hidden="true"><span
                                                                    class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#036;</span>350.00</span></ins><span
                                                                class="screen-reader-text">Current
                                                                price is:
                                                                &#036;350.00.</span>
                                                        </div>
                                                    </div>
                                                    <div class="c_author float-end">
                                                        <img alt=""
                                                            src="{{ url('site/wp-content/uploads/2025/03/3-4.jpg') }}"
                                                            srcset="
                                                                    https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-4.jpg 2x
                                                                "
                                                            class="avatar avatar-30 photo" height="30"
                                                            width="30" />
                                                        <a href="profile/edplus/indexd527.html?view=instructor">Masum
                                                            Billah</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col-->

                                    <div class="col-xl-4 col-md-6 col-12 mix web-development wow fadeInUp">
                                        <div class="single_course course_style2">
                                            <div class="course_img">
                                                <div class="ccategory">
                                                    <a
                                                        href="course-category/web-development/index8c92.html?tutor-course-filter-category=76"><i
                                                            class="ph ph-folder-open"></i>
                                                        Web Development</a>
                                                </div>
                                                <img loading="lazy" decoding="async" width="690" height="430"
                                                    src="{{ url('site/wp-content/uploads/2025/03/5.jpg') }}"
                                                    class="attachment-edplus_course size-edplus_course wp-post-image"
                                                    alt=""
                                                    srcset="
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/5.jpg         690w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/5-600x374.jpg 600w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/5-300x187.jpg 300w
                                                        "
                                                    sizes="(max-width: 690px) 100vw, 690px" />
                                                <a href="../../www.youtube.com/watch9a6e.html?v=yGDwk4z9EEg"
                                                    class="cvbtn" data-source="youtube">
                                                    <i class="ph ph-video-camera"></i>
                                                </a>
                                            </div>

                                            <div class="course_content">
                                                <div class="crating_number">
                                                    <div class="tutor-ratings-stars">
                                                        <i class="tutor-icon-star-bold" data-rating-value="1"></i><i
                                                            class="tutor-icon-star-bold" data-rating-value="2"></i><i
                                                            class="tutor-icon-star-bold" data-rating-value="3"></i><i
                                                            class="tutor-icon-star-bold" data-rating-value="4"></i><i
                                                            class="tutor-icon-star-half-bold" data-rating-value="5"></i>
                                                    </div>
                                                    <input type="hidden" name="tutor_rating_gen_input" value="4.50" />
                                                    <span>(4.50 / 2
                                                        Ratings)</span>
                                                </div>
                                                <h3>
                                                    <a
                                                        href="courses/the-complete-guide-to-build-application-2-2/index.html">
                                                        The complete guide
                                                        to build application
                                                    </a>
                                                </h3>

                                                <div class="cmeta d-flex gap-5">
                                                    <div class="single_meta">
                                                        <i class="fa-regular fa-user"></i>
                                                        0 Students
                                                    </div>

                                                    <div class="single_meta">
                                                        <i class="fa-solid fa-book"></i>
                                                        0 Lessons
                                                    </div>
                                                </div>

                                                <div class="cbtm">
                                                    <div class="c_price float-start">
                                                        <div class="price">
                                                            <del aria-hidden="true"><span
                                                                    class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#036;</span>400.00</span></del>
                                                            <span class="screen-reader-text">Original
                                                                price was:
                                                                &#036;400.00.</span><ins aria-hidden="true"><span
                                                                    class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#036;</span>350.00</span></ins><span
                                                                class="screen-reader-text">Current
                                                                price is:
                                                                &#036;350.00.</span>
                                                        </div>
                                                    </div>
                                                    <div class="c_author float-end">
                                                        <img alt=""
                                                            src="{{ url('site/wp-content/uploads/2025/03/3-4.jpg') }}"
                                                            srcset="
                                                                    https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-4.jpg 2x
                                                                "
                                                            class="avatar avatar-30 photo" height="30"
                                                            width="30" />
                                                        <a href="profile/edplus/indexd527.html?view=instructor">Masum
                                                            Billah</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col-->

                                    <div class="col-xl-4 col-md-6 col-12 mix finance-account wow fadeInUp">
                                        <div class="single_course course_style2">
                                            <div class="course_img">
                                                <div class="ccategory">
                                                    <a
                                                        href="course-category/finance-account/index0c9d.html?tutor-course-filter-category=75"><i
                                                            class="ph ph-folder-open"></i>
                                                        Finance Account</a>
                                                </div>
                                                <img loading="lazy" decoding="async" width="690" height="430"
                                                    src="{{ url('site/wp-content/uploads/2025/03/2-3.jpg') }}"
                                                    class="attachment-edplus_course size-edplus_course wp-post-image"
                                                    alt=""
                                                    srcset="
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/2-3.jpg         690w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/2-3-600x374.jpg 600w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/2-3-300x187.jpg 300w
                                                        "
                                                    sizes="(max-width: 690px) 100vw, 690px" />
                                                <a href="../../www.youtube.com/watch9a6e.html?v=yGDwk4z9EEg"
                                                    class="cvbtn" data-source="youtube">
                                                    <i class="ph ph-video-camera"></i>
                                                </a>
                                            </div>

                                            <div class="course_content">
                                                <div class="crating_number">
                                                    <div class="tutor-ratings-stars">
                                                        <i class="tutor-icon-star-bold" data-rating-value="1"></i><i
                                                            class="tutor-icon-star-bold" data-rating-value="2"></i><i
                                                            class="tutor-icon-star-bold" data-rating-value="3"></i><i
                                                            class="tutor-icon-star-bold" data-rating-value="4"></i><i
                                                            class="tutor-icon-star-bold" data-rating-value="5"></i>
                                                    </div>
                                                    <input type="hidden" name="tutor_rating_gen_input" value="5.00" />
                                                    <span>(5.00 / 1
                                                        Ratings)</span>
                                                </div>
                                                <h3>
                                                    <a
                                                        href="courses/enhance-your-personal-financial-analysis-skills-2-2/index.html">
                                                        Enhance Your
                                                        Personal Financial
                                                        Analysis Skills
                                                    </a>
                                                </h3>

                                                <div class="cmeta d-flex gap-5">
                                                    <div class="single_meta">
                                                        <i class="fa-regular fa-user"></i>
                                                        0 Students
                                                    </div>

                                                    <div class="single_meta">
                                                        <i class="fa-solid fa-book"></i>
                                                        0 Lessons
                                                    </div>
                                                </div>

                                                <div class="cbtm">
                                                    <div class="c_price float-start">
                                                        <div class="price">
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">&#036;</span>600.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="c_author float-end">
                                                        <img alt=""
                                                            src="{{ url('site/wp-content/uploads/2025/03/3-4.jpg') }}"
                                                            srcset="
                                                                    https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-4.jpg 2x
                                                                "
                                                            class="avatar avatar-30 photo" height="30"
                                                            width="30" />
                                                        <a href="profile/edplus/indexd527.html?view=instructor">Masum
                                                            Billah</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col-->
                                </div>
                            </div>
                        </section>
                        <!-- End Courses -->
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-04c1887 e-con-full e-flex e-con e-parent" data-id="04c1887"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-8512ed8 elementor-widget elementor-widget-edplus-video"
                    data-id="8512ed8" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-video.default">
                    <div class="elementor-widget-container">
                        <!-- Start Working Area -->
                        <section class="working-area">
                            <div class="container">
                                <div class="section-title text-center wow fadeInUp">
                                    <span>
                                        <span class="ticon">
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/themes/edplus/assets/img/icons/title-icon.svg') }}"
                                                alt="" />
                                        </span>
                                        Working Process
                                    </span>
                                    <h2>How It Work</h2>
                                    <img decoding="async"
                                        src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/title.svg') }}"
                                        alt="" />
                                </div>

                                <div class="video_area"
                                    style="
                                            background-image: url({{ url('site/wp-content/uploads/2025/03/video-scaled.jpg') }});
                                        ">
                                    <div class="row wow fadeInUp">
                                        <div class="col-lg-6 col-md-7 align-self-center text-center">
                                            <h2>
                                                Intro <br />
                                                Video
                                            </h2>
                                        </div>

                                        <div class="col-lg-6 col-md-5 align-self-center text-center">
                                            <a href="../../www.youtube.com/watchc260.html?v=qmqjJLzoxks"
                                                class="vplay_btn"><i class="ph ph-play"></i></a>
                                        </div>
                                    </div>
                                    <img decoding="async"
                                        src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/dots.svg') }}"
                                        alt="" class="dot_shape anileftRight" />
                                    <img decoding="async"
                                        src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/multiarrow.svg') }}"
                                        alt="" class="marrow_shape aniupDown" />
                                </div>
                            </div>
                        </section>
                        <!-- End Working Area -->
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-a5b2dba e-con-full e-flex e-con e-parent" data-id="a5b2dba"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-d11b5d8 elementor-widget elementor-widget-edplus-testimonials"
                    data-id="d11b5d8" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-testimonials.default">
                    <div class="elementor-widget-container">
                        <!-- Start Testimonials Two -->
                        <section class="testimonials-two section-padding position-relative"
                            style="
                                    background-image: url({{ url('sitewp-content/uploads/2025/03/testimonials-2.svg') }} );
                                ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-12 wow fadeInUp">
                                        <div class="section-title">
                                            <span>
                                                <span class="ticon">
                                                    <img decoding="async"
                                                        src="{{ url('site/wp-content/themes/edplus/assets/img/icons/title-icon.svg') }}"
                                                        alt="" />
                                                </span>
                                                Testimonials
                                            </span>
                                            <h2>
                                                People’s Say About Our
                                                <br />
                                                Edplus
                                            </h2>
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/title.svg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                    <!-- End Col-->
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-12 text-center wow fadeInUp">
                                        <div class="test_badge"
                                            style="
                                                    background-image: url({{ url('site/wp-content/uploads/2025/03/testimonials2.jpg') }});
                                                ">
                                            <h4>4.8</h4>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <span>5 Star Rating</span>
                                        </div>
                                    </div>
                                    <!-- End Col-->

                                    <div class="col-lg-8 col-12 wow fadeInUp">
                                        <div class="testimonial2_slider position-relative owl-carousel">
                                            <div class="testimonial2_item">
                                                <div class="tes_top">
                                                    <img loading="lazy" decoding="async" width="105" height="105"
                                                        src="{{ url('site/wp-content/uploads/2025/03/2-1.png') }}"
                                                        class="attachment-edplus_testi size-edplus_testi wp-post-image"
                                                        alt=""
                                                        srcset="
                                                                https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/2-1.png         105w,
                                                                https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/2-1-100x100.png 100w
                                                            "
                                                        sizes="(max-width: 105px) 100vw, 105px" />
                                                    <div class="tes_tdes">
                                                        <h4>John Legend</h4>
                                                        <span>Australia</span>
                                                    </div>
                                                </div>

                                                <p>
                                                    Duis rhoncus orci utedn
                                                    metus rhoncus, non is
                                                    dictum purus bibendum.
                                                    Suspendisse id orci sit
                                                    amet justo.
                                                </p>

                                                <div class="tes_rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/themes/edplus/assets/img/icons/quote.svg') }}"
                                                    alt="" class="quote_shape2 position-absolute" />
                                            </div>

                                            <div class="testimonial2_item">
                                                <div class="tes_top">
                                                    <img loading="lazy" decoding="async" width="105" height="105"
                                                        src="{{ url('site/wp-content/uploads/2025/03/2-1.png') }}"
                                                        class="attachment-edplus_testi size-edplus_testi wp-post-image"
                                                        alt=""
                                                        srcset="
                                                                https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/2-1.png         105w,
                                                                https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/2-1-100x100.png 100w
                                                            "
                                                        sizes="(max-width: 105px) 100vw, 105px" />
                                                    <div class="tes_tdes">
                                                        <h4>John Legend</h4>
                                                        <span>Australia</span>
                                                    </div>
                                                </div>

                                                <p>
                                                    Duis rhoncus orci utedn
                                                    metus rhoncus, non is
                                                    dictum purus bibendum.
                                                    Suspendisse id orci sit
                                                    amet justo.
                                                </p>

                                                <div class="tes_rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/themes/edplus/assets/img/icons/quote.svg') }}"
                                                    alt="" class="quote_shape2 position-absolute" />
                                            </div>

                                            <div class="testimonial2_item">
                                                <div class="tes_top">
                                                    <img loading="lazy" decoding="async" width="105" height="105"
                                                        src="{{ url('site/wp-content/uploads/2025/03/2-1.png') }}"
                                                        class="attachment-edplus_testi size-edplus_testi wp-post-image"
                                                        alt=""
                                                        srcset="
                                                                https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/2-1.png         105w,
                                                                https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/2-1-100x100.png 100w
                                                            "
                                                        sizes="(max-width: 105px) 100vw, 105px" />
                                                    <div class="tes_tdes">
                                                        <h4>John Doe</h4>
                                                        <span>Australia</span>
                                                    </div>
                                                </div>

                                                <p>
                                                    Duis rhoncus orci utedn
                                                    metus rhoncus, non is
                                                    dictum purus bibendum
                                                    Suspendisse id interdum.
                                                </p>

                                                <div class="tes_rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/themes/edplus/assets/img/icons/quote.svg') }}"
                                                    alt="" class="quote_shape2 position-absolute" />
                                            </div>

                                            <div class="testimonial2_item">
                                                <div class="tes_top">
                                                    <img loading="lazy" decoding="async" width="105" height="105"
                                                        src="{{ url('site/wp-content/uploads/2025/03/2-1.png') }}"
                                                        class="attachment-edplus_testi size-edplus_testi wp-post-image"
                                                        alt=""
                                                        srcset="
                                                                https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/2-1.png         105w,
                                                                https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/2-1-100x100.png 100w
                                                            "
                                                        sizes="(max-width: 105px) 100vw, 105px" />
                                                    <div class="tes_tdes">
                                                        <h4>John Doe</h4>
                                                        <span>Australia</span>
                                                    </div>
                                                </div>

                                                <p>
                                                    Duis rhoncus orci utedn
                                                    metus rhoncus, non is
                                                    dictum purus bibendum
                                                    Suspendisse id interdum.
                                                </p>

                                                <div class="tes_rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/themes/edplus/assets/img/icons/quote.svg') }}"
                                                    alt="" class="quote_shape2 position-absolute" />
                                            </div>

                                            <div class="testimonial2_item">
                                                <div class="tes_top">
                                                    <img loading="lazy" decoding="async" width="104" height="104"
                                                        src="{{ url('site/wp-content/uploads/2025/03/1-1.png') }}"
                                                        class="attachment-edplus_testi size-edplus_testi wp-post-image"
                                                        alt=""
                                                        srcset="
                                                                https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/1-1.png         104w,
                                                                https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/1-1-100x100.png 100w
                                                            "
                                                        sizes="(max-width: 104px) 100vw, 104px" />
                                                    <div class="tes_tdes">
                                                        <h4>John Smith</h4>
                                                        <span>Australia</span>
                                                    </div>
                                                </div>

                                                <p>
                                                    Duis rhoncus orci utedn
                                                    metus rhoncus, non is
                                                    dictum purus bibendum
                                                    Suspendisse id interdum.
                                                </p>

                                                <div class="tes_rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/themes/edplus/assets/img/icons/quote.svg') }}"
                                                    alt="" class="quote_shape2 position-absolute" />
                                            </div>

                                            <div class="testimonial2_item">
                                                <div class="tes_top">
                                                    <img loading="lazy" decoding="async" width="104"
                                                        height="104"
                                                        src="{{ url('site/wp-content/uploads/2025/03/1-1.png') }}"
                                                        class="attachment-edplus_testi size-edplus_testi wp-post-image"
                                                        alt=""
                                                        srcset="
                                                                https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/1-1.png         104w,
                                                                https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/1-1-100x100.png 100w
                                                            "
                                                        sizes="(max-width: 104px) 100vw, 104px" />
                                                    <div class="tes_tdes">
                                                        <h4>John Smith</h4>
                                                        <span>Australia</span>
                                                    </div>
                                                </div>

                                                <p>
                                                    Duis rhoncus orci utedn
                                                    metus rhoncus, non is
                                                    dictum purus bibendum
                                                    Suspendisse id interdum.
                                                </p>

                                                <div class="tes_rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <img decoding="async"
                                                    src="{{ url('site/wp-content/themes/edplus/assets/img/icons/quote.svg') }}"
                                                    alt="" class="quote_shape2 position-absolute" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col-->
                                </div>
                            </div>
                        </section>
                        <!-- End Testimonials Two -->
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-9331882 e-con-full e-flex e-con e-parent" data-id="9331882"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-3f2610e elementor-widget elementor-widget-edplus-title"
                    data-id="3f2610e" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-title.default">
                    <div class="elementor-widget-container">
                        <div class="section-title text-center wow fadeInUp">
                            <span>
                                <span class="ticon">
                                    <img decoding="async"
                                        src="{{ url('site/wp-content/themes/edplus/assets/img/icons/title-icon.svg') }}"
                                        alt="" />
                                </span>
                                Instructors
                            </span>
                            <h2>Our Expert Instructors</h2>
                            <img decoding="async"
                                src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/title.svg') }}"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-349b845 elementor-widget elementor-widget-edplus-instructors"
                    data-id="349b845" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-instructors.default">
                    <div class="elementor-widget-container">
                        <!-- Start Teacher -->
                        <section class="instructors">
                            <div class="container">
                                <div class="row">
                                    <div class="instructor-slider position-relative owl-carousel col-12 wow fadeInUp">
                                        <div class="teacher_item">
                                            <div class="teacher_image">
                                                <img loading="lazy" decoding="async" width="360" height="316"
                                                    src="{{ url('site/wp-content/uploads/2025/03/4-1.png') }}"
                                                    class="attachment-edplus_instructor_img size-edplus_instructor_img wp-post-image"
                                                    alt=""
                                                    srcset="
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/4-1.png         361w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/4-1-300x263.png 300w
                                                        "
                                                    sizes="(max-width: 360px) 100vw, 360px" />
                                                <ul class="tsocial_links">
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="teacher_content">
                                                <h4>
                                                    <a href="profile/edplus/indexd527.html?view=instructor">MD. Masum
                                                        Billah</a>
                                                </h4>
                                                <span>Software Engineer</span>
                                                <div class="ins_meta">
                                                    <span><i class="fa-solid fa-book"></i>
                                                        36 Courses</span>
                                                    <span><i class="fa-solid fa-graduation-cap"></i>
                                                        196 Students</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End instructor_item -->
                                        <div class="teacher_item">
                                            <div class="teacher_image">
                                                <img loading="lazy" decoding="async" width="360" height="316"
                                                    src="{{ url('site/wp-content/uploads/2025/03/4-1.png') }}"
                                                    class="attachment-edplus_instructor_img size-edplus_instructor_img wp-post-image"
                                                    alt=""
                                                    srcset="
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/4-1.png         361w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/4-1-300x263.png 300w
                                                        "
                                                    sizes="(max-width: 360px) 100vw, 360px" />
                                                <ul class="tsocial_links">
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="teacher_content">
                                                <h4>
                                                    <a href="profile/edplus/indexd527.html?view=instructor">MD. Masum
                                                        Billah</a>
                                                </h4>
                                                <span>Software Engineer</span>
                                                <div class="ins_meta">
                                                    <span><i class="fa-solid fa-book"></i>
                                                        36 Courses</span>
                                                    <span><i class="fa-solid fa-graduation-cap"></i>
                                                        196 Students</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End instructor_item -->
                                        <div class="teacher_item">
                                            <div class="teacher_image">
                                                <img loading="lazy" decoding="async" width="360" height="316"
                                                    src="{{ url('site/wp-content/uploads/2025/03/3-1.png') }}"
                                                    class="attachment-edplus_instructor_img size-edplus_instructor_img wp-post-image"
                                                    alt=""
                                                    srcset="
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-1.png         361w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-1-300x263.png 300w
                                                        "
                                                    sizes="(max-width: 360px) 100vw, 360px" />
                                                <ul class="tsocial_links">
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="teacher_content">
                                                <h4>
                                                    <a href="profile/edplus/indexd527.html?view=instructor">MD. Motasim
                                                        Billah</a>
                                                </h4>
                                                <span>SEO Expert</span>
                                                <div class="ins_meta">
                                                    <span><i class="fa-solid fa-book"></i>
                                                        40 Courses</span>
                                                    <span><i class="fa-solid fa-graduation-cap"></i>
                                                        200 Students</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End instructor_item -->
                                        <div class="teacher_item">
                                            <div class="teacher_image">
                                                <img loading="lazy" decoding="async" width="360" height="316"
                                                    src="{{ url('site/wp-content/uploads/2025/03/3-1.png') }}"
                                                    class="attachment-edplus_instructor_img size-edplus_instructor_img wp-post-image"
                                                    alt=""
                                                    srcset="
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-1.png         361w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/3-1-300x263.png 300w
                                                        "
                                                    sizes="(max-width: 360px) 100vw, 360px" />
                                                <ul class="tsocial_links">
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="teacher_content">
                                                <h4>
                                                    <a href="profile/edplus/indexd527.html?view=instructor">MD. Motasim
                                                        Billah</a>
                                                </h4>
                                                <span>SEO Expert</span>
                                                <div class="ins_meta">
                                                    <span><i class="fa-solid fa-book"></i>
                                                        40 Courses</span>
                                                    <span><i class="fa-solid fa-graduation-cap"></i>
                                                        200 Students</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End instructor_item -->
                                        <div class="teacher_item">
                                            <div class="teacher_image">
                                                <img loading="lazy" decoding="async" width="360" height="316"
                                                    src="{{ url('site/wp-content/uploads/2025/03/2-2.png') }}"
                                                    class="attachment-edplus_instructor_img size-edplus_instructor_img wp-post-image"
                                                    alt=""
                                                    srcset="
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/2-2.png         361w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/2-2-300x263.png 300w
                                                        "
                                                    sizes="(max-width: 360px) 100vw, 360px" />
                                                <ul class="tsocial_links">
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="teacher_content">
                                                <h4>
                                                    <a href="profile/edplus/indexd527.html?view=instructor">MD. Muntasir
                                                        Billah</a>
                                                </h4>
                                                <span>UI Designer</span>
                                                <div class="ins_meta">
                                                    <span><i class="fa-solid fa-book"></i>
                                                        35 Courses</span>
                                                    <span><i class="fa-solid fa-graduation-cap"></i>
                                                        150 Students</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End instructor_item -->
                                        <div class="teacher_item">
                                            <div class="teacher_image">
                                                <img loading="lazy" decoding="async" width="360" height="316"
                                                    src="{{ url('site/wp-content/uploads/2025/03/2-2.png') }}"
                                                    class="attachment-edplus_instructor_img size-edplus_instructor_img wp-post-image"
                                                    alt=""
                                                    srcset="
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/2-2.png         361w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/2-2-300x263.png 300w
                                                        "
                                                    sizes="(max-width: 360px) 100vw, 360px" />
                                                <ul class="tsocial_links">
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="teacher_content">
                                                <h4>
                                                    <a href="profile/edplus/indexd527.html?view=instructor">MD. Muntasir
                                                        Billah</a>
                                                </h4>
                                                <span>UI Designer</span>
                                                <div class="ins_meta">
                                                    <span><i class="fa-solid fa-book"></i>
                                                        35 Courses</span>
                                                    <span><i class="fa-solid fa-graduation-cap"></i>
                                                        150 Students</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End instructor_item -->
                                        <div class="teacher_item">
                                            <div class="teacher_image">
                                                <img loading="lazy" decoding="async" width="360" height="316"
                                                    src="{{ url('site/wp-content/uploads/2025/03/1-4.png') }}"
                                                    class="attachment-edplus_instructor_img size-edplus_instructor_img wp-post-image"
                                                    alt=""
                                                    srcset="
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/1-4.png         361w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/1-4-300x263.png 300w
                                                        "
                                                    sizes="(max-width: 360px) 100vw, 360px" />
                                                <ul class="tsocial_links">
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="teacher_content">
                                                <h4>
                                                    <a href="profile/edplus/indexd527.html?view=instructor">MD. Monaym
                                                        Billah</a>
                                                </h4>
                                                <span>Web Developer</span>
                                                <div class="ins_meta">
                                                    <span><i class="fa-solid fa-book"></i>
                                                        30 Courses</span>
                                                    <span><i class="fa-solid fa-graduation-cap"></i>
                                                        120 Students</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End instructor_item -->
                                        <div class="teacher_item">
                                            <div class="teacher_image">
                                                <img loading="lazy" decoding="async" width="360" height="316"
                                                    src="{{ url('site/wp-content/uploads/2025/03/1-4.png') }}"
                                                    class="attachment-edplus_instructor_img size-edplus_instructor_img wp-post-image"
                                                    alt=""
                                                    srcset="
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/1-4.png         361w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/1-4-300x263.png 300w
                                                        "
                                                    sizes="(max-width: 360px) 100vw, 360px" />
                                                <ul class="tsocial_links">
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="teacher_content">
                                                <h4>
                                                    <a href="profile/edplus/indexd527.html?view=instructor">MD. Monaym
                                                        Billah</a>
                                                </h4>
                                                <span>Web Developer</span>
                                                <div class="ins_meta">
                                                    <span><i class="fa-solid fa-book"></i>
                                                        30 Courses</span>
                                                    <span><i class="fa-solid fa-graduation-cap"></i>
                                                        120 Students</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End instructor_item -->
                                        <div class="teacher_item">
                                            <div class="teacher_image">
                                                <img loading="lazy" decoding="async" width="360" height="316"
                                                    src="{{ url('site/wp-content/uploads/2025/03/4-1.png') }}"
                                                    class="attachment-edplus_instructor_img size-edplus_instructor_img wp-post-image"
                                                    alt=""
                                                    srcset="
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/4-1.png         361w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/4-1-300x263.png 300w
                                                        "
                                                    sizes="(max-width: 360px) 100vw, 360px" />
                                                <ul class="tsocial_links">
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="teacher_content">
                                                <h4>
                                                    <a href="profile/edplus/indexd527.html?view=instructor">MD. Monaym
                                                        Billah</a>
                                                </h4>
                                                <span>Web Developer</span>
                                                <div class="ins_meta">
                                                    <span><i class="fa-solid fa-book"></i>
                                                        25 Courses</span>
                                                    <span><i class="fa-solid fa-graduation-cap"></i>
                                                        100 Students</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End instructor_item -->
                                        <div class="teacher_item">
                                            <div class="teacher_image">
                                                <img loading="lazy" decoding="async" width="360" height="316"
                                                    src="{{ url('site/wp-content/uploads/2025/03/4-1.png') }}"
                                                    class="attachment-edplus_instructor_img size-edplus_instructor_img wp-post-image"
                                                    alt=""
                                                    srcset="
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/4-1.png         361w,
                                                            https://wpdemothemes.com/edplus/wp-content/uploads/2025/03/4-1-300x263.png 300w
                                                        "
                                                    sizes="(max-width: 360px) 100vw, 360px" />
                                                <ul class="tsocial_links">
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="teacher_content">
                                                <h4>
                                                    <a href="profile/edplus/indexd527.html?view=instructor">MD. Monaym
                                                        Billah</a>
                                                </h4>
                                                <span>Web Developer</span>
                                                <div class="ins_meta">
                                                    <span><i class="fa-solid fa-book"></i>
                                                        25 Courses</span>
                                                    <span><i class="fa-solid fa-graduation-cap"></i>
                                                        100 Students</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End instructor_item -->
                                    </div>
                                    <!-- End Col -->
                                </div>
                            </div>
                        </section>
                        <!-- End Teacher -->

                        <svg class="clippy">
                            <defs>
                                <clipPath id="clip-teacher" clipPathUnits="objectBoundingBox">
                                    <path
                                        d="M0 0.0211625C0 0.00947477 0.00992167 0 0.0221607 0H0.792244C0.815192 0 0.833795 0.0177652 0.833795 0.0396796V0.283048V0.468717C0.833795 0.488236 0.84866 0.504856 0.868848 0.507909L0.964947 0.522439C0.985135 0.525491 1 0.542112 1 0.56163V0.815965C1 0.824911 0.994109 0.832891 0.985286 0.835897L0.507279 0.998769C0.502566 1.00038 0.497422 1.00041 0.492685 0.998869L0.0150135 0.843448C0.00603581 0.840527 0 0.832473 0 0.823416V0.0211625Z"
                                        fill="#222222" />
                                </clipPath>
                            </defs>
                        </svg>

                        <svg class="clippy">
                            <defs>
                                <clipPath id="clip-instructor" clipPathUnits="objectBoundingBox">
                                    <path
                                        d="M0 0.0252417C0 0.0113011 0.00992167 0 0.0221607 0H0.792244C0.815192 0 0.833795 0.0211896 0.833795 0.0473283V0.337608V0.559067C0.833795 0.582348 0.84866 0.602172 0.868848 0.605813L0.964947 0.623144C0.985135 0.626785 1 0.646609 1 0.66989V0.966005C1 0.979866 0.990187 0.991134 0.978018 0.991246L0.0223388 0.999999C0.0100306 1.00011 0 0.988778 0 0.974758V0.0252417Z"
                                        fill="#222222" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-763ada1 e-con-full e-flex e-con e-parent" data-id="763ada1"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-7c73090 elementor-widget elementor-widget-edplus-clients"
                    data-id="7c73090" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-clients.default">
                    <div class="elementor-widget-container">
                        <!-- Start Client two -->
                        <div class="client-two">
                            <div class="container">
                                <div class="client_slider2 position-relative owl-carousel wow fadeInUp">
                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/5.svg') }}"
                                            alt="image" /></a>

                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/4.svg') }}"
                                            alt="image" /></a>

                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/3.svg') }}"
                                            alt="image" /></a>

                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/2.svg') }}"
                                            alt="image" /></a>

                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/1.svg') }}"
                                            alt="image" /></a>

                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/3.svg') }}"
                                            alt="image" /></a>

                                    <a href="#"><img decoding="async"
                                            src="{{ url('site/wp-content/uploads/2025/03/4.svg') }}"
                                            alt="image" /></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Client -->
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-c85d15a e-con-full e-flex e-con e-parent" data-id="c85d15a"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-675904c elementor-widget elementor-widget-edplus-blog"
                    data-id="675904c" data-element_type="widget" data-e-type="widget"
                    data-widget_type="edplus-blog.default">
                    <div class="elementor-widget-container">
                        <!-- Start Blog -->
                        <section class="blog">
                            <div class="container">
                                <div class="section-title text-center wow fadeInUp">
                                    <span>
                                        <span class="ticon">
                                            <img decoding="async"
                                                src="{{ url('site/wp-content/themes/edplus/assets/img/icons/title-icon.svg') }}"
                                                alt="" />
                                        </span>
                                        Blog
                                    </span>
                                    <h2>Latest News From our Blog</h2>
                                    <img decoding="async"
                                        src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/title.svg') }}"
                                        alt="" />
                                </div>

                                <div class="blog_slider owl-carousel wow fadeInUp">
                                    <div class="blog_item">
                                        <div class="blog_img">
                                            <img loading="lazy" decoding="async" width="978" height="714"
                                                src="{{ url('site/wp-content/uploads/2025/03/b3.jpg') }}"
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
                                                <a href="category/web-design/index.html">Web Design</a>
                                            </span>
                                        </div>

                                        <div class="blog_content">
                                            <div class="blog_meta">
                                                <span><i class="ph ph-user"></i>
                                                    Masum Billah</span>
                                                <span><i class="ph ph-clock"></i>
                                                    Oct 30, 2025
                                                </span>
                                            </div>
                                            <h3>
                                                <a href="leverage-agile-frameworks-to-provide/index.html">Leverage agile
                                                    frameworks to provide</a>
                                            </h3>
                                            <a href="leverage-agile-frameworks-to-provide/index.html"
                                                class="blog_btn2"><i class="ph ph-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- End blog_item -->

                                    <div class="blog_item">
                                        <div class="blog_img">
                                            <img loading="lazy" decoding="async" width="978" height="714"
                                                src="{{ url('site/wp-content/uploads/2025/03/b2.jpg') }}"
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
                                                <a href="category/wordpress/index.html">WordPress</a>
                                            </span>
                                        </div>

                                        <div class="blog_content">
                                            <div class="blog_meta">
                                                <span><i class="ph ph-user"></i>
                                                    Masum Billah</span>
                                                <span><i class="ph ph-clock"></i>
                                                    Oct 28, 2025
                                                </span>
                                            </div>
                                            <h3>
                                                <a href="student-learning-through-an-online-computer/index.html">Student
                                                    Learning
                                                    Through an Online
                                                    Computer</a>
                                            </h3>
                                            <a href="student-learning-through-an-online-computer/index.html"
                                                class="blog_btn2"><i class="ph ph-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- End blog_item -->

                                    <div class="blog_item">
                                        <div class="blog_img">
                                            <img loading="lazy" decoding="async" width="978" height="726"
                                                src="{{ url('site/wp-content/uploads/2025/03/b1.jpg') }}"
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
                                                <a href="category/web-design/index.html">Web Design</a>
                                            </span>
                                        </div>

                                        <div class="blog_content">
                                            <div class="blog_meta">
                                                <span><i class="ph ph-user"></i>
                                                    Masum Billah</span>
                                                <span><i class="ph ph-clock"></i>
                                                    Oct 26, 2025
                                                </span>
                                            </div>
                                            <h3>
                                                <a href="online-learning-program-for-students-2/index.html">Online
                                                    Learning Program
                                                    for Students</a>
                                            </h3>
                                            <a href="online-learning-program-for-students-2/index.html"
                                                class="blog_btn2"><i class="ph ph-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- End blog_item -->
                                </div>
                            </div>
                        </section>
                        <!-- End Blog -->
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-95b4bb1 e-grid e-con-boxed e-con e-parent" data-id="95b4bb1"
                data-element_type="container" data-e-type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-58ea98b cta2_content1 elementor-widget elementor-widget-edplus-cta"
                        data-id="58ea98b" data-element_type="widget" data-e-type="widget"
                        data-widget_type="edplus-cta.default">
                        <div class="elementor-widget-container">
                            <div class="cta2"
                                style="
                                        background-image: url({{ url('site/wp-content/uploads/2025/03/cta1.svg') }});
                                    ">
                                <div class="cta-content wow fadeInUp">
                                    <h2>
                                        Get Free <span>Courses</span>
                                        <img decoding="async"
                                            src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/cta_line.svg') }}"
                                            class="ctitle_shape" alt="" />
                                    </h2>

                                    <p>
                                        Top instructors from around the
                                        world teach <br />
                                        Millions student on EduPlus
                                    </p>
                                    <a href="student-registration/index.html" class="white_btn round_btn">Apply Now</a>
                                </div>
                                <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/1-5.png') }}"
                                    class="cta_img" alt="" />
                                <img decoding="async"
                                    src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/ccircle.svg') }}"
                                    class="ccircle_shape" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-f183977 elementor-widget elementor-widget-edplus-cta"
                        data-id="f183977" data-element_type="widget" data-e-type="widget"
                        data-widget_type="edplus-cta.default">
                        <div class="elementor-widget-container">
                            <div class="cta2 color_green"
                                style="
                                        background-image: url({{ url('site/wp-content/uploads/2025/03/cta2.svg') }});
                                    ">
                                <div class="cta-content wow fadeInUp">
                                    <h2>
                                        Become a <span>Tutor</span>
                                        <img decoding="async"
                                            src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/cta_line.svg') }}"
                                            class="ctitle_shape" alt="" />
                                    </h2>

                                    <p>
                                        Top instructors from around the
                                        world teach <br />
                                        Millions student on EduPlus
                                    </p>
                                    <a href="instructor-registration/index.html" class="white_btn round_btn">Apply
                                        Now</a>
                                </div>
                                <img decoding="async" src="{{ url('site/wp-content/uploads/2025/03/2-3.png') }}"
                                    class="cta_img" alt="" />
                                <img decoding="async"
                                    src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/ccircle.svg') }}"
                                    class="ccircle_shape" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
