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

        <div id="main" class="max-w-[1200px] mobile:mt-MobileNavHeight desktop:mt-DesktopNavHeight pt-4 m-auto">
            <div id="banner" class="relative bg-cover bg-center rounded-[70px] px-12 mb-[80px] shadow-lg desktop:h-[720px] bg-[url('{{ asset('assets/images/banner.svg') }}')]">
                <!-- Overlay for better text readability -->
                <div class="absolute inset-0 bg-white bg-opacity-30 rounded-lg"></div>

                <!-- Content goes here -->
                <div class="relative z-10 h-full flex flex-col justify-center gap-3">
                    <h1 class="font-dm-serif w-[60%] pt-12 text-[65px] font-bold text-primary2 leading-tight">
                        Arsitek Handal, Pengawasan Gratis
                    </h1>
                    <p class="text-lg text-gray-600 mt-4 w-1/2">
                        Para ahli berpengalaman kami telah sukses menyelesaikan lebih dari 1000 proyek. Dapatkan bonus gambar struktur, desain interior 3D, perhitungan RAB, dan pengawasan gratis.
                    </p>
                    <div class="mt-6">
                        <a href="#" class="inline-block bg-[#172736] text-white px-6 py-4 rounded-xl font-medium">
                            Lihat desain pilihan yang terbaik <b class="text-primary1 ml-2">→</b>
                        </a>
                        <a href="#" class="inline-block border border-[#172736] text-[#172736] px-6 py-4 rounded-lg font-medium mt-4 md:mt-0 md:ml-4">
                            Harga & Prosedur
                        </a>
                    </div>
                </div>
            </div>

            <section id="category" class="my-[140px]">
                <div class="text-center max-w-[810px] m-auto mb-12">
                    <h1 class="font-dm-serif text-[50px] mb-4 font-bold text-primary2 leading-tight">Pilih Kategori Design</h1>
                    <p>Rumah mewah impian Anda, desain kami. Kami tawarkan jasa konsultasi arsitek lengkap, dari konsep hingga realisasi.Hasilnya? Hunian elegan yang menjadi investasi masa depan.</p>
                </div>
                <div class="flex flex-wrap justify-around text-primary2">
                    <div class="desktop:w-[28%] mobile:w-[90%] border border-[#E7E7E7] rounded-[62px] p-8">
                        <h2 class="font-dm-serif text-[24px] text-center mb-8">Berdasarkan Style</h2>
                        <ul class="px-4 space-y-5 text-lg">
                            <li class="flex justify-between">
                                Style Klasik 
                                <div class="bg-primary3 rounded-full w-[30px] h-[30px] grid place-items-center">
                                    <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                                </div>
                            </li>
                            @foreach ($style_categories as $category)
                                <li class="flex justify-between">
                                    {{ $category->name }} 
                                    <div class="bg-primary3 rounded-full w-[30px] h-[30px] grid place-items-center">
                                        <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="desktop:w-[28%] mobile:w-[90%] border border-[#E7E7E7] rounded-[62px] p-8">
                        <h2 class="font-dm-serif text-[24px] text-center mb-8">Lebar Tanah</h2>
                        <ul class="px-4 space-y-5 text-lg">
                            @foreach ($size_categories as $category)
                                <li class="flex justify-between">
                                    {{ $category->name }} 
                                    <div class="bg-primary3 rounded-full w-[30px] h-[30px] grid place-items-center">
                                        <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="desktop:w-[28%] mobile:w-[90%] border border-[#E7E7E7] rounded-[62px] p-8">
                        <h2 class="font-dm-serif text-[24px] text-center mb-8">Jumlah Lantai</h2>
                        <ul class="px-4 space-y-5 text-lg">
                            @foreach ($floor_categories as $category)
                                <li class="flex justify-between">
                                    {{ $category->name }} 
                                    <div class="bg-primary3 rounded-full w-[30px] h-[30px] grid place-items-center">
                                        <img src="{{ asset('assets/images/vector.svg') }}" alt="">
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </section>

            <section class="my-[140px] text-primary2 flex flex-col items-center">
                <div class="text-center max-w-[810px] m-auto mb-12">
                    <h1 class="font-dm-serif text-[50px] mb-4 font-bold leading-tight">Design Populer</h1>
                    <p>Here are some of our popular designs.</p>
                </div>
            
                <div class="flex flex-wrap justify-around text-primary2 gap-y-12">
                    @foreach ($design_popular as $card)
                    <div class="w-[45%]">
                        @if ($card->image)
                            <img class="rounded-tr-[80px] mb-5 min-h-[548px]" src="{{ asset('storage/' . $card->image) }}" alt="{{ $card->title }}">
                        @endif
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class="font-dm-serif text-[25px]">{{ $card->title }}</h4>
                                <p>{{ $card->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
            
            <section class="my-[140px] pt-[60px] text-primary2 flex flex-col items-center">
                <div class="text-center max-w-[810px] m-auto mb-12">
                    <h1 class="font-dm-serif text-[50px] mb-4 font-bold leading-tight">Design 3 Dimensi </h1>
                    <p>It is a long established fact that a reader will be distracted by the of readable content of page lookings at its layouts points.</p>
                </div>
                <div class="flex flex-wrap justify-around text-primary2 gap-y-12">
                    <div class="w-[45%]">
                        <img src="{{ asset('assets/images/photo1.png') }}" alt="">
                    </div>
                    <div class="w-[45%]">
                        <img src="{{ asset('assets/images/photo2.png') }}" alt="">
                    </div>
                    <div class="w-[45%]">
                        <img src="{{ asset('assets/images/photo3.png') }}" alt="">
                    </div>
                    <div class="w-[45%]">
                        <img src="{{ asset('assets/images/photo4.png') }}" alt="">
                    </div>
                </div>
                <a href="#" class="inline-block bg-primary2 text-white px-9 py-5 mt-10 rounded-[18px] font-medium">
                    Lihat Lebih Banyak <b class="text-primary1 ml-2">→</b>
                </a>
            </section>
            
            <section class="my-[140px] pt-[60px] text-primary2 flex flex-col items-center">
                <div class="text-center max-w-[810px] m-auto mb-12">
                    <h1 class="font-dm-serif text-[50px] mb-4 font-bold leading-tight">Realisasi Pembangunan </h1>
                    <p>It is a long established fact that a reader will be distracted by the of readable content of page lookings at its layouts points.</p>
                </div>
                <div class="flex flex-wrap justify-around text-primary2 gap-y-12">
                    <div class="w-[95%]">
                        <img class="rounded-[20px]" src="{{ asset('assets/images/photo5.png') }}" alt="">
                    </div>
                    <div class="w-[45%]">
                        <img src="{{ asset('assets/images/photo3.png') }}" alt="">
                    </div>
                    <div class="w-[45%]">
                        <img src="{{ asset('assets/images/photo4.png') }}" alt="">
                    </div>
                </div>
                <a href="#" class="inline-block bg-primary2 text-white px-9 py-5 mt-10 rounded-[18px] font-medium">
                    Lihat Lebih Banyak <b class="text-primary1 ml-2">→</b>
                </a>
            </section>

            <section class="my-[140px] pt-[60px] text-primary2 flex flex-col items-center">
                <div class="text-center max-w-[810px] m-auto mb-12">
                    <h1 class="font-dm-serif text-[50px] mb-4 font-bold leading-tight">Video Pembangunan</h1>
                    <p>It is a long established fact that a reader will be distracted by the of readable content of page lookings at its layouts points.</p>
                </div>
                <div class="flex flex-wrap justify-around text-primary2 gap-y-12">
                    <div class="w-[45%]">
                        <img src="{{ asset('assets/images/photo1.png') }}" alt="">
                    </div>
                    <div class="w-[45%]">
                        <img src="{{ asset('assets/images/photo2.png') }}" alt="">
                    </div>
                    <div class="w-[45%]">
                        <img src="{{ asset('assets/images/photo3.png') }}" alt="">
                    </div>
                    <div class="w-[45%]">
                        <img src="{{ asset('assets/images/photo4.png') }}" alt="">
                    </div>
                </div>
                <a href="#" class="inline-block bg-primary2 text-white px-9 py-5 mt-10 rounded-[18px] font-medium">
                    Lihat Lebih Banyak <b class="text-primary1 ml-2">→</b>
                </a>
            </section>

            <section class="my-[140px] pt-[60px] text-primary2">
                <div class="text-center max-w-[810px] m-auto mb-12">
                    <h1 class="font-dm-serif text-[50px] mb-4 font-bold leading-tight">Pilihan Jasa Arsitek </h1>
                    <p>It is a long established fact that a reader will be distracted by the of readable content of page lookings at its layouts points.</p>
                </div>
                <div class="flex flex-wrap justify-around text-primary2 text-center">
                    <div class="desktop:w-[28%] mobile:w-[90] py-6 px-4">
                        <h2 class="font-dm-serif text-[24px] mb-8">Paket A</h2>
                        <p class="text-[20px]">Jasa Arsitek Desain + Pengawasan <b class="font-bold">GRATIS</b></p>
                        <a href="#" class="inline-block text-primary2 font-semibold px-9 py-5 mt-10 rounded-[18px]">
                            Lihat Lebih Banyak <b class="text-primary1 ml-2">→</b>
                        </a>
                    </div>

                    <div class="desktop:w-[28%] mobile:w-[90] py-6 px-4">
                        <h2 class="font-dm-serif text-[24px] mb-8">Paket B</h2>
                        <p class="text-[20px]">Jasa Arsitek Desain + Pengawasan <b class="font-bold">BERBAYAR</b></p>
                        <a href="#" class="inline-block text-primary2 font-semibold px-9 py-5 mt-10 rounded-[18px]">
                            Lihat Lebih Banyak <b class="text-primary1 ml-2">→</b>
                        </a>
                    </div>

                    <div class="desktop:w-[28%] mobile:w-[90] py-6 px-4">
                        <h2 class="font-dm-serif text-[24px] mb-8">Paket C</h2>
                        <p class="text-[20px]">Jasa Arsitek Desain + Pengawasan <b class="font-bold">GRATIS / BERBAYAR</b></p>
                        <a href="#" class="inline-block text-primary2 font-semibold px-9 py-5 mt-10 rounded-[18px]">
                            Lihat Lebih Banyak <b class="text-primary1 ml-2">→</b>
                        </a>
                    </div>

                </div>
            </section>

            <section class="my-[140px] pt-[60px] flex justify-between text-primary2">
                <div class="w-[35%] flex flex-col justify-between items-start py-6">
                    <h1 class="font-dm-serif text-[50px] leading-tight m-0">Solusi lengkap untuk proyek bangunan Anda.</h1>
                    <p class="text-[20px] leading-normal">Kami menawarkan jasa konsultasi arsitektur lengkap, mulai dari perencanaan konsep hingga pengawasan pembangunan. Dengan pengalaman yang luas, kami membantu Anda mewujudkan proyek bangunan yang sesuai dengan visi dan anggaran Anda.</p>
                    <div class="flex gap-12">
                        <div class="flex justify-center items-center p-6 bg-primary3 rounded-full">
                            <img src="{{ asset('assets/images/call.svg') }}" alt="">
                        </div>
                        <div class="flex flex-col justify-center pr-16">
                            <h2 class="text-[20px] font-bold">012345678</h2>
                            <p class="text-[20px]">Hubungi Kami Kapan Saja</p>
                        </div>
                    </div>
                    <a href="#" class="inline-block bg-primary2 text-white px-9 py-5 rounded-[18px] font-medium">
                        Dapatkan Perkiraan Gratis <b class="text-primary1 ml-2">→</b>
                    </a>
                </div>
                <div class="w-[55%]">
                    <img class="h-[660px] rounded-tr-[325px] rounded-bl-[125px]" src="{{ asset('assets/images/photo6.png') }}" alt="">
                </div>
            </section>

            <section class="my-[140px] pt-[60px] rounded-[70px] p-[80px] flex flex-col justify-between items-center text-center bg-primary2 text-white">
                <h1 class="font-dm-serif text-[50px]">Ingin Gunakan Jasa Kami?</h1>
                <p class="text-[20px]">dapat langsung mengklik tombol dibawah ini!</p>
                <a href="#" class="inline-block bg-primary1 text-white px-9 py-5 mt-8 rounded-[18px] font-medium">
                    Hubungi Kontak Kami <b class="text-primary2 ml-2">→</b>
                </a>
            </section>

        </div>

       <!-- Footer -->
       @include('layouts.footer')
    </body>
</html>
