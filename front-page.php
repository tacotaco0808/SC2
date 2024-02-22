<?php get_header(); ?>
<!--フロントページからでも投稿を呼び出せるように宣言-->
<!--slidebar-->
<?php
$args = array( //この中で条件を書く
    'category_name' => 'slidebar', //カテゴリが'slidebar'の記事
    'posts_per_page' => 10 // 表示件数

);
$posts = get_posts($args);
?>
<?php include('slidebar.php'); ?>



<div class="main">
    <section class="module" id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-5">
                    <div class="alt-module-subtitle"><span class="holder-w"></span>
                        <h5 class="font-serif">For your comfort</h5><span class="holder-w"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="module-title font-alt">Our Services</h2>
                </div>
            </div>
            <div class="row multi-columns-row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-clock"></span></div>
                        <h3 class="features-title font-alt">Opened 24/7</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-streetsign"></span></div>
                        <h3 class="features-title font-alt">Free parking</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-map"></span></div>
                        <h3 class="features-title font-alt">Central Location</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-heart"></span></div>
                        <h3 class="features-title font-alt">High quality</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="divider-w">
    <section class="module" id="specialities">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-5">
                    <div class="alt-module-subtitle"><span class="holder-w"></span>
                        <h5 class="font-serif">Take a look at</h5><span class="holder-w"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="module-title font-alt">Our Specialities</h2>
                </div>
            </div>
            <div class="row multi-columns-row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="content-box">
                        <div class="content-box-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant/kabab.jpg" alt="Kabab" /></div>
                        <h3 class="content-box-title font-serif">Kabab</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="content-box">
                        <div class="content-box-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant/limes.jpg" alt="Limes" /></div>
                        <h3 class="content-box-title font-serif">Limes</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="content-box">
                        <div class="content-box-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant/radish.jpg" alt="Radish" /></div>
                        <h3 class="content-box-title font-serif">Radish</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="content-box">
                        <div class="content-box-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant/corn.jpg" alt="Corn" /></div>
                        <h3 class="content-box-title font-serif">Corn</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="module module-video bg-dark-30" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant/coffee_bg.png">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt mb-0">The Best Restaurant In Town. Enjoy Your Meal</h2>
                </div>
            </div>
        </div>
        <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=i_XV7YCRzKo', containment:'.module-video', startAt:3, mute:true, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
    </section>
    <section class="module" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-5">
                    <div class="alt-module-subtitle"><span class="holder-w"></span>
                        <h5 class="font-serif">Most popular menu</h5><span class="holder-w"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="module-title font-alt">Popular Dishes</h2>
                </div>
            </div>
            <div class="row multi-columns-row">
                <div class="col-sm-6">
                    <!--menu-->
                    <?php
                    $args = array( //この中で条件を書く
                        'category_name' => 'food',
                        'posts_per_page' => 10 // 表示件数

                    );
                    $posts = get_posts($args);
                    ?>
                    <?php foreach ($posts as $post) : // ループの開始
                        setup_postdata($post); // 記事データの取得
                    ?>
                        <?php include('menu.php'); ?>
                    <?php
                    endforeach; // ループの終了
                    ?>
                </div>
            </div>
            <div class="text-center"><a class="btn btn-border-d mt-50" href="restaurant_menu1.php">Check our full menu</a></div>
        </div>
    </section>
    <section class="module pt-0 pb-0">
        <div class="row position-relative m-0">
            <div class="col-xs-12 col-md-6 side-image-text">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="module-title font-alt align-left">Reserve a Table</h2>
                        <p class="module-subtitle font-serif align-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                    </div>
                </div>
                <!--form-->
                <?php include('form.php'); ?>
            </div>
            <div class="col-xs-12 col-md-6 col-md-offset-6 side-image restaurant-image-overlay" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant/reservation.jpg"></div>
        </div>
    </section>
    <section id="map-section">
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3174.2800071239494!2d140.3731840756149!3d37.288497072112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6020405b31849d9d%3A0x656c6d34fa5bea02!2z44CSOTYyLTA4NDUg56aP5bO255yM6aCI6LOA5bed5biC5Lit55S677yT77yZ!5e0!3m2!1sja!2sjp!4v1704874472382!5m2!1sja!2sjp" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <div class="module-small bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="widget">
                        <h5 class="widget-title font-alt">About Titan</h5>
                        <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                        <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                        <p>Email:<a href="#">somecompany@example.com</a></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <h5 class="widget-title font-alt">Recent Comments</h5>
                        <ul class="icon-list">
                            <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                            <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                            <li>Andy on <a href="#">Eco bag Mockup</a></li>
                            <li>Jack on <a href="#">Bottle Mockup</a></li>
                            <li>Mark on <a href="#">Our trip to the Alps</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <h5 class="widget-title font-alt">Blog Categories</h5>
                        <ul class="icon-list">
                            <li><a href="#">Photography - 7</a></li>
                            <li><a href="#">Web Design - 3</a></li>
                            <li><a href="#">Illustration - 12</a></li>
                            <li><a href="#">Marketing - 1</a></li>
                            <li><a href="#">Wordpress - 16</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <h5 class="widget-title font-alt">Popular Posts</h5>
                        <ul class="widget-posts">
                            <li class="clearfix">
                                <div class="widget-posts-image"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/rp-1.jpg" alt="Post Thumbnail" /></a></div>
                                <div class="widget-posts-body">
                                    <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                                    <div class="widget-posts-meta">23 january</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="widget-posts-image"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/rp-2.jpg" alt="Post Thumbnail" /></a></div>
                                <div class="widget-posts-body">
                                    <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                                    <div class="widget-posts-meta">15 February</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>