<!-- Start Popup Search Box -->
<div id="popup_searchbox" class="popup_searchbox_wrapper">
	<div class="searchbox_drawer position-relative">
		<a href="#" class="popup_close"><i class="bx bx-x"></i></a>				
		<div class="popup_searchform text-center">
			<div class="col-lg-7 mx-auto">
				<form action="{{ route('site.search') }}" class="position-relative" method="get">
					@csrf
					<input type="text" value="" name="search" placeholder="O que você está procurando?">
					<button type="submit"><i class="ph ph-magnifying-glass"></i> <span>Pesquisar</span></button>
					<input type="hidden" name="post_type" value="courses" />
				</form>
			</div>									
		</div>									
	</div>
</div>			
<!-- End Popup Search Box -->