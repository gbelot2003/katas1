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

        $response = $this->get('/threads')
            ->assertStatus(200)
            ->assertSee($thread->title);

    }

    /** @test */
    public function a_user_can_read_a_single_thread()
    {
        $thread = Thread::factory()->create();

        $response = $this->get('/threads/' . $thread->id)
        ->assertStatus(200)
        ->assertSee($thread->title);
    }


}
