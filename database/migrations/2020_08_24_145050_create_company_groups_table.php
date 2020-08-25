<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->text('icon');
            $table->text('name');
            $table->string('slug');
            $table->text('managingdirector');
            $table->text('established');
            $table->text('address');
            $table->text('contact');
            $table->text('shortdescription');
            $table->text('longdescription');
            $table->text('image');
            $table->text('facebook');
            $table->text('twitter');
            $table->text('instagram');
            $table->text('whatsapp');
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
        Schema::dropIfExists('company_groups');
    }
}
