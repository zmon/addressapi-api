<?php

use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('address')->insert([
          'single_line_address' => '210 W 19TH TER, KANSAS CITY, MO',
          'street_address' => '210 W 19TH TER',
          'street_number' => '210',
          'pre_direction' => 'W',
          'street_name' => '19TH',
          'street_type' => 'TER',
          // 'post_direction' => xxx,
          // 'internal' => xxx,
          'city' => 'KANSAS CITY',
          'state_abbr' => 'MO',
          'zip' => '64108',
          // 'zip4' => xxx,
          // 'longitude' => xxx,
          // 'latitude' => xxx,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('address')->insert([
          'single_line_address' => '211 W 19TH TER, KANSAS CITY, MO',
          'street_address' => '211 W 19TH TER',
          'street_number' => '211',
          'pre_direction' => 'W',
          'street_name' => '19TH',
          'street_type' => 'TER',
          // 'post_direction' => xxx,
          // 'internal' => xxx,
          'city' => 'KANSAS CITY',
          'state_abbr' => 'MO',
          'zip' => '64108',
          // 'zip4' => xxx,
          // 'longitude' => xxx,
          // 'latitude' => xxx,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
