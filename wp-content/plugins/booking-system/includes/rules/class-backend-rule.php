<?php

/*
* Title                   : Pinpoint Booking System WordPress Plugin
* Version                 : 2.1.1
* File                    : includes/rules/class-backend-rule.php
* File Version            : 1.0.2
* Created / Last Modified : 26 August 2015
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Back end rule PHP class.
*/

    if (!class_exists('DOPBSPBackEndRule')){
        class DOPBSPBackEndRule extends DOPBSPBackEndRules{
            /*
             * Constructor
             */
            function __construct(){
            }
            
            /*
             * Prints out the rule.
             * 
             * @post language (string): rule current editing language
             * 
             * @return rule HTML
             */
            function display(){
                global $DOPBSP;
                
                $language = $_POST['language'];
                
                $DOPBSP->views->backend_rule->template(array('language' => $language));
                
                die();
            }
            
            /*
             * Edit rule fields.
             * 
             * @post field (string): rule field
             * @post value (string): rule new value
             * @post language (string): rule selected language
             */
            function edit(){
                global $wpdb; 
                global $DOPBSP; 
                
                $field = $_POST['field'];
                $value = $_POST['value'];
                        
                $wpdb->update($DOPBSP->tables->rules, array($field => $value), 
                                                      array('id' =>1));
                
            	die();
            }
        }
    }