<?php

namespace Tests\Feature;

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
}
