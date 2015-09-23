<?php

/*
* Title                   : Pinpoint Booking System WordPress Plugin
* Version                 : 2.1.1
* File                    : includes/translation/class-translation-text-events.php
* File Version            : 1.0.3
* Created / Last Modified : 26 August 2015
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Events translation text PHP class.
*/

    if (!class_exists('DOPBSPTranslationTextEvents')){
        class DOPBSPTranslationTextEvents{
            /*
             * Constructor
             */
            function __construct(){
                /*
                 * Initialize events text.
                 */
                add_filter('dopbsp_filter_translation_text', array(&$this, 'events'));
            }

            /*
             * Events text.
             * 
             * @param lang (array): current translation
             * 
             * @return array with updated translation
             */
            function events($text){
                array_push($text, array('key' => 'PARENT_EVENTS',
                                        'parent' => '',
                                        'text' => 'Events'));
                
                array_push($text, array('key' => 'EVENTS_TITLE',
                                        'parent' => 'PARENT_EVENTS',
                                        'text' => 'Events'));
                
                return $text;
            }
        }
    }