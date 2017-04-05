<?php

use Illuminate\Database\Seeder;

class SourceFileTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('source_file_types')->insert([
          'name' => '',
          'source_type', => '',
          'description' => '',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
