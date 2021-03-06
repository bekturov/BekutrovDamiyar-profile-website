<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BlogTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_post_id_get_request(){
        $response = $this->get('/blog/1');

        $response->assertStatus(200);
    }

    public function test_get_unexisted_post(){
        $response = $this->get('/blog/56');

        $response->assertStatus(404);
    }

    public function test_post_responce(){
        $response = $this->get('/blog/1');

        $response->assertViewHas('posts');
    }
}
