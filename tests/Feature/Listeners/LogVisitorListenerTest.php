<?php

namespace Tests\Feature;

use App\Events\VisitorEvent;
use App\Listeners\LogVisitorListener;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class LogVisitorListenerTest extends TestCase
{
    use WithFaker;
    use DatabaseTransactions;

    public function test_it_listens_to_visitor_event(): void
    {
        Event::fake();
        Event::assertListening(VisitorEvent::class, LogVisitorListener::class);
    }

    public function test_it_logs_to_db(): void
    {
        $url = $this->faker->url();
        $event = new VisitorEvent($url);

        (new LogVisitorListener())->handle($event);

        $this->assertDatabaseHas('traffic', ['url' => $url]);
    }
}
