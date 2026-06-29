<!-- Start Popup Search Box -->
<div id="popup_searchbox" class="popup_searchbox_wrapper">
    <div class="searchbox_drawer position-relative">
        <a href="#" class="popup_close"><i class="bx bx-x"></i></a>
        <div class="popup_searchform text-center">
            <div class="col-lg-7 mx-auto">
                <form id="searchForm" action="{{ route('site.search') }}" method="GET" class="position-relative">
                    @csrf

                    <input type="text" id="search" name="search" placeholder="O que você está procurando?"
                        autocomplete="off" autofocus>

                    <button type="submit">
                        <i class="ph ph-magnifying-glass"></i>
                        <span>Pesquisar</span>
                    </button>
                </form>

                <div id="search-results" class="mt-4"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Popup Search Box -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script>
    $(function() {

        const searchUrl = "{{ route('site.search') }}";

        const courseDetails = "{{ route('site.courses.details', ':slug') }}";
        const serviceDetails = "{{ route('site.services.details', ':slug') }}";

        const coursesUrl = "{{ route('site.courses') }}";
        const servicesUrl = "{{ route('site.services') }}";

        $('#searchForm').on('submit', function(e) {

            e.preventDefault();

            let form = $(this);

            $.ajax({

                url: searchUrl,
                type: 'GET',
                data: form.serialize(),

                beforeSend: function() {

                    $('#search-results').html(`
                    <div class="text-center py-5">
                        <i class="fa fa-spinner fa-spin"></i>
                        Pesquisando...
                    </div>
                `);

                },

                success: function(response) {

                    let html = '';

                    /*
                    ===========================================
                    ALUNOS
                    ===========================================
                    */

                    html += `
                    <div class="mb-5">

                        <h5 class="border-bottom pb-2">
                            Alunos Finalistas
                        </h5>
                `;

                    if (response.students.length > 0) {

                        response.students.forEach(function(student) {

                            html += `

                            <div class="mb-3">

                                <strong>${student.name}</strong>

                                <br>

                                <small>

                                    ${student.course ? student.course.name : ''}

                                </small>

                            </div>

                        `;

                        });

                    } else {

                        html += `
                        <p class="text-muted">
                            Nenhum aluno encontrado.
                        </p>
                    `;

                    }

                    html += `</div>`;

                    /*
                    ===========================================
                    CURSOS
                    ===========================================
                    */

                    html += `
                    <div class="mb-5">

                        <h5 class="border-bottom pb-2">
                            Cursos
                        </h5>
                `;

                    if (response.courses.length > 0) {

                        response.courses.slice(0, 5).forEach(function(course) {

                            let url = courseDetails.replace(':slug', course.slug);

                            html += `

                            <div class="mb-2">

                                <a href="${url}">
                                    ${course.name}
                                </a>

                            </div>

                        `;

                        });

                        if (response.courses.length > 5) {

                            html += `

                            <div class="mt-2">

                                <a href="${coursesUrl}" class="fw-bold">

                                    Ver todos os cursos →

                                </a>

                            </div>

                        `;

                        }

                    } else {

                        html += `
                        <p class="text-muted">
                            Nenhum curso encontrado.
                        </p>
                    `;

                    }

                    html += `</div>`;

                    /*
                    ===========================================
                    SERVIÇOS
                    ===========================================
                    */

                    html += `
                    <div class="mb-4">

                        <h5 class="border-bottom pb-2">
                            Serviços
                        </h5>
                `;

                    if (response.services.length > 0) {

                        response.services.slice(0, 5).forEach(function(service) {

                            let url = serviceDetails.replace(':slug', service.slug);

                            html += `

                            <div class="mb-2">

                                <a href="${url}">
                                    ${service.name}
                                </a>

                            </div>

                        `;

                        });

                        if (response.services.length > 5) {

                            html += `

                            <div class="mt-2">

                                <a href="${servicesUrl}" class="fw-bold">

                                    Ver todos os serviços →

                                </a>

                            </div>

                        `;

                        }

                    } else {

                        html += `
                        <p class="text-muted">
                            Nenhum serviço encontrado.
                        </p>
                    `;

                    }

                    html += `</div>`;

                    $('#search-results').html(html);

                },

                error: function(xhr) {

                    $('#search-results').html(`

                    <div class="alert alert-danger">

                        Não foi possível realizar a pesquisa.

                    </div>

                `);

                }

            });

        });

    });
</script>
