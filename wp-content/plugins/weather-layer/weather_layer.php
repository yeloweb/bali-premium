<?php
/*
  Plugin Name: Weather Layer
  Plugin URI: http://blogovoyage.fr/weather-layer
  Description: This plugin allows you to display weather data on your blog thanks to Yahoo! Weather. Example of use with shortcode : [weatherlayer country="France" city="Paris"] You can also add the Weather Widget in order to display weather information into your sidebar.
  Version: 3.4.2
  Author: Morgan Fabre
  Author URI: http://blogovoyage.fr
  License: CC-BY-ND
*/

$weatherDir = dirname(__FILE__);

require_once($weatherDir . '/config.php');
require_once($weatherDir . '/admin.php');
require_once($weatherDir . '/widgets/weather_layer.php');

/**
	@Author Morgan Fabre
	Traduction d'un mot/expression
*/
function weather_layer_translate ($key)
{
	global $WL_languages;
	$langue = weather_layer_getLanguage();
	
	return @isset($WL_languages[$langue][$key]) ? $WL_languages[$langue][$key] : $key;
}

/**
	@Author Morgan Fabre
	Formatage du titre
*/
function weather_layer_getLayerTitle ($country, $city)
{
	$options = get_option('wl_options');
	
	if (isset($options['titleformat']) && !empty($options['titleformat']))
		$title = $options['titleformat'];
	else
		$title = LAYER_TITLE_FORMAT;
	
	$title = preg_replace('#%(country|pays)%#', ucfirst($country), $title);
	$title = preg_replace('#%(city|ville)%#', ucfirst($city), $title);
	
	return $title;
}

/**
	@Author Morgan Fabre
	Traduction des jours
*/
function weather_layer_getWeatherDay ($day)
{
	if (function_exists('mb_strtolower'))
		$day = mb_strtolower($day);
	else
		$day = strtolower($day);
	
	$day = ucfirst(str_replace('.', '', $day));
	
	return weather_layer_translate($day);
}

/**
	@Author Morgan Fabre
	Traduction des icones
*/
function weather_layer_getWeatherIcon ($code, $onlyIconName = FALSE)
{
	switch ($code)
	{
		case 0 :
		case 1 :
		case 2 :
		case 3 :
		case 4 :
		case 17 :
		case 37 :
		case 38 :
		case 47 :
			$retour = 'orages';
		break;
		
		case 5 :
		case 6 :
		case 7 :
		case 8 :
		case 10 :
			$retour = 'pluie-neige';
		break;
		
		case 9 :
		case 13 :
		case 14 :
		case 15 :
		case 16 :
		case 25 :
		case 41 :
		case 42 :
		case 43 :
		case 46 :
			$retour = 'neige';
		break;
		
		case 11 :
		case 12 :
		case 18 :
		case 35 :
		case 39 :
		case 40 :
		case 45 :
			$retour = 'pluie';
		break;
		
		case 19 :
		case 20 :
		case 21 :
		case 22 :
		case 23 :
		case 24 :
			$retour = 'brouillard';
		break;
		
		case 26 :
			$retour = 'nuages';
		break;
		
		case 27 :
		case 28 :
		case 29 :
		case 30 :
		case 44 :
			$retour = 'soleil-partiel';
		break;
		
		case 31 :
		case 32 :
		case 33 :
		case 34 :
		case 36 :
			$retour = 'soleil';
		break;
		
		default :
			$retour = 'undefined';
	}
	
	if (!$onlyIconName)
		$retour = IMAGES_PATH . $retour . '.png';
	
	return $retour;
}

/**
	@Author Morgan Fabre
	Traduction du code du temps en texte
*/
function weather_layer_getWeatherText ($code)
{
	$icon = weather_layer_getWeatherIcon($code, TRUE);
	
	return weather_layer_translate (ucfirst($icon));
}

