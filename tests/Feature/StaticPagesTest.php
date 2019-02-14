<?php

namespace Tests\Feature;

use App\Models\User;
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

    /** @test */
    public function authenticated_users_cant_visit_the_home_page()
    {
        $this->actingAs(factory(User::class)->create())
            ->get(route('pages.home'))
            ->assertRedirect(route('dashboard.home'));
    }
}
