<?php

/*
Plugin Name: DM Slider Lead Form
Plugin URI: http://www.designmissoula.com/
Description: This is not just a plugin, it makes WordPress better.
Author: Bradford Knowlton
Version: 1.0.4
Author URI: http://bradknowlton.com/
GitHub Plugin URI: https://github.com/DesignMissoula/DM-slider-lead-form
*/

/*

Change Log

1.0.2 Initial version
1.0.3 Added Contact Button
1.0.4 Fixed incorrect github plugin url

*/


function dm_enqueue_script() {   
    wp_enqueue_script( 'tabSlideOut', plugin_dir_url( __FILE__ ) . 'js/jquery.tabSlideOut.v1.3.js', array( 'jquery' ), '1.0.3', true );
}
add_action('wp_enqueue_scripts', 'dm_enqueue_script');


function dm_footer_function() {
	
	echo "<a class='handle' href='#' style='background-image: url(&quot;".plugin_dir_url( __FILE__ )."img/contact_tab.gif&quot;); background-repeat: no-repeat; width: 40px; height: 122px; text-indent: -99999px; display: block; outline: medium none; position: absolute; top: 0px; right: -40px;'>Content</a>"
	
	echo "<div class='slide-out-div'>
            <a class='handle' href='http://link-for-non-js-users.html'>Content</a>
            <h3>Contact me</h3>
            <p>Thanks for checking out my jQuery plugin, I hope you find this useful.
            </p>
            <p>This can be a form to submit feedback, or contact info</p>
        </div>";

    echo "    <script type='text/javascript'>
    $(function(){
        $('.slide-out-div').tabSlideOut({
            tabHandle: '.handle',                     //class of the element that will become your tab
            pathToTabImage: 'images/contact_tab.gif', //path to the image for the tab //Optionally can be set using css
            imageHeight: '122px',                     //height of tab image           //Optionally can be set using css
            imageWidth: '40px',                       //width of tab image            //Optionally can be set using css
            tabLocation: 'left',                      //side of screen where tab lives, top, right, bottom, or left
            speed: 300,                               //speed of animation
            action: 'click',                          //options: 'click' or 'hover', action to trigger animation
            topPos: '200px',                          //position from the top/ use if tabLocation is left or right
            leftPos: '20px',                          //position from left/ use if tabLocation is bottom or top
            fixedPosition: false                      //options: true makes it stick(fixed position) on scroll
        });

    });

    </script>";
    
    
}
add_action( 'wp_footer', 'dm_footer_function' );



    


        
        
        
    