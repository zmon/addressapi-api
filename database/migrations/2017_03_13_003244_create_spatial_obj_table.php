<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpatialObjTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spatial_obj', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('data_id');
            $table->integer('attribute_type_id');
            $table->integer('jurisdiction_id');
            $table->timestamp('effective_date');
            $table->string('name', 100);
            $table->json('polygon');
            $table->integer('load_id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('spatial_obj');
    }
}
