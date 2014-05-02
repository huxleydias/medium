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
       <section class="container-fluid" id="page">
        <div class="content">
          <div class="archive">
          <?php if (have_posts()) : ?>
    
          <?php $post = $posts[0]; ?>
          <?php if (is_category()) { ?>
          <h1><?php single_cat_title(); ?></h1>
          <?php } elseif( is_tag() ) { ?>
          <h1>Posts Tagged &quot;<?php single_tag_title(); ?>&quot;</h1>
          <?php  } elseif (is_day()) { ?>
          <h1>Archive for <?php the_time('F jS, Y'); ?></h1>
          <?php  } elseif (is_month()) { ?>
          <h1>Archive for <?php the_time('F, Y'); ?></h1>
          <?php  } elseif (is_year()) { ?>
          <h1>Archive for <?php the_time('Y'); ?></h1>
          <?php  } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
          <h1>Arquivo:</h1>
          <?php } ?>
                  
          <ul class="posts"> 

          <?php get_template_part( 'loop' , 'entry') ?>                      
          <?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages); } ?>
          </ul>
            
          <?php endif; ?>
          </div>
        </div>
    </section>
 </body>
</html>