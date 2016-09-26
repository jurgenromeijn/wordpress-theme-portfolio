<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

function setup_portfolio_theme()
{
    add_theme_support('post-thumbnails');
    add_image_size('post_thumbnail', 800, 600, ['center', 'top']);
}

add_action('after_setup_theme', 'setup_portfolio_theme');
