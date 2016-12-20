/*! Backyard2015 - v0.0.1
 * http://wordpress.org/themes
 * Copyright (c) 2016; * Licensed GPLv2+ */
( function( window, undefined ) {
	'use strict';


} )( this );

$(document).ready(function() {

    var subtemplate = $('.subtemplate');

    if (subtemplate.length <= 1) {
        $('.icon-chevron-thin-right').hide();
    }

    subtemplate.first().addClass('active');

    $('.icon-chevron-thin-right').click(function(){

        $('.subtemplate:first-child').fadeOut()
            .next('.subtemplate').fadeIn()
            .end().appendTo('.subtemplate-container');
    });

    $('.icon-next').click(function(){
        $('.slide:first-child').fadeOut()
            .next('.slide').fadeIn()
            .end().appendTo('.gallery');
    });


});