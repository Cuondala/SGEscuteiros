<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EscuteiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('escuteiros')->insert([
            'escut_nome' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
        ]);
    }
}
