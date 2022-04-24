@php

    $args = array( 
        'post_type' => 'case-studies',
        'posts_per_page' => 3,
    );
    $query = new WP_Query( $args );

@endphp


@if( have_rows('section_config') )
@while( have_rows('section_config') ) @php the_row() @endphp

    @php
        $section_background_color = get_sub_field( 'background_color' );      
    @endphp

@endwhile
@endif





<x-section variant="{{ $section_background_color }}">
{{-- <x-section style="background-color: #fbfbfb;"> --}}
<x-container>


    <div class="md:flex justify-between mb-10">



        @if( have_rows('header') )
        @while( have_rows('header') ) @php the_row() @endphp

            <x-header 
                kicker="{!! get_sub_field('kicker') !!}"
                title="{!! get_sub_field('title') !!}"  
                {{-- textVariant="{!! get_sub_field('text_color') !!}" --}}
            />

        @endwhile
        @endif



        @if( have_rows('button') )
        @while( have_rows('button') ) @php the_row() @endphp

        
            @php
                $button = get_sub_field('button_link');
                $button_variant = get_sub_field('button_variant');

                $button_title = $button['title'];
                $button_url   = $button['url'];
            @endphp

            <x-button 
                variant="{!! $button_variant !!}"
                href="{{ $button_url }}"
            >
                {!! $button_title !!} 
            </x-button>

        @endwhile
        @endif

    </div>



    <x-box class="grid md:grid-cols-3 gap-8">
    @if($query->have_posts())
    @while($query->have_posts()) @php $query->the_post() @endphp

        <x-card3
            title="{!! get_the_title() !!}"
            permalink="{{ get_the_permalink() }}"
            backgroundSrc="{!! get_the_post_thumbnail_url() !!}"
            backgroundAlt="{!! get_the_title() !!}"
        />

    @endwhile
    @endif
    @php(wp_reset_postdata())
    </x-box>


</x-container>
</x-section>

 