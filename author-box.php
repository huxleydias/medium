<?php
/**
 * @package WordPress
 * @subpackage Medium WP
 */
?>
<div class="widget author-box" itemscope itemtype="http://schema.org/Person">
      <a href="http://plus.google.com/u/1/117772548638325354735" target="_blank" Title="Huxley Dias no Google Plus" rel="Author" class="author-avatar-link">
            <img src="https://d262ilb51hltx0.cloudfront.net/fit/c/120/120/0*ForzYDG2DBQ7fzfw.jpeg" alt="Avatar de Huxley Dias" itemprop="photo" width="120" height="120" class="author-avatar-img">
    </a>
    <h1 intemprop="name" class="author-name">
            <a href="<?php bloginfo('url') ?>"  title="Huxley Dias"  itemprop="name"><?php bloginfo('name');?></a>
    </h1>
    <p class="author-description" itemprop="title"><?php bloginfo('description');?></p>
    <p class="author-links">
        <?php if ( $curauth->gplus ) { ?>
            <a href="<?php echo $curauth->gplus; ?>" Title="<?php bloginfo('name');?> no Google Plus" target="_blank">Google+</a>
        <?php } ?>
        <?php if ( $curauth->twitter ) { ?>
            <a href="<?php echo $curauth->twitter; ?>" Title="<?php bloginfo('name');?> no Twitter" target="_blank">Twitter</a>
        <?php } ?>
        <?php if ( $curauth->facebook ) { ?>
            <a href="<?php echo $curauth->facebok; ?>" Title="<?php bloginfo('name');?> no Facebook" target="_blank">Facebook</a>
        <?php } ?>
        <?php if ( $curauth->linkedin ) { ?>
            <a href="<?php echo $curauth->linkedin; ?>" Title="<?php bloginfo('name');?> no Linkedin" target="_blank">Linkedin</a>
        <?php } ?>
    </p>
</div>