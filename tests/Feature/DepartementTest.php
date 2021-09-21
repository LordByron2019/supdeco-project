<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DepartementTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_departements()
    {
        $response = $this->get('/departements');
        dump($response);
        $response->assertStatus(200);
    }

    public function test_get_departement_by_id()
    {
        $response = $this->get('/departement/show/'. 1);
        dump($response);
        $response->assertStatus(200);
    }
}
