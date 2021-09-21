<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FiliereTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_filieres()
    {
        $response = $this->get('/filieres');
        dump($response);
        $response->assertStatus(200);
    }

    public function test_get_filiere_by_id()
    {
        $response = $this->get('/filiere/show/'. 1);
        dump($response);
        $response->assertStatus(200);
    }
}
