<?php

namespace Tests\Unit;

use App\Models\Thread;
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
}
