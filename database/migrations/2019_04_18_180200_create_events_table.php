<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('events', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string("name");
      $table->string("type");
      $table->string("venue");
      $table->string("presenter");
      $table->longtext("agenda")->nullable();
      $table->string("frontimage")->nullable();
      $table->longtext("images")->nullable();
      $table->timestamp("from")->nullable();
      $table->timestamp("to")->nullable();
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
    Schema::dropIfExists('events');
  }
}
