<?php get_header(); ?>

<!-- END nav -->
<section class="hero-wrap hero-wrap-2 d-flex" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/bg_2.jpg'); background-repeat: no-repeat; background-size: cover;background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'topo_imagem' ), 'large' ).')' ?>;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate text-bread d-flex align-items-center">
                <div class="text">
                    <h1 class="mb-3 mt-5 bread"><?php the_title(); ?></h1>
                    <p class="breadcrumbs"> <span><?php bloginfo( 'name' ); ?></span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <section class="ftco-section">
            <div class="container">
                <div class="col-md-12"> 
                    <?php the_content(); ?> 
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'marcilio_adv' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>