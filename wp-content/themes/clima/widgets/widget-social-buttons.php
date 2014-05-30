<?php
setlocale(LC_ALL, 'es_ES.UTF8');
class widgetSocialButtons extends WP_Widget 
{

	function widgetSocialButtons()
	{
		parent::__construct( false, 'Social Button Widgets', array('description'=>'En este widget se coloca los botones sociales necesarios para compartir articulos indivuales.'));
	}

	function widget( $args, $instance )
	{
		$this->socialFactory($args, $instance);
	}

	function update( $new_instance, $old_instance )
	{
		return $new_instance;
	}

	function form( $instance ) {

	}
	
	function socialFactory($args, $instance)
	{

		extract($args);																					
		echo $before_widget;
		$galerias = '';

		?>
			<div>
				<div class="fb-like" data-href="<?php the_permalink() ?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></div>
			</div>
		<?php	
			echo $after_widget;
	}
}
