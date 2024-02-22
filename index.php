<?php get_header(); ?>
<div class="main">
    <section class="module bg-dark-30 parallax-bg restaurant-menu-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant/cake_pastries_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-5">
                    <div class="alt-module-subtitle"><span class="holder-w"></span>
                        <h5 class="font-serif">Try our confectionery</h5><span class="holder-w"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="module-title font-alt mb-0">Cakes and pastries</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="module">
        <div class="container">
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
        </div>
    </section>
    <section class="module bg-dark-30 parallax-bg restaurant-menu-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant/soup_salad_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-5">
                    <div class="alt-module-subtitle"><span class="holder-w"></span>
                        <h5 class="font-serif">Very tasty</h5><span class="holder-w"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="module-title font-alt mb-0">Soups and salads</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="module">
        <div class="container">
            <div class="row multi-columns-row">
                <div class="col-sm-6">
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">Wild Mushroom Bucatini with Kale</h4>
                                <div class="menu-detail font-serif">Mushroom / Veggie / White Sources</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$10.5</h4>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                                <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$14.5</h4>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                                <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$18.5</h4>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                                <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$15.9</h4>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                                <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$16.4</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">Wild Mushroom Bucatini with Kale</h4>
                                <div class="menu-detail font-serif">Mushroom / Veggie / White Sources</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$10.5</h4>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                                <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$14.5</h4>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                                <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$18.5</h4>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                                <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$15.9</h4>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                                <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$16.4</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="module bg-dark-30 parallax-bg restaurant-menu-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant/meat_fish_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-5">
                    <div class="alt-module-subtitle"><span class="holder-w"></span>
                        <h5 class="font-serif">Best on earth</h5><span class="holder-w"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="module-title font-alt mb-0">Meat and fish dishes</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="module">
        <div class="container">
            <div class="row multi-columns-row">
                <div class="col-sm-6">
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">Wild Mushroom Bucatini with Kale</h4>
                                <div class="menu-detail font-serif">Mushroom / Veggie / White Sources</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$10.5</h4>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                                <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$14.5</h4>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                                <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$18.5</h4>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                                <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$15.9</h4>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                                <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$16.4</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">Wild Mushroom Bucatini with Kale</h4>
                                <div class="menu-detail font-serif">Mushroom / Veggie / White Sources</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$10.5</h4>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                                <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$14.5</h4>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                                <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$18.5</h4>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                                <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$15.9</h4>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                                <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                            </div>
                            <div class="col-sm-4 menu-price-detail">
                                <h4 class="menu-price font-alt">$16.4</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>