<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase; //ejecuta la migracion 

    public function test_user()
    {
        //creo usuario
        User::factory()->create([
            'email' => 'a@a.com'
        ]
        );
        //proceso para verificar como guardar, editar y eliminar
        $this->assertDatabaseHas('users', [
            'email' => 'a@a.com'
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'ax@a.com'
        ]);
    }
}
