@if( have_rows('section_config') )
@while( have_rows('section_config') ) @php the_row() @endphp

    @php
        $section_background_color = get_sub_field( 'background_color' );      
    @endphp

@endwhile
@endif



<x-section variant="{{ $section_background_color }}">
<x-container>


    <div class="lg:flex lg:items-center lg:justify-between">

        <?php 
            $text_color = get_sub_field( 'text_color' );
        ?>
        {{-- <div class="max-w-4xl"> --}}
        <div>
            <?php if ( $title = get_sub_field( 'title' ) ) : ?>
                <h2 class="mb-3 text-4xl font-extrabold tracking-tight <?php echo  $text_color ? $text_color : "text-white" ?> sm:text-5xl">
                    <span class="block"><?php echo esc_html( $title ); ?></span>
                </h2>
            <?php endif; ?>
            <div class="<?php echo $text_color ? $text_color : "text-white" ?> leading-6">
                <?php if ( $content = get_sub_field( 'content' ) ) : ?>
                    <?php echo $content; ?>
                <?php endif; ?>    
            </div>
        </div>
        {{-- </div> --}}

        <div class="mt-6 space-y-4 sm:space-y-0 sm:flex sm:space-x-5">
            @if( have_rows('button') )
            @while( have_rows('button') ) @php the_row() @endphp

                @if($button = get_sub_field('button_link'))
                @php
                
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
                @endif

            @endwhile
            @endif
        </div>

    </div>


</x-container>
</x-section>
