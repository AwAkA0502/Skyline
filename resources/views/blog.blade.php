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

        <div id="banner" class="bg-cover bg-center flex justify-center items-end w-full mobile:mt-MobileNavHeight desktop:mt-DesktopNavHeight px-12 mb-[40px] shadow-lg desktop:h-[356px] mobile:h-[244px] bg-[url('{{ asset('assets/images/photo11.png') }}')]">

            <!-- Content goes here -->
            <div class="p-[20px] w-full max-w-[537px] rounded-t-[37px] flex flex-col justify-center items-center gap-3 bg-white">
                <h1 class="font-dm-serif text-[50px] font-bold text-primary2 leading-tight">
                    Blog
                </h1>
                <p class="text-lg text-gray-600">
                    Beranda / Blog
                </p>
            </div>
        </div>

        <div id="main" class="max-w-[1200px] mt-[100px] px-[30px] desktop:px-0 m-auto">
            
            <div class="text-primary2 mb-[150px] flex flex-col items-start gap-[28px]">
                <h1 class="font-dm-serif text-[50px] mb-4 font-bold leading-tight">Latest Post</h1>
                <div class="flex w-full flex-col flex-wrap desktop:flex-row gap-[60px]">
                    <img class="rounded-[40px] h-[370px] flex-grow object-cover" src="{{ asset('assets/images/photo12.png') }}" alt="">
                    <div class="flex flex-col flex-grow justify-between">
                        <div class="max-w-[450px] mb-[40px]">
                            <h2 class="font-dm-serif text-[25px] text-primary2 leading-10 mb-[22px]">Low Cost Latest Invented Interior Designing Ideas</h2>
                            <div class="flex flex-col gap-[18px] text-[20px]">
                                <p>Lorem ipsum dolor sit amet, adipiscing Aliquam eu sem vitae turpis dignissim maximus.posuere in.Contrary to popular belief.</p>
                                <p>Lorem Ipsum is not simply random text. It has roots in a piece of classica.</p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <p>26 Desember 2022</p>
                            <div class="bg-primary3 rounded-full w-[50px] h-[50px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-primary2 mb-[114px] flex flex-col items-start gap-[30px]">
                <h1 class="font-dm-serif text-[50px] mb-4 font-bold leading-tight">Articles & News</h1>
                <div class="flex flex-wrap justify-around text-primary2 gap-y-12">
                    <div class="w-full desktop:w-[30%] p-[21px] bg-white border border-solid rounded-[62px]">
                        <img class="rounded-t-[40px] h-[290px] object-cover mb-[11px]" src="{{ asset('assets/images/photo12.png') }}" alt="">
                        <div class="flex-grow">
                            <div class="max-w-[450px] mb-[20px]">
                                <h2 class="font-dm-serif text-[25px] text-primary2 leading-10 mb-[22px]">Low Cost Latest Invented Interior Designing Ideas</h2>
                            </div>
                            <div class="flex justify-between items-center">
                                <p>26 Desember 2022</p>
                                <div class="bg-primary3 rounded-full w-[50px] h-[50px] grid place-items-center">
                                    <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full desktop:w-[30%] p-[21px] bg-white border border-solid rounded-[62px]">
                        <img class="rounded-t-[40px] h-[290px] object-cover mb-[11px]" src="{{ asset('assets/images/photo12.png') }}" alt="">
                        <div class="flex-grow">
                            <div class="max-w-[450px] mb-[20px]">
                                <h2 class="font-dm-serif text-[25px] text-primary2 leading-10 mb-[22px]">Low Cost Latest Invented Interior Designing Ideas</h2>
                            </div>
                            <div class="flex justify-between items-center">
                                <p>26 Desember 2022</p>
                                <div class="bg-primary3 rounded-full w-[50px] h-[50px] grid place-items-center">
                                    <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full desktop:w-[30%] p-[21px] bg-white border border-solid rounded-[62px]">
                        <img class="rounded-t-[40px] h-[290px] object-cover mb-[11px]" src="{{ asset('assets/images/photo12.png') }}" alt="">
                        <div class="flex-grow">
                            <div class="max-w-[450px] mb-[20px]">
                                <h2 class="font-dm-serif text-[25px] text-primary2 leading-10 mb-[22px]">Low Cost Latest Invented Interior Designing Ideas</h2>
                            </div>
                            <div class="flex justify-between items-center">
                                <p>26 Desember 2022</p>
                                <div class="bg-primary3 rounded-full w-[50px] h-[50px] grid place-items-center">
                                    <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full desktop:w-[30%] p-[21px] bg-white border border-solid rounded-[62px]">
                        <img class="rounded-t-[40px] h-[290px] object-cover mb-[11px]" src="{{ asset('assets/images/photo12.png') }}" alt="">
                        <div class="flex-grow">
                            <div class="max-w-[450px] mb-[20px]">
                                <h2 class="font-dm-serif text-[25px] text-primary2 leading-10 mb-[22px]">Low Cost Latest Invented Interior Designing Ideas</h2>
                            </div>
                            <div class="flex justify-between items-center">
                                <p>26 Desember 2022</p>
                                <div class="bg-primary3 rounded-full w-[50px] h-[50px] grid place-items-center">
                                    <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full desktop:w-[30%] p-[21px] bg-white border border-solid rounded-[62px]">
                        <img class="rounded-t-[40px] h-[290px] object-cover mb-[11px]" src="{{ asset('assets/images/photo12.png') }}" alt="">
                        <div class="flex-grow">
                            <div class="max-w-[450px] mb-[20px]">
                                <h2 class="font-dm-serif text-[25px] text-primary2 leading-10 mb-[22px]">Low Cost Latest Invented Interior Designing Ideas</h2>
                            </div>
                            <div class="flex justify-between items-center">
                                <p>26 Desember 2022</p>
                                <div class="bg-primary3 rounded-full w-[50px] h-[50px] grid place-items-center">
                                    <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full desktop:w-[30%] p-[21px] bg-white border border-solid rounded-[62px]">
                        <img class="rounded-t-[40px] h-[290px] object-cover mb-[11px]" src="{{ asset('assets/images/photo12.png') }}" alt="">
                        <div class="flex-grow">
                            <div class="max-w-[450px] mb-[20px]">
                                <h2 class="font-dm-serif text-[25px] text-primary2 leading-10 mb-[22px]">Low Cost Latest Invented Interior Designing Ideas</h2>
                            </div>
                            <div class="flex justify-between items-center">
                                <p>26 Desember 2022</p>
                                <div class="bg-primary3 rounded-full w-[50px] h-[50px] grid place-items-center">
                                    <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-[20px] m-auto mt-[51px]">
                    <div class="flex items-center justify-center rounded-full w-[52px] h-[52px] bg-primary1 text-white">
                        01
                    </div>
                    <div class="flex items-center justify-center rounded-full w-[52px] h-[52px] border border-solid border-primary1">
                        02
                    </div>
                    <div class="flex items-center justify-center rounded-full w-[52px] h-[52px] border border-solid border-primary1">
                        03
                    </div>
                    <div class="flex items-center justify-center rounded-full w-[52px] h-[52px] border border-solid border-primary1">
                        <img src="{{ asset('assets/images/chevron-right.svg') }}" alt="">
                    </div>
                </div>
            </div>

        </div>

        <div class="w-full desktop:py-[88px] desktop:px-[100px] p-[20px] bg-[#F4F0EC] flex flex-col justify-center items-center gap-[38px]">
            <h1 class="font-dm-serif text-[50px] mb-4 font-bold leading-tight">Maybe You Like</h1>
            <div class="flex flex-wrap justify-around max-w-[1200px] text-primary2 gap-y-12">
                <div class="w-full desktop:w-[30%] p-[21px] bg-white border border-solid rounded-[62px]">
                    <img class="rounded-t-[40px] h-[290px] object-cover mb-[11px]" src="{{ asset('assets/images/photo12.png') }}" alt="">
                    <div class="flex-grow">
                        <div class="max-w-[450px] mb-[20px]">
                            <h2 class="font-dm-serif text-[25px] text-primary2 leading-10 mb-[22px]">Low Cost Latest Invented Interior Designing Ideas</h2>
                        </div>
                        <div class="flex justify-between items-center">
                            <p>26 Desember 2022</p>
                            <div class="bg-primary3 rounded-full w-[50px] h-[50px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full desktop:w-[30%] p-[21px] bg-white border border-solid rounded-[62px]">
                    <img class="rounded-t-[40px] h-[290px] object-cover mb-[11px]" src="{{ asset('assets/images/photo12.png') }}" alt="">
                    <div class="flex-grow">
                        <div class="max-w-[450px] mb-[20px]">
                            <h2 class="font-dm-serif text-[25px] text-primary2 leading-10 mb-[22px]">Low Cost Latest Invented Interior Designing Ideas</h2>
                        </div>
                        <div class="flex justify-between items-center">
                            <p>26 Desember 2022</p>
                            <div class="bg-primary3 rounded-full w-[50px] h-[50px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full desktop:w-[30%] p-[21px] bg-white border border-solid rounded-[62px]">
                    <img class="rounded-t-[40px] h-[290px] object-cover mb-[11px]" src="{{ asset('assets/images/photo12.png') }}" alt="">
                    <div class="flex-grow">
                        <div class="max-w-[450px] mb-[20px]">
                            <h2 class="font-dm-serif text-[25px] text-primary2 leading-10 mb-[22px]">Low Cost Latest Invented Interior Designing Ideas</h2>
                        </div>
                        <div class="flex justify-between items-center">
                            <p>26 Desember 2022</p>
                            <div class="bg-primary3 rounded-full w-[50px] h-[50px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <!-- Footer -->
       @include('layouts.footer')
    </body>
</html>
