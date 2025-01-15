<?php

namespace App\Http\Controllers\Tweets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;
use Illuminate\Http\RedirectResponse; // Pastikan RedirectResponse diimpor

class TweetUpdateController extends Controller
{
    public function __invoke($id): RedirectResponse
    {
        \Log::info('Tweet ID:', ['id' => $id]);
        \Log::info('Content:', ['content' => request('content')]);
    
        $tweet = Tweet::find($id);
    
        if (!$tweet) {
            abort(404, 'Tweet not found');
        }
    
        $tweet->update(['content' => request('content')]);
    
        return redirect()->back()->with('success', 'Tweet berhasil diperbarui!');
    }
    
}
