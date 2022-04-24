@if( have_rows('section_config') )
@while( have_rows('section_config') ) @php the_row() @endphp

    @php
        $section_background_color = get_sub_field( 'background_color' );      
    @endphp

@endwhile
@endif





<x-section variant="{{ $section_background_color }}">


    {{-- <div class="lg:absolute lg:inset-y-0 lg:left-[-15%] lg:w-[100%]">
        <img src="http://localhost:8888/wp-content/themes/official-website/resources/images/level5-logo-motif.png" />
    </div> --}}


    <x-container>
    
    

        <div class="md:flex justify-between mb-10 items-end">
            {{-- <x-header
                kicker="Services"
                title="Digital Services we offer"
            /> --}}

            @if( have_rows('header') )
            @while( have_rows('header') ) @php the_row() @endphp

                <x-header 
                    kicker="{!! get_sub_field('kicker') !!}"
                    title="{!! get_sub_field('title') !!}"  
                    {{-- textVariant="{!! get_sub_field('text_color') !!}" --}}
                />

            @endwhile
            @endif
    {{-- 
            <a href="" class="inline-flex align-center items-center text-primary-600 font-semibold px-4 py-1 rounded-md">
                <span class="mr-2 ">View all services</span>
                <svg class="w-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-2x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z" class=""></path></svg>
            </a> --}}

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

<div class="flex flex-wrap">
        <div class="w-full aos-init aos-animate" data-aos="fade-up">
        <div class="grid gap-x-8 gap-y-8 lg:grid-cols-2 lg:px-0">


            @php
                $featured_posts = get_sub_field('services')
            @endphp
            
            @if( $featured_posts )


                @foreach( $featured_posts as $post )
                @php setup_postdata($post) @endphp
                <a href="{{ get_the_permalink($post->ID) }}" class="block shadow-lg bg-white rounded-xl transition duration-300 ease-in-out hover:text-white hover:bg-blue-500">
                <div class="py-12 px-8">
                     
                    <h3 class="font-bold mb-5 mt-3 text-2xl">{!! $post->post_title !!}</h3>
                    <p>{!! $post->post_excerpt !!}</p>

                </div>
                </a>
                @endforeach


            @endif
            @php wp_reset_postdata() @endphp


        </div>
        </div>


    </div>
    </x-container>


</x-section>