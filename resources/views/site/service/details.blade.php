 @extends('layouts._site.main')
 @section('title', 'Detalhes dos Serviços | IJOMAC')
 @section('content')
     <!-- Start Main Banner -->
     <section class="main-banner"
         style="
                background-image: url({{ url('site/wp-content/themes/edplus/assets/img/bg/banner2.jpeg') }});
            ">
         <div class="container text-center">
             <div class="mbanner_content">
                 <h2>{{ $service->name }}</h2>
                 <p>
                     <a href="../index.html">Página Inicial</a>
                     <i class="ph ph-caret-right"></i> {{ $service->name }}
                 </p>
             </div>
         </div>
         <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/blshape.svg') }}" alt="" class="blshape" />
         <img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/brshape.svg') }}" alt="" class="brshape" />
     </section>
     <!-- End Main Banner -->

     <!-- START Blog Grid -->
     <section class="blog-details section-padding">
         <div class="container">
             <div class="row">
                 <div class="col-xl-8 col-lg-8 col-md-12 col-12 wow fadeIn">
                     <div class="post-inner">
                         <article id="post-1189"
                             class="post-1189 post type-post status-publish format-standard has-post-thumbnail hentry category-web-design tag-design tag-software tag-wordpress">
                             <div class="post-inner">
                                 <div class="post-image">
                                     <img fetchpriority="high" width="753" height="550"
                                         src="{{ asset('storage/' . $service->image) }}"
                                         class="attachment-edplus_course_details size-edplus_course_details wp-post-image"
                                         alt="" decoding="async"
                                         srcset="
                                                {{ asset('storage/' . $service->image) }}         978w,
                                                {{ asset('storage/' . $service->image) }} 600w,
                                                {{ asset('storage/' . $service->image) }} 300w,
                                                {{ asset('storage/' . $service->image) }} 768w
                                            "
                                         sizes="(max-width: 753px) 100vw, 753px" />
                                 </div>

                                 <div class="entry-content">
                                     <p>
                                         {!! $service->description !!}
                                     </p>
                                 </div>
                             </div>
                             <!-- End post-inner -->
                         </article>
                         <!-- #post-1189 -->
                         <!-- #comments -->
                     </div>
                 </div>
                 <!-- END Col -->

                 <div class="col-xl-4 col-lg-4 col-12 sidebar">
                     <aside id="secondary" class="widget-area">
                         <div class="event_info">
                                <h3>Algumas informações</h3>

                                <ul>
                                    <li
                                        class="evd d-flex align-items-center justify-content-between"
                                    >
                                        <span>
                                            <i class="fa fa-calendar"></i>
                                            <h5>Data de Início</h5>
                                        </span>

                                        <p>{{ $service->created_at->format('M d, Y') }}</p>
                                    </li>

                                    <li
                                        class="evd d-flex align-items-center justify-content-between"
                                    >
                                        <span>
                                            <i
                                                class="fa-regular fa-calendar"
                                            ></i>
                                            <h5>Última Atualização</h5>
                                        </span>

                                        <p>{{ $service->updated_at->format('M d, Y') }}</p>
                                    </li>

                                    <li
                                        class="evd d-flex align-items-center justify-content-between"
                                    >
                                        <span>
                                            <i
                                                class="fa-solid fa-map-location"
                                            ></i>
                                            <h5>Localização</h5>
                                        </span>

                                        <p>Cacuaco</p>
                                    </li>
                                </ul>
                                <div class="event_info_register">
                                    <a class="blue_btn" href="{{ route('site.services.request', ['service' => $service]) }}"
                                        >Solicitar</a
                                    >
                                </div>
                            </div>
                     <!-- #secondary -->
                 </div>
                 <!-- End Col -->
             </div>
         </div>
     </section>
     <!-- END Blog Details -->

 @endsection
