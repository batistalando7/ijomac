 @extends('layouts._site.main')
 @section('title', 'Detalhes dos Serviços | IJOMAC')
 @section('content')

     <!-- Start Main Banner -->
     <section class="main-banner"
         style="
                background-image: url({{ url('site/wp-content/themes/edplus/assets/img/bg/banner.png') }});
            ">
         <div class="container text-center">
             <div class="mbanner_content">
                 <h2>Solicitar serviço ({{ $service->name }})</h2>
                 <p>
                     <a href="../index.html">Página Inicial</a>
                     <i class="ph ph-caret-right"></i> Solicitar serviço
                 </p>
             </div>
         </div>
         <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/blshape.svg') }}" alt="" class="blshape" />
         <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/brshape.svg') }}" alt="" class="brshape" />
     </section>
     <!-- End Main Banner -->

     <div class="page-wrapper">
         <div class="container">
             <div class="row">
                 <div class="col-lg-8 col-xl-8 mx-auto section-padding">
                     <article id="post-567" class="single-post-details">
                         <div class="post-single">
                             <div class="single-post-content">
                                 <div id="tutor-registration-wrap">
                                     <form method="post" enctype="multipart/form-data"  action="{{ route('site.serviceRequest.store') }}">
                                         {{-- <input type="hidden" name="tutor_course_enroll_attempt" value="" />

                                         <input type="hidden" id="_tutor_nonce" name="_tutor_nonce"
                                             value="942283c3eb" /><input type="hidden" name="_wp_http_referer"
                                             value="/edplus/student-registration/" />
                                         <input type="hidden" value="tutor_register_student" name="tutor_action" /> --}}

                                         @csrf

                                         <input type="hidden" name="service_id" value="{{ $service->id }}" required />

                                         <div class="tutor-form-row">
                                             <div class="tutor-form-col-6">
                                                 <div class="tutor-form-group">
                                                     <label>
                                                         Nome Completo
                                                     </label>

                                                     <input type="text" name="client_name" value=""
                                                         placeholder="First Name" required autocomplete="given-name" />
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="tutor-form-row">
                                             <div class="tutor-form-col-6">
                                                 <div class="tutor-form-group">
                                                     <label>
                                                         Telefone
                                                     </label>

                                                     <input type="text" name="client_phone" class="tutor_client_phone"
                                                         value="" placeholder="User Name" required
                                                         autocomplete="client_phone" />
                                                 </div>
                                             </div>

                                             <div class="tutor-form-col-6">
                                                 <div class="tutor-form-group">
                                                     <label> E-Mail </label>

                                                     <input
                                                            type="text"
                                                            name="client_email"
                                                            value=""
                                                            placeholder="E-Mail"
                                                            required
                                                            autocomplete="email"
                                                        />
                                                 </div>
                                             </div>
                                         </div>

                                         {{--   --}}

                                         <div class="tutor-mb-24">
                                             Ao me cadastrar, concordo com os
                                             <a target="_blank" href="../terms-and-conditions/index.html"
                                                 title="Terms and Conditions">Termos e Condições do site.</a>
                                         </div>

                                         <div>
                                             <button name="tutor_register_student_btn"
                                                 class="tutor-btn blue_btn tutor-btn-block">
                                                 Enviar
                                             </button>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </article>
                 </div>
             </div>
         </div>
     </div>

 @endsection
