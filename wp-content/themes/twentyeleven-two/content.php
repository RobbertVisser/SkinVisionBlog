<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( is_sticky() ) : ?>
				<hgroup>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<h3 class="entry-format"><?php _e( 'Featured', 'twentyeleven' ); ?></h3>
				</hgroup>
			<?php else : ?>
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<?php endif; ?>
		</header><!-- .entry-header -->



		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'read more <span class="meta-nav">+</span>', 'twentyeleven' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>

      <?php edit_post_link( __( 'Edit article', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>

		</div><!-- .entry-content -->
		<?php endif; ?>




			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php twentyeleven_posted_on(); ?>

  			<?php
  				$categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );
  				if ( $categories_list ):
  			?>
  			<span class="cat-links">
  				<?php printf( __( '<span class="%1$s">in</span> %2$s', 'twentyeleven' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
  				$show_sep = true; ?>
  			</span>
  			<?php endif; // End if categories ?>

  			<?php if ( comments_open() && ! post_password_required() ) : ?>

    			<?php if ( $show_sep ) : ?>
    			<span class="sep"> | </span>
    			<?php endif; // End if $show_sep ?>

  			  <?php comments_popup_link( '<span class="leave-reply">' . __( 'Comment', 'twentyeleven' ) . '</span>', __( '<b>1</b> comment', 'twentyeleven' ), __( '<b>%</b> comments', 'twentyeleven' ) ); ?>

  			<?php endif; // Comments open ?>

			</div><!-- .entry-meta -->
			<?php endif; ?>




	</article><!-- #post-<?php the_ID(); ?> -->
