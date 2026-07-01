<div class="elementor-element elementor-element-763ada1 e-con-full e-flex e-con e-parent" data-id="763ada1"
    data-element_type="container" data-e-type="container">
    <div class="elementor-element elementor-element-7c73090 elementor-widget elementor-widget-edplus-clients"
        data-id="7c73090" data-element_type="widget" data-e-type="widget" data-widget_type="edplus-clients.default">
        <div class="elementor-widget-container">
            <!-- Start Client two -->
            <div class="client-two">
                <div class="container">
                    <div class="client_slider2 position-relative owl-carousel wow fadeInUp">
                        @foreach ($patners as $item)
                            <a href="{{ $item->link }}" target="_blank">{{-- <img decoding="async" src="{{ url('storage/' . $item->image) }}"
                                alt="image" /> --}}
                                <img decoding="async" src="{{ asset('storage/' . $item->image) }}"
                                    class="img-fluid w-100" style="height:50px; object-fit:cover;"
                                    alt="{{ $item->name }}"></a>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- End Client -->
        </div>
    </div>
</div>
