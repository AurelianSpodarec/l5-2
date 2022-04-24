@extends('layouts.app')
@section('content')


@php


    $args = ([
        'post_type' => 'services',
        'posts_per_page' => 9,
        'paged' => ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1
    ]);

    $query = new WP_Query( $args );


@endphp



<?php if ( have_rows( 'page_services_block_hero_3', 'options' ) ) : ?>
<?php while ( have_rows( 'page_services_block_hero_3', 'options' ) ) : the_row(); ?>


    <?php
        //$title = get_sub_field( 'title', 'options' );
        $thumbnail = get_sub_field( 'thumbnail', 'options' );
    ?>

    <x-hero-2
        title="{!! get_sub_field( 'title', 'options' ) !!}"
        subtitle="{!!  get_sub_field( 'subtitle', 'options' ) !!}"
        backgroundSrc="{!! $thumbnail['url'] !!}"
        backgroundAlt="{!! $thumbnail['alt'] !!}"
    />

    <?php endwhile; ?>
<?php endif; ?>






<x-section>
<x-container>

    @php
        $count = 0;
    @endphp

    <x-box class="mb-24">
    @while( $query->have_posts() ) @php( $query->the_post() )


        <a class="cursor-pointer"href="{{ get_the_permalink() }}">
        <div class="md:flex pt-8 mb-12 {{ $count % 2 == 0 ? '' : 'flex-row-reverse' }} ">


            <div class="mb-6 md:mb-0 w-full md:w-1/2 h-[330px] {{ $count % 2 == 0 ? 'md:mr-12' : 'md:ml-12' }}">
                <img class="w-full rounded-lg h-full object-cover" src="{{ get_the_post_thumbnail_url() }}" alt="">
            </div>

            <div class="w-full md:w-1/2 my-auto">
                <x-header
                    title="{!! get_the_title() !!}"
                />
                <div class="leading-6">
                    {!! get_the_excerpt() !!}

                    <span class="block mt-4 text-blue-800">View service</span>
                </div>
            </div>
        
        </div>  
        </a>
        
    
    @php($count++)
    @endwhile
    @php(wp_reset_postdata())  
    </x-box>


</x-container>
</x-section>

 


<x-block-info-cta />



@endsection
