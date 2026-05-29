@extends('layouts._site.main')
@section('title', 'Contacte Nos')
@section('content')

<!-- Start Main Banner -->
<section class="main-banner" style="background-image: url({{ url('site/wp-content/themes/edplus/assets/img/bg/main-banner.jpg') }});">
	<div class="container text-center">
		<div class="mbanner_content">
			<h2>Contact			</h2>
			<p><a href="{{ route('site.home') }}">Home</a> <i class="ph ph-caret-right"></i> Contact</p>
		</div>
	</div>
				<img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/blshape.svg') }}" alt="" class="blshape">
					<img src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/brshape.svg') }}" alt="" class="brshape">
		</section>
<!-- End Main Banner -->

    <div class="page-builder-template">
        <div data-elementor-type="wp-page" data-elementor-id="1074" class="elementor elementor-1074"
            data-elementor-post-type="page">
            <div class="elementor-element elementor-element-8a2ddfb e-flex e-con-boxed e-con e-parent" data-id="8a2ddfb"
                data-element_type="container" data-e-type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-e229234 e-con-full e-flex e-con e-child"
                        data-id="e229234" data-element_type="container" data-e-type="container">
                        <div class="elementor-element elementor-element-9043313 elementor-widget elementor-widget-edplus-title"
                            data-id="9043313" data-element_type="widget" data-e-type="widget"
                            data-widget_type="edplus-title.default">
                            <div class="elementor-widget-container">
                                <div class="section-title  text-start wow fadeInUp">
                                    <span>

                                    </span>
                                    <h2>We’re always excited to hear <br> from you!</h2>
                                    <img decoding="async" src="{{ url('site/wp-content/themes/edplus/assets/img/shapes/title.svg') }}"
                                        alt="">

                                </div>

                            </div>
                        </div>
                        <div class="elementor-element elementor-element-f44caa0 elementor-widget elementor-widget-edplus-contact-info"
                            data-id="f44caa0" data-element_type="widget" data-e-type="widget"
                            data-widget_type="edplus-contact-info.default">
                            <div class="elementor-widget-container">
                                <div class="contact-item">
                                    <div class="cont_icon">
                                        <i class="ph ph-map-pin"></i>
                                    </div>

                                    <div class="cont_content">
                                        <h4>Address</h4>
                                        <p>
                                            Studio 89D, Riley Ford, North Michael Harber <br> District, CFTE A65 </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="elementor-element elementor-element-75f1741 elementor-widget elementor-widget-edplus-contact-info"
                            data-id="75f1741" data-element_type="widget" data-e-type="widget"
                            data-widget_type="edplus-contact-info.default">
                            <div class="elementor-widget-container">
                                <div class="contact-item">
                                    <div class="cont_icon">
                                        <i class="ph ph-envelope-simple"></i>
                                    </div>

                                    <div class="cont_content">
                                        <h4>Email Address </h4>
                                        <p>
                                            <a href="mailto:support@example.com">Support @example.com</a><br>
                                            <a href="mailto:support@example.com">Info@example.com</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="elementor-element elementor-element-b79bbed elementor-widget elementor-widget-edplus-contact-info"
                            data-id="b79bbed" data-element_type="widget" data-e-type="widget"
                            data-widget_type="edplus-contact-info.default">
                            <div class="elementor-widget-container">
                                <div class="contact-item">
                                    <div class="cont_icon">
                                        <i class="ph ph-phone-call"></i>
                                    </div>

                                    <div class="cont_content">
                                        <h4>Phone Number</h4>
                                        <p>
                                            <a href="tel:support@example.com">+9902145698745</a><br>
                                            <a href="tel:support@example.com">+9902148746845</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-b8a3612 e-con-full e-flex e-con e-child"
                        data-id="b8a3612" data-element_type="container" data-e-type="container">
                        <div class="elementor-element elementor-element-081a00e elementor-widget elementor-widget-edplus-contact-form"
                            data-id="081a00e" data-element_type="widget" data-e-type="widget"
                            data-widget_type="edplus-contact-form.default">
                            <div class="elementor-widget-container">

                                <div class="contact-form"
                                    style="background-image: url({{ url('site/wp-content/uploads/2025/03/contact.png') }});">
                                    <div class="cf_title wow fadeInUp"
                                        style="visibility: visible; animation-name: fadeInUp;">
                                        <h4>Get in Touch</h4>
                                        <p>
                                            Feel free to contact with us, we don’t span your email </p>
                                    </div>

                                    <div class="wow fadeInUp">

                                        <div class="wpcf7 no-js" id="wpcf7-f1097-p1074-o1" lang="en-US" dir="ltr"
                                            data-wpcf7-id="1097">
                                            <div class="screen-reader-response">
                                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                <ul></ul>
                                            </div>
                                            <form action="https://wpdemothemes.com/edplus/contact/#wpcf7-f1097-p1074-o1"
                                                method="post" class="wpcf7-form init" aria-label="Contact form"
                                                novalidate="novalidate" data-status="init">
                                                <fieldset class="hidden-fields-container"><input type="hidden"
                                                        name="_wpcf7" value="1097" /><input type="hidden"
                                                        name="_wpcf7_version" value="6.1.6" /><input type="hidden"
                                                        name="_wpcf7_locale" value="en_US" /><input type="hidden"
                                                        name="_wpcf7_unit_tag" value="wpcf7-f1097-p1074-o1" /><input
                                                        type="hidden" name="_wpcf7_container_post"
                                                        value="1074" /><input type="hidden"
                                                        name="_wpcf7_posted_data_hash" value="" />
                                                </fieldset>
                                                <p><input type="text" placeholder="Full Name*" /><br />
                                                    <input type="email" placeholder="Email Address*" /><br />
                                                    <input type="text" placeholder="Subject *" /><br />
                                                    <textarea placeholder="Your Message*"></textarea><br />
                                                    <button type="submit" class="fbtn"> Send Message <i
                                                            class="ph ph-arrow-right"></i></button>
                                                </p>
                                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-733c405 e-con-full e-flex e-con e-parent" data-id="733c405"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-891dcdb elementor-widget elementor-widget-google_maps"
                    data-id="891dcdb" data-element_type="widget" data-e-type="widget"
                    data-widget_type="google_maps.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-custom-embed">
                            <iframe loading="lazy"
                                src="https://maps.google.com/maps?q=TemplateMonster&amp;t=m&amp;z=20&amp;output=embed&amp;iwloc=near"
                                title="TemplateMonster" aria-label="TemplateMonster"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
