{{-- <x-box as="header" class="bg-white border-b-2 border-neutral-400">
--}}

<x-box as="header" class="bg-white border-b border-gray-100">
<x-container> 

    <div class="relative">
    <div class="flex justify-between items-center py-4 md:justify-start md:space-x-10">
     

        <div>
            <a href="{{ home_url('/') }}" class="flex">
                @php($header_logo = get_field( 'header_logo', 'options' ))
                @if ( $header_logo )
                    <img style="max-width: 200px;" class="header__logo-img" src="{{ esc_url( $header_logo['url'] ) }}" alt="{{ esc_attr( $header_logo['alt'] ) }}" />
                @endif
                <x-box as="span" class="sr-only">{{ $siteName }}</x-box>
            </a>
        </div>

        <div class="-mr-2 -my-2 md:hidden">
            <button id="hamburger" type="button" class="js-button__open-menu hamburger bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                <span class="sr-only">Open menu</span>
                <!-- Heroicon name: outline/menu -->
                <svg style="height: 35px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>


        {{-- <x-box class="hidden md:block"> --}}
            @include('partials/desktop-navigation')

            @include('partials/mobile-navigation')
        {{-- </x-box> --}}

        </div>
</div>
</x-container>
</x-box>
