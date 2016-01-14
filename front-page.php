<?php 

    if(is_user_logged_in()):
       auth_redirect();
    endif;

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main text-center" role="main">


    <?php 


        // WP_Query arguments
        $args = array (
            'cat'                    => '4',
            'category_name'          => 'clients',
            'posts_per_page'         => '50',
            'order'                  => 'ASC',
            'orderby'                => 'title',
        );
        // The Query
        $query = new WP_Query( $args );

        if( $query->have_posts() ) :  while($query->have_posts() ) : $query->the_post(); ?>
                
          
            <article id="post-<?php the_ID(); ?>" <?php post_class('post-grid post-standard col-sm-6 col-xs-12'); ?>>
                <div class="link-wrapper">
                    <div class="post-cover-wrapper">
                        <?php if( has_post_thumbnail() ) {
                            $featured_image =  wp_get_attachment_image_src(get_post_thumbnail_id(), 'riba-lite-2x' );
                            echo '<a href="'.esc_url( get_the_permalink() ).'" class="post-cover post-cover-'.get_the_ID().'"><img class="lazy" data-original="'.esc_url( $featured_image[0] ).'" width="'. esc_attr( $featured_image[1] ).'" height="'. esc_attr( $featured_image[2] ).'"></a>';
                        } else if( !has_post_thumbnail() && get_theme_mod('riba_lite_enable_random_blog_images', 'images_enabled') == 'images_enabled') {
                            echo '<a href="'.esc_url( get_the_permalink() ).'" class="post-cover post-cover-'.get_the_ID().'"><div class="entry-featured-image">';
                            echo '<img src="' . esc_url( get_template_directory_uri() . '/layout/images/blog-defaults/random-'.mt_rand(1,7) ).'-1200x900.jpg">';
                            echo '</div></a><!--/.entry-featured-image-->';
                        } ?>
                    </div><!-- .post-cover-wrapper -->

                    <div class="entry-content">
                        <header class="entry-header">
                            <?php the_title( sprintf( '<h3 class="entry-title post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

                            <?php if ( 'post' == get_post_type() ) : ?>
                                <?php do_action('mtl_entry_meta'); ?>
                            <?php endif; ?>
                        </header><!-- .entry-header -->
                    </div><!-- .entry-content -->
                </div>

            </article><!-- #post-## -->
           


        <?php endwhile; ?>
            <div class="clearfix"></div>


            <?php do_action('mtl_after_content_above_footer'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>