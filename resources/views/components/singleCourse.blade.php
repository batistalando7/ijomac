<div class="single_course">
    <div class="course_img">
        <div class="ccategory">
            <a href=""><i
                    class="ph ph-folder-open"></i>
                {{ $course->category->name }}</a>
        </div>
        <img fetchpriority="high" decoding="async" width="690" height="430"
            src="{{ url('site/wp-content/uploads/2025/03/6.jpg') }}"
            class="attachment-edplus_course size-edplus_course wp-post-image" alt=""
            srcset="{{ asset('storage/' . $course->image) }} 690w, {{ asset('storage/' . $course->image) }} 300w"
            sizes="(max-width: 690px) 100vw, 690px" />
        {{-- <a href="#" class="cvbtn" data-source="youtube">
            <i class="ph ph-video-camera"></i>
        </a> --}}
    </div>

    <div class="course_content">
        {{-- <div class="crating_number">
            <i class="fa-solid fa-star"></i>
            4.00
        </div> --}}
        <h3>
            <a href="{{ route('site.courses.details', ['course' => $course->slug]) }}">
               {{ $course->name }}
            </a>
        </h3>

        <div class="cmeta d-flex gap-xxl-5 gap-4">
            {{-- <div class="single_meta">
                <i class="fa-solid fa-book"></i>
                0
                Lessons
            </div> --}}

            <div class="single_meta">
                <i class="fa-regular fa-clock"></i>
                {{ $course->duration }}
            </div>
        </div>

        <div class="cbtm">
            <div class="c_price float-start">
                <div class="price">
                    <del aria-hidden="true"><span class="woocommerce-Price-amount amount"><span
                                class="woocommerce-Price-currencySymbol">kz</span>{{ $course->price + ($course->price * 0.2) }}</span></del>
                    <span class="screen-reader-text">Original
                        price
                        was:
                        kz{{ $course->price + ($course->price * 0.2) }}</span><ins aria-hidden="true"><span class="woocommerce-Price-amount amount"><span
                                class="woocommerce-Price-currencySymbol">kz</span>{{ $course->price }}</span></ins><span
                        class="screen-reader-text">Current
                        price
                        is:
                        kz{{ $course->price }}</span>
                </div>
            </div>
            <div class="c_author float-end">
                <img alt="" src="{{ asset('storage/' . $course->teacher->photo) }}"
                    srcset="{{ asset('storage/' . $course->teacher->photo) }}"
                    class="avatar avatar-30 photo" height="30" width="30" />
                <a href="profile/edplus/indexd527.html?view=instructor">{{ $course->teacher->name }}</a>
            </div>
        </div>
    </div>
</div>
