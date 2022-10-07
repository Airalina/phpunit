<?php

namespace Tests\Unit\Models;

use App\Models\Post;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_set_name_in_lowercase()
    {
        $post = new Post;
        $post->name = 'Proyecto php';

        $this->assertEquals('proyecto php', $post->name);
    }

    public function test_get_slug(){
        $post = new Post;
        $post->name = 'Proyecto php';

        $this->assertEquals('proyecto-php', $post->slug);
    }

    public function test_get_href(){
        $post = new Post;
        $post->name = 'Proyecto en PHP';

        //viendo que el metodo href retorne ese valor
        $this->assertEquals('blog/proyecto-en-php', $post->href());

    }
}
