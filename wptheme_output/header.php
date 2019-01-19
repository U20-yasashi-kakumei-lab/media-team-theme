<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/regular.css" integrity="sha384-ZlNfXjxAqKFWCwMwQFGhmMh3i89dWDnaFU2/VZg9CvsMGA7hXHQsPIqS+JIAmgEq"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css" integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php 
    $menu_name = 'primary';
    $locations = get_nav_menu_locations();
    $menu_id = $locations[ $menu_name ] ;
    $menuobj = wp_get_nav_menu_object($menu_id);
    $menucount = $menuobj->count;
    $menuHeight = ceil($menucount / 2);
    $menuHeight = $menuHeight * 48;
    ?>
    <style>
        /* Added stylesheet */
        @media screen and (max-width: 520px) {
            .menuOpen {
                height: <?php echo $menuHeight;
                ?>px !important;
            }
        }
    </style>
    <?php wp_head(); ?>
</head>

<body>

    <!-- Menu area -->
    <section id="menuboard">
        <?php 
		$menu = array(
			'menu'      => 'Mainmenu',
			'container'      => 'div',
			'container_id'      => 'menuarea',
			'depth'          => 1,
		);
		wp_nav_menu($menu);
    ?>
    </section>

    <!-- Menu bar -->
    <section class="menubar">
        <div class="centering">

            <!-- Menu Button -->
            <a href="javascript:void(0)" id="menubtn">
                <i id="menuIco" class="fas fa-bars"></i>
            </a>

            <!-- Social Button -->
            <a href="https://twitter.com/<?php echo get_option('twitter'); ?>" class="snsbtn tw">
                <i class="fab fa-twitter"></i>
            </a>

            <a href="https://www.instagram.com/<?php echo get_option('instagram'); ?>/" class="snsbtn insta">
                <i class="fab fa-instagram"></i>
            </a>

        </div>
    </section>