<article class="">

<a href="{{ $permalink }}">
    <div class="rounded-t-2xl overflow-hidden h-[300px] mb-3">
        @if( $backgroundSrc )
        <img class="w-full h-full object-cover" src="{!! $backgroundSrc !!}" alt="{!! $backgroundAlt ? $backgroundAlt : "No alt" !!}" />
        @endif
    </div>
    
    <div style="min-height: 161px;">
        {{-- <span>Client Site</span> --}}
            @if($client)
            <div>{{ $client }}</div>
            @endif
        <h2 class="text-2xl font-bold mb-4">{!! $title !!}</h2>
        <button style="text-decoration: underline; color: blue;">Read case study</button>
    </div>
</a>

</article>