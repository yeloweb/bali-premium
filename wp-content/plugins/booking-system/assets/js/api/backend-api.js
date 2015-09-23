
/*
* Title                   : Pinpoint Booking System WordPress Plugin
* Version                 : 2.1.1
* File                    : assets/js/api/backend-api.js
* File Version            : 1.0
* Created / Last Modified : 04 September 2015
* Author                  : Dot on Paper
* Copyright               : © 2015 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Back end API JavaScript class.
*/

var DOPBSPApi = new function(){
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
     * Display addons.
     * 
     * @param id (Number): user ID
     */
    this.reset = function(id){
        DOPBSP.clearColumns(1);
        DOPBSP.toggleMessages('active', DOPBSP.text('MESSAGES_SAVING'));

        $.post(ajaxurl, {action: 'dopbsp_api_key_reset',
                         user_id: id}, function(data){
            data = $.trim(data);
            
            $('#DOPBSP-box-api-key').html(data);
            DOPBSP.toggleMessages('success', DOPBSP.text('DASHBOARD_API_RESET_SUCCESS'));
        }).fail(function(data){
            DOPBSP.toggleMessages('error', data.status+': '+data.statusText);
        });
    };
    
    return this.__construct();
};