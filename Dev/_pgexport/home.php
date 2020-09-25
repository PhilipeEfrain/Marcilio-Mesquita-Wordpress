<?php get_header(); ?>

        <!-- END nav -->
        <section class="hero-wrap d-flex">
            <div class="forth d-flex">
                <div class="bg-after d-flex align-self-stretch"></div>
                <div class="text">
                    <div class="desc pt-5">
                        <span class="subheading"><?php echo get_theme_mod( 'topo_bemvindo', __( 'Welcome', 'marcilio_adv' ) ); ?></span>
                        <h1 class="mb-3"><?php echo get_theme_mod( 'topo_titulo', __( 'We Help to Build You the Product', 'marcilio_adv' ) ); ?></h1>
                        <h2 class="mb-4"><?php echo get_theme_mod( 'topo_subtitulo', __( 'Business Solution', 'marcilio_adv' ) ); ?></h2>
                        <p><a href="<?php echo get_theme_mod( 'topo_botao_link', '#' ); ?>" class="btn-custom py-3 pr-2"><?php echo get_theme_mod( 'topo_botao', __( 'Get in touch', 'marcilio_adv' ) ); ?></a></p>
                    </div>
                </div>
            </div>
            <div class="third about-img">
                <div id="home" style="height: 750px; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/bg_1.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'topo_imagem' ), 'large' ).')' ?>;">
</div>
            </div>
        </section>
        <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center order-md-last" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/about.jpg'); background-position: center center;background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'area_atuacao_imagem' ), 'large' ).')' ?>;">
