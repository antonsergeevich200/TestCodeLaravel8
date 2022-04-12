<?php

namespace Tests\Unit;

use App\Models\Post;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{	
	use RefreshDatabase;
    
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testPostCreate()
    {	
        $post = Post::factory()->create();
		$this->assertModelExists($post);
        $this->assertTrue(true);
    }
}
