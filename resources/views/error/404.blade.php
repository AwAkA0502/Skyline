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
                            'MobileNavHeight': '90px',
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

        <div class="w-full h-[100vh] p-[20px] flex justify-between flex-wrap desktop:flex-nowrap pt-MobileNavHeight desktop:pt-DesktopNavHeight gap-[80px]">
            <div class="desktop:ml-[120px]">
                <div class="font-dm-serif">
                    <h1 class="text-[126px] desktop:text-[250px] text-primary1 leading-tight">404</h1>
                    <p class="text-[35px]">We are sorry, but the page you requested was not found</p>
                </div>
                <a href="#" class="inline-block border border-[#172736] bg-primary2 text-white text-[18px] font-semibold px-[40px] py-[16px] rounded-[16px] mt-[40px]">
                    Back to Home <b class="text-primary1 ml-2">→</b>
                </a>
            </div>
            <div class="flex-shrink-0 max-w-[100%]">
                <img class="rounded-[12px] rounded-bl-[80px] desktop:rounded-0 desktop:rounded-bl-[353px]" src="{{ asset('assets/images/photo16.png') }}" alt="">
            </div>
        </div>

    </body>
</html>
