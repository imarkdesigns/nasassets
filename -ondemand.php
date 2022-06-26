<?php 
/**
 * Template Name: OnDemand
 * @package WordPress
 * @subpackage acmx
**/ 

get_header( 'ondemand' );

    global $post;
    switch ( $post->ID ) {

        // Client Portal 
        case '36': // ondemand login
        case '38': // dashboard
        case '40': // profile
        case '47': // password reset
        case '49': // logout
            $pageName = 'ondemand'; 
            break;

    }

    get_template_part( _page.$pageName );

get_footer( 'ondemand' );