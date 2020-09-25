<?php get_header(); ?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand navbar-black" href="index.html"><?php _e( 'Whitespace', 'marcilio_adv' ); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> 
            <?php _e( 'Menu', 'marcilio_adv' ); ?>
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.html" class="nav-link"><?php _e( 'Home', 'marcilio_adv' ); ?></a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-link"><?php _e( 'About', 'marcilio_adv' ); ?></a>
                </li>
                <li class="nav-item">
                    <a href="work.html" class="nav-link"><?php _e( 'Work', 'marcilio_adv' ); ?></a>
                </li>
                <li class="nav-item">
                    <a href="pricing.html" class="nav-link"><?php _e( 'Pricing', 'marcilio_adv' ); ?></a>
                </li>
                <li class="nav-item">
                    <a href="blog.html" class="nav-link"><?php _e( 'Blog', 'marcilio_adv' ); ?></a>
                </li>
                <li class="nav-item active">
                    <a href="contact.html" class="nav-link"><?php _e( 'Contact', 'marcilio_adv' ); ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
<section class="hero-wrap hero-wrap-2 d-flex" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate text-bread d-flex align-items-center">
                <div class="text">
                    <h1 class="mb-3 mt-5 bread"><?php _e( 'Contact us', 'marcilio_adv' ); ?></h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html"><?php _e( 'Home', 'marcilio_adv' ); ?></a></span> <span><?php _e( 'Contact', 'marcilio_adv' ); ?></span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="heading"><?php _e( 'Contact Information', 'marcilio_adv' ); ?></h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3 d-flex">
                <div class="con align-self-stretch p-4">
                    <p style="color: #ffffff;"><span style="color: #ffffff;"><?php _e( 'Address:', 'marcilio_adv' ); ?></span> <?php _e( '198 West 21th Street, Suite 721 New York NY 10016', 'marcilio_adv' ); ?></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="con align-self-stretch p-4">
                    <p><span style="color: #ffffff;"><?php _e( 'Phone:', 'marcilio_adv' ); ?></span> <a href="tel://1234567920" style="color: #ffffff;"><?php _e( '+ 1235 2355 98', 'marcilio_adv' ); ?></a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="con align-self-stretch p-4">
                    <p><span style="color: #ffffff;"><?php _e( 'Email:', 'marcilio_adv' ); ?></span> <a href="mailto:info@yoursite.com" style="color: #ffffff;"><?php _e( 'info@yoursite.com', 'marcilio_adv' ); ?></a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="con align-self-stretch p-4">
                    <p><span style="color: #ffffff;"><?php _e( 'Website', 'marcilio_adv' ); ?></span> <a href="#" style="color: #ffffff;"><?php _e( 'yoursite.com', 'marcilio_adv' ); ?></a></p>
                </div>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 pr-md-5">
                <form action="<?php echo esc_url( get_template_directory_uri() ); ?>/#">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>
<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5 d-flex">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2"><?php _e( 'Whitespace', 'marcilio_adv' ); ?></h2>
                    <p><?php _e( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'marcilio_adv' ); ?></p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate">
                            <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li class="ftco-animate">
                            <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li class="ftco-animate">
                            <a href="#"><span class="icon-instagram"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2"><?php _e( 'Usefull Links', 'marcilio_adv' ); ?></h2>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#"><?php _e( 'Home', 'marcilio_adv' ); ?></a>
                        </li>
                        <li>
                            <a href="#"><?php _e( 'About', 'marcilio_adv' ); ?></a>
                        </li>
                        <li>
                            <a href="#"><?php _e( 'Work', 'marcilio_adv' ); ?></a>
                        </li>
                        <li>
                            <a href="#"><?php _e( 'Pricing', 'marcilio_adv' ); ?></a>
                        </li>
                        <li>
                            <a href="#"><?php _e( 'Blog', 'marcilio_adv' ); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2"><?php _e( 'Quick Links', 'marcilio_adv' ); ?></h2>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#"><?php _e( 'About Us', 'marcilio_adv' ); ?></a>
                        </li>
                        <li>
                            <a href="#"><?php _e( 'Practice Areas', 'marcilio_adv' ); ?></a>
                        </li>
                        <li>
                            <a href="#"><?php _e( 'Appointment', 'marcilio_adv' ); ?></a>
                        </li>
                        <li>
                            <a href="#"><?php _e( 'Terms &amp; Conditions', 'marcilio_adv' ); ?></a>
                        </li>
                        <li>
                            <a href="#"><?php _e( 'FAQ', 'marcilio_adv' ); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2"><?php _e( 'Have a Questions?', 'marcilio_adv' ); ?></h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li>
                                <span class="icon icon-map-marker"></span>
                                <span class="text"><?php _e( '203 Fake St. Mountain View, San Francisco, California, USA', 'marcilio_adv' ); ?></span>
                            </li>
                            <li>
                                <a href="#"><span class="icon icon-phone"></span><span class="text"><?php _e( '+2 392 3929 210', 'marcilio_adv' ); ?></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon icon-envelope"></span><span class="text"><?php _e( 'info@yourdomain.com', 'marcilio_adv' ); ?></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> <?php _e( 'Copyright &copy;', 'marcilio_adv' ); ?> <?php _e( 'All rights reserved | This template is made with', 'marcilio_adv' ); ?> <i class="icon-heart" aria-hidden="true"></i> <?php _e( 'by', 'marcilio_adv' ); ?> <a href="https://colorlib.com" target="_blank"><?php _e( 'Colorlib', 'marcilio_adv' ); ?></a> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>
<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
</div>        

<?php get_footer(); ?>