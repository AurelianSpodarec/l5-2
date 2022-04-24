@extends('layouts.app')
@section('content')


    @if ( have_rows( 'flexible_content' ) ) 
        @while ( have_rows( 'flexible_content' ) ) @php(the_row())

            @if ( have_rows( 'row' ) )
            @while ( have_rows( 'row' ) ) @php(the_row())
        
                @php($layoutConverted = str_replace( '_', '-', get_row_layout()))
                @include('blocks.' . $layoutConverted)

            @endwhile
            @else
            No template selected
            @endif

            
        @endwhile
    @else
        @php(the_content())
    @endif


@endsection