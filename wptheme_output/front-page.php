<?php
/**
 * Template Name: FrontPage
 */
get_header(); ?>

<!-- Header -->
<header>
    <div class="centering">
        <a href="">
            <img src="<?php echo get_option('headerimg'); ?>" class="top">
        </a>
    </div>
</header>

<!-- Main content -->
<div class="wrapper">
    <h2>Pick Up</h2>
    <section class="pickUp">

        <!-- Post card -->
        <div class="card">
            <a href="" class="cardLink">
                <div class="image">
                    <img src="./img/sanfran.png">
                </div>

                <div class="disc">
                    <div class="info">
                        <span class="cat green">インタビュー</span>
                        <span class="date">2019/01/11</span>
                    </div>

                    <div class="title">
                        記事タイトル記事タイトル記事タイトル
                    </div>
                </div>
            </a>

        </div>
        <!-- Post card End -->
    </section>

    <!-- PickUp section -->
    <h2>新着記事</h2>
    <section class="postList">

        <?php if(have_posts()): while(have_posts()):the_post(); ?>

        <!-- Post card -->
        <div class="card">
            <a href="<?php the_permalink() ?>" class="cardLink">
                <div class="image">
                    <?php
                	if ( has_post_thumbnail()) { the_post_thumbnail(); }
                	else { echo '<img src="http://774music.com/wp-content/uploads/2018/09/sandwich-1.jpg">'; }
        			?>
                </div>

                <div class="disc">
                    <div class="info">
                        <?php
						$cat = get_the_category();
                        make_category_link($cat, 1);
						?>
                        <span class="date">
                        <?php echo get_the_date( 'Y/m/d' ); ?></span>
                    </div>

                    <div class="title">
                        <?php the_title(); ?>
                    </div>
                </div>
            </a>

        </div>
        <!-- Post card End -->

        <?php endwhile; endif; ?>
    </section>
    <button id="loadBtn" class="loadmore">もっと見る</button>
</div>

<?php get_footer(); ?>