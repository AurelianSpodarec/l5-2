{{-- BLOCK: HERO 2 --}}
@php
    $title = get_sub_field( 'title' );
    $subtitle = get_sub_field( 'subtitle' );

    $background_image = get_sub_field( 'background_image' );

    $backLink = get_sub_field( 'back_link' );
 
    $backgroundSrc = $background_image['url'];
    $backgroundAlt = $background_image['alt'];
@endphp

<x-hero-2
    title="{!! $title !!}"
    subtitle="{!! $subtitle !!}"
    backLink={!! $backLink !!}
    backgroundSrc="{!! $backgroundSrc !!}"
    backgroundAlt="{!! $backgroundAlt !!}"
/>