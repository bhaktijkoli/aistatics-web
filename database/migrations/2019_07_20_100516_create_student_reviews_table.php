<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentReviewsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('student_reviews', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('name');
      $table->string('image');
      $table->longtext('review');
      $table->double('ratings');
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
    Schema::dropIfExists('student_reviews');
  }
}
