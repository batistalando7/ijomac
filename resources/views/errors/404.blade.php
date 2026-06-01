@extends('layouts._site.main')
@section('title', 'Página não encontrada')
@section('content')

<div id="mini_cart" class="min_cart_wrapper">
	<div class="cart_drawer">
		<div class="cart_top">
			<a href="#" class="cart_close"><i class='bx bx-x'></i></a>
			<h3 class="title">Courses List</h3>
			<span class="cart_number">
				0			</span>
		</div>
		
		

<p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>


												
	</div>
</div>
	


<!-- Start Main Banner -->
<section class="main-banner" style="background-image: url(https://wpdemothemes.com/edplus/wp-content/themes/edplus/assets/img/bg/main-banner.jpg);">
	<div class="container text-center">
		<div class="mbanner_content">
			<h2>
				Página Não Encontrada	
			</h2>
			<p>
				<a href="{{ route('site.home') }}">Página Inicial</a> <i class="ph ph-caret-right"></i> 
				404			</p>
		</div>
	</div>
				<img src="https://wpdemothemes.com/edplus/wp-content/themes/edplus/assets/img/shapes/blshape.svg" alt="" class="blshape">
					<img src="https://wpdemothemes.com/edplus/wp-content/themes/edplus/assets/img/shapes/brshape.svg" alt="" class="brshape">
		</section>
<!-- End Main Banner -->



<!-- Start page_not_found -->
<section class="page_not_found section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xl-7 mx-auto text-center wow fadeIn">
				<img src='https://wpdemothemes.com/edplus/wp-content/themes/edplus/assets/img/404.jpg' alt='404 error'>					
				<h2>Página não encontrada</h2>
				<p>A página que você está procurando não existe ou foi movida.</p>
				<a href="{{ route('site.home') }}" class="blue_btn round_btn py40"><i class="ph ph-house-line"></i> 
					Voltar para a página inicial 
				</a>
			</div><!-- End Col -->			
		</div>
	</div>
</section>
<!-- End page_not_found -->

@endsection