<?php
/**
 * @package WordPress
 * @subpackage IHGES
 
 */
?>
<?php get_header(); ?>


            <div class="container">
       
     		 
     		 <div class="content">

		<div class="post">
            
		<?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		query_posts($query_string .'&posts_per_page=10&paged=' . $paged);
		if (have_posts()) : ?>
        
        	
				<h1 >Resultado da Busca Para: <?php the_search_query(); ?></h1>
           
            
			
					
	
		<ul>   
	<?php get_template_part( 'loop' , 'entry') ?>                	     
	<?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages); } ?>
      </ul>
		       
			
                 
			
        
		<?php else : ?>
        
			
                  <h1>Resultado da Busca Para: "<?php the_search_query(); ?>"</h1>
        	
           
            
            
            <h1 >
            <?php _e('Nenhum resultado encontrado para esse termo.'); ?>
            </h1>
			
			
            
        <?php endif; ?>
        </div>

<?php get_sidebar(' '); ?>
</div>
</div>		  
<?php get_footer(' '); ?>