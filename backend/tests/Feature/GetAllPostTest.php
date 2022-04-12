<?php

namespace Tests\Feature;

use App\Models\Post;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GetAllPostTest extends TestCase
{   
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetAllPost()
    {
        $response = $this->get('/api/post');
        $response->assertStatus(200);
    }
}
