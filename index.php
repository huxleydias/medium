<?php
/**
* @package WordPress
* @subpackage Medium WP
*/
?>
<!DOCTYPE html>
<html lang="pt-br"> 
    <head>
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo("description"); ?>">
        <meta name="keywords" content="Huxley Dias,design, web, wordpress, performance, SEO">
        <link rel="canonical" href="<?php bloginfo('site_url');?>"/>
        <!-- for facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php bloginfo('name');?>"/>
        <meta property="og:description" content="<?php bloginfo('description');?>" />
        <meta property="og:url" content="<?php bloginfo('site_url');?>"/>
        <meta property="og:image" content="<?php bloginfo( 'template_directory' );?>/img/nascer-do-sol-praia-da-baleia-serra-es-por-huxley-dias.jpg" />
        <!-- for twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@huxleydias">
        <meta name="twitter:title" content="<?php bloginfo('name');?>"> 
        <meta name="twitter:description" content="<?php bloginfo('description');?>"> 
        <meta name="twitter:creator" content="@huxleydias"> 
        <meta name="twitter:image:src" content="<?php bloginfo( 'template_directory' );?>/img/nascer-do-sol-praia-da-baleia-serra-es-por-huxley-dias.jpg"> 
        <meta name="twitter:domain" content="<?php bloginfo('site_url');?>">
        <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' );?>/img/favico.png" /> 
        <?php get_template_part('meta-header'); ?>
    </head>
    <body id="huxleydias" itemscope itemtype="http://schema.org/WebPage">
        <div class="container-page">
            <div class="screen-content">
                <div class="screem-background" style="background-image:url(<?php bloginfo( 'template_directory' );?>/img/nascer-do-sol-praia-da-baleia-serra-es-por-huxley-dias.jpg);">
                    <div class="screem-overlay"></div>
                </div>
                <nav class="site-nav">
                </nav>
                <div class="main">
                    <div class="content">
                        <?php include('author-box.php'); ?>
                        <?php if (have_posts()) : ?>
                        <ul class="posts"> 
                            <?php get_template_part( 'loop' , 'entry') ?>                      
                            <?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages); } ?>
                        </ul>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>