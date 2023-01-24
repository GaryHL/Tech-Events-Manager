<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostmanagementTest extends TestCase
{
    /**@test */
    public function a_post_can_be_created()
        {
            $response = $this->post('/posts',[
                'title' => 'Test title',
                'description' => 'Test description',
            ]);

            $response->assertOk();
            $this->assertCount(1, Post::all());

            $post =Post::first();

            $this->assertEquals($post->title, 'Test title');
            $this->assertEquals($post->description, 'Test description');


        }
    
}
