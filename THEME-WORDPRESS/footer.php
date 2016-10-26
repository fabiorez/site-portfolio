		</main>

		<footer>
			<div class="logo-rodape">
				<a href="index.html">
					<img src="images/logo-fr-rodape.svg" alt="Logo Rodape Fr">
				</a>
			</div>
			<p>2016 Todos os direitos reservados</p>
		</footer>
	</div>

	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/wow/dist/wow.min.js"></script>
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
</body>
</html>
