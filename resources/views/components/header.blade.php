<x-box class="{{ $class }} mb-4">

    <div>
        @if($kicker)
        <span class="block text-sm font-semibold uppercase tracking-wide text-gray-500 sm:text-base lg:text-sm xl:text-base">{!! $kicker !!}</span>
        @endif

        @if($title)
            <h3 class=" text-gray-900 font-extrabold tracking-tight text-3xl sm:text-4xl">{!! $title !!}</h3>
        @endif
    </div>


        {{-- <x-box class="flex">
            <x-typography class="aaa text-2xl md:text-4xl" variant="header">
                <x-box as="span" class="font-semibold {{ $textVariant }}">{{ $title }}</x-box>
            </x-typography>
        </x-box> --}}
{{-- 
        {!! $message ?? $slot !!} --}}

</x-box>