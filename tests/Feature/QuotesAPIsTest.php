<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class QuotesAPIsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
    */
    public function testQuotesAPIsTest()
    {
        $response = $this->get('/api/v2/quotes/random-five');

        $response->assertStatus(200);
    }
}
