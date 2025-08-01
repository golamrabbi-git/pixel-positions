<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-slate-950 text-white min-h-screen flex flex-col font-sans antialiased ">

<!-- Navigation -->
<header class="bg-slate-950 shadow-md border-b border-white/10 fixed top-0 left-0 right-0  backdrop-blur-md z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="flex items-center space-x-2">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Pixel Positions Logo" class="h-10 w-auto">
        </a>

        <!-- Navigation Links -->
        <nav class="hidden md:flex space-x-6 text-base font-medium">
            <a href="#" class="hover:text-blue-400 transition">Jobs</a>
            <a href="#" class="hover:text-blue-400 transition">Careers</a>
            <a href="#" class="hover:text-blue-400 transition">Salaries</a>
            <a href="#" class="hover:text-blue-400 transition">Companies</a>
        </nav>

        <!-- Call to Action -->
        <div class="hidden md:block">
            <a href="#" class="relative inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-5 py-2.5 rounded-lg text-sm font-semibold transition-all duration-200 ease-out shadow-md hover:shadow-lg hover:scale-[1.02] active:scale-95 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2">
                <span class="whitespace-nowrap">Post a Job</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 -mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                </svg>
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button class="md:hidden text-white focus:outline-none" aria-label="Open menu">
            <!-- Hamburger Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
</header>

<!-- Main Content -->
<main class="flex-grow px-4 py-32 sm:px-6 lg:px-8 max-w-[986px] mx-auto">
    {{ $slot }}
</main>

<!-- Footer -->
<footer class="bg-slate-950 text-gray-400 text-sm py-4 text-center">
    &copy; {{ now()->year }} Pixel Positions. All rights reserved.
</footer>

</body>
</html>
