		</main>

		<footer>
			<div class="logo-rodape">
				<a href="index.php">
					<img src="<?php bloginfo( 'template_url' )?>/images/logo-fr-rodape.svg" alt="Logo Rodape Fr">
				</a>
			</div>
			<p><?php echo date('Y');?> Todos os direitos reservados. <a href="mailto:<?php bloginfo( 'admin_email' )?>"><?php bloginfo( 'admin_email' )?></a></p>
		</footer>
	</div>

	<script src="<?php bloginfo( 'template_url' )?>/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php bloginfo( 'template_url' )?>/bower_components/wow/dist/wow.min.js"></script>
	<script>
		$(function() {
			$('.toggle').click(function() {
				$('.layout').toggleClass('ativo');
				$('.menu-responsivo').toggleClass('ativo');
				$(this).toggleClass('ativo');
			});
			new WOW().init();
		});
	</script>
	<script src="<?php bloginfo('template_url')?>/bower_components/lightbox2/dist/js/lightbox.min.js"></script>
</body>
</html>
