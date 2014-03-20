<?php
// Our include
define('WP_USE_THEMES', false);
require_once('../../../wp-load.php');


//set the "paged" parameter (use 'page' if the query is on a static front page)
$paged 	 = ( isset($_GET['paged']) ) ? $_GET['paged'] : 1;
$content = array();
$i = 0;
$the_query = new WP_Query( 'paged=' . $paged ); 

if ($the_query->have_posts())
{

while ($the_query->have_posts() ) : $the_query->the_post(); 

$categoria 		= get_the_category();
$categoria 		= ( !empty($categoria[1]->name) ) ? $categoria[1]->name : $categoria[0]->name ;	
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );


$content[i]	 = the_title();


$content .='<article id="post-'.the_ID().'role="article" class="blog-thumb">
					<a href="'.the_permalink().'" rel="bookmark" title="'.the_title_attribute().'">
								 '.in_category($blogId).'
								<figure><img src="'.$url.'" alt="'.the_title().'" class="thumb" /></figure>
								<header ><span class="categorias">"'.$categoria.'" </span>
									<h1>"'.the_title().'"</h1>
									<time datetime="'.the_time('Y-m-j').'" pubdate>"'.the_time('j').'de '.the_time('F').'del'.the_time('Y').'"</time>
								</header>
								<p>Entradilla del articulo. Este es el texto que se muestra al hacer HOVER sobre este articulo.
								<span>Leer Más +<span></p>
						</a>
					</article>';
					
		$i++;
	endwhile;
}

echo $content;

?>