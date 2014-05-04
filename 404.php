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
    <body id="huxleydias">
        <div class="container-page">
            <div class="screen-content">
                <div class="screem-background" style="background-image:url(<?php bloginfo( 'template_directory' );?>/img/nascer-do-sol-praia-da-baleia-serra-es-por-huxley-dias.jpg);">
                </div>
                <nav class="site-nav">
                </nav>
                <div class="main">
                    <div class="content">
                        
                        <h1>Ops, conteúdo não encontrado (erro 404) desculpe. Mas você pode se interessar por algum artigo abaixo.</h1>
                        
                        <ul class="posts"> 
                            <?php
                                global $posts;
                                $args = array(
                                    'post_type' =>'post',
                                    'numberposts' => '3'
                                    );
                                $posts = get_posts($args);
                            ?>
                            <?php if($posts) { ?>        
                                <?php
                                $count=0;
                                foreach($posts as $post) : setup_postdata($post);
                                $count++;
                                ?>
                            <li>
                                <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail('archive-thumb');} ?>
                                </a>
                                <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                                    <h2><?php the_title();?></h2>
                                </a>
                                <p>
                                    <?php echo excerpt('20'); ?>
                                </p>
                            </li>
                            <li></li>
                          <?php endforeach; ?>
                        <?php }?>
                        </ul>
                        <div class="author-box-post">
                            <?php include('author-box.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
