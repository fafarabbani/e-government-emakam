<!-- Navbar Start -->
<div class="container mx-auto">
    <div class="flex justify-between w-full items-center">
        <img class="order-1 sm:order-2" src="{{asset('images/logo-white.png')}}" alt="" style="width: 130px; height: 40px;">
        
        <div @click="navOpen = ! navOpen" class="order-2 sm:order-1 lg:hidden">
            <button  class="block right-4" id="hamburger" name="hamburger" type="button">
                <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                <span class="hamburger-line transition duration-300 ease-in-out"></span>
                <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
            </button>
            <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg  max-w-[210px] w-full top-full right-4 sm:right-0 sm:left-4">
                <ul class="block">
                    <li class="group">
                        <a href="{{ route('home')}}" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Beranda</a>
                    </li>
                    <li class="group">
                        <a href="{{ route('home')}}#about" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Tentang Kami</a>
                    </li>
                    <li class="group">
                        <a href="{{ route('home')}}#galeri" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Galeri</a>
                    </li>
                    <li class="group">
                        <a href="{{ route('home')}}#clients" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Clients</a>
                    </li>
                    <li class="group">
                        <a href="{{ route('home')}}#kontak" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Kontak</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="nav-links order-2 hidden lg:block ">
            <ul class="flex gap-8">
                <li class="text-white font-bold text-sm font-poppins">
                    <a href="{{ route('home')}}">Beranda</a>
                </li>
                <li class="text-white font-bold text-sm font-poppins">
                    <a href="{{ route('home')}}#about">Tentang Kami</a>
                </li>
                <li class="text-white font-bold text-sm font-poppins">
                    <a href="{{ route('home')}}#galeri">Galeri</a>
                </li>
                <li class="text-white font-bold text-sm font-poppins">
                    <a href="{{ route('home')}}#clients">Clients</a>
                </li>
                <li class="text-white font-bold text-sm font-poppins">
                    <a href="{{ route('home')}}#kontak">Kontak</a>
                </li>
            </ul>
        </div>

        <div class="order-3 hidden sm:block">
            @if (Route::has('login'))

            @auth
            <x-app-layout>
            </x-app-layout>

            @else
                <button class="grow px-8 py-4 font-bold text-white transition duration-300 text-sm">
                    <a href="{{ route('login')}}">Masuk</a>
                </button>
                <button class="grow bg-transparent hover:bg-white px-8 py-4 font-bold text-white hover:text-primary rounded-full border hover:shadow-md transition duration-300 text-sm">
                    <a href="{{ route('register')}}">Daftar</a>
                </button>
            @endauth
            @endif
        </div>
    </div>
</div>  

<div x-show="navOpen"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-90"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-90"
    x-data="{open : true}" class="absolute mb-[-1150px] right-0 left-0 bg-transparent p-4 lg:hidden sm:hidden">

    <div @click="open = !open" x-show="open" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="absolute bottom-[10px] pt-6 pb-[20px] px-4 right-5 left-5 flex gap-4 bg-transparent shadow-md rounded-md backdrop-filter">

        @if (Route::has('login'))

        @auth
        <x-app-layout class="hidden">
        </x-app-layout>

        @else
            <button class="grow bg-transparent hover:bg-white px-8 py-3 font-bold text-white hover:text-primary rounded-full border hover:shadow-md transition duration-300 text-sm">
                <a href="{{ route('login')}}">Masuk</a>
            </button>
            <button class="grow bg-primary hover:bg-white px-8 py-3 font-bold text-white hover:text-primary rounded-full border hover:shadow-md transition duration-300 text-sm">
                <a href="{{ route('register')}}">Daftar</a>
            </button>
        @endauth
        @endif
    </div>
</div>

{{-- <div x-show="navOpen"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-90"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-90"
    x-data="{open : false}" class="absolute mb-[-1150px] right-0 left-0 bg-white p-4 border lg:hidden">
    <ul class="flex justify-between">
        <li>
            <button class="flex justify-center flex-col items-center gap-1">
                <ion-icon name="home" class="text-2xl text-primary"></ion-icon>
                <span class="text-primary opacity-50 text-base font-bold">Home</span>
            </button>
        </li>
        <li>
            <button class="flex justify-center flex-col items-center gap-1">
                <ion-icon name="stats" class="text-grey opacity-50 text-2xl"></ion-icon>
                <span class="text-grey opacity-50 text-base font-normal">Statistics</span>
            </button>
        </li>
        <li>
            <button class="flex justify-center flex-col items-center gap-1">
                <ion-icon name="information-circle-outline" class="text-grey opacity-50 text-2xl"></ion-icon>
                <span class="text-grey opacity-50 text-base font-normal">About</span>
            </button>
        </li>
        <li>
            <button class="flex justify-center flex-col items-center gap-1">
                <ion-icon name="megaphone" class="text-grey opacity-50 text-2xl"></ion-icon>
                <span class="text-grey opacity-50 text-base font-normal">Contact</span>
            </button>
        </li>
        <li>
            <button @click="open = !open" class="flex justify-center flex-col items-center gap-1">
                <ion-icon name="menu" class="text-grey opacity-50 text-2xl"></ion-icon>
                <span class="text-grey opacity-50 text-base font-normal">More</span>
            </button>
        </li>
    </ul>

    <div x-show="open" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="absolute bottom-24 right-0 left-0 translate-x-1/2 flex gap-4 w-2/4">

        @if (Route::has('login'))

        @auth
        <x-app-layout class="hidden">
        </x-app-layout>

        @else
            <button class="grow bg-transparent hover:bg-white px-8 py-3 font-bold text-white hover:text-primary rounded-full border hover:shadow-md transition duration-300 text-sm">
                <a href="{{ route('login')}}">Login</a>
            </button>
            <button class="grow bg-transparent hover:bg-white px-8 py-3 font-bold text-white hover:text-primary rounded-full border hover:shadow-md transition duration-300 text-sm">
                <a href="{{ route('register')}}">Sig up</a>
            </button>
        @endauth
        @endif
    </div>
</div> --}}
<!-- Navbar End -->