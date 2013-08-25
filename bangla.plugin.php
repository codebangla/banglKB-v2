<?php
/*
  Plugin Name: BanglKB V2
  Plugin URI: http://ekushey.org/?page/web_input_manager
  Description: Adds Bangla typing system in WordPress Post/Page and Comment section. BanglKB is released from ekushey (http://ekushey.org)
  Author: Md. Sajedul Haque Romi, S. M. Ibrahim Lavlu & The HungryCoder
  Author URI: http://www.codebangla.com
 */
add_action('init', 'wp_banglakb_loadjs');

function wp_banglakb_loadjs() {

    wp_enqueue_script('jquery');
    wp_enqueue_script('banglakb-engine', plugin_dir_url(__FILE__) . 'js/engine.js', array('jquery'));
    wp_enqueue_script('banglakb-driver-phonetic', plugin_dir_url(__FILE__) . 'js/driver.phonetic.js', array('jquery', 'banglakb-engine'));
    wp_enqueue_script('banglakb-driver-probhat', plugin_dir_url(__FILE__) . 'js/driver.probhat.js', array('jquery', 'banglakb-engine'));
    wp_enqueue_script('banglakb', plugin_dir_url(__FILE__) . 'js/banglakb.js', array('jquery', 'banglakb-engine'));
}


add_filter ( 'comment_form', 'wp_banglakb_comments' );


function wp_banglakb_comments(){
    $content = "
    <p class=\"comment-form-comment\"><input type='button' value='phonetic' onclick=\"banglakb_public_comment(phonetic);\"></input>
    <input type='button' value='probhat' onclick=\"banglakb_public_comment(probhat);\"></input>
    <input type='button' value='english' onclick='banglakb_toggle();'></input>
    </p>";
    echo $content;

}


if( !function_exists('add_bangla_buttons') ){
    function add_bangla_buttons()
    { ?>
        <script>
        QTags.addButton('phonetic', 'phonetic', banglakb_admin_phonetic);
        QTags.addButton('provat', 'provat', banglakb_admin_phonetic);
        QTags.addButton('english', 'english', banglakb_toggle);
        </script>
    <?php }
  
    add_action('admin_print_footer_scripts',  'add_bangla_buttons');
}






