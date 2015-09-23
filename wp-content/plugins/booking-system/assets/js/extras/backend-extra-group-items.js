
/*
* Title                   : Pinpoint Booking System WordPress Plugin
* Version                 : 2.1.1
* File                    : assets/js/extras/backend-extra-group-items.js
* File Version            : 1.0.3
* Created / Last Modified : 26 August 2015
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Back end extra group items JavaScript class.
*/


var DOPBSPExtraGroupItems = new function(){
    'use strict';
    
    /*
     * Private variables
     */
    var $ = jQuery.noConflict();
    
    /*
     * Constructor
     */
    this.__construct = function(){
    };
    
    /*
     * Initialize extra group items sort.
     */
    this.init = function(){
        $('#DOPBSP-extra-groups .dopbsp-items').sortable({handle: '.dopbsp-handle',
                                                          opacity: 0.75,
                                                          placeholder: 'dopbsp-placeholder',
                                                          update: function(e, ui){
                                                                var ids = new Array();

                                                                DOPBSP.toggleMessages('active-info', DOPBSP.text('MESSAGES_SAVING'));

                                                                $('#'+e.target.id+' li.dopbsp-group-item-wrapper').each(function(){
                                                                    if (!$(this).hasClass('dopbsp-placeholder')){
                                                                        ids.push($(this).attr('id').split('DOPBSP-extra-group-item-')[1]);
                                                                    }
                                                                });

                                                                $.post(ajaxurl, {action: 'dopbsp_extra_group_items_sort',
                                                                                 ids: ids.join(',')}, function(data){
                                                                    DOPBSP.toggleMessages('success', DOPBSP.text('MESSAGES_SAVING_SUCCESS'));
                                                                }).fail(function(data){
                                                                    DOPBSP.toggleMessages('error', data.status+': '+data.statusText);
                                                                });
                                                          }});
    };
    
    return this.__construct();
};