<?php

namespace Tests\Unit;

use App\Models\Comment;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentTest extends TestCase
{	
	use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCommentCreate()
    {
        $comment = Comment::factory()->create();
		$this->assertModelExists($comment);
        $this->assertTrue(true);
    }
}
