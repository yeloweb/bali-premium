<?php

/*
* Title                   : Pinpoint Booking System WordPress Plugin
* Version                 : 2.1.1
* File                    : includes/class-backend-pro.php
* File Version            : 1.0.9
* Created / Last Modified : 26 August 2015
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Back end pro PHP class.
*/

    if (!class_exists('DOPBSPBackEndPRO')){
        class DOPBSPBackEndPRO extends DOPBSPBackEnd{
            /*
             * Constructor
             */
            function __construct(){
            }
        
            /*
             * Prints out the pro page.
             * 
             * @return HTML page
             */
            function view(){
                global $DOPBSP;
                
                $DOPBSP->views->backend_pro->template();
            }
        }
    }