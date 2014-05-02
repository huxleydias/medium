<?php
/**
 * @package WordPress
 * @subpackage Huxley Dias
 */
?>
<!DOCTYPE html>
<html lang="pt-br"> 
<head>
        <title><?php bloginfo('name'); ?> - <?php bloginfo("description"); ?></title>
        <meta name="description" content="Dicas de web front-end, design, usabilidade, wordpress, web-performance e SEO">
        <meta name="keywords" content="Huxley, Dias, Design, Web, Wordpress, SEO">
        
        <link rel="canonical" href="<?php bloginfo('url'); ?>"/>  
        <?php get_template_part('meta-header'); ?>

</head>
<body id="huxleydias">
        <div class="container-page">
            <div class="screen-content">
                <div class="screem-background" style="background-image:url(<?php bloginfo( 'template_directory' );?>/img/nascer-do-sol-praia-da-baleia-serra-es-por-huxley-dias.jpg);">oiaois</div>
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