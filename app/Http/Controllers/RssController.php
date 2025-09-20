<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use SimplePie\SimplePie;
use Exception;
use Psr\SimpleCache\CacheInterface;

class RssController extends Controller
{
    public function index(Request $request)
    {
        $defaultFeedUrl = 'https://news.google.com/rss/topics/CAAqLAgKIiZDQkFTRmdvSkwyMHZNR1ptZHpWbUVnVndkQzFDVWhvQ1FsSW9BQVAB?hl=pt-BR&gl=BR&ceid=BR%3Apt-419';

        $validator = Validator::make($request->all(), [
            'feed' => 'nullable|url|active_url',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $feedUrl = $request->input('feed', $defaultFeedUrl);

        $items = [];

        try {
            $feed = new SimplePie();
            $feed->set_feed_url($feedUrl);
            $feed->init();
            $feed->handle_content_type();

            if ($feed->error()) {
                throw new Exception("Erro ao processar o feed RSS: " . $feed->error());
            }

            $items = $feed->get_items(0, 10);
        } catch (Exception $e) {
            return redirect()->back()
                ->with('error_message', 'Não foi possível carregar o feed. Verifique a URL ou tente novamente mais tarde.')
                ->withInput();
        }

        return view('RssHelper', compact('items'));
    }
}
