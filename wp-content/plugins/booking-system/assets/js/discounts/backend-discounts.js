
/*
* Title                   : Pinpoint Booking System WordPress Plugin
* Version                 : 2.1.1
* File                    : assets/js/discounts/backend-discounts.js
* File Version            : 1.0.3
* Created / Last Modified : 26 August 2015
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Back end discounts JavaScript class.
*/

var DOPBSPDiscounts = new function(){
    'use strict';
    
    /*
     * Private variables.
     */
    var $ = jQuery.noConflict();
    
    /*
     * Constructor
     */
    this.__construct = function(){
    };

    /*
     * Display discounts list.
     */
    this.display = function(){
        DOPBSP.clearColumns(1);
        DOPBSP.toggleMessages('active', DOPBSP.text('MESSAGES_LOADING'));

        $.post(ajaxurl, {action: 'dopbsp_discounts_display'}, function(data){
            $('#DOPBSP-column1 .dopbsp-column-content').html(data);
            $('.DOPBSP-admin .dopbsp-main').css('display', 'block');
            DOPBSP.toggleMessages('success', DOPBSP.text('DISCOUNTS_LOAD_SUCCESS'));
        }).fail(function(data){
            DOPBSP.toggleMessages('error', data.status+': '+data.statusText);
        });
    };
    
    return this.__construct();
};