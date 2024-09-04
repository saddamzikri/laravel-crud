<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD App</title>
    <!-- Bootstrap CSS (Anda bisa menggunakan CDN atau menginstalnya secara lokal) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('products.index') }}">Laravel CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Konten Utama -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Bootstrap JS (Anda bisa menggunakan CDN atau menginstalnya secara lokal) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
