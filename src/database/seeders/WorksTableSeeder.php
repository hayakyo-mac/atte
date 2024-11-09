<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the  seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
      'id' => '4',
      'user_id' => '3',
      'work_date' => '2024-09-10',
      'work_start' => '10:00',
      'work_end' => '18:00'
    ];
    DB::table('works')->insert($param);
    }
}
