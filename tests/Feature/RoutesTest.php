<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    public function test_homepage()
  {
    // 1. példa
    $response = $this->get('/');
    $response->assertViewIs('welcome');
  }

  public function test_contact_route()
  {
    // 2. példa
    $response = $this->get('/contact');
    $response->assertStatus(200);

    // 3. példa
    $response = $this->get('/contac');
    $response->assertNotFound();
  }

  public function test_passing_data()
  {
    // 4. példa
    $response = $this->get('/pass-array');
    $response->assertOk();
    $response->assertSee('market');

    // 5. példa
    $response = $this->get('/request-test?title=MyFirstTitle');
    $response->assertSee('MyFirstTitle');
  }
}
