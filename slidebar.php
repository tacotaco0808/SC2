<section class="home-section home-full-height" id="home">
    <div class="hero-slider">
        <ul class="slides">
            <?php foreach ($posts as $post) : // ループの開始
                setup_postdata($post); // 記事データの取得
            ?>

                <?php include('slidebar_content.php'); ?>


            <?php
            endforeach; // ループの終了
            ?>
        </ul>
    </div>
</section>