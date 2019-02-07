<?php

namespace Tests\Feature;

use Tests\TestCase;

class StaticPagesTest extends TestCase
{
    /** @test */
    public function the_home_page_is_accessible()
    {
        $this->get(route('pages.home'))
            ->assertOk()
            ->assertSee('Gnawee');
    }
}
