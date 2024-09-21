<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    
    <!-- Link to CSS (misalnya link ke Tailwind atau Bootstrap) -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    
    <!-- Link to custom admin CSS if necessary -->
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    
    <!-- Include any necessary scripts -->
    <script src="{{ asset('assets/js/app.js') }}" defer></script>

    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 h-screen flex flex-col">
            <div class="p-4">
                <img src="{{ asset('assets/images/logo-navy.png') }}" alt="Admin Logo" class="w-32 mx-auto">
            </div>
            <nav class="flex flex-col p-4">
                <a href="{{ route('admin.dashboard.homepage', ['section' => 'design_populer']) }}" class="text-white py-2">Create Admin</a>
                <a href="{{ route('admin.dashboard.homepage', ['section' => 'Homepage']) }}" class="text-white py-2">Homepage</a>

            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex w-full">
            <!-- Tempat untuk menampilkan konten halaman -->
            @yield('content')
        </main>
    </div>
    
    <!-- Tambahkan script khusus untuk halaman admin jika ada -->
</body>
</html>