<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;

class BlogTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutExceptionHandling();
    }

    use RefreshDatabase, WithFaker;

    /**
     * @test
     */

    public function a_blog_has_bolg_entres()
    {
       $this->assertDatabaseCount('posts',100);
    }

    /**
     * @test
     */

    public function a_blog_can_be_viewed()
    {
        $post = Post::first();
        $this->withoutExceptionHandling();
        $response = $this->get('./blog/'.$post->id);
        $response->assertStatus(200);
    }

     /**
     * @test
     */
    public function a_blog_contains_a_title()
    {
        $post = Post::first();
        $response = $this->get('./blog/'.$post->id);
        $response
            ->assertViewIs('blog.show')
            ->assertSee($post->title)
            ->assertSee($post->body)
            ->assertSee($post->title)
            ->assertSee($post->name)
            ->assertSee($post->create_at);
        
    }
}