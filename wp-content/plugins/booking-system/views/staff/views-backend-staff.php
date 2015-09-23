<?php

/*
* Title                   : Pinpoint Booking System WordPress Plugin
* Version                 : 2.1.1
* File                    : views/staff/views-backend-staff.php
* File Version            : 1.0.1
* Created / Last Modified : 26 August 2015
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Back end staff views class.
*/

    if (!class_exists('DOPBSPViewsBackEndStaff')){
        class DOPBSPViewsBackEndStaff extends DOPBSPViewsBackEnd{
            /*
             * Constructor
             */
            function __construct(){
            }
            
            /*
             * Returns staff template.
             * 
             * @return staff HTML page
             */
            function template(){
                global $DOPBSP;
                
                $this->getTranslation();
?>            
    <div class="wrap DOPBSP-admin">
        
<!--
    Header
-->
        <?php $this->displayHeader($DOPBSP->text('TITLE').' - '.$DOPBSP->text('STAFF_TITLE').'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$DOPBSP->text('SOON_TITLE')); ?>

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