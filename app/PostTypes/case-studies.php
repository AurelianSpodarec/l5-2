<?php

namespace App;

add_action( 'init', function() {
    register_extended_post_type('case-studies', [
        'menu_icon'   => 'dashicons-open-folder',
        'has_archive' => 'case-studies',
        'supports'    => ['title', 'editor', 'author', 'thumbnail', 'page-attributes']
    ], [
        'singular' => 'Case Study',
        'plural'   => 'Case Studies',
        'slug'     => 'case-studies'
    ]);
} );