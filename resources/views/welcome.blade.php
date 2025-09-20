<!DOCTYPE html>
<html lang="pt-br" class="dark:bg-gray-900 dark:text-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Meu Portfólio')</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    @vite('resources/css/app.css')
    @stack('head')
</head>

<body class="bg-gray-100 text-gray-800 font-sans dark:bg-gray-900 dark:text-gray-100 overflow-x-hidden">
    <style>
        html, body {
            scroll-behavior: smooth;
            height: 100%;
        }
        .section {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            scroll-snap-align: start;
        }
        main {
            scroll-snap-type: y mandatory;
            height: 100vh;
            overflow-y: scroll;
        }
        .arrow-down {
            animation: bounce 1.5s infinite;
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0);}
            50% { transform: translateY(10px);}
        }
    </style>
    <main>
        <!-- Botão flutuante de voltar ao topo -->
        <button id="btn-topo" aria-label="Voltar ao topo" class="fixed bottom-6 right-6 z-50 bg-gradient-to-r from-blue-500 to-pink-500 text-white p-3 rounded-full shadow-lg transition-all duration-500 opacity-0 pointer-events-none scale-90 hover:scale-110 focus:outline-none" style="display:none">
            <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 19V5M5 12l7-7 7 7"/>
            </svg>
        </button>
        <!-- Seção 1: Bem-vindo -->
        <section id="topo" class="section bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500 text-white relative overflow-hidden">
            <div id="bg-topo" class="absolute inset-0 z-0 pointer-events-none"></div>
            <div class="relative z-10 flex flex-col items-center">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">Bem-vindo!</h2>
                <p class="text-lg md:text-2xl font-medium mb-8 max-w-xl mx-auto drop-shadow">
                    Este é meu portfólio dedicado ao desenvolvimento e ao compartilhamento de conhecimentos.<br>
                    Explore projetos, ideias e dicas para evoluir na área de tecnologia.
                </p>
                <a href="#sobre" class="arrow-down bottom-2 left-1/2 transform -translate-x-1/2 text-3xl">
                    <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 5v14M19 12l-7 7-7-7"/>
                    </svg>
                </a>
            </div>
        </section>
        <!-- Seção 2: Sobre -->
        <section id="sobre" class="section bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-100 relative overflow-hidden">
            <div id="bg-sobre" class="absolute inset-0 z-0 pointer-events-none"></div>
            <div class="relative z-10 flex flex-col items-center">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">Sobre esta página</h2>
                <p class="text-lg md:text-xl max-w-2xl text-center mb-6">
                    Aqui compartilho experiências, projetos e meus aprendizados.<br>
                    O objetivo é compartilhar, ensinar e aprender junto com a comunidade, tornando o conhecimento acessível e colaborativo.
                    Veja meus projetos mais recentes logo abaixo!
                </p>
                <br>
                <a href="#projetos" class="arrow-down mt-8 text-3xl">
                    <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 5v14M19 12l-7 7-7-7"/>
                    </svg>
                </a>
            </div>
        </section>
        <!-- Seção 3: Projetos -->
        <section id="projetos" class="section bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100 relative overflow-hidden">
            <div id="bg-projetos" class="absolute inset-0 z-0 pointer-events-none"></div>
            <div class="relative z-10 flex flex-col items-center">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">Projetos & Conteúdos</h2>
                <p class="text-lg md:text-xl max-w-2xl text-center mb-8">
                    Navegue pelos meus projetos.<br>
                    Cada seção foi pensada para ser simples e objetiva.
                </p>
                <a href="https://github.com/{{env('GITHUB_USERNAME')}}" target="_blank" rel="noopener" class="inline-block px-6 py-3 bg-gradient-to-r from-indigo-600 to-pink-500 text-white font-semibold rounded-lg shadow-md hover:from-pink-500 hover:to-indigo-600 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-pink-400">
                    <svg class="inline-block w-5 h-5 mr-2 align-text-bottom" fill="currentColor" viewBox="0 0 24 24"></svg>
                        <path d="M12 .5C5.73.5.5 5.73.5 12c0 5.08 3.29 9.39 7.86 10.91.58.11.79-.25.79-.56 0-.28-.01-1.02-.02-2-3.2.7-3.88-1.54-3.88-1.54-.53-1.34-1.3-1.7-1.3-1.7-1.06-.72.08-.71.08-.71 1.17.08 1.79 1.2 1.79 1.2 1.04 1.78 2.73 1.27 3.4.97.11-.75.41-1.27.74-1.56-2.56-.29-5.26-1.28-5.26-5.7 0-1.26.45-2.29 1.19-3.1-.12-.29-.52-1.46.11-3.05 0 0 .97-.31 3.18 1.18a11.1 11.1 0 0 1 2.9-.39c.98 0 1.97.13 2.9.39 2.2-1.49 3.17-1.18 3.17-1.18.63 1.59.23 2.76.11 3.05.74.81 1.19 1.84 1.19 3.1 0 4.43-2.7 5.41-5.27 5.7.42.36.79 1.08.79 2.18 0 1.57-.01 2.84-.01 3.23 0 .31.21.68.8.56C20.71 21.39 24 17.08 24 12c0-6.27-5.23-11.5-12-11.5z"/>
                    </svg>
                    Ver projetos no GitHub
                </a>
                <a href="#aboutme" class="arrow-down mt-8 text-3xl">
                    <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 5v14M19 12l-7 7-7-7"/>
                    </svg>
                </a>
            </div>
        </section>
        <!-- Seção 4: About Me / Portfólio -->
        <section id="aboutme" class="section relative overflow-hidden text-gray-900 dark:text-gray-100">
            <div id="bg-aboutme" class="absolute inset-0 z-0 pointer-events-none"></div>
            <div class="relative z-10 flex flex-col items-center">
                <h2 class="text-3xl md:text-5xl font-bold mb-4 drop-shadow-lg">Sobre Mim</h2>
                <p class="text-lg md:text-xl max-w-2xl text-center mb-8">
                    Uma seleção dos meus melhores trabalhos, projetos e colaborações.<br>
                    Clique para ver detalhes ou explore mais abaixo!
                </p>
                <a href="/aboutme" class="inline-block px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-500 text-white font-semibold rounded-lg shadow-md hover:from-purple-500 hover:to-blue-600 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-400 mb-8">
                    Sobre mim
                </a>
                <a href="#contato" class="arrow-down mt-8 text-3xl">
                    <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 5v14M19 12l-7 7-7-7"/>
                    </svg>
                </a>
            </div>
        </section>
        <!-- Seção 5: Contato -->
        <section id="contato" class="section bg-gradient-to-br from-pink-500 via-purple-500 to-blue-500 text-white relative overflow-hidden">
            <div id="bg-contato" class="absolute inset-0 z-0 pointer-events-none"></div>
            <div class="relative z-10 flex flex-col items-center">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">Vamos conversar?</h2>
                <p class="text-lg md:text-xl max-w-2xl text-center mb-8">
                    Entre em contato para trocar ideias, colaborar em projetos ou simplesmente conversar sobre tecnologia!
                </p>
                <a href="/contato" class="inline-block px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-500 text-white font-semibold rounded-lg shadow-md hover:from-purple-500 hover:to-blue-600 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-400 mb-8">
                    Contato
                </a>
                <a href="#topo" class="mt-8 text-2xl underline">Voltar ao topo</a>
            </div>
        </section>
    </main>
    <script>
        // Botão de voltar ao topo
        const btnTopo = document.getElementById('btn-topo');
        const sections = Array.from(document.querySelectorAll('.section'));
        const lastSection = sections[sections.length - 1];
        let hideTimeout = null;

        function showBtnTopo() {
            btnTopo.style.display = 'block';
            setTimeout(() => {
                btnTopo.classList.add('opacity-100', 'pointer-events-auto');
                btnTopo.classList.remove('opacity-0', 'pointer-events-none');
            }, 10);
        }
        function hideBtnTopo(animate = true) {
            btnTopo.classList.remove('opacity-100', 'pointer-events-auto');
            btnTopo.classList.add('opacity-0', 'pointer-events-none');
            if (animate) {
                btnTopo.classList.add('translate-y-24');
                hideTimeout = setTimeout(() => {
                    btnTopo.style.display = 'none';
                    btnTopo.classList.remove('translate-y-24');
                }, 500);
            } else {
                btnTopo.style.display = 'none';
                btnTopo.classList.remove('translate-y-24');
            }
        }

        function updateBtnTopo() {
            const scrollY = window.scrollY || document.documentElement.scrollTop;
            const winH = window.innerHeight;
            let show = false;
            let inLastSection = false;
            sections.forEach((section, idx) => {
                const rect = section.getBoundingClientRect();
                if (rect.top < winH * 0.5 && rect.bottom > winH * 0.2) {
                    if (idx > 0 && idx < sections.length - 1) show = true;
                    if (idx === sections.length - 1) inLastSection = true;
                }
            });
            if (inLastSection) {
                // Animação: botão vai até o topo
                btnTopo.style.display = 'block';
                btnTopo.classList.add('animate-bounce');
                btnTopo.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-24');
                btnTopo.classList.add('opacity-100', 'pointer-events-auto');
                btnTopo.style.bottom = 'calc(100vh - 80px)';
            } else if (show) {
                btnTopo.classList.remove('animate-bounce');
                btnTopo.style.bottom = '1.5rem';
                showBtnTopo();
            } else {
                btnTopo.classList.remove('animate-bounce');
                hideBtnTopo(false);
            }
        }

        window.addEventListener('scroll', updateBtnTopo);
        window.addEventListener('resize', updateBtnTopo);
        document.addEventListener('DOMContentLoaded', updateBtnTopo);

        btnTopo.addEventListener('click', function() {
            btnTopo.classList.remove('animate-bounce');
            btnTopo.classList.add('translate-y-24');
            btnTopo.classList.remove('opacity-100', 'pointer-events-auto');
            btnTopo.classList.add('opacity-0', 'pointer-events-none');
            setTimeout(() => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
                btnTopo.style.display = 'none';
                btnTopo.classList.remove('translate-y-24');
            }, 500);
        });
        // Scroll dinâmico para seções (scroll snap já faz o trabalho, mas para links suaves):
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        // Efeito de fundo animado em todas as seções, cada uma com cores diferentes
        const bgConfigs = [
            {
                id: 'topo',
                bg: 'radial-gradient(circle at 50% 50%, #60a5fa 0%, #a78bfa 50%, #f472b6 100%)',
                colors: ['#60a5fa', '#a78bfa', '#f472b6']
            },
            {
                id: 'sobre',
                bg: 'radial-gradient(circle at 50% 50%, #fbbf24 0%, #f472b6 100%)',
                colors: ['#fbbf24', '#f472b6']
            },
            {
                id: 'projetos',
                bg: 'radial-gradient(circle at 50% 50%, #34d399 0%, #60a5fa 100%)',
                colors: ['#34d399', '#60a5fa']
            },
            {
                id: 'aboutme',
                bg: 'radial-gradient(circle at 50% 50%, #a5b4fc 0%, #f472b6 100%)',
                colors: ['#a5b4fc', '#f472b6']
            },
            {
                id: 'contato',
                bg: 'radial-gradient(circle at 50% 50%, #f472b6 0%, #6366f1 100%)',
                colors: ['#f472b6', '#6366f1']
            }
        ];
        bgConfigs.forEach(cfg => {
            const section = document.getElementById(cfg.id);
            const bgDiv = document.getElementById('bg-' + cfg.id);
            if (section && bgDiv) {
                bgDiv.style.background = cfg.bg;
                bgDiv.style.transition = 'background 0.2s';
                section.addEventListener('mousemove', function(e) {
                    const rect = this.getBoundingClientRect();
                    const x = ((e.clientX - rect.left) / rect.width) * 100;
                    const y = ((e.clientY - rect.top) / rect.height) * 100;
                    if (cfg.colors.length === 3) {
                        bgDiv.style.background = `radial-gradient(circle at ${x}% ${y}%, ${cfg.colors[0]} 0%, ${cfg.colors[1]} 50%, ${cfg.colors[2]} 100%)`;
                    } else {
                        bgDiv.style.background = `radial-gradient(circle at ${x}% ${y}%, ${cfg.colors[0]} 0%, ${cfg.colors[1]} 100%)`;
                    }
                });
                section.addEventListener('mouseleave', function() {
                    bgDiv.style.background = cfg.bg;
                });
            }
        });
    </script>
</body>

</html>