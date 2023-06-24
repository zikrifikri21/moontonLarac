<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = \App\Models\User::create([
            'name' => 'zikri',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        $a->assignRole('admin');
    }
}
