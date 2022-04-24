@if( have_rows('section_config') )
@while( have_rows('section_config') ) @php the_row() @endphp

    @php
        $section_background_color = get_sub_field( 'background_color' );      
    @endphp

@endwhile
@endif

@php

    $logo_background = get_sub_field( 'logo_background' ) || "bg-white";
    $logo_grid = get_sub_field( 'logo_grid' ) || "md:grid-cols-5";

@endphp


<x-section class="py-24" variant="{{ $section_background_color }}">
<x-container>


    @if( have_rows('header') )
    @while( have_rows('header') ) @php the_row() @endphp

        <x-header 
            kicker="{!! get_sub_field('kicker') !!}"
            title="{!! get_sub_field('title') !!}"  
            {{-- textVariant="{!! get_sub_field('text_color') !!}" --}}
        />

    @endwhile
    @endif

 
    <div class="grid grid-cols-2 gap-4 {{ get_sub_field( 'logo_grid' ) }}">
    @if ( have_rows( 'clients' ) )
    @while ( have_rows( 'clients' ) ) @php the_row() @endphp
        

        @php
            $client_logo = get_sub_field( 'client_logo' );
        @endphp

        @if( $client_logo )
        <div class="col-span-1 flex justify-center py-8 px-8 {{ $logo_background }}">
            <img class="object-contain max-h-[120px]" src="{!! $client_logo['url'] !!}" alt="{!! $client_logo['alt'] !!}">
        </div>
        @endif


    @endwhile
    @endif
    </div>
 

</x-container>
</x-section>
