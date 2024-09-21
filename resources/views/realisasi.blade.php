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
                    Realisasi
                </h1>
                <p class="text-lg text-gray-600">
                    Beranda / Realisasi
                </p>
            </div>
        </div>

        <div id="main" class="max-w-[1200px] pt-4 px-[30px] desktop:px-0 m-auto">
            
            <div class="text-primary2 mb-[60px] flex flex-col items-center">
                <div class="text-center max-w-[810px] m-auto mb-[80px]">
                    <h1 class="font-dm-serif text-[50px] mb-4 font-bold leading-tight">Realisasi Pembangunan</h1>
                    <p class="max-w-[730px] text-[22px]">Fakta lama menunjukkan bahwa pembaca akan terganggu oleh konten yang dapat dibaca saat melihat tata letak halaman.</p>
                </div>
                <div class="flex flex-wrap justify-around text-primary2 gap-y-12">
                    <div class="w-full desktop:w-[45%]">
                        <img class="rounded-[40px] h-[400px] object-cover mb-5" src="{{ asset('assets/images/photo12.png') }}" alt="">
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class="font-dm-serif text-[25px]">Modern Kitchen</h4>
                                <p>Decor / Architecture</p>
                            </div>
                            <div class="bg-primary3 rounded-full w-[60px] h-[60px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-full desktop:w-[45%]">
                        <img class="rounded-[40px] h-[400px] object-cover mb-5" src="{{ asset('assets/images/photo13.png') }}" alt="">
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class="font-dm-serif text-[25px]">Modern Kitchen</h4>
                                <p>Decor / Architecture</p>
                            </div>
                            <div class="bg-primary3 rounded-full w-[60px] h-[60px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-full desktop:w-[45%]">
                        <img class="rounded-[40px] h-[400px] object-cover mb-5" src="{{ asset('assets/images/photo14.png') }}" alt="">
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class="font-dm-serif text-[25px]">Modern Kitchen</h4>
                                <p>Decor / Architecture</p>
                            </div>
                            <div class="bg-primary3 rounded-full w-[60px] h-[60px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-full desktop:w-[45%]">
                        <img class="rounded-[40px] h-[400px] object-cover mb-5" src="{{ asset('assets/images/photo15.png') }}" alt="">
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class="font-dm-serif text-[25px]">Modern Kitchen</h4>
                                <p>Decor / Architecture</p>
                            </div>
                            <div class="bg-primary3 rounded-full w-[60px] h-[60px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="inline-block bg-primary2 text-white px-9 py-5 mt-10 rounded-[18px] font-medium">
                    Lihat Lebih Banyak <b class="text-primary1 ml-2">→</b>
                </a>
            </div>

            <div class="text-primary2 mb-[60px] flex flex-col items-center">
                <div class="text-center max-w-[810px] m-auto mb-[80px]">
                    <h1 class="font-dm-serif text-[50px] mb-4 font-bold leading-tight">Proyek Berjalan</h1>
                    <p class="max-w-[730px] text-[22px]">Fakta lama menunjukkan bahwa pembaca akan terganggu oleh konten yang dapat dibaca saat melihat tata letak halaman.</p>
                </div>
                <div class="flex flex-wrap justify-around text-primary2 gap-y-12">
                    <div class="w-full desktop:w-[45%]">
                        <img class="rounded-[40px] h-[400px] object-cover mb-5" src="{{ asset('assets/images/photo12.png') }}" alt="">
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class="font-dm-serif text-[25px]">Modern Kitchen</h4>
                                <p>Decor / Architecture</p>
                            </div>
                            <div class="bg-primary3 rounded-full w-[60px] h-[60px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-full desktop:w-[45%]">
                        <img class="rounded-[40px] h-[400px] object-cover mb-5" src="{{ asset('assets/images/photo13.png') }}" alt="">
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class="font-dm-serif text-[25px]">Modern Kitchen</h4>
                                <p>Decor / Architecture</p>
                            </div>
                            <div class="bg-primary3 rounded-full w-[60px] h-[60px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-full desktop:w-[45%]">
                        <img class="rounded-[40px] h-[400px] object-cover mb-5" src="{{ asset('assets/images/photo14.png') }}" alt="">
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class="font-dm-serif text-[25px]">Modern Kitchen</h4>
                                <p>Decor / Architecture</p>
                            </div>
                            <div class="bg-primary3 rounded-full w-[60px] h-[60px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-full desktop:w-[45%]">
                        <img class="rounded-[40px] h-[400px] object-cover mb-5" src="{{ asset('assets/images/photo15.png') }}" alt="">
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class="font-dm-serif text-[25px]">Modern Kitchen</h4>
                                <p>Decor / Architecture</p>
                            </div>
                            <div class="bg-primary3 rounded-full w-[60px] h-[60px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="inline-block bg-primary2 text-white px-9 py-5 mt-10 rounded-[18px] font-medium">
                    Lihat Lebih Banyak <b class="text-primary1 ml-2">→</b>
                </a>
            </div>
            
            <div class="text-primary2 mb-[60px] flex flex-col items-center">
                <div class="text-center max-w-[810px] m-auto mb-[80px]">
                    <h1 class="font-dm-serif text-[50px] mb-4 font-bold leading-tight">Video Realisasi Pembangunan</h1>
                    <p class="max-w-[730px] text-[22px]">Fakta lama menunjukkan bahwa pembaca akan terganggu oleh konten yang dapat dibaca saat melihat tata letak halaman.</p>
                </div>
                <div class="flex flex-wrap justify-around text-primary2 gap-y-12">
                    <div class="w-full desktop:w-[45%]">
                        <img class="rounded-[40px] h-[400px] object-cover mb-5" src="{{ asset('assets/images/photo12.png') }}" alt="">
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class="font-dm-serif text-[25px]">Modern Kitchen</h4>
                                <p>Decor / Architecture</p>
                            </div>
                            <div class="bg-primary3 rounded-full w-[60px] h-[60px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-full desktop:w-[45%]">
                        <img class="rounded-[40px] h-[400px] object-cover mb-5" src="{{ asset('assets/images/photo13.png') }}" alt="">
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class="font-dm-serif text-[25px]">Modern Kitchen</h4>
                                <p>Decor / Architecture</p>
                            </div>
                            <div class="bg-primary3 rounded-full w-[60px] h-[60px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-full desktop:w-[45%]">
                        <img class="rounded-[40px] h-[400px] object-cover mb-5" src="{{ asset('assets/images/photo14.png') }}" alt="">
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class="font-dm-serif text-[25px]">Modern Kitchen</h4>
                                <p>Decor / Architecture</p>
                            </div>
                            <div class="bg-primary3 rounded-full w-[60px] h-[60px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-full desktop:w-[45%]">
                        <img class="rounded-[40px] h-[400px] object-cover mb-5" src="{{ asset('assets/images/photo15.png') }}" alt="">
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class="font-dm-serif text-[25px]">Modern Kitchen</h4>
                                <p>Decor / Architecture</p>
                            </div>
                            <div class="bg-primary3 rounded-full w-[60px] h-[60px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="inline-block bg-primary2 text-white px-9 py-5 mt-10 rounded-[18px] font-medium">
                    Lihat Lebih Banyak <b class="text-primary1 ml-2">→</b>
                </a>
            </div>
            
            <div class="text-primary2 mb-[60px] flex flex-col items-center">
                <div class="text-center max-w-[810px] m-auto mb-[80px]">
                    <h1 class="font-dm-serif text-[50px] mb-4 font-bold leading-tight">Realisasi Pembangunan Lainnya</h1>
                    <p class="max-w-[730px] text-[22px]">Fakta lama menunjukkan bahwa pembaca akan terganggu oleh konten yang dapat dibaca saat melihat tata letak halaman.</p>
                </div>
                <div class="flex flex-wrap justify-around text-primary2 gap-y-12">
                    <div class="w-full desktop:w-[45%]">
                        <img class="rounded-[40px] h-[400px] object-cover mb-5" src="{{ asset('assets/images/photo12.png') }}" alt="">
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class="font-dm-serif text-[25px]">Modern Kitchen</h4>
                                <p>Decor / Architecture</p>
                            </div>
                            <div class="bg-primary3 rounded-full w-[60px] h-[60px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-full desktop:w-[45%]">
                        <img class="rounded-[40px] h-[400px] object-cover mb-5" src="{{ asset('assets/images/photo13.png') }}" alt="">
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class="font-dm-serif text-[25px]">Modern Kitchen</h4>
                                <p>Decor / Architecture</p>
                            </div>
                            <div class="bg-primary3 rounded-full w-[60px] h-[60px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-full desktop:w-[45%]">
                        <img class="rounded-[40px] h-[400px] object-cover mb-5" src="{{ asset('assets/images/photo14.png') }}" alt="">
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class="font-dm-serif text-[25px]">Modern Kitchen</h4>
                                <p>Decor / Architecture</p>
                            </div>
                            <div class="bg-primary3 rounded-full w-[60px] h-[60px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-full desktop:w-[45%]">
                        <img class="rounded-[40px] h-[400px] object-cover mb-5" src="{{ asset('assets/images/photo15.png') }}" alt="">
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class="font-dm-serif text-[25px]">Modern Kitchen</h4>
                                <p>Decor / Architecture</p>
                            </div>
                            <div class="bg-primary3 rounded-full w-[60px] h-[60px] grid place-items-center">
                                <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="inline-block bg-primary2 text-white px-9 py-5 mt-10 rounded-[18px] font-medium">
                    Lihat Lebih Banyak <b class="text-primary1 ml-2">→</b>
                </a>
            </div>

        </div>

        <div class="w-full desktop:py-[88px] desktop:px-[100px] p-[20px] bg-[#F4F0EC] flex flex-col justify-center items-center gap-[38px]">
            <h1 class="font-dm-serif text-[40px] desktop:text-[50px] text-primary2 leading-tight">Pilih Kategori Lainnya</h1>
            <div class="gap-[15px] flex text-center justify-center items-center flex-wrap w-full max-w-[1000px]">
                <a href="#" class="inline-block bg-white text-primary2 px-[50px] py-4 rounded-[18px] text-[26px] whitespace-nowrap">
                    Semua Portfolio
                </a>
                <a href="#" class="inline-block bg-white text-primary2 px-[50px] py-4 rounded-[18px] text-[26px] whitespace-nowrap">
                    Desain Rumah Terbaik
                </a>
                <a href="#" class="inline-block bg-white text-primary2 px-[50px] py-4 rounded-[18px] text-[26px] whitespace-nowrap">
                    Kos - Kosan
                </a>
                <a href="#" class="inline-block bg-white text-primary2 px-[50px] py-4 rounded-[18px] text-[26px] whitespace-nowrap">
                    Kantor & Gudang
                </a>
                <a href="#" class="inline-block bg-white text-primary2 px-[50px] py-4 rounded-[18px] text-[26px] whitespace-nowrap">
                    Ruko / Rukan
                </a>
                <a href="#" class="inline-block bg-white text-primary2 px-[50px] py-4 rounded-[18px] text-[26px] whitespace-nowrap">
                    Perumahan
                </a>
                <a href="#" class="inline-block bg-white text-primary2 px-[50px] py-4 rounded-[18px] text-[26px] whitespace-nowrap">
                    Villa
                </a>
                <a href="#" class="inline-block bg-white text-primary2 px-[50px] py-4 rounded-[18px] text-[26px] whitespace-nowrap">
                    Hotel
                </a>
                <a href="#" class="inline-block bg-white text-primary2 px-[50px] py-4 rounded-[18px] text-[26px] whitespace-nowrap">
                    Aula Pertemuan
                </a>
                <a href="#" class="inline-block bg-white text-primary2 px-[50px] py-4 rounded-[18px] text-[26px] whitespace-nowrap">
                    Realisasi Pembangunan
                </a>
            </div>
        </div>

       <!-- Footer -->
       @include('layouts.footer')
    </body>
</html>
