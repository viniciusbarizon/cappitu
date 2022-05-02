<?php

namespace App\Http\Controllers\Audio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Send extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('dashboard.audio.send');
    }
}
