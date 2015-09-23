<?php
/**
	@Author Morgan Fabre
	Configuration par défaut de Weather Layer
*/

define ('LANGUAGE', 'fr'); // Langue par défaut
define ('DEGREES', 'c'); // Unités par défaut des degrés 
define ('WINDSPEED', 'km/h'); // Unités par défaut de la vitesse du vent
define ('LAYER_TITLE_FORMAT', '%city% (%country%)'); // Formatage par défaut du titre du layer
define ('IMAGES_PATH', get_bloginfo('wpurl') . '/wp-content/plugins/weather-layer/icones/'); // Répertoire des images
define ('CACHE_DURATION', 1800); // 30 minutes de cache
define ('NB_DAYS', 2); // Prévisions sur 2 jours max
define ('USER_AGENT', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)');
define ('COLD_CLASS', 'coldDegrees');
define ('TEMPERATE_CLASS', 'temperateDegrees');
define ('HOT_CLASS', 'hotDegrees');
define ('REGEX_QUOTES', '("|&nbsp;&raquo;)');

$WL_degrees = array
(
	'Celsius'		=> 'c',
	'Fahrenheit'	=> 'f'
);

$WL_windspeed = array
(
	'km/h'		=>	'km/h',
	'm/s'		=>	'm/s',
	'Knots'		=>	'knots'
);

$WL_displays = array
(
	'horizontal',
	'vertical'
);