</div>
                    <div class="col-md-7 wrap-about pt-md-5 ftco-animate">
                        <div class="heading-section mb-5 pt-5 pl-md-5">
                            <div class="pr-md-5 mr-md-5 text-md-right">
                                <h2 class="mb-4"><?php echo get_theme_mod( 'area_atuacao_titulo', __( 'ÁREA DE ATUAÇÃO', 'marcilio_adv' ) ); ?></h2>
                            </div>
                        </div>
                        <div class="pr-md-3 pr-lg-5 pl-md-5 mr-md-5 mb-5">
                            <?php
                                $areas_atuacao_query_args = array(
                                    'post_type' => 'areas_atuacao',
                                    'posts_per_page' => 3,
                                    'paged' => get_query_var( 'paged' ) ?: 1,
                                    'order' => 'ASC',
                                    'orderby' => 'date'
                                )
                            ?>
                            <?php $areas_atuacao_query = new WP_Query( $areas_atuacao_query_args ); ?>
                            <?php if ( $areas_atuacao_query->have_posts() ) : ?>
                                <?php while ( $areas_atuacao_query->have_posts() ) : $areas_atuacao_query->the_post(); ?>
                                    <?php PG_Helper::rememberShownPost(); ?>
                                    <div <?php post_class( 'services-wrap d-flex' ); ?> id="post-<?php the_ID(); ?>">
                                        <?php if ( is_singular() ) : ?>
                                            <?php echo PG_Image::getPostImage( null, 'medium', array(
                                                    'style' => 'max-width: 50px; max-height: 50px;'
                                            ), null, null ) ?>
                                        <?php elseif ( has_post_thumbnail( get_the_ID() ) ) : ?>
                                            <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo PG_Image::getPostImage( null, 'medium', array(
                                                        'style' => 'max-width: 50px; max-height: 50px;'
                                                ), null, null ) ?></a>
                                        <?php endif; ?>
                                        <div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
                                            <?php if ( is_singular() ) : ?>
                                                <h3 class="heading"><?php the_title(); ?></h3>
                                            <?php else : ?>
                                                <h3 class="heading"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
                                            <?php endif; ?>
                                            <p align="justify"><?php echo get_the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.', 'marcilio_adv' ); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section testimony-section ftco-no-pt">
            <div class="container-fluid px-4">
                <div class="col-md-12 heading-section ftco-animate text-center">
                    <h2 class="mb-4" style="color: #ffffff; padding-top: 50px;"><?php _e( 'Sócios', 'marcilio_adv' ); ?></h2>
                </div>
                <div class="row ftco-animate">
                    <?php
                        $advogados_associados_query_args = array(
                            'category_name' => 'socios',
                            'post_type' => 'advogados_associados',
                            'nopaging' => true,
                            'order' => 'ASC',
                            'orderby' => 'date'
                        )
                    ?>
                    <?php $advogados_associados_query = new WP_Query( $advogados_associados_query_args ); ?>
                    <?php if ( $advogados_associados_query->have_posts() ) : ?>
                        <?php while ( $advogados_associados_query->have_posts() ) : $advogados_associados_query->the_post(); ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div <?php post_class( 'col-md-5 text-center' ); ?> id="post-<?php the_ID(); ?>">
                                <?php if ( is_singular() ) : ?>
                                    <?php echo PG_Image::getPostImage( null, 'large', array(
                                            'class' => 'img-fluid'
                                    ), 'both', null ) ?>
                                <?php else : ?>
                                    <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo PG_Image::getPostImage( null, 'large', array(
                                                'class' => 'img-fluid'
                                        ), 'both', null ) ?></a>
                                <?php endif; ?>
                                <h3 class="heading" style="color: #ffffff !important;"><?php the_title(); ?></h3>
                                <p style="color: #ffffff !important;"><?php echo get_the_excerpt(); ?></p>
                                <a href="<?php echo esc_url( get_permalink() ); ?>" style="color: #ffffff !important;"><?php _e( 'Saiba mais', 'marcilio_adv' ); ?></a> 
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'marcilio_adv' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 heading-section ftco-animate text-center">
                        <span class="subheading"><?php _e( 'Our latest update', 'marcilio_adv' ); ?></span>
                        <h2 class="mb-4"><?php echo get_theme_mod( 'blog_titulo', __( 'Blog &amp; Notícias', 'marcilio_adv' ) ); ?></h2>
                        <p><?php echo get_theme_mod( 'blog_texto', __( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in', 'marcilio_adv' ) ); ?></p>
                    </div>
                </div>                 
                <div class="row">
                    <?php
                        $post_query_args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'paged' => get_query_var( 'paged' ) ?: 1,
                            'order' => 'DESC',
                            'orderby' => 'date'
                        )
                    ?>
                    <?php $post_query = new WP_Query( $post_query_args ); ?>
                    <?php if ( $post_query->have_posts() ) : ?>
                        <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div <?php post_class( 'col-md-4 ftco-animate' ); ?> id="post-<?php the_ID(); ?>">
                                <div class="blog-entry">
                                    <?php if ( is_singular() ) : ?>
                                        <?php echo PG_Image::getPostImage( null, 'large', array(
                                                'class' => 'img-fluid'
                                        ), 'both', null ) ?>
                                    <?php else : ?>
                                        <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo PG_Image::getPostImage( null, 'large', array(
                                                    'class' => 'img-fluid'
                                            ), 'both', null ) ?></a>
                                    <?php endif; ?>
                                    <div class="text py-4">
                                        <div class="meta mb-3">
                                            <div>
                                                <a href="#"><?php the_time( get_option( 'date_format' ) ); ?></a>
                                            </div>
                                            <div>
                                                <a href="#"><?php echo get_the_author_meta( 'display_name', false ) ?></a>
                                            </div>
                                            <div>
                                                <a href="#" class="meta-chat"><span class="icon-chat"></span> <?php _e( '3', 'marcilio_adv' ); ?></a>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <h3 class="heading"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                    </div>
                                    <a href="<?php echo esc_url( get_permalink() ); ?>" style="color: #000000 !important;"><?php _e( 'Saiba mais', 'marcilio_adv' ); ?></a>
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