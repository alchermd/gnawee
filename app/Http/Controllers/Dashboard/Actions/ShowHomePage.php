<?php

namespace App\Http\Controllers\Dashboard\Actions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ShowHomePage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if (!Redis::get('visits')) {
            Redis::set('visits', 0);
        }

        Redis::incr('visits');

        return view('dashboard.home');
    }
}
