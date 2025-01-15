<?php

namespace App\Http\Controllers\Tweets;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TweetEditController extends Controller
{
    use AuthorizesRequests;

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id)
    {
        $tweet = Tweet::find($id);

        // Jika tweet tidak ditemukan, lemparkan error 404
        if (!$tweet) {
            abort(404, 'Tweet not found');
        }

        // Periksa otorisasi berdasarkan kebijakan
        $this->authorize('update', $tweet);

        // Kirimkan data ke view
        return view('tweets.edit', [
            'tweet' => $tweet,
        ]);
    }
}
