<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @author Rik Verbeek
 * 
 * Testcases for article endpoints
 */
class ArticleTest extends TestCase
{
    public function test_create_basic()
    {
        $response = $this->json('POST', '/api/articles', [
            'title' => 'testcase', 
            'body' => 'lorem'
        ]);

        $response->assertStatus(201);
    }

    public function test_create_fail()
    {
        $response = $this->json('POST', '/api/articles');

        $response->assertStatus(200);
    }

    public function test_create_category()
    {
        $response = $this->json('POST', '/api/articles', [
            'title' => 'testcase', 
            'body' => 'lorem',
            'categories' => '1' 
        ]);

        $response->assertStatus(201);
    }

    public function test_create_categories()
    {
        $response = $this->json('POST', '/api/articles', [
            'title' => 'testcase', 
            'body' => 'lorem',
            'categories' => '1,2' 
        ]);

        $response->assertStatus(201);
    }

    public function test_search()
    {
        $response = $this->json('GET', '/api/articles');

        $response->assertStatus(200);
    }

    public function test_search_categories()
    {
        $response = $this->json('GET', '/api/articles', [
            'categories' => '1'
        ]);

        $response->assertStatus(200);
    }

    public function test_search_range()
    {
        $response = $this->json('GET', '/api/articles', [
            'date_from' => '2021-01-01',
            'date_till' => '2021-01-02'
        ]);

        $response->assertStatus(200);
    }

    public function test_search_sort_views()
    {
        $response = $this->json('GET', '/api/articles', [
            'sort_on_views' => '1'
        ]);

        $response->assertStatus(200);
    }

    public function test_search_sort_votes()
    {
        $response = $this->json('GET', '/api/articles', [
            'sort_on_votes' => '1'
        ]);

        $response->assertStatus(200);
    }

    public function test_search_limit()
    {
        $response = $this->json('GET', '/api/articles', [
            'offset' => 10,
            'limit' => 3
        ]);

        $response->assertStatus(200);
    }

    public function test_search_phrase()
    {
        $response = $this->json('GET', '/api/articles', [
            'phrase' => 'bos in'
        ]);

        $response->assertStatus(200);
    }

    public function test_search_combined()
    {
        $response = $this->json('GET', '/api/articles', [
            'phrase' => 'bos in',
            'categories' => '1',
            'offset' => 10,
            'limit' => 3,
            'sort_on_votes' => '1',
            'sort_on_views' => '1',
            'date_from' => '2021-01-01',
            'date_till' => '2021-01-02'
        ]);

        $response->assertStatus(200);
    }
}
