<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the  seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
      'id' => '6',
      'name' => 'test',
      'email' => 'tt@tes.com',
      'password' => 'test'
    ];
    DB::table('users')->insert($param);
    }
}
