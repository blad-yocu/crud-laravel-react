<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(20)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test Admin',
            'last_name' => 'Sanchez',
            'email' => 'test@admin.com',
            'role_id' => 1
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Test Editor',
            'last_name' => 'Sanchez',
            'email' => 'test@editor.com',
            'role_id' => 2
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Test Viewer',
            'last_name' => 'Sanchez',
            'email' => 'test@viewer.com',
            'role_id' => 3
        ]);
    }
}
