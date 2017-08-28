<?php

/*
Plugin Name: DM Slider Lead Form
Plugin URI: http://www.designmissoula.com/
Description: This is not just a plugin, it makes WordPress better.
Author: Bradford Knowlton
Version: 1.0.7
Author URI: http://bradknowlton.com/
GitHub Plugin URI: https://github.com/DesignMissoula/DM-slider-lead-form
*/

/*

Change Log

1.0.2 Initial version
1.0.3 Added Contact Button
1.0.4 Fixed incorrect github plugin url
1.0.5 Missing semicolon
1.0.6 Resolved Jquery $ issue
1.0.7 Changed icon color

*/


function dm_enqueue_script() {   
    wp_enqueue_script( 'tabSlideOut', plugin_dir_url( __FILE__ ) . 'js/jquery.tabSlideOut.v1.3.js', array( 'jquery' ), '1.0.7', true );
}
add_action('wp_enqueue_scripts', 'dm_enqueue_script');


function dm_footer_function() {
	
	// echo "<a class='handle' href='#' style='background-image: url(&quot;".plugin_dir_url( __FILE__ )."img/contact_tab.gif&quot;); background-repeat: no-repeat; width: 40px; height: 122px; text-indent: -99999px; display: block; outline: medium none; position: absolute; top: 0px; right: -40px;'>Content</a>";
	
	echo do_shortcode("<div class='slide-out-div'>
            <a class='handle' href='#'>Content</a>
            <h3>Contact me</h3>
            <p>[gravityform id='6' title='false' description='false' ajax='true' tabindex='66']</p>
        </div>");

    echo "    <script type='text/javascript'>
    jQuery(document).ready(function($) {
        $('.slide-out-div').tabSlideOut({
            tabHandle: '.handle',                     //class of the element that will become your tab
            pathToTabImage: '".plugin_dir_url( __FILE__ )."img/email-tab.png', //path to the image for the tab //Optionally can be set using css
            imageHeight: '90px',                     //height of tab image           //Optionally can be set using css
            imageWidth: '100px',                       //width of tab image            //Optionally can be set using css
            tabLocation: 'bottom',                      //side of screen where tab lives, top, right, bottom, or left
            speed: 300,                               //speed of animation
            action: 'click',                          //options: 'click' or 'hover', action to trigger animation
            topPos: '200px',                          //position from the top/ use if tabLocation is left or right
            leftPos: '120px',                          //position from left/ use if tabLocation is bottom or top
            rightPos: '120px',                          //position from left/ use if tabLocation is bottom or top
            fixedPosition: true                      //options: true makes it stick(fixed position) on scroll
        });

    });

    </script>";
    
    
}
add_action( 'wp_footer', 'dm_footer_function' );



    


        
        
        
    