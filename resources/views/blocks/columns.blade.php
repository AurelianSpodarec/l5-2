@if( have_rows('header') )
@while( have_rows('header') ) @php the_row() @endphp

    @php
        $header_title = get_sub_field('title');
        $header_text_color = get_sub_field('text_color');
        $header_variant = get_sub_field('variant');
        $header_border =  get_sub_field('border');
    @endphp

@endwhile
@endif



@if( have_rows('section_config') )
@while( have_rows('section_config') ) @php the_row() @endphp

    @php
        $section_background_color = get_sub_field( 'background_color' );      
    @endphp

@endwhile
@endif



@php

    $columnsNumber = count(get_sub_field( 'columns' ));
    
@endphp


<x-section variant="{{ $section_background_color }}">
<x-container>

{{-- 

    <x-header 
        title="{!! $header_title !!}"  
        textVariant="{!! $header_text_color !!}"
        variant="{!! $header_variant !!}"
        borderEffect="{!! $header_border !!}"
    /> --}}
    
       

    <x-box class="columns-code grid md:grid-cols-{{$columnsNumber}} gap-24">
    @if ( have_rows( 'columns' ) )
    @while ( have_rows( 'columns' ) ) @php the_row() @endphp

            
            <div class="my-auto">
            @if ( have_rows( 'column' ) )
            @while ( have_rows( 'column' ) ) @php the_row() @endphp


                @if( have_rows('header') )
                    @while( have_rows('header') ) @php the_row() @endphp

                        <x-header 
                            kicker="{!! get_sub_field('kicker') !!}"
                            title="{!! get_sub_field('title') !!}"  
                            textVariant="{!! get_sub_field('text_color') !!}"
                        />

                    @endwhile


                @elseif(get_sub_field( 'type' ))
                <x-box class="{{ get_sub_field( 'type' ) }}">
                    @if ( $wysiwyg = get_sub_field( 'wysiwyg' ) )
                        <div class="my-4 text-lg leading-6 text-gray-500">
                            {!! $wysiwyg !!}
                        </div>
                        {{-- <a class="">Learn about what we do</a> --}}
                    @endif
                </x-box>


                @elseif ( $image = get_sub_field( 'image' ) )
                    
                    <?php
                 
                if ( $image ) : ?>
                    <img style="min-height: 450px;" class="object-cover rounded-3xl shadow-2xl" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>
                 
                

                @elseif(get_sub_field( 'button' ))
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

                @endif


            @endwhile
            @endif 
            </div>


    @endwhile
    @endif 
    </x-box>


</x-container>
</x-section>