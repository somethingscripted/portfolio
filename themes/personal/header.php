<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <?php wp_head(); ?>
        <title>Personal Theme</title>

    </head>

    <?php

        if (is_front_page()):
            $every_classes = array('personal_class', 'my_class');
        else:
            $every_classes = array('not_personal_class');
        endif;

     ?>

    <body <?php body_class($every_classes) ?> >

        <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
