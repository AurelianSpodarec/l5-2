@php
               //     $buttonKind . " " .
                //$buttonRadius . " " .
    $classes = "button inline-block w-full md:w-auto" . " " . 
                $buttonVariant . " " . 
                $class;

@endphp



@if(boolval($button))
    <button type="{{ $type }}" class="{{ $classes }}">
        {!! $message ?? $slot !!}
    </button>
@else
    <a href="{!! $href !!}" class="{{ $classes }}">
        {!! $message ?? $slot !!}
    </a>
@endif