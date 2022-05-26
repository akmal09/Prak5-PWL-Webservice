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
    public function test_komentar_show()
    {
        $response = $this->get('/api/komentars');
        $response->assertStatus(200);
    }
}
