<x-box as="{{$as}}" style="{{ $style }}" class="flex flex-col rounded-lg shadow-lg overflow-hidden {{ $class }}">
<a href="{{ $permalink }}" class="block rounded-2xl hover:bg-primary-300 p-8">


    @if ( $iconSRC )
        <img src="{!! $iconSRC !!}"  alt="{!! $iconALT !!}" />
    @endif
  
    @if($title)
    <x-typography class="font-semibold text-3xl mb-6">{!! $title !!}</x-typography>
    @endif
         
    @if($content)
    <x-typography>{!! $content !!}</x-typography>
    @endif
    

</a>
</x-box>