<?php

/*
* Title                   : Pinpoint Booking System WordPress Plugin
* Version                 : 2.1.1
* File                    : includes/translation/class-translation-text-staff.php
* File Version            : 1.0.3
* Created / Last Modified : 26 August 2015
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Staff translation text PHP class.
*/

    if (!class_exists('DOPBSPTranslationTextStaff')){
        class DOPBSPTranslationTextStaff{
            /*
             * Constructor
             */
            function __construct(){
                /*
                 * Initialize staff text.
                 */
                add_filter('dopbsp_filter_translation_text', array(&$this, 'staff'));
            }

            /*
             * Staff text.
             * 
             * @param lang (array): current translation
             * 
             * @return array with updated translation
             */
            function staff($text){
                array_push($text, array('key' => 'PARENT_STAFF',
                                        'parent' => '',
                                        'text' => 'Staff'));
                
                array_push($text, array('key' => 'STAFF_TITLE',
                                        'parent' => 'PARENT_STAFF',
                                        'text' => 'Staff'));
                
                return $text;
            }
        }
    }