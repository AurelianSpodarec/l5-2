@extends('layouts.app')
@section('content')


 

    @php
        $args = ([
            'post_type' => 'post',
            'posts_per_page' => 9,
            'paged' => ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1
        ]);

        $query = new WP_Query( $args );
    @endphp



    <x-box as="section" class="bg-white py-32">
    <x-container>


            <x-header 
                title="Articles"
                borderEffect
            />


            <x-box class="grid md:grid-cols-3 gap-8 mb-24">
            @while( $query->have_posts() ) @php( $query->the_post() )

                <x-card 
                    title="{!! get_the_title() !!}"
                    permalink="{!! get_the_permalink() !!}"
                    rawImage="{!! get_the_post_thumbnail() !!}"
                    date="{!! get_the_date() !!}"
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
    </x-box>


 

@endsection