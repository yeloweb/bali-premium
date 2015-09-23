<?php

/*
* Title                   : Pinpoint Booking System WordPress Plugin
* Version                 : 2.1.1
* File                    : includes/extras/class-backend-extra.php
* File Version            : 1.0.3
* Created / Last Modified : 26 August 2015
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Back end extra PHP class.
*/

    if (!class_exists('DOPBSPBackEndExtra')){
        class DOPBSPBackEndExtra extends DOPBSPBackEndExtras{
            /*
             * Constructor
             */
            function __construct(){
            }
            
            /*
             * Prints out the extra.
             * 
             * @post language (string): extra current editing language
             * 
             * @return extra HTML
             */
            function display(){
                global $DOPBSP;
                
                $language = $_POST['language'];
                
                $DOPBSP->views->backend_extra->template(array('language' => $language));
                $DOPBSP->views->backend_extra_groups->template(array('language' => $language));
                
                die();
            }
            
            /*
             * Edit extra fields.
             * 
             * @post field (string): extra field
             * @post value (string): group new value
             */
            function edit(){
                global $wpdb; 
                global $DOPBSP; 
                
                $wpdb->update($DOPBSP->tables->extras, array($_POST['field'] => $_POST['value']), 
                                                       array('id' => 1));
                
            	die();
            }
        }
    }