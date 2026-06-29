@if (session('success'))
    <!-- Start Popup Search Box -->
    <div id="popup_success" class="popup_searchbox_wrapper">
        <div class="searchbox_drawer position-relative">
            <a href="#" class="popup_close"><i class="bx bx-x"></i></a>
            <div class="popup_searchform text-center">
                <div class="col-lg-7 mx-auto">
                    {!! session('success') !!}
                </div>
            </div>
        </div>
    </div>
    <!-- End Popup Search Box -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('[data-menu="#popup_success"]').click();
        });
    </script>
@endif

@if (session('error'))
    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill" />
        </svg>
        <div>
            {!! session('error') !!}
        </div>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        @foreach ($errors->all() as $error)
            <ul>
                <li>{{ $error }}</li>
            </ul>
        @endforeach
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>



@endif
