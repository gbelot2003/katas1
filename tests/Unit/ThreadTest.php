<?php

namespace Tests\Unit;

use App\Models\Thread;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ThreadTest extends TestCase
{
    use RefreshDatabase;


    /** @test */
    public function a_thread_has_replies()
    {
        $thread = Thread::factory()->create();
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $thread->replies);
    }

    /** @test */
    public function a_thread_has_a_creator()
    {
        $thread = Thread::factory()->create();

        $this->assertInstanceOf(User::class, $thread->creator);
    }
}
