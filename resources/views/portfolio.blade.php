<!DOCTYPE html>
<html lang="pt-br" class="dark:bg-gray-900 dark:text-gray-100">

<head>
    @extends('layouts.app')
    @section('title')
</head>

<body class="bg-gray-100 text-gray-800 font-sans dark:bg-gray-900 dark:text-gray-100">
    @section('content')
    <style>
        /* Agrupa imagens lado a lado e reduz espaçamento entre elas na seção aboutMeHtml */
        /* Precisa fazer assim por ser um markdown */
        .aboutme-markdown img {
            display: inline-block;
            margin: 0 0.25rem 0.5rem 0.25rem;
            vertical-align: middle;
            height: auto;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.08);
        }
    </style>
    <div class="container mx-auto p-8">
        <section>
            <header class="text-center mb-12">
                <a href="https://github.com/{{ env('GITHUB_USERNAME') }}" target="_blank">
                    <img
                        class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-gray-300 dark:border-gray-700 transition-transform duration-300 hover:scale-130"
                        src="https://github.com/{{ env('GITHUB_USERNAME') }}.png"
                        alt="Foto de perfil">
                </a>

                <div class="prose lg:prose-xl mx-auto mt-4 flex flex-col items-center dark:prose-invert aboutme-markdown">
                    {!! $aboutMeHtml !!}
                </div>
            </header>
        </section>

        <section>
            <h2 class="text-2xl font-bold mb-4 text-center">Últimos Projetos no GitHub</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($repos as $repo)
                <div class="bg-white p-6 rounded-lg shadow-md flex flex-col justify-between hover:scale-105 transition-transform duration-300 dark:bg-gray-800 dark:border-gray-700 dark:shadow-gray-800/40">
                    <div>
                        <h3 class="text-xl font-bold mb-2">
                            <a href="{{ $repo['html_url'] }}" target="_blank" class="hover:text-blue-600 dark:hover:text-blue-400">
                                {{ $repo['name'] }}
                            </a>
                        </h3>
                        <p class="text-gray-600 mb-4 dark:text-gray-300">{{ $repo['description'] ?? 'Sem descrição.' }}</p>
                    </div>
                    <div class="flex justify-between items-center text-sm text-gray-500 dark:text-gray-400">
                        <!-- <span>{{ $repo['stargazers_count'] }}</span> -->
                        <span>{{ $repo['language'] }}</span>
                    </div>
                </div>
                @empty
                <p class="text-center col-span-full">Não foi possível carregar os repositórios do GitHub.</p>
                @endforelse
            </div>
        </section>
    </div>

    <script>
        if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            if (e.matches) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        });
    </script>

    @endsection
</body>

</html>