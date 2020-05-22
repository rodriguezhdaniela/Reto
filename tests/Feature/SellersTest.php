<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SellersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
        public function testSellerIndex()
    {
        $response = $this->get('/sellers');

        $response->assertStatus(200);
    }
}
