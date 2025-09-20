<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http; // Importe o cliente HTTP
use Illuminate\Support\Facades\Cache; // Importe o Facade de Cache
use League\CommonMark\CommonMarkConverter; // <-- 1. Importe o conversor
use League\CommonMark\Exception\CommonMarkException;

class PortfolioController extends Controller
{
    public function index()
    {
        // Pega o usuário e token do arquivo .env
        $githubUser = env('GITHUB_USERNAME');
        $githubToken = env('GITHUB_TOKEN');

        // Chave única para o cache
        $cacheKey = "github_repos_{$githubUser}";

        // O Cache::remember vai verificar se os dados já existem no cache.
        // Se existirem, ele retorna os dados cacheados.
        // Se não, ele executa a função, salva o resultado no cache por 120 minutos e o retorna.
        $repos = Cache::remember($cacheKey, now()->addMinutes(120), function () use ($githubUser, $githubToken) {

            $response = Http::withToken($githubToken)
                ->withHeaders([
                    'User-Agent' => 'LaravelApp'
                ])
                ->get("https://api.github.com/users/{$githubUser}/repos?sort=updated&per_page=6");

            // Se a requisição falhar, retorna um array vazio
            if ($response->failed()) {
                return [];
            }

            // Retorna os dados como um array
            return $response->json();
        });

        $readmeCacheKey = "github_readme_{$githubUser}";
        $aboutMeHtml = Cache::remember($readmeCacheKey, now()->addMinutes(120), function () use ($githubUser, $githubToken) {
            // O repositório do perfil tem o mesmo nome do usuário
            $response = Http::withToken($githubToken)
                ->get("https://api.github.com/repos/{$githubUser}/{$githubUser}/contents/README.md?ref=main");

            if ($response->failed()) {
                return '<p>Não foi possível carregar o conteúdo do Sobre Mim.</p>';
            }

            // O conteúdo vem codificado em Base64, precisamos decodificar.
            $markdownContent = base64_decode($response->json()['content']);
            
            // 3. Converte o Markdown para HTML
            try {
                $converter = new CommonMarkConverter();
                return $converter->convert($markdownContent)->getContent();
            } catch (CommonMarkException $e) {
                return '<p>Erro ao converter o conteúdo do Sobre Mim.</p>';
            }
        });

        // 4. Envia AMBOS os dados para a view
        return view('portfolio', [
            'repos' => $repos,
            'aboutMeHtml' => $aboutMeHtml
        ]);
    }
}