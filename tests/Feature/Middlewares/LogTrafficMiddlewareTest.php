<?php

namespace Tests\Feature\Middlewares;

use App\Events\VisitorEvent;
use App\Http\Middleware\LogTrafficMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Tests\TestCase;

class LogTrafficMiddlewareTest extends TestCase
{
    use DatabaseTransactions;

    public function test_it_can_dispatch_visitor_event(): void
    {
        Event::fake();

        $closure = function () {
            return Response::make('success', 200);
        };

        $request = Request::create('/');

        $result = (new LogTrafficMiddleware())->handle($request, $closure);

        Event::assertDispatched(VisitorEvent::class);
        $this->assertEquals(HttpResponse::class, get_class($result));
    }
}
