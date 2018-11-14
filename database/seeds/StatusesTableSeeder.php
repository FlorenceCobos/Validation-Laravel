<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            [
              'disponibility' => "0",
            ],
            [
              'disponibility' => "1",
            ],
            [
              'disponibility' => "1",
            ],
          ]);
    }
}
