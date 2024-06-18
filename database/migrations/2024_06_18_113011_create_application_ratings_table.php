<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationRatingsTable extends Migration
{
    public function up()
    {
        Schema::create('application_ratings', function (Blueprint $table) {
            $table->id();
            $table->string('business_type');
            $table->string('application_name');
            $table->integer('rating');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('application_ratings');
    }
}
