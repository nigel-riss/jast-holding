<?php
    /*
        Template Name: Home Page
    */
?>

<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />

    <title>Jast Holding</title>

    <?php
        wp_head();
    ?>
    <!-- <script src='https://www.google.com/recaptcha/api.js?render=6LdVjIcUAAAAAAcl6052uPDHdG8fDt91SPNFCo5O'></script> -->
</head>

<body>
    <!-- Header -->
    <header class="main-header">
        <div class="logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo_white.svg" alt="Jast Holding logo" /></div>
        <h1 class="main-title">Привет, мы — JAST holding.</h1><button class="menu-button">x<div class="menu-button__line menu-button__line--top"></div>
            <div class="menu-button__line menu-button__line--middle"></div>
            <div class="menu-button__line menu-button__line--bottom"></div>
        </button>
        <nav class="nav nav--hidden">
            <ul class="nav__list">
                <li class="nav__item">
                    <a class="nav__link" href="#about"><span class="nav__num">01</span> О нас</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="#projects"><span class="nav__num">02</span>Наши&nbsp;проекты</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="#partners"><span class="nav__num">03</span>Партнёры</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="#contact"><span class="nav__num">04</span>Контакты</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- About section -->
    <section class="about" id="about">
        <h2 class="about__title">О нас</h2>
        <div class="about__content">
            <p>Наша деятельность распространяется преимущественно на франчайзинговом рынке. Компания была основана в
                2016 году, меньше чем за два года мы вывели на рынок три успешных проекта, в общей сложности
                насчитывающие более 200&nbsp;партнеров. Мы ориентированы на&nbsp;быстрое масштабирование среднесрочных
                и долгосрочных трендовых бизнес-направлений, умеем их находить и прогнозировать, что&nbsp;позволяет
                быстро расти нам и нашим партнерам.</p>
            <p>Иными словами наша компания занимается построением франчайзинговых сетей. Мы находим или создаем
                продукт, на&nbsp;основе которого строим федеральный бизнес, за счет привлечения партнеров
                и&nbsp;инвесторов со всей России и СНГ.</p>
        </div>
    </section>

    <!-- Projects section -->
    <section class="projects" id="projects" >
        <h2 class="projects__title">Наши<br> проекты</h2>
        <div class="projects__content">
            <?php
                $args = array(
                    'category_name' => 'project'
                );

                query_posts($args);

                if (have_posts()) {
                    while(have_posts()) {
                        the_post();

                        // vars
                        $post_preview = get_field('preview');
            ?>

            <a class="project" href="<?php the_permalink(); ?>">
                <h3 class="project__title"><?php the_title(); ?> <small>&rarr;</small></h3>
                <p class="project__description"><?php echo $post_preview; ?></p>
            </a>

            <?php
                    }
                }
            ?>
        </div>
    </section>

    <!-- Partners section -->
    <section class="partners" id="partners">
        <h2 class="partners__title">Наши <br>партнёры</h2>
        <div class="partners__content">
            <h3 class="partners__subtitle">Крупнейшие порталы франшиз:</h3>
            <article class="partner"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners/businessmens.svg" alt="Бизнессменс" /></article>
            <article class="partner"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners/beboss.png" alt="БиБосс" /></article>
            <article class="partner"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners/rbk.svg" alt="РБК" /></article>
            <h3 class="partners__subtitle">и крупные банки:</h3>
            <article class="partner"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners/tinkoff.png" alt="Тинькофф Банк" /></article>
            <article class="partner"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners/renessans.png" alt="Ренессанс Кредит Банк" /></article>
            <article class="partner"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners/russ-standard.png" alt="Русский Стандарт Банк" /></article>
            <article class="partner"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners/europe-credit.png" alt="Кредит Европа Банк" /></article>
            <article class="partner"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners/east-bank.png" alt="Восточный Банк" /></article>
            <article class="partner"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners/alfa-bank.png" alt="Альфа Банк" /></article>
            <article class="partner"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners/otp.png" alt="ОТП Банк" /></article>
        </div>
    </section>

    <!-- Contact section -->
    <section class="contact" id="contact" >
        <header class="contact__header">
            <h2 class="contact__title">Свяжитесь <br>с нами</h2>
            <div class="contact__address">236006 Россия, <br>г. Калининград, <br>ул. Театральная, 35 <br>офис 606</div><a
                class="contact__phone" href="tel:+88002224608">8 (800) 222-46-08</a><a class="contact__mail" href="mailto:info@jastholding.com">info@jastholding.com</a>
        </header>

        <div class="contact__form">
            <form class="form" action="<?php echo esc_url(home_url('/')); ?>feedback" method="POST">
                <div class="form__input-set">
                    <input class="form__input" type="text" name="contact_name" placeholder="Имя" required/>
                    <input class="form__input" type="email" name="contact_email" placeholder="E-mail" required/></div>
                    <textarea class="form__input" name="contact_message" cols="30" rows="10" placeholder="Сообщение" required></textarea>

                    <!-- <div class="g-recaptcha" data-sitekey="6LdVjIcUAAAAAAcl6052uPDHdG8fDt91SPNFCo5O"></div> -->

                    <input class="form__submit" type="submit" value="Отправить сообщение" />
            </form>
        </div>
    </section>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/menu.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/single.js"></script>

    <?php
        wp_footer();
    ?>
    <!-- <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LdVjIcUAAAAAAcl6052uPDHdG8fDt91SPNFCo5O', {
                    action: 'action_name'
                })
                .then(function (token) {
                    // Verify the token on the server.
                });
        });
    </script> -->
</body>

</html>