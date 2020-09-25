<?php get_header(); ?>

<section class="hero-wrap hero-wrap-2 d-flex" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/bg_2.jpg'); background-repeat: no-repeat; background-size: cover;background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'topo_imagem' ), 'large' ).')' ?>;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate text-bread d-flex align-items-center">
                <div class="text">
                    <h1 class="mb-3 mt-5 bread"><?php bloginfo( 'name' ); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <?php
                $post_query_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 8,
                    'paged' => get_query_var( 'paged' ) ?: 1,
                    'order' => 'DESC',
                    'orderby' => 'date'
                )
            ?>
            <?php $post_query = new WP_Query( $post_query_args ); ?>
            <?php if ( $post_query->have_posts() ) : ?>
                <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                    <?php PG_Helper::rememberShownPost(); ?>
                    <div class="col-md-6 ftco-animate">
                        <div class="blog-entry">
                            <?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'post-thumbnail' ) : null; ?>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="block-20" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/image_1.jpg');<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"> </a>
                            <div class="text py-4">
                                <div class="meta mb-3">
                                    <div>
                                        <?php the_date(); ?>
                                    </div>
                                    <div>
                                        <?php the_author(); ?>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h3 class="heading"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'marcilio_adv' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>            

<?php get_footer(); ?>