<?php

/*
* Title                   : Pinpoint Booking System WordPress Plugin
* Version                 : 2.1.1
* File                    : includes/forms/class-backend-form.php
* File Version            : 1.0.2
* Created / Last Modified : 26 August 2015
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Back end form PHP class.
*/

    if (!class_exists('DOPBSPBackEndForm')){
        class DOPBSPBackEndForm extends DOPBSPBackEndForms{
            /*
             * Constructor
             */
            function __construct(){
            }
            /*
             * Prints out the form.
             * 
             * @post id (integer): form ID
             * @post language (string): form current editing language
             * 
             * @return form HTML
             */
            function display(){
                global $DOPBSP;
                
                $language = $_POST['language'];
                
                $DOPBSP->views->backend_form->template(array('language' => $language));
                $DOPBSP->views->backend_form_fields->template(array('language' => $language));
                
                die();
            }
            
            /*
             * Edit form fields.
             * 
             * @post field (string): form field
             * @post value (string): field new value
             */
            function edit(){
                global $wpdb;  
                global $DOPBSP;
                
                $wpdb->update($DOPBSP->tables->forms, array($_POST['field'] => $_POST['value']), 
                                                      array('id' => 1));
                
            	die();
            }
        }
    }