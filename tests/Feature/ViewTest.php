<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Visitor;

/**
 * @author Rik Verbeek
 * 
 * Testcases for view endpoints
 */
class ViewTest extends TestCase
{
    public function test_create_basic()
    {
        $response = $this->json('POST', '/api/views', [
            'article_id' => 1
        ]);

        $response->assertStatus(201);
    }

    public function test_create_fail()
    {
        $response = $this->json('POST', '/api/views');

        $response->assertStatus(200);
    }
}
