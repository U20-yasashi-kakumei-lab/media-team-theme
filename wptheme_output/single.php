<?php get_header(); ?>

<!-- Header -->
<header>
    <div class="centering">
        <a href="">
            <img src="<?php echo get_option('headerimg'); ?>" class="top-half">
        </a>
    </div>
</header>

<!-- Main content -->
<div class="wrapper">

    <!-- Left side -->
    <div class="left">

        <section class="article">
            <?php if(have_posts()): while(have_posts()):the_post(); ?>
            <!-- Featured image -->
            <div class="ft-image">
                <?php
                if ( has_post_thumbnail()) { the_post_thumbnail(); }
                else { echo '<img src="http://774music.com/wp-content/uploads/2018/09/sandwich-1.jpg">'; }
                ?>
            </div>
            <!-- Title -->
            <h1 class="title">
                <?php the_title(); ?>
            </h1>

            <!-- Category area -->
            <div class="cat-area">
                <?php
				$cat = get_the_category();
				make_category_link($cat, 0);
				?>
            </div>

            <!-- Tag area -->
            <div class="tag-area">
                <i class="fas fa-tags"></i>
                <?php the_tags(' ', ', ', ''); ?>
            </div>

            <!-- Article content -->
            <article>
                <?php the_content(); ?>
            </article>

            <!-- Posted date -->
            <div class="date">
                <?php echo get_the_date( 'Y/m/d' ); ?>
            </div>
            <hr>

            <!-- Auther area -->
            <div class="auther">
                <!-- Auther icon -->
                <div class="at-l">
                    <div class="ico">
                        <?php $author = get_the_author_meta('id');
						$author_img = get_avatar($author);
						echo $author_img;
						?>
                    </div>

                </div>

                <!-- Auther description -->
                <div class="at-r">
                    <div class="at-content">
                        <h3>書いた人 :
                            <?php the_author(); ?>
                        </h3>
                        やさしいかくめいラボ、記事作成チーム
                    </div>
                </div>
            </div>

            <h2>関連記事</h2>

            <div class="related">


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

            </div>

            <?php endwhile; ?>
            <?php else : ?>
            <h2>Not found</h2>
            <?php endif; ?>
        </section>


    </div>
    <div class="right">
        <div class="sideAd widget"></div>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>