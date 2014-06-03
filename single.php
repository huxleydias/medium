<?php
/**
* @package WordPress
* @subpackage Medium WP
*/
?>
<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <title><?php the_title(); echo ' - '; $category = get_the_category(); echo $category[0]->cat_name;?></title>
    <meta name="description" content="<?php echo excerpt('25'); ?>">
    <link rel="canonical" href="<?php the_permalink();?>"/>
    <!-- for facebook -->
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php the_title();?>"/>
    <meta property="og:description" content="<?php echo excerpt('25'); ?>" />
    <meta property="og:url" content="<?php the_permalink(); ?>"/>
    <meta property="og:image" content="<?php $src_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full-size'); echo $src_image[0];?>" />
    <!-- for twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@huxleydias">
    <meta name="twitter:title" content="<?php bloginfo('name');?>"> 
    <meta name="twitter:description" content="<?php echo excerpt('25'); ?>"> 
    <meta name="twitter:creator" content="@huxleydias"> 
    <meta name="twitter:image:src" content="<?php $src_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full-size'); echo $src_image[0];?>"> 
    <meta name="twitter:domain" content="<?php bloginfo('site_url');?>">
    <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory'); ?>/img/favico.png" />
    <?php get_template_part('meta-header'); ?>
</head>
    <body id="huxleydias" itemscope itemtype="http://schema.org/WebPage">
        <div class="container-page">
            <div class="screen-content">
                <div class="screem-background" style="background-image:url(<?php $src_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full-size'); echo $src_image[0];?>);">
                    <div class="screem-overlay"></div>
                    <span class="story-cover-arrow" onClick="_gaq.push(['_trackEvent', 'Utilitário', 'Roalar para área de texto']);"></span>
                </div>
                
                    <div class="main">
                        <div class="content">
                            <ul class="breadcrumbs" itemprop="breadcrumb" property="breadcrumb">
                                <li>
                                    <a href="<?php bloginfo(url);?>" onClick="_gaq.push(['_trackEvent', 'Breadcrumb', 'Voltar para home']);">Home</a>
                                </li>
                                <li>/</li>
                                <li>
                                    <?php $category = get_the_category(); if($category[0]){echo '<a class="crumb-category" href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';}?>
                                </li>
                                <li>/</li>
                                <li class="active"><?php the_title(); ?></li>
                            </ul>
                            <article itemscope itemtype="http://schema.org/Article">
                                <h1 itemprop="name"><?php the_title(); ?></h1>
                                <p class="meta"><time datetime="<?php the_time('d M Y'); ?>" itemprop="dateCreated"><?php the_time('d,M,Y'); ?></time> - 
                                    <span class="post-category" itemprop="category">
                                        <?php $category = get_the_category(); echo $category[0]->cat_name;?>
                                    </span>
                                    por: <em itemprop="author"><?php the_author(''); ?></em>
                                </p>
                                <section itemprop="text">
                                    <?php the_content(''); ?>    
                                </section>
                                <section class="related-posts">
                                    <ul class="posts"> 
                                        <h4>Mais artigos:</h4>
                                        <?php
                                        global $posts;
                                        $args = array(
                                            'post_type' =>'post',
                                            'numberposts' => '2',
                                            'offset' => '1'
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
                                        
                                    <?php endforeach; ?>
                                    <?php }?>
                                </ul>
                                </section>
                                
                                <footer class="comments-section" itemscope="http://schema.org/reviews">
                                    <div id="disqus_thread"></div>
                                </footer>

                            </article>
                            <div class="author-box-post">
                                <?php include('author-box.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('footer'); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <script type="text/javascript">
    var disqus_shortname = 'huxleydiassites'; 
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
    </script>
    </body>
</html>
