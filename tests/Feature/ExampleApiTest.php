<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Redis;
use Tests\TestCase;

class ExampleApiTest extends TestCase
{
    /** @test */
    public function the_server_date_endpoint_returns_the_correct_date()
    {
        $this->get(route('server.date'))
            ->assertJson([
                'data' => [
                    'server' => [
                        'date' => now()->toDateString()
                    ]
                ]
            ]);
    }

    /** @test */
    public function the_server_motd_endpoints_returns_the_correct_schema()
    {
        $this->get(route('server.motd'))
            ->assertJsonStructure([
                'data' => [
                    'server' => [
                        'motd'
                    ]
                ]
            ]);
    }

    /** @test */
    public function the_visitor_counter_endpoint_properly_increments_for_each_get_request_on_the_dashboard()
    {
        $visits = Redis::get('visits');

        $this->get(route('dashboard.home'));
        $this->get(route('visits'))
            ->assertJson([
                'data' => [
                    'visits' => $visits + 1
                ]
            ]);

        $this->get(route('dashboard.home'));
        $this->get(route('visits'))
            ->assertJson([
                'data' => [
                    'visits' => $visits + 2
                ]
            ]);

        $this->get(route('dashboard.home'));
        $this->get(route('visits'))
            ->assertJson([
                'data' => [
                    'visits' => $visits + 3
                ]
            ]);
    }
}
