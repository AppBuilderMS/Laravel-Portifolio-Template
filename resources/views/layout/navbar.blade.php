<div>
    <!-- =====Navbar Section Start -->
    <header
        x-data="{navbarOpen: false}"
        class="fixed left-0 top-0 z-50 bg-gray-100 w-full flex items-center shadow-md dark:bg-slate-900 h-24"
    >
        <div class="container">
            <div class="flex -mx-4 items-center justify-between relative">
                <div class="px-4 w-60 max-w-full">
                    <a href="/" class="w-full flex items-center py-2">
                        <img src="{{asset('image/logo3.png')}}" alt="Logo" class="inline-block">
                    </a>
                </div>

                <div class="flex px-4 justify-end items-center w-full">
                    <div>
                        <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen" x-bind:class="navbarOpen && 'navbarTogglerActive'"></x-layout.navbar-hamburger>
                        <nav :class="!navbarOpen && 'hidden' " id="navbarCollapse"
                            class="absolute py-5 px-6 bg-gray-100 shadow rounded-lg w-full right-0 top-full z-50 dark:bg-slate-900 dark:text-gray-300 lg:max-w-full lg:w-full lg:block lg:static lg:shadow-none">

                            <ul class="block lg:flex lg:items-center">
                                @foreach($navigationItems as $item)
                                    <x-layout.navbar-item :href="$item['href']">{{$item['label']}}</x-layout.navbar-item>
                                @endforeach
                            </ul>

                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- =====Navbar Section End -->
</div>