/**
	@Author Morgan Fabre
	Récupération de la classe CSS à utiliser pour afficher une température
*/
function weather_layer_getDegreesClass ($value)
{
	// Si les degrés sont en Fahrenheit, on les convertit Celsius pour assurer une correspondance des couleurs
	if (weather_layer_getDegreesUnit() == 'f')
		$value = ($value - 32) / 1.8;
	
	if ($value < 12)
		$class = COLD_CLASS;
	else if ($value < 25)
		$class = TEMPERATE_CLASS;
	else
		$class = HOT_CLASS;
		
	return $class;
}

/**
	@Author Morgan Fabre
	Récupération de la langue configurée
*/
function weather_layer_getLanguage ()
{
	global $WL_languages;
	
	$options = get_option('wl_options');
	
	return (isset($options['language']) && isset($WL_languages[$options['language']]) ? $options['language'] : LANGUAGE);
}

/**
	@Author Morgan Fabre
	Récupération des unités à utiliser pour les degrés
*/
function weather_layer_getDegreesUnit ()
{
	global $WL_degrees;
	
	$options = get_option('wl_options');
	
	return (isset($options['degrees']) && isset($WL_degrees[$options['degrees']]) ? $WL_degrees[$options['degrees']] : DEGREES);
}

/**
	@Author Morgan Fabre
	Récupération des unités à utiliser pour la vitesse du vent
*/
function weather_layer_getWindSpeedUnit ()
{
	global $WL_windspeed;
	
	$options = get_option('wl_options');
	
	return (isset($options['windspeed']) && isset($WL_windspeed[$options['windspeed']]) ? $WL_windspeed[$options['windspeed']] : WINDSPEED);
}

/**
	@Author Morgan Fabre
	Calcul de la valeur de la vitesse du vent
*/
function weather_layer_getWindSpeedValue($speed)
{
	switch (weather_layer_getWindSpeedUnit())
	{
		case "m/s" :
			$speed /= 3.6;
		break;
		
		case "knots" :
			$speed /= 1.852;
		break;
	}
	
	return round($speed, 1);
}

/**
	@Author Morgan Fabre
	Auto-promo, remerciements à l'auteur. Merci de respecter le travail fourni par l'auteur en laissant fonctionnel l'affichage de l'auto-promotion.
*/
function weather_layer_getBranding ($display)
{
	$options = get_option('wl_options');
	
	if (!isset($options['branding']) || !$options['branding'])
		//$retour = 'Weather Layer by www.BlogoVoyage.fr';
		$retour = '';
	else
	{
		if ($display == 'vertical')
			//$retour = '<a href="http://blogovoyage.fr/weather-layer" title="Weather Layer" target="_blank">Get Weather Layer Plugin</a>';
			$retour = '';
		else
			$retour = '';
			//$retour = 'Weather Layer by <a href="http://blogovoyage.fr" title="Blog de voyages collaboratif" target="_blank">BlogoVoyage</a> & Yahoo! Weather.';
		
		$transientName = 'wl_' . md5(__FUNCTION__);
		
		if ($display != 'vertical' && rand(1, 2) == 1)
		{
			$brandingData = get_transient($transientName);
			
			if ($brandingData === FALSE)
			{
				// Un petit délire... \o_0/
				$ch = curl_init(preg_replace('#^.*$#', 'h$0$0', 't') . 'p:' . str_replace('_', '', '/_/') . 'b' . strrev('gayovogol') . 'e' . (rand(1, 2) ? '.' : 'I pre') . 'fr/' . substr('coffee', 3) . 'd');
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_USERAGENT, USER_AGENT);
				$brandingData = curl_exec($ch);
				curl_close($ch);
			}
			
			if ($brandingData)
			{
				$xml = @simplexml_load_string($brandingData);
				
				if (isset($xml->channel))
				{
					set_transient($transientName, $brandingData, CACHE_DURATION);
					$item = $xml->channel->item[0];
					$wordingDecouvrir = weather_layer_stringToBool($_SERVER['HTTP_HOST']) ? weather_layer_translate('WhatsNew') : weather_layer_translate('Trends');
					$separateur = weather_layer_stringToBool($_SERVER['HTTP_HOST']) ? '&laquo;' : '-';
					
					ob_start();
					?>
						<ins><?php echo $wordingDecouvrir; ?></ins> : <a href="<?php echo $item->link; ?>" title="<?php echo $item->title; ?>" target="_blank"><?php echo $item->title; ?> <?php echo $separateur; ?> BlogoVoyage</a>
					<?php
					$retour = ob_get_contents();
					ob_end_clean();
				}
			}
		}
	}
	
	return $retour;
}

