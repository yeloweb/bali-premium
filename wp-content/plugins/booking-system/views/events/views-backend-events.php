<?php

/*
* Title                   : Pinpoint Booking System WordPress Plugin
* Version                 : 2.1.1
* File                    : views/events/views-backend-events.php
* File Version            : 1.0.1
* Created / Last Modified : 26 August 2015
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Back end events views class.
*/

    if (!class_exists('DOPBSPViewsBackEndEvents')){
        class DOPBSPViewsBackEndEvents extends DOPBSPViewsBackEnd{
            /*
             * Constructor
             */
            function __construct(){
            }
            
            /*
             * Returns events template.
             * 
             * @return events HTML page
             */
            function template(){
                global $DOPBSP;
                
                $this->getTranslation();
?>            
    <div class="wrap DOPBSP-admin">
        
<!--
    Header
-->
        <?php $this->displayHeader($DOPBSP->text('TITLE'), $DOPBSP->text('EVENTS_TITLE'), $DOPBSP->text('SOON_TITLE')); ?>

<!-- 
    Content
-->
        <div class="dopbsp-main dopbsp-hidden">
        </div>
    </div>       
<?php
            }
        }
    }