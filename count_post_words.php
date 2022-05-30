<?php
/*
Plugin Name: Count Post Words
Description: A truley amazing plugin that counts words and alphabets time needed to read of posts and it supports arabic language
version:1.0
Author:Abdullah A. Aladham
Author URI:https://www.linkedin.com/in/abdullah-aladham/
*/
class WordCountAndReadTimePlugin{
function __construct ()
{
    add_action( 'admin_menu', 'ourPluginSettingsLInk');

}
add_action( 'admin_menu', 'ourPluginSettingsLink');
// add_action( 'admin_menu_Ar', 'Ar_ourPluginSettingsLInk');

function SettingsLink()
{
  
    add_options_page( 'Word Count Settings','Word Count', 'manage_options', 'word-count-settings-page-aa', 'AA_OurSettingsPageHTML' );

    // add_options_page( 'AR_Word Count Settings','Arabic Word Count', 'Ar_manage_options', 'word-count-settings-page-arabic', 'AA_Ar_OurSettingsPageHTML' );

}
function AA_OurSettingsPageHTML()
{?>
Hello there 
<?php   


    
}
$wcartp=new WordCountAndReadTimePlugin();

