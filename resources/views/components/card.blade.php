{{-- <x-box as="{{$as}}" style="{{ $style }}" class="card {{ $class }}">

    

    <x-box class="bg-white border-gray-100 border-r-2 border-b-2 border-l-2 rounded-b-2xl px-8 pt-12 pb-4 {{ $text ? 'min-h-[300px]' :'min-h-[220px]' }}">

        

        {{-- <x-button href="{!! $permalink !!}">Read more</x-button> --}}

        {{-- <a href="{{ $permalink }}" class="inline-flex align-center items-center text-primary-700 font-semibold bg-primary-100 px-4 py-1 rounded-md">
            <span class="mr-2 ">Read more</span>
            <svg class="w-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-2x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z" class=""></path></svg>
        </a>  --}}

    {{-- </x-box>

</x-box> --}} 


<div class="flex flex-col rounded-lg shadow-lg overflow-hidden">

        <div class="flex-shrink-0">
            <x-box class="card__img-wrap">
                @if($rawImage)
                    {!! $rawImage !!}
                @else
                    <img src="@resource('images/image-placeholder.png')" class="object-cover" alt="Image Placeholder" />
                @endif
            </x-box>
        </div>

        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
            <div class="flex-1">
                {{-- <p class="text-sm font-medium text-primary-600">
                    <a href="#" class="hover:underline">
                        Client Name
                    </a>
                </p> --}}
                <a href="{{ $permalink }}" class="block mt-2">
                    @if($title)
                    <p class="text-xl font-semibold text-gray-900">
                        {!! $title !!}
                    </p>
                    @endif

                    @if($text)
                    <p class="mt-3 text-base text-gray-500">
                    {!! $text !!}
                    </p>
                    @endif
                </a>
            </div>

            {{-- if blog show --}}
            <div class="mt-6 flex items-center">
                {{-- <div class="flex-shrink-0">
                    <a href="#">
                        <span class="sr-only">Daniela Metz</span>
                        <img class="h-10 w-10 rounded-full" src="http://localhost:8888/wp-content/themes/official-website/resources/images/level5-logo-motif.png" alt="">
                    </a>
                </div> --}}
                <div class="ml-3">
                    {{-- <p class="text-sm font-medium text-gray-900">
                        <a href="#" class="hover:underline">
                            Level 5
                        </a>
                    </p> --}}
                    <div class="flex space-x-1 text-sm text-gray-500">
                        @if($date)
                        <time datetime="2020-02-12">
                            {{-- Feb 12, 2020 --}}
                            {!! $date !!}
                        </time>
                        @endif
                        {{-- <span aria-hidden="true">
                            &middot;
                        </span> --}}
                        {{-- <span>
                            11 min read
                        </span> --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
