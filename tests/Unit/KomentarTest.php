<?php

namespace Tests\Unit;

use Tests\TestCase;

class KomentarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_show_komentar()
    {
        $response = $this->get('/api/komentars');
        // dd($response->baseResponse->getStatusCode());
        $response->assertStatus(200);
        return $response->baseResponse->getStatusCode();
    }
}
