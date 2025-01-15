<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TimelineController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('timeline', [
            'tweets' => Tweet::latest('id')->get(),
        ]);
    }
}
