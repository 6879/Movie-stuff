<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovietrailersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movietrailers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
              $table->string('image');
                $table->string('description');
                 $table->string('durition');
                  $table->string('type');
                   $table->string('dete');
                    $table->string('link');
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
        Schema::dropIfExists('movietrailers');
    }
}
