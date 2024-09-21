<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Skyline Arsitek</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('assets/css/scrolldown-animation.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/menu-animation.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
        <link rel="stylexsheet" href="{{ asset('assets/css/animation.css') }}">

        <script src="https://cdn.tailwindcss.com"></script>

        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary1: '#CDA274',
                            primary2: '#292F36',
                            primary3: '#F4F0EC',
                            logo: '#172736',
                            textcolor: '#4D5053'
                        },
                        screens: {
                            'mobile': {'max': '899px'}, 
                            'navbarMobile': {'min': '900px'}, 
                            'desktop': {'min': '1024px'}, 
                        },
                        fontFamily: {
                            jost: ['Jost', 'sans-serif'],
                            'dm-serif': ['"DM Serif Display"', 'serif'],
                        },
                        spacing: {
                            'DesktopWidth': '1200px',
                            'MobileWidth': '320px',
                            'DesktopNavHeight': '135px',
                            'MobileNavHeight': '62px',
                        },
                        boxShadow: {
                            custom: '0px 6.67px 13.33px 0px rgba(192, 192, 192, 0.35)',
                        },
                    },
                }
            }
        </script>

    </head>
    <body class="font-sans antialiased text-textcolor flex flex-col items-center overflow-x-hidden">

        <!-- Navbar -->
        @include('layouts.navbar')

        <div id="banner" class="bg-cover bg-center flex justify-center items-end w-full mobile:mt-MobileNavHeight desktop:mt-DesktopNavHeight px-12 mb-[40px] shadow-lg desktop:h-[356px] mobile:h-[244px] bg-[url('{{ asset('assets/images/photo7.png') }}')]">

            <!-- Content goes here -->
            <div class="p-[20px] w-full max-w-[537px] rounded-t-[37px] flex flex-col justify-center items-center gap-3 bg-white">
                <h1 class="font-dm-serif text-[50px] font-bold text-primary2 leading-tight">
                    Profil
                </h1>
                <p class="text-lg text-gray-600">
                    Beranda / Profil
                </p>
            </div>
        </div>

        <div id="main" class="max-w-[1200px] px-[20px] text-center desktop:text-start desktop:px-0 m-auto">
            <img class="w-full h-[300px] desktop:h-[400px] bg-cover object-cover rounded-[40px] desktop:rounded-[70px] mb-[40px]" src="{{ asset('assets/images/photo9.png') }}" alt="">
            <div class="flex flex-col gap-[23px] mb-[40px]">
                <h1 class="font-dm-serif text-[50px] text-primary2 leading-tight">Selamat Datang di Skyline Arsitek</h1>
                <p class="text-[22px]">Fakta yang sudah lama diketahui adalah bahwa pembaca akan terganggu oleh konten yang dapat dibaca dari sebuah halaman ketika melihat tata letaknya. Inti dari penggunaannya adalah bahwa tata letak tersebut memiliki bentuk yang kurang lebih normal.</p>
                <div class="flex justify-center desktop:justify-start gap-[23px]">
                    <div class="flex flex-col gap-[12px]">
                        <h1 class="text-[48px] font-bold leading-tight">1000+</h1>
                        <p>PROYEK SELESAI</p>
                    </div>
                    <div class="flex flex-col gap-[12px]">
                        <h1 class="text-[48px] font-bold leading-tight">989+</h1>
                        <p>KLIEN SENANG</p>
                    </div>
                </div>
            </div>
            <a href="#" class="inline-block bg-primary2 text-white px-9 py-5 rounded-[18px] font-medium">
                Layanan Kami <b class="text-primary1 ml-2">→</b>
            </a>
            <div class="mt-[40px] flex flex-col gap-[12px]">
                <p class="font-dm-serif text-[25px] text-primary2">Ikuti Kami</p>
                <div class="flex justify-center desktop:justify-start gap-[25px]">
                    <img src="{{ asset('assets/images/Pinterest.svg') }}" alt="">
                    <img src="{{ asset('assets/images/Tiktok.svg') }}" alt="">
                    <img src="{{ asset('assets/images/Twitter.svg') }}" alt="">
                    <img src="{{ asset('assets/images/Instagram.svg') }}" alt="">
                    <img src="{{ asset('assets/images/Facebook.svg') }}" alt="">
                    <img src="{{ asset('assets/images/Youtube.svg') }}" alt="">
                </div>
            </div>
            <div class="flex flex-col-reverse desktop:flex-row my-[60px] gap-[40px] items-center">
                <div class="flex-grow">
                    <h1 class="font-dm-serif text-[50px] text-primary2 leading-tight mb-[23px]">Hubungi Kami</h1>
                    <p class="text-[22px] leading-9 w-full font-jost">Customer Service   : 08123-456-789</p>
                    <p class="text-[22px] leading-9">Telepon/Whatsapp   : 08123-456-789</p>
                    <p class="text-[22px] leading-9">Penawaran dan Kerjasama   : 08123-456-789</p>
                    <p class="text-[22px] leading-9">Email   : skylinearsitek@gmail.com</p>
                </div>
                <img class="flex-grow rounded-[40px] desktop:rounded-[70px]" src="{{ asset('assets/images/photo9.png') }}" alt="">
            </div>
            <div class="flex flex-col desktop:flex-row my-[60px] gap-[40px] items-center">
                <img class="flex-grow rounded-[40px] desktop:rounded-[70px]" src="{{ asset('assets/images/photo10.png') }}" alt="">
                <div class="flex-grow">
                    <h1 class="font-dm-serif text-[50px] text-primary2 leading-tight mb-[23px]">Hasil Akhir</h1>
                    <p class="text-[22px] leading-9">Fakta lama menunjukkan bahwa pembaca sering terganggu oleh konten yang dapat dibaca saat melihat tata letak halaman, karena tata letak tersebut memiliki bentuk yang kurang lebih normal.</p>
                    <a href="#" class="inline-block bg-primary2 text-white px-9 py-5 mt-[40px] rounded-[18px] font-medium">
                        Layanan Kami <b class="text-primary1 ml-2">→</b>
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full py-[60px] px-[20px] bg-[#F4F0EC] flex flex-col items-center gap-[23px]">
            <h1 class="font-dm-serif text-center text-[40px] desktop:text-[50px] text-primary2 leading-tight">Alamat Kantor Kami</h1>
            <div class="desktop:py-[60px] desktop:px-[40px] p-[30px] rounded-[60px] gap-[34px] bg-white flex flex-col text-center justify-center items-center max-w-[510px]">
                <img class="w-[124px] h-[124px]" src="{{ asset('assets/images/Maps.svg') }}" alt="">
                <p class="text-[22px] desktop:text-[28px] leading-10">Jalan Lorep Ipsum, Gedung 12 Nomer 23 Lantai 1</p>
            </div>
        </div>

       <!-- Footer -->
       @include('layouts.footer')
    </body>
</html>
