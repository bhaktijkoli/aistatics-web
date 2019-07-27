<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('trainings', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('name');
      $table->string('image');
      $table->string('boucher');
      $table->longtext('objective');
      $table->longtext('outcomes');
      $table->longtext('audience');
      $table->longtext('curriculum');
      $table->float('rating');
      $table->integer('hours');
      $table->integer('assignments');
      $table->integer('students');
      $table->enum('admissions', [0, 1]);
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
    Schema::dropIfExists('trainings');
  }
}
