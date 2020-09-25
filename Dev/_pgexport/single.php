<?php get_header(); ?>

<!-- END nav -->
<section class="hero-wrap hero-wrap-2 d-flex" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/bg_2.jpg'); background-repeat: no-repeat; background-size: cover;background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'topo_imagem' ), 'large' ).')' ?>;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate text-bread d-flex align-items-center">
                <div class="text">
                    <h1 class="mb-3 mt-5 bread"><?php the_title(); ?></h1>
                    <p class="breadcrumbs"> <span><?php echo get_the_author_meta( 'user_firstname', false ) ?></span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php PG_Helper::rememberShownPost(); ?>
                    <div class="col-lg-8 ftco-animate">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'marcilio_adv' ); ?></p>
            <?php endif; ?> 
            <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <h3><?php _e( 'Categorias', 'marcilio_adv' ); ?></h3>
                    <ul class="categories">
                        <?php the_terms( get_the_ID(), 'category' ); ?>
                    </ul>
                </div>
                <div class="sidebar-box ftco-animate">
                    <h3><?php _e( 'Tags', 'marcilio_adv' ); ?></h3>
                    <ul class="tagcloud">
                        <?php the_terms( get_the_ID(), 'post_tag' ); ?>
                    </ul>
                </div>
            </div>
            <!-- END COL -->
        </div>
    </div>
</section>        

<?php get_footer(); ?>