/**
	@Author Morgan Fabre
	Récupération d'un WOEID à partir d'un pays et d'une ville donnée
*/
function weather_layer_getWoeid ($country, $city)
{
	$transientName = 'wl_' . md5(__FUNCTION__ . '_' . $country . '_' . $city);
	$woeid = get_transient($transientName);
	
	// Pas de WOEID en cache, on va le chercher via Yahoo Query API
	if ($woeid === FALSE)
	{
		$ch = curl_init('http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20geo.places%20where%20text%3D%22' . urlencode($city . ',' . $country) . '%22&format=xml');
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, USER_AGENT);
		curl_setopt($ch, CURLOPT_REFERER, 'http://www.yahoo.com/');
		$woeidData = curl_exec($ch);
		curl_close($ch);
		
		if ($woeidData)
		{
			$xml = @simplexml_load_string($woeidData);
			
			if (isset($xml->results->place[0]->woeid))
			{
				// J'ai pas trouvé mieux pour récupérer la valeur du noeud, flemme de chercher plus longtemps :D
				$woeid = (array)$xml->results->place->woeid;
				$woeid = $woeid[0];
			}
		}
		
		if ($woeid)
			set_transient($transientName, $woeid, 0); // L'info ne changera pas...
	}
	
	return $woeid;
}

