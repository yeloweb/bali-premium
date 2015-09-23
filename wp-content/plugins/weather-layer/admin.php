<?php
/**
	@Author Morgan Fabre
	Page de configuration des options de Weather Layer
*/

$weatherDir = dirname(__FILE__);

require_once($weatherDir . '/config.php');

add_action('admin_menu', 'weather_layer_menu');
register_activation_hook(__FILE__, 'weather_layer_settings_default');

function weather_layer_menu()
{  
	add_plugins_page
	(  
		'Weather Layer Configuration',
		'Weather Layer',
		'administrator',
		'weather_layer_options',
		'weather_layer_display'
	);  
	
	add_action('admin_init', 'weather_layer_settings');
}

function weather_layer_settings()
{
	register_setting('wl_options', 'wl_options');
	
	add_settings_section('main_section', 'General settings', 'weather_layer_settings_main_section', __FILE__);
	
	add_settings_field('plugin_language', 'Language', 'weather_layer_settings_language', __FILE__, 'main_section');
	add_settings_field('plugin_degrees', 'Degrees unit', 'weather_layer_settings_degrees', __FILE__, 'main_section');
	add_settings_field('plugin_windspeed', 'Wind speed unit', 'weather_layer_settings_windspeed', __FILE__, 'main_section');
	add_settings_field('plugin_titleformat', 'Title format', 'weather_layer_settings_titleformat', __FILE__, 'main_section');
	add_settings_field('plugin_branding', 'Activate promotional links', 'weather_layer_settings_branding', __FILE__, 'main_section');
}

function  weather_layer_settings_main_section()
{
	echo 'This section allows you to configure main settings.';
}

function weather_layer_settings_branding()
{
	$options = get_option('wl_options');
	
	echo '<input type="checkbox" id="branding" name="wl_options[branding]" value="1" ' . ($options['branding'] ? 'checked="checked=" ' : '') . '/>';
}

function weather_layer_settings_titleformat()
{
	$options = get_option('wl_options');
	$format = isset($options['titleformat']) && !empty($options['titleformat']) ? $options['titleformat'] : LAYER_TITLE_FORMAT;
	
	echo '<input type="text" id="titleformat" name="wl_options[titleformat]" value="' . $format . '" />';
}

function weather_layer_settings_language()
{
	global $WL_languages;
	$options = get_option('wl_options');
	?>
	
	<select id="language" name="wl_options[language]">
		<?php
		foreach ($WL_languages as $language => $data) :
			$selected = ((!isset($options['language']) || empty($options['language'])) && $language == LANGUAGE)
					||	(isset($options['language']) && !empty($options['language']) && $language == $options['language']);
		?>
			<option value="<?php echo $language; ?>" <?php echo ($selected ? 'selected="selected"' : ''); ?> /><?php echo $data['Langue']; ?></option>
		<?php
		endforeach;
		?>
	</select>
	
	<?php
}

function weather_layer_settings_degrees()
{
	global $WL_degrees;
	
	$options = get_option('wl_options');
	?>
	
	<select id="degrees" name="wl_options[degrees]">
		<?php
		foreach ($WL_degrees as $label => $value) :
			$selected = ((!isset($options['degrees']) || empty($options['degrees'])) && $label == DEGREES)
					||	(isset($options['degrees']) && !empty($options['degrees']) && $label == $options['degrees']);
		?>
			<option value="<?php echo $label; ?>" <?php echo ($selected ? 'selected="selected"' : ''); ?> /><?php echo $label; ?></option>
		<?php
		endforeach;
		?>
	</select>
	
	<?php
}

function weather_layer_settings_windspeed()
{
	global $WL_windspeed;
	
	$options = get_option('wl_options');
	?>
	
	<select id="windspeed" name="wl_options[windspeed]">
		<?php
		foreach ($WL_windspeed as $label => $value) :
			$selected = ((!isset($options['windspeed']) || empty($options['windspeed'])) && $label == WINDSPEED)
					||	(isset($options['windspeed']) && !empty($options['windspeed']) && $label == $options['windspeed']);
		?>
			<option value="<?php echo $label; ?>" <?php echo ($selected ? 'selected="selected"' : ''); ?> /><?php echo $label; ?></option>
		<?php
		endforeach;
		?>
	</select>
	
	<?php
}

function weather_layer_settings_default()
{
    $default = array('branding' => 0, 'titleformat' => LAYER_TITLE_FORMAT);
    update_option('wl_options', $default);
}

function weather_layer_display()
{
?>
	<div class="wrap">
		<div class="icon32" id="icon-options-general"></div>
		
		<h2>Configuration de Weather Layer</h2>
		
		<form action="options.php" method="post">
			<?php
			settings_fields('wl_options');
			do_settings_sections(__FILE__);
			?>
			
			<p class="submit">
				<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
			</p>
		</form>
	</div>
<?php
}
