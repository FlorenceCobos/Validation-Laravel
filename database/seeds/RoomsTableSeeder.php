<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
              'name' => "Bataclan",
            ],
            [
              'name' => "Radian",
            ],
            [
              'name' => "Halle Tony Garnier",
            ],
          ]);
    }
}
