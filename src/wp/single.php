<?php
    // the_content();
    $s_link = get_field('link');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />

    <title>Jast Holding - <?php the_title(); ?></title>

    <?php
        wp_head();
    ?>
</head>

<body>
    <article class="project-a">
        <header class="project-a__header">
            <div class="logo logo--project">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo_blue.svg" alt="Jast Holding logo" />
            </div>
            <div class="breadcrumbs">
                <a class="breadcrumbs__link" href="<?php echo esc_url(home_url('/')); ?>">Главная</a>
                <a class="breadcrumbs__link" href="<?php echo esc_url(home_url('/')); ?>#projects">Наши проекты</a>
                <span class="breadcrumbs__current"><?php the_title(); ?></span>
            </div>
            <h1 class="project-a__title"><?php the_title(); ?></h1>
            <a class="project-a__link" href="<?php echo $s_link; ?>"><?php echo $s_link; ?></a>

            <button class="menu-button menu-button--inner">x
                <div class="menu-button__line menu-button__line--top"></div>
                <div class="menu-button__line menu-button__line--middle"></div>
                <div class="menu-button__line menu-button__line--bottom"></div>
            </button>

            <nav class="nav nav--hidden nav--inner">
                <li class="nav__item">
                    <a class="nav__link" href="<?php echo esc_url(home_url('/')); ?>#about"><span class="nav__num">01</span> О нас</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="<?php echo esc_url(home_url('/')); ?>#projects"><span class="nav__num">02</span>Наши&nbsp;проекты</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="<?php echo esc_url(home_url('/')); ?>#partners"><span class="nav__num">03</span>Партнёры</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="<?php echo esc_url(home_url('/')); ?>#contact"><span class="nav__num">04</span>Контакты</a>
                </li>
            </nav>
        </header>
        <div class="project-a__content">
            <?php 
                the_post();
                the_content(); 
            ?>
        </div>
    </article>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/main.js"></script>

    <?php
        wp_footer();
    ?>
</body>

</html>