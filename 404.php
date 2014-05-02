<?php
/**
 * @package WordPress
 * @subpackage Huxley Dias
 */
?>
<!DOCTYPE html>
<html lang="pt-br"> 
    <head>
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
        <?php include ('meta-header.php'); ?> 
    </head>
    <body id="huxleydias">

        <?php get_header(); ?>
        <section id="feature">
            <div class="content">
                <h2>
                  Ops, conteúdo não encontrado (erro 404) desculpe. Mas você pode se interessar por algum artigo abaixo.
                </h2>
                
            </div>  
        </section>

        <section id="feature-by-category">
            <div class="content">
                <ul class="recent-list">
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
                                <?php 
                                if ( has_post_thumbnail() ) { 
                                the_post_thumbnail('featured');
                                } 
                                ?>
                            </a>
                            <a href="<?php the_permalink();?>" title="Título do Post Recente">
                            <h3><?php the_title();?></h3>
                            </a>
                            <p>
                                <?php echo excerpt('35'); ?>
                            </p>
                            <!-- <p class="meta"><time datetime="20-07-2013">20-07-2013</time> - <span class="post-categoria">AI</span></p> -->
                          </li>
                          <?php endforeach; ?>
                
                        <?php }?>
                  
                </ul>
            </div>
        </section>

        <section id="all-posts">
            <div class="content">
            </div>
        </section>

        <?php get_footer(); ?>

    </body>
</html>
