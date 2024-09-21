<nav class="font-jost text-primary2 backdrop-blur-sm desktop:pt-10 mobile:pt-2 w-full fixed duration-300 bg-white dark:bg-purpleScale90 z-50 flex justify-center bg-opacity-80">
    <div class="desktop:w-[1200px] mobile:w-full mobile:px-5">
        <div class="flex justify-between items-center">
            <a class="flex items-center text-logo max-w-[50%]" href="">
                <img src="{{ asset('assets/images/logo-navy.png') }}">
            </a>
            <div class="mobile:hidden navbarMobile:flex items-center">
                <ul class="flex items-center text-xl">
                    <li class="pr-8"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="pr-8"><a href="{{ route('profile') }}">Profile</a></li>
                    <li class="pr-8"><a href="">Portfolio</a></li>
                    <li class="pr-8"><a href="{{ route('realisasi') }}">Realisasi</a></li>
                    <li class="pr-8"><a href="">Harga & Prosedur</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                </ul>
            </div>
            <div class="flex gap-4">
                <img id="sun" class="cursor-pointer hidden dark:stroke-white" src="{{ asset('assets/images/sun.svg') }}" alt="">
                <img id="moon" class="cursor-pointer hidden dark:stroke-white" src="{{ asset('assets/images/moon.svg') }}" alt="">
                <div class="size-7 mobile:flex flex-col justify-around navbarMobile:hidden" onclick="openBar()">
                    <div class="h-[2px] bg-primary1 rounded-[1px]"></div>
                    <div class="h-[2px] bg-primary1 rounded-[1px]"></div>
                    <div class="h-[2px] bg-primary1 rounded-[1px]"></div>
                </div>

                <a href="" class="px-6 font-semibold rounded-[12px] shadow-custom text-white bg-primary2 py-3 desktop:block mobile:hidden">Hubungi Kami</a>
            </div>
        </div>
    </div>
</nav>

<div id="menuBar" class="menuClosed font-jost text-primary2 w-screen h-[95vh] mr-[100px] bg-purpleScale10 dark:bg-purpleScale80 fixed z-[60] opacity-0 px-2 flex flex-col justify-between">
    <div>
        <div class="py-2 flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ asset('assets/images/logo-navy.png') }}">
            </div>
            <img src="{{ asset('assets/images/tabler-icon-x.png') }}" class="size-10" onclick="closeBar()">
        </div>
        <div class="mt-10">
            <div class="grid grid-rows-5 gap-y-7">
                <p class="text-Large/SemiBold font-poppins text-purpleScale50 font-bold text-center"><a href="">Beranda</a></p>
                <p class="text-Large/SemiBold font-poppins text-purpleScale50 font-bold text-center"><a href="#HowItWorks" onclick="closeBar()">Profile</a></p>
                <p class="text-Large/SemiBold font-poppins text-purpleScale50 font-bold text-center"><a href="">Portfolio</a></p>
                <p class="text-Large/SemiBold font-poppins text-purpleScale50 font-bold text-center"><a href="">Realisasi</a></p>
                <p class="text-Large/SemiBold font-poppins text-purpleScale50 font-bold text-center"><a href="">Harga & Prosedur</a></p>
                <p class="text-Large/SemiBold font-poppins text-purpleScale50 font-bold text-center"><a href="#question" onclick="closeBar()">Blog</a></p>
            </div>
        </div>
    </div>
    <div class="p-2 dark:border-purpleScale70 border-purpleScale50  border-t-2 mb-[15%]">
        <a href="">
            <button class="bg-[#7E57A3] rounded-[20px] w-full py-3 text-white font-bold font-poppins">Hubungi Kami</button>
        </a>
    </div>
</div>