<footer class="container-fluid py-5 d-none d-md-block">
	
	<div class="container">
		
		<div class="row">

		<!-- GRID CATEGORÍAS FOOTER -->
			
			<div class="col-md-7 col-lg-6">

			<!--=====================================
			GRID FOOTER DE CATEGORÍAS
			======================================-->

			<?php include("modules/gridFooter.php"); ?>
				
				
			</div>

			<div class="d-none d-lg-block col-lg-1 col-xl-2"></div>

			<!-- NEWLETTER -->

			<div class="col-md-5 col-lg-5 col-xl-4 pt-5">
				
				<h6 class="text-white">Inscríbete en nuestro newletter:</h6>

				<?php echo do_shortcode('[optinform]'); ?>

				<div class="input-group my-4 newletter">


					
					<!-- <input type="text" class="form-control" placeholder="Ingresa tu Email">

					<div class="input-group-append">
						
						<span class="input-group-text bg-dark text-white">Inscribirse</span>

					</div> -->

				</div>

				<div class="p-0 w-100 pt-2 redesFooter">
				
					<ul class="d-flex justify-content-left p-0">			
						
					</ul>

				</div>

			</div>

		</div>

	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>