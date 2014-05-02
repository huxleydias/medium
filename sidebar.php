<?php
/**
 * @package WordPress
 * @subpackage Huxley Dias
 */
?>
<aside>
  
<div class="widget author-box" itemscope itemtype="http://schema.org/Person">
    <h3 intemprop="name"><a href="http://plus.google.com/u/1/117772548638325354735" target="_blank" Title="Huxley Dias no Google Plus" rel="Author">Huxley Dias</a></h3>
    <a href="http://plus.google.com/u/1/117772548638325354735" target="_blank" Title="Huxley Dias no Google Plus" rel="Author">
    	<img src="//lh5.googleusercontent.com/-rumj7VF8-ws/AAAAAAAAAAI/AAAAAAAACIc/okpRhhlzJNA/s120-c/photo.jpg" alt="Avatar de Huxley Dias" itemprop="image" width="76" height="76">
	</a>
	<p>Sou designer e trabalho com projetos de interfaces há pouco mais de 4 anos. Curioso, estou sempre estudando para agregar ainda mais conhecimento às minhas atividades profissionais e pessoais.</p>
	<p class="author-links">
		<a href="http://plus.google.com/u/1/117772548638325354735" target="_blank" Title="Huxley Dias no Google Plus" rel="Author">Google+</a>, 
		<a href="http://twitter.com/huxleydias" target="_blank" Title="Huxley Dias no Twitter" rel="Author">Twitter</a>, 
		<a href="https://www.facebook.com/huxdias" target="_blank" Title="Huxley Dias no Facebook" rel="Author">Facebook</a>, 
		<a href="http://br.linkedin.com/in/huxleydias" target="_blank" Title="Huxley Dias no Linkedin" rel="Author">Linkedin</a>
	</p>
  </div>

  <div class="widget">
    <h3>Categorias</h3>
  
    <?php

      $atributos = array(
        'theme_location'  => 'menu_lateral_categorias',
        'container'       => 'ul',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'menu-categorias',
        'menu_id'         => '',
        'echo'            => true,
        );

      wp_nav_menu( $atributos );

    ?>

  </div>

  <div class="widget">
    <h3>Posts  Recentes</h3>

    <ul class="popular-list">
    <?php
    global $posts;
    $args = array(
        'post_type' =>'post',
        'numberposts' => '4'
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
      <li>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <h4><?php the_title(); ?></h4>
        </a>
        
      </li>

      <?php endforeach; ?>
      <?php } ?>

    </ul>

  </div>

  <div class="widget">
    <h3>SlideShare</h3>
    <iframe src="http://www.slideshare.net/slideshow/embed_code/13373639" width="300" height="256" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="https://www.slideshare.net/huxleydias/as-10-heursticas-de-nielsen" title="As 10 heurísticas de Nielsen" target="_blank">As 10 heurísticas de Nielsen</a> </strong> from <strong><a href="http://www.slideshare.net/huxleydias" target="_blank">Huxley Dias</a></strong> </div>   
  </div

  <div class="widget">

    <div class="g-person" data-href="https://plus.google.com/117772548638325354735" data-layout="landscape" data-rel="author"></div>

    <script type="text/javascript">
      window.___gcfg = {lang: 'pt-BR'};

      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>

  </div>

</aside>