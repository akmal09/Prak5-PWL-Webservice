<?php

namespace Tests\Feature;

use App\Models\Komentar;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class KomentarTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use DatabaseMigrations;

    public function test_show_komentar()
    {
        $response = $this->get('/api/komentars');

        $response->assertStatus(200);
    }

    public function test_store_komentar(){
        $komentar = Komentar::factory()->make();
        $response = $this->postJson(route('komentars.store'), [
            'name'=>$komentar->name,
            'email'=>$komentar->email,
            'project_name'=>$komentar->project_name,
            'comment'=>$komentar->comment
        ]);

        $this->assertEquals(201,$response->baseResponse->getStatusCode());
        return $response->baseResponse->getStatusCode();
    }
}
