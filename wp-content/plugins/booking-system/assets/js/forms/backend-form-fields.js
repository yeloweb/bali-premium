
/*
* Title                   : Pinpoint Booking System WordPress Plugin
* Version                 : 2.1.1
* File                    : assets/js/forms/backend-form-fields.js
* File Version            : 1.0.3
* Created / Last Modified : 26 August 2015
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Back end form fields JavaScript class.
*/

var DOPBSPFormFields = new function(){
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
     * Initialize form fields sort.
     */
    this.init = function(){
        $('#DOPBSP-form-fields').sortable({handle: '.dopbsp-handle',
                                           opacity: 0.75,
                                           placeholder: 'dopbsp-placeholder',
                                           update: function(e, ui){
                                                var ids = new Array();
                                                
                                                DOPBSP.toggleMessages('active-info', DOPBSP.text('MESSAGES_SAVING'));
                                                
                                                $('#'+e.target.id+' li.dopbsp-field-wrapper').each(function(){
                                                    if (!$(this).hasClass('dopbsp-placeholder')){
                                                        ids.push($(this).attr('id').split('DOPBSP-form-field-')[1]);
                                                    }
                                                });
                                               
                                                $.post(ajaxurl, {action: 'dopbsp_form_fields_sort',
                                                                 ids: ids.join(',')}, function(data){
                                                    DOPBSP.toggleMessages('success', DOPBSP.text('MESSAGES_SAVING_SUCCESS'));
                                                }).fail(function(data){
                                                    DOPBSP.toggleMessages('error', data.status+': '+data.statusText);
                                                });
                                           }});
    };
    
    return this.__construct();
};