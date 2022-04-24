<div id="offcanvas-content" class="offcanvas-content">

    <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content') }}
    </a>

    @include('partials.header')

        <main id="main">
            @yield('content')
        </main>
    
    @include('partials.footer')

</div>