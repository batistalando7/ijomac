<div class="blog_item">
    <div class="blog_img">
        <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid w-100" style="height:250px; object-fit:cover;"
            alt="{{ $item->name }}">
    </div>

    <div class="blog_content">
        <div class="blog_meta">
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
