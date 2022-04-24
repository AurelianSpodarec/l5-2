<?php

namespace App;

add_action( 'init', function() {
    register_extended_post_type('services', [
        'menu_icon'   => 'dashicons-text-page',
        'has_archive' => 'services',
        'supports'    => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'page-attributes']
    ], [
        'singular' => 'Service',
        'plural'   => 'Services',
        'slug'     => 'services'
    ]);
} );