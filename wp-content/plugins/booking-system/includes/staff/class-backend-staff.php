<?php

/*
* Title                   : Pinpoint Booking System WordPress Plugin
* Version                 : 2.1.1
* File                    : includes/staff/class-backend-staff.php
* File Version            : 1.0.1
* Created / Last Modified : 26 August 2015
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Back end staff PHP class.
*/

    if (!class_exists('DOPBSPBackEndStaff')){
        class DOPBSPBackEndStaff extends DOPBSPBackEnd{
            /*
             * Constructor
             */
            function __construct(){
            }
        
            /*
             * Prints out the staff page.
             * 
             * @return HTML page
             */
            function view(){
                global $DOPBSP;
                
                $DOPBSP->views->backend_staff->template();
            }
        }
    }