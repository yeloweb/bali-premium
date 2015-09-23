<?php

/*
* Title                   : Pinpoint Booking System WordPress Plugin
* Version                 : 2.1.1
* File                    : includes/translation/class-translation-text-custom-posts.php
* File Version            : 1.0.3
* Created / Last Modified : 26 August 2015
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Custom posts translation text PHP class.
*/

    if (!class_exists('DOPBSPTranslationTextCustomPosts')){
        class DOPBSPTranslationTextCustomPosts{
            /*
             * Constructor
             */
            function __construct(){
                /*
                 * Initialize custom posts text.
                 */
                add_filter('dopbsp_filter_translation_text', array(&$this, 'customPosts'));
            }
            
            /*
             * Custom posts text.
             * 
             * @param lang (array): current translation
             * 
             * @return array with updated translation
             */
            function customPosts($text){
                array_push($text, array('key' => 'PARENT_CUSTOM_POSTS',
                                        'parent' => '',
                                        'text' => 'Custom posts'));
                
                array_push($text, array('key' => 'CUSTOM_POSTS',
                                        'parent' => 'PARENT_CUSTOM_POSTS',
                                        'text' => 'Pinpoint Booking System custom posts'));
                array_push($text, array('key' => 'CUSTOM_POSTS_ADD_ALL',
                                        'parent' => 'PARENT_CUSTOM_POSTS',
                                        'text' => 'Posts'));
                array_push($text, array('key' => 'CUSTOM_POSTS_ADD',
                                        'parent' => 'PARENT_CUSTOM_POSTS',
                                        'text' => 'Add new Pinpoint Booking System custom post'));
                array_push($text, array('key' => 'CUSTOM_POSTS_EDIT',
                                        'parent' => 'PARENT_CUSTOM_POSTS',
                                        'text' => 'Edit Pinpoint Booking System custom post'));
                array_push($text, array('key' => 'CUSTOM_POSTS_BOOKING_SYSTEM',
                                        'parent' => 'PARENT_CUSTOM_POSTS',
                                        'text' => 'Pinpoint Booking System'));
                
                return $text;
            }
        }
    }