<!DOCTYPE html>
<html lang="pt-br" class="dark:bg-gray-900 dark:text-gray-100">

<head>
    @extends('layouts.app')
    @section('title')
</head>

<body class="bg-gray-100 text-gray-800 font-sans dark:bg-gray-900 dark:text-gray-100">
    @section('content')
    <p class="text-lg md:text-2xl font-medium mb-8 max-w-xl mx-auto drop-shadow">
        Por motivos de um projeto que não vou mencionar aqui, estou utilizando a biblioteca SimplePie para ler feeds RSS. Abaixo estão as últimas notícias obtidas do feed configurado.
        Estou usando o feed do Google News em português do Brasil para pegar as noticias.
        Para ver o Rss do google news, basta entrar em qualquer notícia do Google News
        por exemplo https://news.google.com/topics/CAAqLAgKIiZDQkFTRmdvSkwyMHZNR1ptZHpWbUVnVndkQzFDVWhvQ1FsSW9BQVAB?hl=pt-BR&gl=BR&ceid=BR%3Apt-419 e adicionar o rss antes de /topics/
        exemplo: https://news.google.com/rss/topics/CAAqLAgKIiZDQkFTRmdvSkwyMHZNR1ptZHpWbUVnVndkQzFDVWhvQ1FsSW9BQVAB?hl=pt-BR&gl=BR&ceid=BR%3Apt-419
        <br><br>
        Visualize qualquer feed rss aqui em baixo
    </p>

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <div class="m-8 px-4 py-3 bg-gradient-to-r from-blue-50 via-gray-50 to-blue-100 rounded-lg shadow-inner border border-blue-100 dark:from-gray-800 dark:via-gray-900 dark:to-gray-800 dark:border-gray-700 flex items-center gap-2">
        <input
            id="rss-url-input"
            type="text"
            class="flex-1 border border-gray-300 rounded-md p-2 w-full dark:bg-gray-700 dark:border-gray-600 focus:ring-2 focus:ring-blue-500 focus:outline-none"
            placeholder="Cole a URL do feed RSS aqui">
        <button
            id="load-feed-button"
            type="button"
            class="p-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors duration-200 flex items-center justify-center"
            onclick="loadFeed()">
            <span class="material-symbols-outlined">
                search
            </span>
        </button>
    </div>

    <div class="flex flex-col items-center mb-8">
        <h2 class="text-3xl font-extrabold mb-2 text-center bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent drop-shadow-lg">
            Últimas Notícias
        </h2>
        <div class="w-24 h-1 bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 rounded-full mb-2"></div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse ($items as $item)
        <div class="bg-white/90 dark:bg-gray-800/90 border border-blue-100 dark:border-gray-700 p-6 rounded-2xl shadow-xl flex flex-col justify-between hover:scale-105 hover:shadow-2xl hover:border-blue-400 dark:hover:border-blue-500 transition-all duration-300 relative overflow-hidden group">
            <span class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-blue-200 via-purple-200 to-pink-200 opacity-30 rounded-bl-3xl pointer-events-none"></span>
            <div>
                <h3 class="text-xl font-bold mb-3">
                    <a href="{{ $item->get_permalink() }}" target="_blank" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200 underline-offset-2 hover:underline">
                        {{ $item->get_title() }}
                    </a>
                </h3>
            </div>
            <div class="flex justify-between items-center text-xs text-gray-500 dark:text-gray-400 mt-4">
                <span class="inline-block px-3 py-1 bg-blue-50 dark:bg-gray-700 rounded-full font-semibold group-hover:bg-blue-100 dark:group-hover:bg-blue-900 transition-colors duration-200">
                    {{ $item->get_category() }}
                </span>
            </div>
        </div>
        @empty
        <p class="text-center col-span-full text-lg text-red-600 dark:text-red-400 font-semibold">Não foi possível carregar os repositórios do GitHub.</p>
        @endforelse
    </div>
    @endsection
    <script>
        
        function isValidUrl(string) {
            try {
                new URL(string);
                return true;
            } catch (_) {
                return false;
            }
        }
        
        function loadFeed() {
            const urlInput = document.getElementById('rss-url-input');
            const url = urlInput.value.trim();
    
            if (isValidUrl(url)) {
                window.location.href = '/rss?url=' + encodeURIComponent(url);
            }
        }
    </script>
</body>

</html>