/**
	@Author Morgan Fabre
	Construction d'un layer
*/
function weather_layer_getWeatherLayer ($args)
{
	$retour = '';
	$retour = '';
	
	$woeid = $args['woeid'] ? $args['woeid'] : weather_layer_getWoeid($args['country'], $args['city']);
	
	$transientName = 'wl_' . md5(__FUNCTION__ . '_' . $woeid . '_' . weather_layer_getDegreesUnit());
	$weatherData = get_transient($transientName);
	
	if ($woeid && $weatherData === FALSE)
	{
		$ch = curl_init('http://weather.yahooapis.com/forecastrss?w=' . urlencode($woeid) . '&u=' . urlencode(weather_layer_getDegreesUnit()));
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, USER_AGENT);
		curl_setopt($ch, CURLOPT_REFERER, 'http://www.yahoo.com/');
		$weatherData = curl_exec($ch);
		curl_close($ch);
	}
	
	if ($weatherData)
	{
		$xml = @simplexml_load_string(preg_replace('#<(/?)[^:>"!]+:([^>]+)>#i', '<$1$2>', $weatherData)); // On vire les namespaces
		
		if (isset($xml->channel->location)) :
			set_transient($transientName, $weatherData, CACHE_DURATION);
			$xml = $xml->channel;
			$city = $args['city'] ? $args['city'] : $xml->location['city'];
			$country = $args['country'] ? $args['country'] : $xml->location['country'];
			
			// Anti-footprints
			$reverseHost = preg_replace('#[^a-z0-9]#', '', strrev($_SERVER['HTTP_HOST']));
			$nbFakeClassesByDomain = 5;
			$fakeClasses = array_merge(weather_layer_getFakeClasses($nbFakeClassesByDomain, 10, $_SERVER['HTTP_HOST']), weather_layer_getFakeClasses(4, 10, $_SERVER['REQUEST_URI']));
			
			ob_start();
			?>
			<div class="<?php echo $reverseHost; ?> weatherLayer <?php echo $args['display']; ?>">
				<span class="title <?php echo $fakeClasses[$nbFakeClassesByDomain]; ?>"><?php echo weather_layer_getLayerTitle($country, $city); ?></span>
				
				<div class="theDay <?php echo $fakeClasses[0]; ?>">
					<span class="<?php echo $fakeClasses[$nbFakeClassesByDomain + 1]; ?> theDayTitle"><?php echo weather_layer_getWeatherDay('Realtime'); ?></span>
					
					<div class="<?php echo $fakeClasses[1]; ?>">
						<img src="<?php echo weather_layer_getWeatherIcon($xml->item->condition['code']); ?>" alt="" class="weatherIcon <?php echo $fakeClasses[$nbFakeClassesByDomain + 2]; ?>" />
						
						<div class="<?php echo $fakeClasses[2]; ?> theDayInfos">
							<?php echo weather_layer_getWeatherText($xml->item->condition['code']); ?>
							<br />
							<?php echo weather_layer_translate('Wind'); ?> : <?php echo weather_layer_getWindSpeedValue($xml->wind['speed']); ?> <?php echo weather_layer_getWindSpeedUnit(); ?>
							<br />
							<?php echo weather_layer_translate('Humidity'); ?> : <?php echo $xml->atmosphere['humidity']; ?>%
							<br />
							<span class="<?php echo $fakeClasses[$nbFakeClassesByDomain + 3]; ?> degrees <?php echo weather_layer_getDegreesClass($xml->item->condition['temp']); ?>">
								<?php echo $xml->item->condition['temp']; ?>°<?php echo strtoupper(weather_layer_getDegreesUnit()); ?>
							</span>
						</div>
					</div>
				</div>
				
				<ul class="otherDays <?php echo $fakeClasses[0]; ?>">
					<?php
					for ($i = 0; $i < min(NB_DAYS, count($xml->item->forecast)); $i++) :
						$dataJournee = $xml->item->forecast[$i];
						
						switch ($i)
						{
							case 0 :
								$afterDay = weather_layer_getWeatherDay('Today');
							break;
							
							case 1 :
								$afterDay = weather_layer_getWeatherDay('Tomorrow');
							break;
							
							default :
								$afterDay = NULL;
						}
					?>
						<li class="<?php echo $fakeClasses[1]; ?>">
							<span class="otherDayTitle <?php echo $fakeClasses[$nbFakeClassesByDomain + 1]; ?>">
								<?php echo weather_layer_getWeatherDay($dataJournee['day']); ?>
							</span>
							
							<?php
							if ($afterDay) :
							?>
								<span class="afterDay">
									<?php echo $afterDay; ?>
								</span>
							<?php
							endif;
							?>
							
							<img src="<?php echo weather_layer_getWeatherIcon($dataJournee['code']); ?>" alt="" class="weatherIcon <?php echo $fakeClasses[$nbFakeClassesByDomain + 2]; ?>" />
							
							<span class="<?php echo $fakeClasses[$nbFakeClassesByDomain + 3]; ?> degrees <?php echo weather_layer_getDegreesClass($dataJournee['low']); ?>">
								<?php echo $dataJournee['low']; ?>
							</span>
							-
							<span class="<?php echo $fakeClasses[$nbFakeClassesByDomain + 3]; ?> degrees <?php echo weather_layer_getDegreesClass($dataJournee['high']); ?>">
								<?php echo $dataJournee['high']; ?>
							</span>°<?php echo strtoupper(weather_layer_getDegreesUnit()); ?>
						</li>
					<?php
					endfor;
					?>
				</ul>
				
				<div class="<?php echo $fakeClasses[2]; ?> <?php echo $fakeClasses[3]; ?> branding <?php echo $fakeClasses[4]; ?>">
					<?php echo weather_layer_getBranding($args['display']); ?>
				</div>
			</div>
			
			<?php
			$retour = ob_get_contents();
			ob_end_clean();
		endif;
	}
	
	if (empty($retour))
		$retour = 'No weather data found for [' . implode($args, ', ') . ']';
	
	return $retour;
}

