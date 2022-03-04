<?php
/*
Plugin Name: Count Post Words
Description: A truley amazing plugin that counts words and alphabets and it supports arabic language
version:1.0
Author:Abdullah A. Aladham
Author URI:https://www.linkedin.com/in/abdullah-aladham/
*/

add_filter('the_content','addToEndofPost');

function addToEndofPost($content)
{
    if(is_single()&& is_main_query()){//checks if you are on a single screen for a post and it is only the main query (for the second term we check because the template may load or loop through other secondary posts )
return $content . '<p> my name is abdullah</p>';
    }
    else{
        retrun $content; //if the post wasnt accessed in permalink/single page and the query wasn't for it primarily just return the content
    }
}