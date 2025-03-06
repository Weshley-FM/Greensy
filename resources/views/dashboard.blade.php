<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Greensy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 min-h-screen">
    <header class="bg-green-600 text-white py-4 px-6 flex justify-between items-center shadow-md">
        <h1 class="text-2xl font-bold">Greensy</h1>
        <nav class="space-x-4">
            <a href="/login" class="px-4 py-2 bg-white text-green-600 rounded hover:bg-gray-200">Login</a>
            <a href="/register" class="px-4 py-2 bg-yellow-400 text-white rounded hover:bg-yellow-500">Register</a>
        </nav>
    </header>
    
    <main class="flex flex-col items-center justify-center text-center mt-20 px-4">
        <h2 class="text-3xl font-bold text-green-700 mb-4">Selamat Datang di Greensy</h2>
        <p class="text-gray-700 mb-6">Dapatkan sayuran segar dengan mudah dan cepat</p>
        <a href="/shop" class="px-6 py-3 bg-green-500 text-white rounded-lg text-lg hover:bg-green-600">Mulai Belanja</a>
    </main>
</body>
</html>
