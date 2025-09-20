<!DOCTYPE html>
<html lang="pt-br" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfólio do ' . env('GITHUB_USERNAME', 'Usuário'))</title>
    <link rel="icon" href="{{ asset('public/favicon.ico') }}" />
    @vite('resources/css/app.css')
    @stack('head')
</head>

<body class="bg-gray-100 text-gray-800 font-sans dark:bg-gray-900 dark:text-gray-100 antialiased">

    <div class="relative">
        <header class="w-full bg-white dark:bg-gray-800 shadow-md h-50 py-6 px-6 flex items-center justify-between fixed top-0 left-0 right-0 z-30 h-24">
            <a href="/" class="font-bold text-xl text-gray-900 dark:text-white flex-none ml-4">
                @yield('brand', env('APP_NAME', 'Portfólio'))
            </a>
            <nav class="flex flex-1 justify-end gap-4">
                <a href="/aboutme" class="relative inline-flex items-center px-4 py-2 rounded-lg bg-gradient-to-r from-indigo-600 to-pink-500 text-white font-semibold shadow-md hover:from-pink-500 hover:to-indigo-600 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-pink-400">
                    <span class="material-icons mr-2">work</span>
                    Portfólio
                </a>
                <a href="/contato" class="relative inline-flex items-center px-4 py-2 rounded-lg bg-gradient-to-r from-indigo-600 to-pink-500 text-white font-semibold shadow-md hover:from-pink-500 hover:to-indigo-600 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-pink-400">
                    <span class="material-icons mr-2">mail</span>
                    Contato
                </a>
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            </nav>
        </header>

        <main class="pt-24 p-6 min-h-screen">
            @yield('content')
        </main>
    </div>
    <footer class="bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 mt-12 py-6">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between">
            <div class="text-sm text-gray-500 dark:text-gray-300 mb-4 md:mb-0">
                &copy; {{ date('Y') }} {{ env('APP_NAME') }}. Todos os direitos reservados.
            </div>
            <div class="flex gap-4">
                <a href="/" class="inline-flex items-center px-3 py-1 rounded-md text-gray-700 dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                    Início
                </a>
                <a href="/aboutme" class="inline-flex items-center px-3 py-1 rounded-md text-gray-700 dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                    Portfólio
                </a>
                <a href="/contato" class="inline-flex items-center px-3 py-1 rounded-md text-gray-700 dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                    Contato
                </a>
                <a href="/rss" class="inline-flex items-center px-3 py-1 rounded-md text-gray-700 dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                    Rss Viewer
                </a>
                <a href="https://github.com/{{ env('GITHUB_USERNAME') }}" target="_blank" rel="noopener" class="inline-flex items-center px-3 py-1 rounded-md text-gray-700 dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                    GitHub
                </a>
            </div>
        </div>
    </footer>
    @stack('scripts')
</body>

</html>