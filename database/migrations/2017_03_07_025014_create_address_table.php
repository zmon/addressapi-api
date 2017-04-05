<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('single_line_address', 255);
            $table->string('street_address', 255);
            $table->string('street_number', 10);
            $table->string('pre_direction', 120);
            $table->string('street_name', 100);
            $table->string('street_type', 24);
            $table->string('post_direction', 10)->nullable();
            $table->string('internal', 10)->nullable();
            $table->string('city', 120);
            $table->string('state_abbr', 2);
            $table->string('zip', 5);
            $table->string('zip4', 4)->nullable();
            $table->decimal('longitude', 13, 10)->nullable();
            $table->decimal('latitude', 13, 10)->nullable();
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
        Schema::drop('address');
    }
}
