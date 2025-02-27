<nav x-data="{ open: false }" x-cloak class="z-50 sticky top-0">
    <!-- Primary Navigation Menu -->
    <div class="hidden lg:flex flex-col justify-between bg-gray-900 text-white font-primary h-screen sticky top-0 {{ $trigger ? 'w-48' : 'w-20' }} transition ease-in-out">
        <!-- Navigation Links -->
        <div class="flex flex-col justify-center h-screen space-y-8 text-lg {{ $trigger ? 'items-start ml-6' : 'items-center' }}">
            <!-- Home -->
            <x-nav.link :href="route('home')" :active="request()->routeIs('home')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <span class="ml-2 text-lg {{ $trigger ? '' : 'hidden' }}">
                    {{ __('Home') }}
                </span>
            </x-nav.link>

            <!-- Projects -->
            <x-nav.dropdown  toggle="{{ $trigger }}">
                <x-slot:trigger>
                    <button type="button" class="inline-flex items-center text-base font-medium leading-5 text-gray-50 hover:text-blue-500 hover:border-blue-500 transition ease-in-out uppercase">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                        </svg>
                        <span class="ml-2 text-lg {{ $trigger ? '' : 'hidden' }}">
                            {{ __('Projects') }}
                        </span>
                    </button>
                </x-slot>
                <x-slot name="content">
                    <x-nav.dropdown-link :href="route('xerofanzone')" :active="request()->routeIs('xerofanzone')">
                        {{ __('Xero Fanzone') }}
                    </x-nav.dropdown-link>
                </x-slot>
            </x-nav.dropdown>

            <!-- Blog -->
            {{-- <x-nav.link :href="route('blog.index')" :active="request()->routeIs('blog.*')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                </svg>
                <span class="ml-2 text-lg {{ $trigger ? '' : 'hidden' }}">
                    {{ __('Blog') }}
                </span>
            </x-nav.link> --}}

            <!-- Toggle -->
            <div class="{{ $trigger ? 'ml-20' : '' }}">
                <div class="bg-gray-500 p-6 rounded-full border-4 border-gray-900" wire:click="switch">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 {{ $trigger ? 'hidden' : 'inline-flex' }}">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 {{ $trigger ? 'inline-flex' : 'hidden' }}">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>

            <!-- FAQ -->
            {{-- <x-nav.link :href="route('faq')" :active="request()->routeIs('faq')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                </svg>
                <span class="ml-2 text-lg {{ $trigger ? '' : 'hidden' }}">
                    {{ __('FAQ') }}
                </span>
            </x-nav.link> --}}


            <!-- Links -->
            <x-nav.link :href="route('card')" :active="request()->routeIs('card')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                </svg>
                <span class="ml-2 text-lg {{ $trigger ? '' : 'hidden' }}">
                    {{ __('Contact') }}
                </span>
            </x-nav.link>

            <!-- Account Data -->
            <x-nav.dropdown  toggle="{{ $trigger }}">
                <x-slot:trigger>
                    <button type="button" class="inline-flex items-center text-base font-medium leading-5 text-gray-50 hover:text-blue-500 hover:border-blue-500 transition duration-150 ease-in-out uppercase">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                        <span class="ml-2 text-lg {{ $trigger ? '' : 'hidden' }}">
                            {{ __('Account') }}
                        </span>
                    </button>
                </x-slot>
                <x-slot name="content">
                    @if (Auth::user())
                        <span class="block w-full uppercase px-4 py-2 text-start text-base leading-5 text-gray-50 bg-gray-800">
                            {{ Auth::user()->name }}
                        </span>
                        <hr>
                        {{-- <x-nav.dropdown-link :href="route('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav.dropdown-link> --}}
                        <x-nav.dropdown-link :href="route('profile.edit')">
                            {{ __('Settings') }}
                        </x-nav.dropdown-link>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-nav.dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-nav.dropdown-link>
                        </form>
                    @else
                        <x-nav.dropdown-link :href="route('login')" :active="request()->routeIs('login')">
                            {{ __('Login') }}
                        </x-nav.dropdown-link>
                        <x-nav.dropdown-link :href="route('register')" :active="request()->routeIs('register')">
                            {{ __('Register') }}
                        </x-nav.dropdown-link>
                    @endif
                </x-slot>
            </x-nav.dropdown>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div class="lg:hidden flex bg-gray-900">
        <!-- Hamburger -->
        <div class="flex h-14 justify-between items-center w-screen text-stone-50 z-50">
            <div class="uppercase ml-4 font-kaushan"><a href="{{ route('home') }}">Chimerasite</a></div>
            <div>
                <div class="bg-gray-500 p-6 rounded-full border-4 border-gray-900 -translate-y-0.5 translate-x-4" wire:click="switch" onclick="lockscroll()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 {{ $trigger ? 'hidden' : 'inline-flex' }}">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 {{ $trigger ? 'inline-flex' : 'hidden' }}">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>
        </div>
        <div x-cloak class="absolute z-40 flex flex-col justify-between w-screen h-screen bg-gray-900 text-white pt-12 {{ $trigger ? '' : 'hidden' }}">
            <!-- Navigation Links -->
            <div class="flex flex-col text-sm space-y-6 mx-6 mt-6">
                <!-- Home -->
                <x-nav.responsive-link :href="route('home')" :active="request()->routeIs('home')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    <span class="ml-2 text-lg">
                        {{ __('Home') }}
                    </span>
                </x-nav.responsive-link>
                <!-- Projects -->
                <x-nav.dropdown align="bottom" toggle="set">
                    <x-slot:trigger>
                        <button type="button" class="inline-flex items-center text-base font-medium leading-5 text-gray-50 hover:text-blue-500 hover:border-blue-500 transition ease-in-out uppercase">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                            </svg>
                            <span class="ml-2 text-lg inline-flex items-center">
                                {{ __('Projects') }}
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 ml-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-nav.dropdown-link :href="route('xerofanzone')" :active="request()->routeIs('xerofanzone')">
                            {{ __('Xero Fanzone') }}
                        </x-nav.dropdown-link>
                    </x-slot>
                </x-nav.dropdown>
                <!-- Links -->
                <x-nav.responsive-link :href="route('card')" :active="request()->routeIs('card')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                    </svg>
                    <span class="ml-2 text-lg">
                        {{ __('Contact') }}
                    </span>
                </x-nav.responsive-link>
                <!-- Account Data -->
                <x-nav.dropdown align="bottom" toggle="set">
                    <x-slot:trigger>
                        <button type="button" class="inline-flex items-center text-base font-medium leading-5 text-gray-50 hover:text-blue-500 hover:border-blue-500 transition duration-150 ease-in-out uppercase">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <span class="ml-2 text-lg inline-flex items-center">
                                {{ __('Account') }}
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 ml-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        @if (Auth::user())
                            {{-- <x-nav.dropdown-link :href="route('dashboard')">
                                {{ __('Profile') }}
                            </x-nav.dropdown-link> --}}
                            <x-nav.dropdown-link :href="route('profile.edit')">
                                {{ __('Settings') }}
                            </x-nav.dropdown-link>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-nav.dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-nav.dropdown-link>
                            </form>
                        @else
                            <x-nav.dropdown-link :href="route('login')" :active="request()->routeIs('login')">
                                {{ __('Login') }}
                            </x-nav.dropdown-link>
                            <x-nav.dropdown-link :href="route('register')" :active="request()->routeIs('register')">
                                {{ __('Register') }}
                            </x-nav.dropdown-link>
                        @endif
                    </x-slot>
                </x-nav.dropdown>
            </div>
        </div>
    </div>
</nav>
