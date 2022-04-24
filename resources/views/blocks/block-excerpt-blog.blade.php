@php

    $args = array( 
        'post_type' => 'post',
        'posts_per_page' => 3,
    );
    $query = new WP_Query( $args );



@endphp



<x-section>
<x-container>


    <div class="text-center mb-16">
        <x-header
            kicker="Blog"
            title="Digital insights for products"
        />

         <a href="" class="inline-flex align-center items-center text-primary-600 font-semibold px-4 py-1 rounded-md">
            <span class="mr-2 ">Read all blog posts</span>
            <svg class="w-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-2x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z" class=""></path></svg>
        </a>
    </div>


    <x-box class="grid md:grid-cols-3 gap-8">    
    @if($query->have_posts())


        @while($query->have_posts()) @php($query->the_post())
        <x-card 
            title="{!! get_the_title() !!}"
            text="{!! get_the_excerpt() !!}"
            permalink="{!! get_the_permalink() !!}"
            rawImage="{!! get_the_post_thumbnail() !!}"
        />
        @endwhile


    @endif
    @php(wp_reset_postdata())
    </x-box>

 
</x-container>
</x-section>