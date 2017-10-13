<?php
get_header('blog'); ?>
</header><!--#header-->

<div id="content">
	<div class="container">
		<div class="row blog-articles">
			<div class="col-md-8">
				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php printf( esc_html__( 'Resultados da procura por: %s', 'site' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );
						?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>	
			</div>
		</div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
