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
        <!-- Sidebar Menu Items -->
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseHome" aria-expanded="false" aria-controls="pagesCollapseAuth" onclick="collapseHome()">
            HomePage
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="pagesCollapseHome" aria-labelledby="headingAuth" data-bs-parent="#sidenavAccordionPages">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="#" data-route="home-hero">Hero</a>
                <a class="nav-link" href="#" data-route="home-category" >Category</a>
                <a class="nav-link" href="#" data-route="home-popular">Popular Design</a>
                <a class="nav-link" href="#" data-route="home-3ddesain">3D Design</a>
                <a class="nav-link" href="#" data-route="home-realization">Realization</a>
                <a class="nav-link" href="#" data-route="home-video">Build Video</a>
                <a class="nav-link" href="#" data-route="home-price">Price</a>
                <a class="nav-link" href="#" data-route="home-package">Package</a>
                <a class="nav-link" href="#" data-route="home-about">About Us</a>
                <a class="nav-link" href="#" data-route="home-client">Client</a>
                <a class="nav-link" href="#" data-route="home-articel">Artikel</a>
            </nav>
        </div>
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseHome" aria-expanded="false" aria-controls="pagesCollapseAuth" onclick="collapseRealisasi()">
            Realisasi
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="pagesCollapseRealisasi" aria-labelledby="headingAuth" data-bs-parent="#sidenavAccordionPages">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="#" data-route="realization-banner">Banner</a>
                <a class="nav-link" href="#" data-route="realization-realization">Realisasi Pembangunan</a>
                <a class="nav-link" href="#" data-route="realization-project">Proyek Berjalan</a>
                <a class="nav-link" href="#" data-route="realization-video">Video Realisasi Pembangunan</a>
                <a class="nav-link" href="#" data-route="realization-other">Realisasi Pembangunan Lainnya</a>
                <a class="nav-link" href="#" data-route="realization-category">Pilih Kategori Lainnya</a>
            </nav>
        </div>
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseHome" aria-expanded="false" aria-controls="pagesCollapseAuth" onclick="collapseBlog()">
            Blog
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="pagesCollapseBlog" aria-labelledby="headingAuth" data-bs-parent="#sidenavAccordionPages">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="#" data-route="blog-banner">Banner</a>
                <a class="nav-link" href="#" data-route="blog-latest">Latest Post</a>
                <a class="nav-link" href="#" data-route="blog-articel">Articles & News</a>
                <a class="nav-link" href="#" data-route="blog-like">Maybe you like</a>
            </nav>
        </div>
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseHome" aria-expanded="false" aria-controls="pagesCollapseAuth" onclick="collapseBlogDetails()">
            Blog Details
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="pagesCollapseBlogDetails" aria-labelledby="headingAuth" data-bs-parent="#sidenavAccordionPages">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="#" data-route="blog_details-latest">Latest Post</a>
                <a class="nav-link" href="#" data-route="blog_details-articel">Articles & News</a>
                <a class="nav-link" href="#" data-route="blog_details-like">Maybe you like</a>
            </nav>
        </div>
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseHome" aria-expanded="false" aria-controls="pagesCollapseAuth" onclick="collapseProjectDetails()">
            Project Details
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="pagesCollapseProjectDetails" aria-labelledby="headingAuth" data-bs-parent="#sidenavAccordionPages">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="#" data-route="project_details-latest">Latest Post</a>
                <a class="nav-link" href="#" data-route="project_details-articel">Articles & News</a>
                <a class="nav-link" href="#" data-route="project_details-like">Maybe you like</a>
            </nav>
        </div>
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseHome" aria-expanded="false" aria-controls="pagesCollapseAuth" onclick="collapsePortofolio()">
            Portofolio
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="pagesCollapsePortofolio" aria-labelledby="headingAuth" data-bs-parent="#sidenavAccordionPages">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="#" data-route="portofolio-banner">Banner</a>
                <a class="nav-link" href="#" data-route="portofolio-portofolios">Portofolios</a>
                <a class="nav-link" href="#" data-route="portofolio-videos">Videos</a>
            </nav>
        </div>
        <!-- Add other sections here... -->
    </nav>
</div>
