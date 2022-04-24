@extends('layouts.app')
@section('content')

    <x-box>
        <x-hero-2 
            title="{!! get_the_title() !!}"
            thumbnail="{!! get_the_post_thumbnail_url() !!}"
        />
    </x-box>

    <x-box >
    <x-container>
    <x-box class="article-prose">

        @if(have_posts())
            @while(have_posts()) @php(the_post())

            {{-- {!! the_title() !!} --}}
            {!! the_content() !!}

            @endwhile
        @endif

    </x-box>
    </x-container>
    </x-box>
    
@endsection