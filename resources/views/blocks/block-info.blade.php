<x-section>
<x-container>


    <x-box class="flex p-16" variant="white">
    <x-box>
    
        @if( have_rows('header') )
        @while( have_rows('header') ) @php(the_row())

            <x-header 
                title="{!! get_sub_field('title') !!}"  
                textVariant="{!! get_sub_field('text_color') !!}"
                variant="{!! get_sub_field('variant') !!}"
                borderEffect="{!! get_sub_field('border') !!}"
                class="uppercase"
            />

        @endwhile
        @endif

        <x-typography>We are digital Consultancy in the UK and always looking to grow our team. If you feel you're a good fit for the above roles, then get in touch via: careers@level5.co.uk or contact us</x-typography>
    </x-box>
    </x-box>

  
</x-container>
</x-section>