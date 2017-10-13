<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package site
 */

?>

	<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left">
					<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-bot.png"; ?>" />
				</div>
			</div><!-- .row -->
			<div class="row"><br>
				<div class="col-md-6 text-left">
					<p>A Data Certa surgiu com o objetivo de oferecer soluções que tornem mais simples a vida da sua empresa, seja de pequeno ou grande porte.</p>
					<p>Com nossas soluções em manuseio, transporte, courier, logística reversa, impressão com dados variáveis e gestão postal, seus prazos são levados a sério.</p>
					<p>Com tecnologia, excelência no atendimento e o melhor custo-benefício, a Data Certa cuida do gerenciamento completo de toda a cadeia produtiva do seu produto do início ao destino final.</p>
				</div>
				<div class="col-md-3 col-md-offset-3 text-left">
					<strong>Receba nossas novidades</strong><br><br>
					<?php echo do_shortcode('[contact-form-7 id="556" title="Receba Novidade"]'); ?>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-9">
					<ul class="menu-footer clearfix">
						<li><a href="<?php echo esc_url( home_url( '/' )."sobre" ); ?>">A Empresa</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' )."mobidata" ); ?>">Mobidata</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) )."servicos"; ?>">Serviços</a></li>
						<li><a target="_blank" href="<?php echo esc_url( home_url( '/' ) )."blog"; ?>">Blog</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' )."quero-ser-cliente" ); ?>">Quero ser Cliente</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' )."orcamento" ); ?>">Calcular Frete</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="redes_sociais_header">
			              <li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCb42k7qXDCeQSI7LvPDc8ZA"></a></li>
			              <li class="instagram"><a target="_blank" href="https://www.instagram.com/datacerta"></a></li>
			              <li class="twitter"><a target="_blank" href="https://twitter.com/datacertalog"></a></li>
			              <li class="facebook"><a target="_blank" href="https://www.facebook.com/datacertalogistica"></a></li>
			              <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company-beta/10804304"></a></li>
					</ul>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-6 text-left copy-text">
					&copy; Copyright <?php echo date('Y') ?> - Data Certa
				</div>
				<div class="col-md-3 col-md-offset-3 copy-text text-right">
					<a target="_blank" href="http://seimidigital.com.br/">
						<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>" />
					</a>
				</div>				
			</div>
		</div><!-- .container -->
	</section><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
