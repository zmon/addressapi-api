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
        DB::table('source_file')->insert([
          'name' => 'other.gds',
          'organization_id' => '1',
          'source_file_type_id' => '',
          'url' => 'http://maps.kcmo.org/apps/download/GisDataDownload/Other.gdb.zip',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
