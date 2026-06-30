 @extends('layouts._site.main')
 @section('title', 'Inscrição à Cursos | IJOMAC')
 @section('content')

     <!-- Start Main Banner -->
     <section class="main-banner"
         style="
                background-image: url({{ url('site/wp-content/themes/edplus/assets/img/bg/banner.png') }});
            ">
         <div class="container text-center">
             <div class="mbanner_content">
                 <h2>Inscrição ao curso ({{ $course->name }})</h2>
                 <p>
                     <a href="../index.html">Página Inicial</a>
                     <i class="ph ph-caret-right"></i> Inscrição à Cursos
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
                                     <form method="post" enctype="multipart/form-data"  action="{{ route('site.courses.store') }}">
                                         
                                         @csrf

                                         <input type="hidden" name="course_id" value="{{ $course->id }}" required />

                                         <div class="tutor-form-row">
                                             <div class="tutor-form-col-6">
                                                 <div class="tutor-form-group">
                                                     <label>
                                                         Nome Completo
                                                     </label>

                                                     <input type="text" name="name" value=""
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

                                                     <input type="text" name="phone" class="tutor_client_phone"
                                                         value="" placeholder="User Name"
                                                         autocomplete="phone" />
                                                 </div>
                                             </div>

                                             <div class="tutor-form-col-6">
                                                 <div class="tutor-form-group">
                                                     <label> E-Mail </label>

                                                     <input
                                                            type="text"
                                                            name="email"
                                                            value=""
                                                            placeholder="E-Mail"
                                                            autocomplete="email"
                                                        />
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="tutor-mb-24">
                                             Ao me cadastrar, concordo com os
                                             <a href="javascript:void(0);"
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
