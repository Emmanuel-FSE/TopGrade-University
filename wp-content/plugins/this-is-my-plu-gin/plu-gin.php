<?php

/*
Plugin Name: Test Plugin
Description: This really works.
Version: 1.0
Author: Brad
*/

class WordCountAndTimePlugin {
    function __construct(){
        add_action('admin_menu', 'emmaxLink');
    }
}

$wordCountAndTimePlugin = new WordCountAndTimePlugin();



function emmaxLink(){
    add_options_page('Word Count Settings','Word Count','manage_options','word-count-settings-page','settingsPageHtml');

}

function settingsPageHtml(){ ?>
   HELLO
<?php }
?>