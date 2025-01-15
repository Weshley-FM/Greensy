<?php

namespace App\Http\Controllers\Tweets;

use App\Http\Controllers\Controller;
use App\Models\Tweet; // Pastikan Anda mengimpor model Tweet
use Illuminate\Http\RedirectResponse;

class TweetDeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id): RedirectResponse
    {
        // Temukan tweet berdasarkan ID
        $tweet = Tweet::find($id);

        // Periksa jika tweet tidak ditemukan
        if (!$tweet) {
            abort(404, 'Tweet not found');
        }

        // Hapus tweet
        $tweet->delete();

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Tweet berhasil dihapus.');
    }
}