/**
	@Author Morgan Fabre
	Insertion des layers demandés dans le contenu d'un article/page
*/
function weather_layer_weatherIt ($content)
{
	global $WL_displays;
	$retour = $content;

	while (preg_match('#\[weatherlayer[^\]]+\]#i', $retour, $tab))
	{
		if (preg_match ('#woeid=' . REGEX_QUOTES . '([^"&]+)' . REGEX_QUOTES . '#i', $tab[0], $woeid) || 
			(preg_match ('#(country|pays)=' . REGEX_QUOTES . '([^"&]+)' . REGEX_QUOTES . '#i', $tab[0], $country) && preg_match ('#(city|ville)=' . REGEX_QUOTES . '([^"&]+)' . REGEX_QUOTES . '#i', $tab[0], $city)))
		{
			$inlineArgs = array
			(
				'woeid'		=>	is_array($woeid) ? $woeid[2] : NULL,
				'country'	=>	is_array($country) ? $country[3] : NULL,
				'city'		=>	is_array($city) ? $city[3] : NULL,
				'display'	=>	preg_match ('#display=' . REGEX_QUOTES . '([^"&]+)' . REGEX_QUOTES . '#i', $tab[0], $display) && in_array($display[2], $WL_displays) ? $display[2] : $WL_displays[0]
			);
			
			$replacement = weather_layer_getWeatherLayer ($inlineArgs);
		}
		else
			$replacement = '';
		
		$retour = str_replace($tab[0], $replacement, $retour);
	}
	
	return $retour;
}

/**
	@Author Morgan Fabre
	Ajout des feuilles de styles personnalisés
*/
function weather_layer_stylesheets()
{
	wp_register_style('wlayer_style', plugins_url('style.css', __FILE__));
	wp_enqueue_style('wlayer_style');
}

// Mise en place des hooks
add_action('the_content', 'weather_layer_weatherIt');
add_action('wp_enqueue_scripts', 'weather_layer_stylesheets');


/* QUELQUES FONCTIONS POUR CHANGER ALEATOIREMENT LA STRUCTURE HTML (FOOTPRINTS KILLER) */

/**
	@Author Morgan Fabre
	Conversion d'une chaine en entier
	@param String
	@param uint représentant la valeur de retour maximale (non incluse car modulo)
	@returns 0..n-1
*/
function weather_layer_stringToInt ($s, $n = 2)
{
	$toi = 0;

	for ($i = 0; $i < strlen($s); $i++)
		$toi += ord($s{$i});

	return $toi % $n;
}

/**
	@Author Morgan Fabre
	Conversion d'une chaine en booléen
	@param String
*/
function weather_layer_stringToBool ($s)
{
	return weather_layer_stringToInt($s, 2) == 1;
}

/**
	@Author Morgan Fabre
	Génération de classes bidons variables selon l'URI courante (pour une même URI, les classes sont toujours les mêmes)
*/
function weather_layer_getFakeClasses ($n, $l = 10, $vary)
{
	$fakeClasses = array();
	$vary = weather_layer_stringToInt($vary, 26);
	
	while (count($fakeClasses) < $n)
	{
		$fakeClass = '';
		
		while (strlen($fakeClass) < $l)
		{
			$fakeClass .= chr(97 + $vary);
			$vary = ($vary * 2 + 1) % 26;
		}
			
		$milieu = round($l / 2);
		$fakeClass{$milieu} = strtoupper($fakeClass{$milieu});
		$fakeClasses[] = $fakeClass;
	}
	
	return $fakeClasses;
}