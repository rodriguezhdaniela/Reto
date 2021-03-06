<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InvoicesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testInvoicesIndex()
    {
        $response = $this->get('/invoices');

        $response->assertStatus(200);
    }
}
