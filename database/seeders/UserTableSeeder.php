<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
;



class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now('America/Mexico_City')->format('Y-m-d H:i:s');
        DB::table('users')->insert([
        "name" => 'Carlos', 
        "email" => 'al22201784@gmail.com',
        "password" => bcrypt(12345678),
        "created_at" => $now,
        "updated_at" => $now

    ]);
    }
}
