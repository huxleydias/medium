<?php
/**
* @package WordPress
* @subpackage Medium WP
*/
?>
<?php while (have_posts()) : the_post(); ?>  

<?php
    if ( get_post_type() == 'page') { ?>
        
        <li itemscope itemtype="http://schema.org/Article">
             <?php 
            if ( has_post_thumbnail() ) { 
            the_post_thumbnail('archive-thumb', array('intemprop' => 'image'));
            } 
            ?>
            <h2 itemprop="name">
                <a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </h2>
            <p class="meta"><time datetime="<?php the_time('d M Y'); ?>" itemprop="dateCreated"><?php the_time('d,M,Y'); ?></time> - 
                <span class="post-category" itemprop="category"><?php
                    $category = get_the_category(); 
                    echo $category[0]->cat_name;
                    ?></span>
                    por: <em itemprop="author"><?php the_author(''); ?></em>
            </p>
            <p itemprop="description">
                <?php echo excerpt('20'); ?>
            </p>

        </li>

        <?php } elseif( get_post_type() == 'post') { ?>

        <li itemscope itemtype="http://schema.org/Article">
            <?php //if ( has_post_thumbnail() ) { the_post_thumbnail('archive-thumb', array('intemprop' => 'image'));} ?>
            <h2 itemprop="name">
                <a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </h2>
            <p class="meta"><time datetime="<?php the_time('d M Y'); ?>" itemprop="dateCreated"><?php the_time('d,M,Y'); ?></time> - 
                <span class="post-category" itemprop="category"><?php
                    $category = get_the_category(); 
                    echo $category[0]->cat_name;
                    ?></span>
                    por: <em itemprop="author"><?php the_author(''); ?></em>
            </p>
            <p itemprop="description">
                <?php echo excerpt('20'); ?>
            </p>

        </li>

    <?php } 

    else { ?>	
        	<li>
                <h3>
                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h3>
                <p>
            	   <?php echo excerpt('20'); ?>
                </p>       
    		</li>

    <?php } ?>

<?php endwhile; ?>