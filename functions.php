<?php
function mytheme_enqueue_scripts()
{
    wp_enqueue_style('mytheme-style', get_template_directory_uri() . '/dist/style.css', [], filemtime(get_template_directory() . '/dist/style.css'));
    wp_enqueue_script('mytheme-script', get_template_directory_uri() . '/dist/main.js', [], filemtime(get_template_directory() . '/dist/main.js'), true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

?>