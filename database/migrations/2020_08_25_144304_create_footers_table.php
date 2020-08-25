<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
             $table->increments('id');
            $table->text('contact');
            $table->text('address');
            $table->text('email');
            $table->text('openinghours');
            $table->text('weekendhours');
            $table->text('about');
            $table->text('copy_right_one');
            $table->text('copy_right_two');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footers');
    }
}
