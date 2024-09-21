<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Admin Dashboard - Skyline Arsitek')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />


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
                        <!-- Sidebar Content -->
                        @include('admin.partials.sidebar')
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <!-- Main Content -->
            <main>
                <div class="container-fluid px-4 py-4 w-full">
                    @yield('content') <!-- Tempat untuk isi konten halaman -->
                </div>
            </main>
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

    <!-- Custom Script -->
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
            function loadContent(routeName) {
                const url = `{{ url('/') }}/admin/dashboard/pages/` + routeName.replace('-', '/');
                console.log(url);
                window.location.href = url;
            }

            $('a[data-route]').on('click', function(e) {
                e.preventDefault();
                const routeName = $(this).data('route'); // Mengambil nilai dari data-route
                loadContent(routeName); // Panggil fungsi loadContent dengan routeName
            });
        });
    </script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var dataTable = new simpleDatatables.DataTable("#datatablesSimple");
        });
    </script>

</body>
</html>
