<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Reply;
use App\Models\Thread;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ThreadsTest extends TestCase
{
    use RefreshDatabase;

    protected $thread;

     public function setUp() : void
     {
        parent::setUp();

        $this->thread = Thread::factory()->create();
     }


    /** @test */
    public function a_user_can_browse_threads()
    {
        $response = $this->get('/threads')
            ->assertStatus(200)
            ->assertSee($this->thread->title);

    }

    /** @test */
    public function a_user_can_read_a_single_thread()
    {
        $response = $this->get('/threads/' . $this->thread->id)
        ->assertStatus(200)
        ->assertSee($this->thread->title);
    }

    /** @test */
    public function a_user_can_replies_associeaded_with_threads()
    {
        $reply = Reply::factory()->create(['thread_id' => $this->thread->id]);

        $response = $this->get('/threads/' . $this->thread->id)
            ->assertSee($reply->body);
    }

}
