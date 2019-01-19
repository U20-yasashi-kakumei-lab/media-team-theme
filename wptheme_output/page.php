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
            <!-- Title -->
            <h1 class="title">
                <?php the_title(); ?>
            </h1>

            <!-- Article content -->
            <article>
                <?php the_content(); ?>
            </article>

            <!-- Posted date -->
            <div class="date">
                <?php echo get_the_date( 'Y/m/d' ); ?>
            </div>
            <hr>
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