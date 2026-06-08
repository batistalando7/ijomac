 @extends('layouts._site.main')
 @section('title', 'Detalhes dos Serviços | IJOMAC')
 @section('content')
     <!-- Start Main Banner -->
     <section class="main-banner"
         style="
                background-image: url({{ url('site/wp-content/themes/edplus/assets/img/bg/main-banner.jpg') }});
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
                                     {{-- <h2>What Dose it Work from Web?</h2>
                                     <p>
                                         Mauris pulvinar eros non dictum
                                         maximus. In at lacus scelerisque
                                         nisl maximus eleifend id ac libero.
                                         Integer interdum est hendrerit
                                         imperdiet condimentum. Pellentesque
                                         consectetur id purus ut tincidunt.
                                         Vestibulum turpis nisi, commodo quis
                                         ante a, commodo accumsan magna.
                                         Proin quis felis quis elit egestas
                                         molestie.
                                     </p>
                                     <blockquote>
                                         <p>
                                             Pellentesque habitant morbi
                                             tristique senectus et netus et
                                             malesuada fames ac turpis
                                             egestas. Phasellus finibus
                                             vestibulum eleifend. Suspendisse
                                             potenti.
                                         </p>
                                     </blockquote> --}}
                                 </div>
                             </div>
                             <!-- End post-inner -->
                         </article>
                         <!-- #post-1189 -->

                         {{-- <nav class="navigation post-navigation" aria-label="Posts">
                             <h2 class="screen-reader-text">
                                 Post navigation
                             </h2>
                             <div class="nav-links">
                                 <div class="nav-previous">
                                     <a href="../student-learning-through-an-online-computer/index.html"
                                         rel="prev">Preview Posts</a>
                                 </div>
                             </div>
                         </nav> --}}
                         {{-- <div id="comments" class="comments-area comments mt-4">
                             <div id="respond" class="comment-respond">
                                 <h3 id="reply-title" class="comment-reply-title">
                                     Write your comment
                                     <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond"
                                             style="display: none">Cancel reply</a></small>
                                 </h3>
                                 <form action="https://wpdemothemes.com/edplus/wp-comments-post.php" method="post"
                                     id="commentform" class="comment-form">
                                     <div class="row g-lg-4 g-3">
                                         <div class="col-lg-6">
                                             <div class="comment-grp">
                                                 <input type="text" class="form-control" name="author" id="author"
                                                     value="" placeholder="Your Name *" size="22" tabindex="1"
                                                     aria-required="true" class="" />
                                             </div>
                                         </div>
                                         <div class="col-lg-6">
                                             <div class="comment-grp">
                                                 <input type="text" name="email" class="form-control" id="email"
                                                     value="" placeholder="Your Email *" size="22" tabindex="2"
                                                     aria-required="true" class="" />
                                             </div>
                                         </div>
                                         <div class="col-lg-12">
                                             <div class="comment-grp">
                                                 <input type="text" name="url" class="form-control" id="url"
                                                     value="" placeholder="Website" size="22" tabindex="2"
                                                     aria-required="false" class="" />
                                             </div>
                                         </div>
                                     </div>
                                     <p class="comment-form-cookies-consent">
                                         <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent"
                                             type="checkbox" value="yes" />
                                         <label for="wp-comment-cookies-consent">Save my name, email, and
                                             website in this browser for the
                                             next time I comment.</label>
                                     </p>
                                     <div class="col-lg-12 mb-xl-3">
                                         <div class="comment-grp text-aras position-relative">
                                             <textarea id="comment" class="comment_field form-control" name="comment" cols="30" rows="5"
                                                 placeholder="Write Your Comment Here" aria-required="true"></textarea>
                                         </div>
                                     </div>
                                     <p class="form-submit">
                                         <input name="submit" type="submit" id="submit" class="submit"
                                             value="Post Comment" />
                                         <input type="hidden" name="comment_post_ID" value="1189"
                                             id="comment_post_ID" />
                                         <input type="hidden" name="comment_parent" id="comment_parent"
                                             value="0" />
                                     </p>
                                 </form>
                             </div>
                             <!-- #respond -->
                         </div> --}}
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

                                    {{-- <li
                                        class="evd d-flex align-items-center justify-content-between"
                                    >
                                        <span>
                                            <i class="fa-regular fa-clock"></i>
                                            <h5>End Time</h5>
                                        </span>

                                        <p>8:00 PM</p>
                                    </li> --}}

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
                                    <a class="blue_btn" href="#"
                                        >Solicitar</a
                                    >
                                </div>
                            </div>
                         {{-- <div id="recent-posts-2" class="widget widget_recent_entries wow fadeInUp">
                             <h3 class="widget-title">Recent Posts</h3>
                             <ul>
                                 <li>
                                     <a href="index.html" aria-current="page">Leverage agile frameworks to
                                         provide</a>
                                 </li>
                                 <li>
                                     <a href="../student-learning-through-an-online-computer/index.html">Student Learning
                                         Through an Online
                                         Computer</a>
                                 </li>
                                 <li>
                                     <a href="../online-learning-program-for-students-2/index.html">Online Learning Program
                                         for
                                         Students</a>
                                 </li>
                                 <li>
                                     <a href="../leverage-agile-frameworks-to-provide-2/index.html">Leverage agile
                                         frameworks to
                                         provide</a>
                                 </li>
                                 <li>
                                     <a href="../student-learning-through-an-online-computer-2/index.html">Student Learning
                                         Through an Online
                                         Computer</a>
                                 </li>
                             </ul>
                         </div>
                         <div id="categories-2" class="widget widget_categories wow fadeInUp">
                             <h3 class="widget-title">Categories</h3>
                             <ul>
                                 <li class="cat-item cat-item-16">
                                     <a href="../category/education/index.html">Education</a>
                                 </li>
                                 <li class="cat-item cat-item-82">
                                     <a href="../category/web-design/index.html">Web Design</a>
                                 </li>
                                 <li class="cat-item cat-item-17">
                                     <a href="../category/wordpress/index.html">WordPress</a>
                                 </li>
                             </ul>
                         </div>
                         <div id="tag_cloud-2" class="widget widget_tag_cloud wow fadeInUp">
                             <h3 class="widget-title">Tags</h3>
                             <div class="tagcloud">
                                 <a href="../tag/computer/index.html"
                                     class="tag-cloud-link tag-link-87 tag-link-position-1" style="font-size: 8pt"
                                     aria-label="computer (1 item)">computer</a>
                                 <a href="../tag/design/index.html" class="tag-cloud-link tag-link-85 tag-link-position-2"
                                     style="font-size: 8pt" aria-label="design (1 item)">design</a>
                                 <a href="../tag/learning/index.html"
                                     class="tag-cloud-link tag-link-88 tag-link-position-3" style="font-size: 8pt"
                                     aria-label="learning (1 item)">learning</a>
                                 <a href="../tag/program/index.html"
                                     class="tag-cloud-link tag-link-89 tag-link-position-4" style="font-size: 8pt"
                                     aria-label="program (1 item)">program</a>
                                 <a href="../tag/software/index.html"
                                     class="tag-cloud-link tag-link-83 tag-link-position-5" style="font-size: 8pt"
                                     aria-label="software (1 item)">software</a>
                                 <a href="../tag/student/index.html"
                                     class="tag-cloud-link tag-link-86 tag-link-position-6" style="font-size: 22pt"
                                     aria-label="student (2 items)">student</a>
                                 <a href="../tag/wordpress/index.html"
                                     class="tag-cloud-link tag-link-84 tag-link-position-7" style="font-size: 8pt"
                                     aria-label="wordpress (1 item)">wordpress</a>
                             </div>
                         </div> --}}
                     </aside>
                     <!-- #secondary -->
                 </div>
                 <!-- End Col -->
             </div>
         </div>
     </section>
     <!-- END Blog Details -->

 @endsection
