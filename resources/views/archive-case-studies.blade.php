@extends('layouts.app')
@section('content')


@php
    $args = ([
        'post_type' => 'case-studies',
        'posts_per_page' => 9,
        'paged' => ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1
    ]);

    $query = new WP_Query( $args );
@endphp


 
{{-- TODO: Refactor --}}
<?php if ( have_rows( 'page_case_studies_block_hero_3', 'options' ) ) : ?>
	<?php while ( have_rows( 'page_case_studies_block_hero_3', 'options' ) ) : the_row(); ?>


            <?php
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











<x-section class="bg-gray-50">
<x-container>


     <x-box class="grid md:grid-cols-3 gap-8 mb-24">
    @while( $query->have_posts() ) @php( $query->the_post() )
 
        <x-card3
            title="{!! get_the_title() !!}"
            permalink="{{ get_the_permalink() }}"
            backgroundSrc="{!! get_the_post_thumbnail_url() !!}"
            backgroundAlt="{!! get_the_title() !!}"
            client="{!! get_field( 'client' ) !!}"
        />

      

    @endwhile
    </x-box>


    <x-box class="text-center">
    <x-box class="pagination">
        {!! 
            paginate_links( array(
                'prev_text' => '<span>Previous</span>',
                'next_text' => '<span>Next</span>'
            )) 
        !!}
    </x-box>
    </x-box>
    @php(wp_reset_postdata())


</x-container>
</x-section>



<x-block-info-cta />


@endsection