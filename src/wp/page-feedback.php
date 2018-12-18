<?php
    /*
        Template Name: Feedback Page
    */

    $c_name         = $_POST["contact_name"];
    $c_email        = $_POST["contact_email"];
    $c_message      = $_POST["contact_message"];
    // $to = 'manager@jast.tech';
    $to = 'mr.kurenkov@gmail.com';
    $subject = 'Заявка с сайта jastholding.com';
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $content = "Имя: " . $c_name . "<br>Email: " . $c_email . "<br>Сообщение: " .$c_message;
    
    $success = wp_mail( $to, $subject, $content, $headers );
?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/apple-touch-icon.png?v=2b09qvQG6Y">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/favicon-32x32.png?v=2b09qvQG6Y">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/favicon-16x16.png?v=2b09qvQG6Y">
    <link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/site.webmanifest?v=2b09qvQG6Y">
    <link rel="mask-icon" href="<?php bloginfo('stylesheet_directory'); ?>/safari-pinned-tab.svg?v=2b09qvQG6Y" color="#5bbad5">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico?v=2b09qvQG6Y">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="<?php echo $meta_description; ?>" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/style.css?v=4" />

    <title>Заявка — Jast Holding</title>

    <?php
        wp_head();
    ?>
</head>

<body>

    <section class="feedback">
        <?php if ($success == 1) { ?>

            <h1 class="feedback__title">Заявка отправлена</h1>

            <div class="feedback__content">
                <p>Здравствуйте, <?php echo $c_name; ?>!<br> Ваша заявка успешно отправлена.</p>
                <p>Благодарим Вас за интерес к нашей франшизе. Наши менеджеры в скором времени отправят на Ваш почтовый адрес подробную презентацию и чуть позже свяжутся с Вами.</p>
                <p>C уважением, команда Jast Tech.</p>
            <div>
            
            <?php } else {?>

            <h1 class="feedback__title">Ошибка отправки</h1>

            <div class="feedback__content">
                <p>Здравствуйте, <?php echo $c_name; ?>!<br> Что-то пошло не так и ваша заявка не может быть отправлена.</p>
                <p>Пожалуйста попробуйте позже или свяжитесь с нашими менеджерами по телефону <a href="tel:<?php echo the_field('c-phone-link', 14); ?>"><?php echo the_field('c-phone', 14); ?></a> или напишите нам на <a href="mailto:<?php echo the_field('c-email', 14); ?>"><?php echo the_field('c-email', 14); ?></a></p>
                <p>C уважением, команда Jast Tech.</p>
            <div>
                
        <?php } ?>
    </section>

    <?php
        // echo $content;
        // echo "<br>";
        // echo $success;
    ?>


    <?php
        wp_footer();
    ?>
</body>

</html>