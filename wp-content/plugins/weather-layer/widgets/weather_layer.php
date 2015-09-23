<?php
/*
	@Author Morgan Fabre
	Widget qui affiche la météo
*/

class Weather_Layer_Widget extends WP_Widget
{

	public function __construct()
	{
		parent::__construct
		(
	 		'weather_layer_widget',
			'Weather Layer',
			array('description' => 'Display a weather layer of 220px width into your sidebar')
		);
	}

	public function widget($args, $instance)
	{
		$args = array
		(
			'country'	=> $instance['country'],
			'city'		=> $instance['city'],
			'display'	=> 'vertical'
		);

		echo weather_layer_getWeatherLayer ($args);
	}

	public function update($new_instance, $old_instance)
	{
		$instance = array();
		$instance['country'] = strip_tags($new_instance['country']);
		$instance['city'] = strip_tags($new_instance['city']);

		return $instance;
	}

	public function form($instance)
	{
		$country = $instance[ 'country' ];
		$city = $instance[ 'city' ];
		?>
		
		<p>
			<label for="<?php echo $this->get_field_id('country'); ?>">Country</label> 
			<input class="widefat" id="<?php echo $this->get_field_id('country'); ?>" name="<?php echo $this->get_field_name('country'); ?>" type="text" value="<?php echo esc_attr($country); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('city'); ?>">City</label> 
			<input class="widefat" id="<?php echo $this->get_field_id('city'); ?>" name="<?php echo $this->get_field_name('city'); ?>" type="text" value="<?php echo esc_attr($city); ?>" />
		</p>
		
		<?php 
	}
}


add_action('widgets_init', create_function('', 'register_widget("weather_layer_widget");'));