<?php
get_header('blog'); ?>

<section id="blog">
	<div class="container">
		<div class="row">
			<div class="col-md-8 text-left">
				<?php 
				echo do_shortcode("[metaslider id=541]"); 
				?>
				<br><br>
				<?php 
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

				$i = 1;
				$args = array(

					'posts_per_page' => 4,
				    'orderby' => 'post_date',
				    'order' => 'DESC',
				    'category_name' => 'noticias',
				    'paged' => $paged);
				$query = new WP_Query( $args ); 
				?>	
				
				<?php if ( $query->have_posts() ) : ?>
					<div class="row">
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<div class="col-md-6">
								<article id="post-<?php the_ID(); ?>" class="<?php if($i < 3): echo 'linha-blog'; endif; ?>">
									<header class="entry-header">
										<?php if ( has_post_thumbnail() && !is_search() ) { ?>
											<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>">
												<?php the_post_thumbnail('', array(
													'class' => "e-cinza img-responsive",
												)); ?>
											</a>
										<?php } ?>

										<?php if ( is_single() ) { ?>
											<h2 class="entry-title"><?php the_title(); ?></h2>
										<?php }
										else { ?>
											<h2 class="entry-title">
												<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
											</h2>
										<?php } // is_single() ?>
									</header> <!-- /.entry-header -->
									
									<div class="entry-summary">
										<?php echo get_the_twitter_excerpt(); ?>
										<p class="confira">
											<a href="<?php the_permalink(); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-plus.jpg"; ?>"/>  Confira o post completo</a>
										</p>
									</div> <!-- /.entry-summary -->

								</article> <!-- /#post -->
							</div>
							<?php
							if($i == 2):
							?>
								</div><div class="row">
							<?php	
							endif;
							$i++;
							?>
						<?php endwhile; ?>
					</div>
					<div class="paginacao">
					<?php
					$big = 999999999; // need an unlikely integer
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $query->max_num_pages
					) );
					?>
					</div>
				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div><!-- .container -->
</section>

<?php get_footer(); ?>