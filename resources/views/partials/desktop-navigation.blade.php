
@if ($navigation)
        <div class="hidden md:flex-1 md:flex md:items-center md:justify-between">
            <nav class="flex space-x-5 ml-auto items-baseline">
            @foreach ($navigation as $item)


                {{-- @if($item->children)
                <li class="relative list-none">
                    <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                    <button type="button" class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" aria-expanded="false">
                        <span>{!! $item->label !!}</span>
                        <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    {{-- <ul class=" absolute z-10 -ml-4 mt-3 transform w-screen w-auto">
                         <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative bg-white px-5 py-6 sm:gap-8 sm:p-8 ">
                                 
                                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                    <p class="ml-4 text-base font-medium text-gray-900">
                                        Engagement
                                    </p> 
                                </a>
                                
                            </div>
                            
                        </div>
                        </ul><!-- / sub-menu --> --}}
                {{-- </li> --}} 
                {{-- @else  --}}
                <a href="{!! $item->url !!}" class="text-base font-medium text-gray-900 {!! $item->classes !!}">
                    {!! $item->label !!}
                </a>
                {{-- @endif --}}
                

            @endforeach
            </nav>

            
        </div>
@endif

{{-- @if ($navigation)

<nav class="desktopMenu__nav">
    <ul id="main-menu" class="desktopMenu__ul">
        @foreach ($navigation as $item)


        <li class="desktopMenu__li {{ $item->children ? "desktopMenu__has-children" : "" }}">

            <a href="{!! $item->url !!}">
                {!! $item->label !!}
            </a>

            @if($item->children)
            <ul class="desktopMenu__subMenu">

                @foreach($item->children as $child)
                <li>
                    <a href="{!! $child->url !!}">
                        {!! $child->label !!}
                    </a>
                </li>
                @endforeach

            </ul>{{-- sub-menu --}}
            {{-- @endif

        </li>


        @endforeach
    </ul>
</nav>


--}}  

<!-- This example requires Tailwind CSS v2.0+ -->