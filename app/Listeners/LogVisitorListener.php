<?php

namespace App\Listeners;

use App\Events\VisitorEvent;
use App\Models\Traffic;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class LogVisitorListener implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(VisitorEvent $event): void
    {
        DB::transaction(function () use ($event) {
            Traffic::query()
                ->updateOrCreate(
                    ['url' => $event->url],
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
