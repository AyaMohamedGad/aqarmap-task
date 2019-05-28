<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Supper Admin',
            'email' => 'mail@aqarmap.com',
            'password' => bcrypt('123456')
        ]);
    }
}
