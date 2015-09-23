
/*
* Title                   : Pinpoint Booking System WordPress Plugin
* Version                 : 2.1.1
* File                    : assets/js/woocommerce/backend-woocommerce.js
* File Version            : 1.0.2
* Created / Last Modified : 26 August 2015
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Back end woocommerce JavaScript class.
*/

var DOPBSPWooCommerce = new function(){
    'use strict';
    
    /*
     * Private variables.
     */
    var $ = jQuery.noConflict();
        
    /*
     * Constructor
     */
    this.__construct = function(){
        $(document).ready(function(){
            DOPBSPWooCommerce.set();
        });
    };
    
    /*
     * Set variations.
     */
    this.set = function(){
        $('.woocommerce_variation').each(function(){
            if ($('select[name*="attribute_booking"]', this).val() !== undefined
                    && $('select[name*="attribute_booking"]', this).val().indexOf('reservation-') !== -1){
                $(this).css('display', 'none');
            }
        });
    };
    
    return this.__construct();
};