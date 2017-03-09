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
            $table->char('single_line_address', 255);
            $table->char('street_address', 255);
            $table->char('street_number', 10);
            $table->char('pre_direction', 120);
            $table->char('street_name', 100);
            $table->char('street_type', 24);
            $table->char('post_direction', 10);
            $table->char('internal', 10);
            $table->char('city', 120);
            $table->char('state_abbr', 2);
            $table->char('zip', 5);
            $table->char('zip4', 4);
            $table->decimal('longitude', 13, 10);
            $table->decimal('latitude', 13, 10);
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
