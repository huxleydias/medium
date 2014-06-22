<?php
/**
 * @package WordPress
 * @subpackage Medium WP
 */
?>
<div class="widget author-box" itemscope itemtype="http://schema.org/Person">
   
    <a href="http://plus.google.com/u/1/117772548638325354735" target="_blank" title="<?php bloginfo('name');?>" class="author-avatar-link">
        <img src="<?php echo $authorImage; ?>" alt="Avatar de <?php bloginfo('name');?>" itemprop="photo" width="120" height="120" class="author-avatar-img">
    </a>
    <h1 intemprop="name" class="author-name">
            <a href="<?php bloginfo('url') ?>"  title="<?php bloginfo('name');?>"  itemprop="name"><?php bloginfo('name');?></a>
    </h1>
    <p class="author-description" itemprop="title"><?php bloginfo('description');?></p>
    <p class="author-links">
       
            <a href="https://plus.google.com/117772548638325354735" Title="<?php bloginfo('name');?> no Google Plus" target="_blank" rel="nofollow">Google+</a>
        
        
            <a href="http://twitter.com/huxleydias" Title="<?php bloginfo('name');?> no Twitter" target="_blank" rel="nofollow">Twitter</a>
        
            <a href="http://fb.com/huxdias" Title="<?php bloginfo('name');?> no Facebook" target="_blank" rel="nofollow">Facebook</a>
        
        
            <a href="http://br.linkedin.com/in/huxleydias" Title="<?php bloginfo('name');?> no Linkedin" target="_blank" rel="nofollow">Linkedin</a>
        
    </p>
    
</div>