// Langues & mots traduits
$WL_languages = array
(
	'fr'	=>	array
	(
		'Langue'		=>	'Français',
		'Realtime'		=>	'En ce moment',
		'Today'			=>	'Aujourd\'hui',
		'Tomorrow'		=>	'Demain',
		'Mon'			=>	'Lundi',
		'Tue'			=>	'Mardi',
		'Wed'			=>	'Mercredi',
		'Thu'			=>	'Jeudi',
		'Fri'			=>	'Vendredi',
		'Sat'			=>	'Samedi',
		'Sun'			=>	'Dimanche',
		'Wind'			=>	'Vent',
		'Humidity'		=>	'Humidité',
		'Soleil'		=>	'Temps clair',
		'Soleil-partiel'=>	'Soleil partiel',
		'Pluie-neige'	=>	'Pluie neigeuse',
		'Undefined'		=>	'Indéterminé',
		'WhatsNew'		=>	'A découvrir',
		'Trends'		=>	'Les nouveautés'
	),
	
	'en'	=>	array
	(
		'Langue'		=>	'English',
		'Realtime'		=>	'Real time',
		'Mon'			=>	'Monday',
		'Tue'			=>	'Tuesday',
		'Wed'			=>	'Wednesday',
		'Thu'			=>	'Thursday',
		'Fri'			=>	'Friday',
		'Sat'			=>	'Saturday',
		'Sun'			=>	'Sunday',
		'Soleil'		=>	'Sunny',
		'Soleil-partiel'=>	'Partly sunny',
		'Nuages'		=>	'Cloudy',
		'Brouillard'	=>	'Fog',
		'Pluie'			=>	'Rainy',
		'Pluie-neige'	=>	'Sleet',
		'Neige'			=>	'Snowy',
		'Orages'		=>	'Thunderstorms',
		'WhatsNew'		=>	'What\'s new',
		'Trends'		=>	'Trends'
	),
	
	'de'	=>	array
	(
		'Langue'		=>	'Deutsche',
		'Realtime'		=>	'Echtzeit',
		'Today'			=>	'Heute',
		'Mon'			=>	'Montag',
		'Tue'			=>	'Dienstag',
		'Wed'			=>	'Mittwoch',
		'Thu'			=>	'Donnerstag',
		'Fri'			=>	'Freitag',
		'Sat'			=>	'Samstag',
		'Sun'			=>	'Sonntag',
		'Humidity'		=>	'Feuchtigkeit',
		'Soleil'		=>	'Löschen',
		'Soleil-partiel'=>	'Teilweise sonne',
		'Nuages'		=>	'Wolken',
		'Brouillard'	=>	'Nebel',
		'Pluie'			=>	'Regen',
		'Pluie-neige'	=>	'Schneeregen',
		'Neige'			=>	'Schnee',
		'Orages'		=>	'Gewitter',
		'Undefined'		=>	'Unbestimmt',
		'WhatsNew'		=>	'Zu entdecken',
		'Trends'		=>	'Trends'
	),
	
	'es'	=>	array
	(
		'Langue'		=>	'Español',
		'Realtime'		=>	'Tiempo real',
		'Today'			=>	'Hoy',
		'Tomorrow'		=>	'Mañana',
		'Mon'			=>	'Lunes',
		'Tue'			=>	'Mardes',
		'Wed'			=>	'Miércoles',
		'Thu'			=>	'Jueves',
		'Fri'			=>	'Viernes',
		'Sat'			=>	'Sábado',
		'Sun'			=>	'Domingo',
		'Wind'			=>	'Viento',
		'Humidity'		=>	'Humedad',
		'Soleil'		=>	'Borrar',
		'Soleil-partiel'=>	'Parcial dom',
		'Nuages'		=>	'Nubes',
		'Brouillard'	=>	'Niebla',
		'Pluie'			=>	'Lluvia',
		'Pluie-neige'	=>	'Aguanieve',
		'Neige'			=>	'Nieve',
		'Orages'		=>	'Tormentas',
		'Undefined'		=>	'Indeterminado',
		'WhatsNew'		=>	'Descubre',
		'Trends'		=>	'Nuevo'
	),
	
	'it'	=>	array
	(
		'Langue'		=>	'Italiano',
		'Realtime'		=>	'Tempo reale',
		'Today'			=>	'Oggi',
		'Tomorrow'		=>	'Domani',
		'Mon'			=>	'Lunedi',
		'Tue'			=>	'Martedì',
		'Wed'			=>	'Mercoledì',
		'Thu'			=>	'Giovedi',
		'Fri'			=>	'Venerdì',
		'Sat'			=>	'Sabato',
		'Sun'			=>	'Domenica',
		'Wind'			=>	'Vento',
		'Humidity'		=>	'Umidità',
		'Soleil'		=>	'Cancella',
		'Soleil-partiel'=>	'Parziale dom',
		'Nuages'		=>	'Nuvole',
		'Brouillard'	=>	'Nebbia',
		'Pluie'			=>	'Pioggia',
		'Pluie-neige'	=>	'Nevischio',
		'Neige'			=>	'Neve',
		'Orages'		=>	'Temporali',
		'Undefined'		=>	'Indeterminato',
		'WhatsNew'		=>	'Scoprire',
		'Trends'		=>	'Nuovo'
	),
	
	'ru'	=>	array
	(
		'Langue'		=>	'русский',
		'Realtime'		=>	'реальное время',
		'Today'			=>	'сегодня',
		'Tomorrow'		=>	'завтра',
		'Mon'			=>	'понедельник',
		'Tue'			=>	'вторник',
		'Wed'			=>	'среда',
		'Thu'			=>	'четверг',
		'Fri'			=>	'пятница',
		'Sat'			=>	'суббота',
		'Sun'			=>	'воскресенье',
		'Wind'			=>	'ветер',
		'Humidity'		=>	'влажность',
		'Soleil'		=>	'Очистить',
		'Soleil-partiel'=>	'частичное солнце',
		'Nuages'		=>	'Облака',
		'Brouillard'	=>	'туман',
		'Pluie'			=>	'дождь',
		'Pluie-neige'	=>	'дождь со снегом',
		'Neige'			=>	'снег',
		'Orages'		=>	'Грозы',
		'Undefined'		=>	'неопределенный',
		'WhatsNew'		=>	'открыть для себя',
		'Trends'		=>	'что нового'
	)
);