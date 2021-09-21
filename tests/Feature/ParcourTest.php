<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ParcourTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_parcours()
    {
        $response = $this->get('/parcours');
        dump($response);
        $response->assertStatus(200);
    }
    public function test_get_parcour_by_id()
    {
        $response = $this->get('/parcour/show/'. 1);
        dump($response);
        $response->assertStatus(200);
    }
}
