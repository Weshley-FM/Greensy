<?php

namespace App\Http\Controllers\Tweets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Tweet;
use Illuminate\Support\Facades\Auth;


class TweetStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): RedirectResponse
    {
        $tweet = new Tweet();

        $tweet->user_id = Auth::id(); 
        $tweet->content = request('content');
        $tweet->save();
        return redirect()->back();
    }
}
