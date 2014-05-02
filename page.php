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
      
       <section class="container-fluid" id="page">
        <div class="content">
          <article itemscope itemtype="http://schema.org/Article">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1 itemprop="name"><?php the_title(); ?></h1>
          
  
              <div class="interacoes-sociais">
                <div itemprop="comment" class="fb-like" data-href="<?php the_permalink(''); ?>" data-send="true" data-width="450" data-show-faces="false"></div>
                <a href="https://twitter.com/share" class="twitter-share-button" data-via="huxleydias" data-lang="pt">Tweetar</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
              </div>

             <?php the_content(''); ?>

            
           
            <?php endwhile; ?>
            <?php endif; ?>
          </article>

         <?php include('sidebar.php'); ?>
        </div>
    </section>
    <?php get_footer(); ?>
 </body>
</html>
