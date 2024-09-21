<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Dashboard - Skyline Arsitek</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/scrolldown-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/menu-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- jQuery (untuk AJAX) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="/admin/dashboard">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
        
                        <!-- Layouts Link -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" id="link-layouts" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts" onclick="collapseLayouts()">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Layouts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                            </nav>
                        </div>

                        <!-- Pages Link -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" id="link-pages" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages" onclick="collapsePages()">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseHome" aria-expanded="false" aria-controls="pagesCollapseAuth" onclick="collapseHome()">
                                    HomePage
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseHome" aria-labelledby="headingAuth" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="#" id="home-hero">Hero</a>
                                        <a class="nav-link" href="#" id="home-kategori">Kategori</a>
                                        <a class="nav-link" href="#" id="home-desainpop">Desain Populer</a>
                                        <a class="nav-link" href="#" id="home-desain3d">Desain 3 Dimensi</a>
                                        <a class="nav-link" href="#" id="home-realisasi">Realisasi Pembangunan</a>
                                        <a class="nav-link" href="#" id="home-video">Video Pembangunan</a>
                                        <a class="nav-link" href="#" id="home-harga">Harga Jasa Arsitek</a>
                                        <a class="nav-link" href="#" id="home-paket">PILIHAN PAKET DESAIN</a>
                                        <a class="nav-link" href="#" id="home-solusi">Solusi lengkap untuk proyek bangunan Anda.</a>
                                        <a class="nav-link" href="#" id="home-pikirkan">Apa yang Dipikirkan Masyarakat Tentang Kami</a>
                                        <a class="nav-link" href="#" id="home-client">Client</a>
                                        <a class="nav-link" href="#" id="home-statis">Statistik</a>
                                        <a class="nav-link" href="#" id="home-artikel">Artikel</a>
                                        <a class="nav-link" href="#" id="home-cta">CTA</a>
                                    </nav>
                                </div>
                                
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError" onclick="collapseRealisasi()">
                                    Realisasi
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseRealisasi" aria-labelledby="headingError" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="#" id="realisasi-banner">Banner</a>
                                        <a class="nav-link" href="#" id="realisasi-pembangunan">Realisasi Pembangunan</a>
                                        <a class="nav-link" href="#" id="realisasi-proyek">Proyek Berjalan</a>
                                        <a class="nav-link" href="#" id="realisasi-video">Video Realisasi Pembangunan</a>
                                        <a class="nav-link" href="#" id="realisasi-lainnya">Realisasi Pembangunan Lainnya</a>
                                        <a class="nav-link" href="#" id="realisasi-kategori">Pilih Kategori Lainnya</a>
                                    </nav>
                                </div>
                                
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError" onclick="collapseBlog()">
                                    Blog
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseBlog" aria-labelledby="headingError" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="#" id="blog-banner">Banner</a>
                                        <a class="nav-link" href="#" id="blog-latest">Latest Post</a>
                                        <a class="nav-link" href="#" id="blog-articles">Articles & News</a>
                                        <a class="nav-link" href="#" id="blog-likes">Maybe you like</a>
                                    </nav>
                                </div>
                                
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError" onclick="collapseBlogDetails()">
                                    Blog Details
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseBlogDetails" aria-labelledby="headingError" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="#" id="blogDetails-">Banner</a>
                                        <a class="nav-link" href="#" id="blogDetails-">Realisasi Pembangunan</a>
                                        <a class="nav-link" href="#" id="blogDetails-">Proyek Berjalan</a>
                                        <a class="nav-link" href="#" id="blogDetails-">Video Realisasi Pembangunan</a>
                                        <a class="nav-link" href="#" id="blogDetails-">Realisasi Pembangunan Lainnya</a>
                                        <a class="nav-link" href="#" id="blogDetails-">Pilih Kategori Lainnya</a>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError" onclick="collapseProjectDetails()">
                                    Project Details
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseProjectDetails" aria-labelledby="headingError" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="#" id="projectDetails-">Banner</a>
                                        <a class="nav-link" href="#" id="projectDetails-">Realisasi Pembangunan</a>
                                        <a class="nav-link" href="#" id="projectDetails-">Proyek Berjalan</a>
                                        <a class="nav-link" href="#" id="projectDetails-">Video Realisasi Pembangunan</a>
                                        <a class="nav-link" href="#" id="projectDetails-">Realisasi Pembangunan Lainnya</a>
                                        <a class="nav-link" href="#" id="projectDetails-">Pilih Kategori Lainnya</a>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError" onclick="collapsePortofolio()">
                                    Portofolio
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapsePortofolio" aria-labelledby="headingError" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="#" id="portofolio-banner">Banner</a>
                                        <a class="nav-link" href="#" id="portofolio-desain">Desain Rumah</a>
                                        <a class="nav-link" href="#" id="portofolio-video">Video Realisasi Pembangunan</a>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError" onclick="collapseContact()">
                                    Contact Us
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseContact" aria-labelledby="headingError" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="#" id="contact-banner">Banner</a>
                                        <a class="nav-link" href="#" id="contact-contact">Kontak Skyline Arsitek</a>
                                        <a class="nav-link" href="#" id="contact-address">Alamat Skyline Arsitek</a>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError" onclick="collapsePricing()">
                                    Pricing
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapsePricing" aria-labelledby="headingError" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="#" id="pricing-banner">Banner</a>
                                        <a class="nav-link" href="#" id="pricing-harga">Harga Jasa Skyline Terbaru</a>
                                        <a class="nav-link" href="#" id="pricing-paket">Pilihan Paket Desain</a>
                                        <a class="nav-link" href="#" id="pricing-pembayaran">Sistem Pembayaran</a>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError" onclick="collapseProfil()">
                                    Profil
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseProfil" aria-labelledby="headingError" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="#" id="profil-banner">Banner</a>
                                        <a class="nav-link" href="#" id="profil-">Gua nggak tau njir apa lagi</a>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError" onclick="collapsePassword()">
                                    Password
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapsePassword" aria-labelledby="headingError" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="#" id="password-banner">Banner</a>
                                        <a class="nav-link" href="#" id="password-">Ini gua juga nggak tau ditambah apa lagi</a>
                                    </nav>
                                </div>

                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <div class="col-9" id="main-content">
                <h2>Welcome to Laravel AJAX Navigation</h2>
                <p>Select a menu item to load content.</p>
            </div>
            {{-- <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Primary Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Warning Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Success Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Danger Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Area Chart Example
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Bar Chart Example
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body">
                            
                        </div>
                    </div>
                </div>
            </main> --}}
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script>
        var layoutsOpen = false;
        var pagesOpen = false;
        var homeOpen = false;
        var realisasiOpen = false;
        var blogOpen = false;
        var blogDetailsOpen = false;
        var projectDetailsOpen = false;
        var protofolioOpen = false;
        var contactOpen = false;
        var pricingOpen = false;
        var profilOpen = false;
        var passwordOpen = false;
        function collapseLayouts() {
            layoutsOpen = !layoutsOpen;
            var element = document.getElementById("collapseLayouts");
            if(layoutsOpen){
                element.classList.remove("collapse");
            }
            else{
                element.classList.add("collapse");
            }
        }
        function collapsePages() {
            pagesOpen = !pagesOpen;
            var element = document.getElementById("collapsePages");
            if(pagesOpen){
                element.classList.remove("collapse");
            }
            else{
                element.classList.add("collapse");
            }
        }
        function collapseHome() {
            homeOpen = !homeOpen;
            var element = document.getElementById("pagesCollapseHome");
            if(homeOpen){
                element.classList.remove("collapse");
            }
            else{
                element.classList.add("collapse");
            }
        }
        function collapseRealisasi() {
            realisasiOpen = !realisasiOpen;
            var element = document.getElementById("pagesCollapseRealisasi");
            if(realisasiOpen){
                element.classList.remove("collapse");
            }
            else{
                element.classList.add("collapse");
            }
        }
        function collapseBlog() {
            blogOpen = !blogOpen;
            var element = document.getElementById("pagesCollapseBlog");
            if(blogOpen){
                element.classList.remove("collapse");
            }
            else{
                element.classList.add("collapse");
            }
        }
        function collapseBlogDetails() {
            blogDetailsOpen = !blogDetailsOpen;
            var element = document.getElementById("pagesCollapseBlogDetails");
            if(blogDetailsOpen){
                element.classList.remove("collapse");
            }
            else{
                element.classList.add("collapse");
            }
        }
        function collapseProjectDetails() {
            projectDetailsOpen = !projectDetailsOpen;
            var element = document.getElementById("pagesCollapseProjectDetails");
            if(projectDetailsOpen){
                element.classList.remove("collapse");
            }
            else{
                element.classList.add("collapse");
            }
        }
        function collapsePortofolio() {
            protofolioOpen = !protofolioOpen;
            var element = document.getElementById("pagesCollapsePortofolio");
            if(protofolioOpen){
                element.classList.remove("collapse");
            }
            else{
                element.classList.add("collapse");
            }
        }
        function collapseContact() {
            contactOpen = !contactOpen;
            var element = document.getElementById("pagesCollapseContact");
            if(contactOpen){
                element.classList.remove("collapse");
            }
            else{
                element.classList.add("collapse");
            }
        }
        function collapsePricing() {
            pricingOpen = !pricingOpen;
            var element = document.getElementById("pagesCollapsePricing");
            if(pricingOpen){
                element.classList.remove("collapse");
            }
            else{
                element.classList.add("collapse");
            }
        }
        function collapseProfil() {
            profilOpen = !profilOpen;
            var element = document.getElementById("pagesCollapseProfil");
            if(profilOpen){
                element.classList.remove("collapse");
            }
            else{
                element.classList.add("collapse");
            }
        }
        function collapsePassword() {
            passwordOpen = !passwordOpen;
            var element = document.getElementById("pagesCollapsePassword");
            if(passwordOpen){
                element.classList.remove("collapse");
            }
            else{
                element.classList.add("collapse");
            }
        }

        $(document).ready(function() {
            // Setup CSRF token untuk semua permintaan AJAX
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Fungsi untuk memuat konten melalui AJAX
            function loadContent(url) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    success: function(response) {
                        $('#main-content').html(response.content);
                    },
                    error: function(xhr) {
                        console.log('Error:', xhr.statusText);
                    }
                });
            }

            // $('#home-hero').on('click', function(e) {
            //     e.preventDefault();
            //     loadContent('{{ route('get.pages.home.hero') }}');
            // });
        });
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> --}}
    <!-- Custom JS -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!-- Chart.js -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> --}}
    <!-- Simple DataTables -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script> --}}
    {{-- <script src="{{ asset('js/datatables-simple-demo.js') }}"></script> --}}
</body>
</html>