<?php

namespace App\Http\Middleware;

use App\Models\Traffic;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class LogTrafficMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($response->isOk()) {
            $this->logTraffic($request);
        }

        return $response;
    }


    private function logTraffic(Request $request): void
    {
        DB::transaction(function () use ($request) {
            Traffic::query()
                ->updateOrCreate(
                    ['url' => $request->url()],
                    ['count' => $this->incrementCount()],
                );
        });
    }
    private function incrementCount(): int
    {
        $lastCount = Traffic::query()->orderBy('id', 'desc')->value('count');

        if (!$lastCount) {
            $lastCount = 0;
        }

        return $lastCount + 1;
    }
}
