<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestsTableSeeder extends Seeder
{
    /**
     * Run the  seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
      'id' => '3',
      'work_id' => '1',
      'rest_begin' => '11:00',
      'rest_end' => '12:00'
    ];
    DB::table('rests')->insert($param);
    }
}
