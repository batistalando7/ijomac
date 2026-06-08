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
                                Formadores
                            </span>
                            <h2>Profissionais experiêntes</h2>
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
                                        @foreach ($teachers as $item)
                                            <div class="teacher_item">
                                                <div class="teacher_image">
                                                    <img loading="lazy" decoding="async" width="360" height="316"
                                                        src="{{ asset('storage/' . $item->photo) }}"
                                                        class="attachment-edplus_instructor_img size-edplus_instructor_img wp-post-image"
                                                        alt=""
                                                        srcset="
                                                            {{ asset('storage/' . $item->photo) }}
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
                                                        <a href="profile/edplus/indexd527.html?view=instructor">{{ $item->name}}</a>
                                                    </h4>
                                                    <span>{{ $item->qualification }}</span>
                                                    {{-- <div class="ins_meta">
                                                        <span><i class="fa-solid fa-book"></i>
                                                            36 Courses</span>
                                                        <span><i class="fa-solid fa-graduation-cap"></i>
                                                            196 Students</span>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        @endforeach
                                        <!-- End instructor_item -->
                                        {{-- <div class="teacher_item">
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
                                        </div> --}}
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