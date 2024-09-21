<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            background-color: #f8f9fa;
            padding-top: 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            z-index: 100;
        }
        .sidebar .nav-link {
            font-size: 16px;
            color: #333;
        }
        .sidebar .nav-link.active {
            color: #0d6efd;
            background-color: #e9ecef;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 sidebar">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" data-target="admin-create">
                        <i class="bi bi-person-plus"></i> Create Admin
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-target="home-page">
                        <i class="bi bi-house-door"></i> Home Page
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-target="portfolio">
                        <i class="bi bi-briefcase"></i> Portfolio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-target="realisasi">
                        <i class="bi bi-check-circle"></i> Realisasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-target="blog">
                        <i class="bi bi-file-earmark-text"></i> Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-target="pricing">
                        <i class="bi bi-cash"></i> Pricing
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="main-content" id="main-content">
            <!-- Content will be injected here -->
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        const content = {
            'admin-create': '<h1>Create Admin</h1><p>This is the Create Admin page.</p>',
            'home-page': '<h1>Home Page</h1><p>This is the Home Page.</p>',
            'portfolio': '<h1>Portfolio</h1><p>This is the Portfolio page.</p>',
            'realisasi': '<h1>Realisasi</h1><p>This is the Realisasi page.</p>',
            'blog': '<h1>Blog</h1><p>This is the Blog page.</p>',
            'pricing': '<h1>Pricing</h1><p>This is the Pricing page.</p>',
        };

        $('.nav-link').click(function () {
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
            
            const target = $(this).data('target');
            $('#main-content').html(content[target]);
        });

        // Optionally set a default active menu item and content
        $('.nav-link').first().click();
    });
</script>
</body>
</html>