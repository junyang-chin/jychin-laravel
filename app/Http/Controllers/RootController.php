<?php

namespace App\Http\Controllers;

use App\Models\Traffic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class RootController extends Controller
{
    public const TTL = 60;

    public function __invoke(Request $request)
    {
        $visits = Cache::remember($request->url(), self::TTL, function () use ($request) {
            return Traffic::where('url', $request->url())->value('count');
        });

        return response()
            ->view('index', ['visits' => $visits]);
    }
}
