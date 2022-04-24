<x-section class="relative bg-white overflow-hidden pt-0 py-4">


    <div class="p-4 lg:p-0 lg:absolute lg:inset-y-0 lg:right-[-20%] lg:w-[75%]">
    <?php
        $thumbnail = get_sub_field( 'thumbnail' );
        if ( $thumbnail ) : ?>
            <img class=" md:pl-[200px] h-full md:h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="<?php echo esc_url( $thumbnail['url'] ); ?>" alt="<?php echo esc_attr( $thumbnail['alt'] ); ?>">
    <?php endif; ?>
    </div>


    <x-container>
    

        
        <div class="max-w-7xl relative z-10 lg:max-w-3xl lg:w-full">
        <div class="sm:text-center lg:text-left">

            {{-- TODO: Uncomment and plug into back-end once careers page is live --}}
            {{-- <a href="#" class="mb-2 inline-flex items-center text-black bg-white shadow-lg rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200">
                <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-indigo-500 rounded-full">We're hiring</span>
                <span class="ml-4 text-sm">Visit our careers page</span>
                <svg class="ml-2 w-5 h-5 text-gray-500" x-description="Heroicon name: solid/chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </a> --}}


            <div>  


                @if( $title_1 = get_sub_field( 'title_1' ) )
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline">{!! $title_1 !!}</span>   
                </h1>
                @endif

                @if( $title_2 = get_sub_field( 'title_2' ) )
                <p class="mt-3 font-bold text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    {!! $title_2 !!}
                </p>
                @endif
            </div>


            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start items-baseline">

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
                        class="mr-6 mb-6 lg:mb-0"
                    >
                        {!! $button_title !!} 
                    </x-button>

                @endwhile
                @endif

                @if( have_rows('button_2') )
                @while( have_rows('button_2') ) @php the_row() @endphp

              
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



        </div>
        </div>

    </x-container>


</x-section>  