<?php get_header(); ?>	

<div class="container">

<!-- The loop -->



<!-- /The loop -->

</div>

	<?php get_template_part("carrusel"); ?>	

	<!-- Container 2 -->
	<div>
		<div class="container">	
			<div class="row p-25">
				<div class="col-md-8 mx-auto text-center pt-5">
					<p class="lead font-weight-bold">El bootcamp de programación más grande de latinoamérica</p>
					<p class="text-center"">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
					<div class="text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/./images/gente_feliz.png" class="w-25">
					</div>
				</div>
			</div>
		</div>
		<!-- /Container 2 --> 	

		<!-- Container3 -->
		<div class="bg-light">
			<div class="container">	
				<div class="row">
					<div class="col-md-8 mx-auto text-center p-5">
						<p class="lead font-weight-bold">Solicita información e inscríbete</p>
						<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<p class="lead">
							<a class="btn btn-primary btn-lg" href="#" role="button">Inscríbete</a>
						</p>
						<hr class="my-4">
						<p>Vive la experiencia Desafío Latam</p>
					</div>
				</div>	
			</div>
		</div>
		<!-- /Container3 -->

<?php get_footer(); ?>	
