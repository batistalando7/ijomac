<div class="blog_item">
    <div class="blog_img">
        <img fetchpriority="high" decoding="async" width="978" height="714" src="../wp-content/uploads/2025/03/b3.jpg"
            class="attachment-edplus_blog size-edplus_blog wp-post-image" alt=""
            srcset="{{ asset('storage/' . $item->image) }} 978w,
                                                            {{ asset('storage/' . $item->image) }} 600w,
                                                            {{ asset('storage/' . $item->image) }} 300w,
                                                            {{ asset('storage/' . $item->image) }} 768w"
            sizes="(max-width: 978px) 100vw, 978px" />
        {{-- <span class="b_cat">
                                                        <i class="ph ph-file"></i>
                                                        <a href="../category/web-design/index.html">Web Design</a>
                                                    </span> --}}
    </div>

    <div class="blog_content">
        <div class="blog_meta">
            {{-- <span><i class="ph ph-user"></i>
                                                            <a href="../author/edplus/index.html">Masum Billah</a></span> --}}
            <span><i class="ph ph-clock"></i>
                {{ $item->created_at->format('M d, Y') }}
            </span>
        </div>
        <h3>
            <a href="{{ route('site.services.details', ['service' => $item]) }}">{{ $item->name }}</a>
        </h3>
        <a href="{{ route('site.services.details', ['service' => $item]) }}" class="blog_btn">Ver Detalhes
            <i class="ph ph-arrow-right"></i></a>
    </div>
</div>
