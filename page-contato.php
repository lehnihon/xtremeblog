<?php
get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs' ); ?>

<section id="orcamento">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="small">Cobrança</h1>
				<h5>Por favor, preencha todos os campos</h5><br>
				<?php echo do_shortcode('[contact-form-7 id="557" title="Contato"]'); ?>
			</div>
			<div class="col-md-6">
				<h2>Quer saber mais sobre a Data Certa Logística?</h2>
				<h5><strong>Converse com um especialista em logística e veja como podemos te ajudar!</strong></h5><br>
				<div class="tel-botao">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tel.jpg"; ?>" alt="telefone"><span>11 2061-3138</span>
				</div>
			</div>
		</div>
	</div>
</section> 

<?php get_footer(); ?>
