
/*
* Title                   : Pinpoint Booking System WordPress Plugin
* Version                 : 2.1.1
* File                    : assets/js/pro/backend-pro.js
* File Version            : 1.0.3
* Created / Last Modified : 26 August 2015
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Back end pro JavaScript class.
*/

var DOPBSPPRO = new function(){
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
     * Display PRO.
     */
    this.display = function(){
        $('.DOPBSP-admin .dopbsp-main').css('display', 'block');
    };
    
    return this.__construct();
};