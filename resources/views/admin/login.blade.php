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

        <div id="banner" class="bg-cover bg-center flex justify-center items-end w-full mobile:mt-MobileNavHeight desktop:mt-DesktopNavHeight px-12 mb-[40px] shadow-lg desktop:h-[356px] mobile:h-[244px] bg-[url('{{ asset('assets/images/photo6.png') }}')]">

            <!-- Content goes here -->
            <div class="p-[20px] w-full max-w-[537px] rounded-t-[37px] flex flex-col justify-center items-center gap-3 bg-white">
                <h1 class="font-dm-serif text-[50px] font-bold text-primary2 leading-tight">
                    Login Admin
                </h1>
                <p class="text-lg text-gray-600">
                    Beranda / Login Admin
                </p>
            </div>
        </div>

        <div id="main" class="max-w-[1200px] my-[120px] px-[30px] desktop:px-0 m-auto">
            
            <div class="flex flex-col items-center rounded-[40px] bg-[#F4F0EC] desktop:py-[40px] desktop:px-[60px] p-[30px]">
                <div class="text-center mb-[50px]">
                    <h1 class="font-dm-serif text-[40px] desktop:text-[50px] text-primary2 mb-[16px]">Halaman Admin</h1>
                    <p class="text-[20px] desktop:text-[22px]">Masuk sebagai Administrator untuk Mengelola Sistem Skyline Arsitek</p>
                </div>
                <div class="w-full max-w-md">
                    <form method="POST" action="{{ route('admin.login') }}" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-lg font-medium text-[#333] mb-2" for="email">Masukkan Email</label>
                            <input type="email" name="email" id="email" class="w-full px-4 py-2 border-b-2 border-[#333] focus:outline-none focus:border-[#333]" placeholder="Masukkan Email" required>
                        </div>
                        <div>
                            <label class="block text-lg font-medium text-[#333] mb-2" for="password">Masukkan Password</label>
                            <input type="password" name="password" id="password" class="w-full px-4 py-2 border-b-2 border-[#333] focus:outline-none focus:border-[#333]" placeholder="Masukkan Password" required>
                        </div>
                        <div class="flex justify-center mt-[40px]">
                            <button type="submit" class="inline-block border border-[#172736] bg-primary2 text-white px-[40px] py-[16px] rounded-[16px] font-medium mt-[40px]">
                                Kirim <b class="text-primary1 ml-2">→</b>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

       <!-- Footer -->
       @include('layouts.footer')
    </body>
</html>
