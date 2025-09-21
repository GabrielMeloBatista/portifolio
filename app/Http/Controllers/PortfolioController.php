<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http; 
use Illuminate\Support\Facades\Cache;
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Exception\CommonMarkException;

class PortfolioController extends Controller
{
    public function index()
    {
        $githubUser = env('GITHUB_USERNAME');
        $githubToken = env('GITHUB_TOKEN');

        $cacheKey = "github_repos_{$githubUser}";

        $repos = Cache::remember($cacheKey, now()->addMinutes(120), function () use ($githubUser, $githubToken) {

            $response = Http::withToken($githubToken)
                ->withHeaders([
                    'User-Agent' => 'LaravelApp'
                ])
                ->get("https://api.github.com/users/{$githubUser}/repos?sort=updated&per_page=6");

            if ($response->failed()) {
                return [];
            }

            return $response->json();
        });

        $readmeCacheKey = "github_readme_{$githubUser}";
        $aboutMeHtml = Cache::remember($readmeCacheKey, now()->addMinutes(120), function () use ($githubUser, $githubToken) {
            $response = Http::withToken($githubToken)
                ->get("https://api.github.com/repos/{$githubUser}/{$githubUser}/contents/README.md?ref=main");

            if ($response->failed()) {
                return '<p>Não foi possível carregar o conteúdo do Sobre Mim.</p>';
            }

            $markdownContent = base64_decode($response->json()['content']);
            
            try {
                $converter = new CommonMarkConverter();
                return $converter->convert($markdownContent)->getContent();
            } catch (CommonMarkException $e) {
                return '<p>Erro ao converter o conteúdo do Sobre Mim.</p>';
            }
        });

        return view('portfolio', [
            'repos' => $repos,
            'aboutMeHtml' => $aboutMeHtml
        ]);
    }
}