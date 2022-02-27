<?php

namespace Tests\Feature;

use App\Models\Thread;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ThreadsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_browse_threads()
    {
        $thread = Thread::factory()->create();

        $response = $this->get('/threads');

        $response->assertStatus(200)
        ->assertSee($thread->title);
    }
}
