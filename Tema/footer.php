
        </section>         
        <!-- .section -->
        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container">
                <div class="row mb-5 d-flex">
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'rodape_logo', 'http://pinegrow.com/placeholders/img18_thumb.jpg' ), 'large' ) ?>">
                            <p style="margin-top: 15px;"><?php echo get_theme_mod( 'rodape_resumo', __( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'marcilio_adv' ) ); ?></p>
                            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                                <li class="ftco-animate">
                                    <a href="<?php echo get_theme_mod( 'rodape_facebook_link', '#' ); ?>"><?php echo get_theme_mod( 'rodape_facebook', '<span class="icon-facebook"></span>' ); ?></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="<?php echo get_theme_mod( 'rodape_instagram_link', '#' ); ?>"><?php echo get_theme_mod( 'rodape_instagram', '<span class="icon-instagram"></span>' ); ?></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="<?php echo get_theme_mod( 'rodape_linkedin_link', '#' ); ?>"><?php echo get_theme_mod( 'rodape_linkedin', '<span class="icon-linkedin"></span>' ); ?></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="<?php echo get_theme_mod( 'rodape_youtube_link', '#' ); ?>"><?php echo get_theme_mod( 'rodape_youtube', '<span class="icon-youtube"></span>' ); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4 ml-md-4">
                            <h2 class="ftco-heading-2"><?php _e( 'Menu', 'marcilio_adv' ); ?></h2>
                            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                                <?php
                                    PG_Smart_Walker_Nav_Menu::$options['template'] = '<li id="{ID}" class="{CLASSES}">
                                                                        <a {ATTRS}>{TITLE}</a>
                                                                    </li>';
                                    wp_nav_menu( array(
                                        'container' => '',
                                        'theme_location' => 'primary',
                                        'items_wrap' => '<ul class="%2$s list-unstyled" id="%1$s">%3$s</ul>',
                                        'walker' => new PG_Smart_Walker_Nav_Menu()
                                ) ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2"><?php _e( 'Categorias', 'marcilio_adv' ); ?></h2>
                            <?php $terms = get_terms( array(
                                    'taxonomy' => 'category',
                                    'orderby' => 'name',
                                    'order' => 'DESC',
                                    'hide_empty' => true
                            ) ) ?>
                            <ul class="list-unstyled">
                                <?php if( !empty( $terms ) ) : ?>
                                    <li>
                                        <?php foreach( $terms as $term ) : ?>
                                            <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" rel="tag"><?php echo $term->name; ?></a>
                                        <?php endforeach; ?>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2"><?php echo get_theme_mod( 'rodape_endereco', __( 'Have a Questions?', 'marcilio_adv' ) ); ?></h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li>
                                        <span class="icon icon-map-marker"><?php echo get_theme_mod( 'rodape_endereco_icone' ); ?></span>
                                        <span class="text"><?php echo get_theme_mod( 'rodape_endereco_texto', __( '203 Fake St. Mountain View, San Francisco, California, USA', 'marcilio_adv' ) ); ?></span>
                                    </li>
                                    <li>
                                        <span class="icon icon-map-marker"><?php echo get_theme_mod( 'rodape_endereco_icone' ); ?></span>
                                        <span class="text"><?php echo get_theme_mod( 'rodape_endereco_texto02', __( '203 Fake St. Mountain View, San Francisco, California, USA', 'marcilio_adv' ) ); ?></span>
                                    </li>
                                    <li>
                                        <span class="icon icon-map-marker"><?php echo get_theme_mod( 'rodape_endereco_icone' ); ?></span>
                                        <span class="text"><?php echo get_theme_mod( 'rodape_endereco_texto03', __( '203 Fake St. Mountain View, San Francisco, California, USA', 'marcilio_adv' ) ); ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p><?php echo get_theme_mod( 'rodape_direitos', __( 'Copyright All rights reserved | This template is made with by', 'marcilio_adv' ) ); ?></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- loader -->
        <?php wp_footer(); ?>
    </body>
</html>