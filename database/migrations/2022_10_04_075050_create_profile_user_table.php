<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('profile_user', function (Blueprint $table) {
      $table->id();

      $table->bigInteger('profile_id')->unsigned();
      $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('CASCADE');

      $table->bigInteger('user_id')->unsigned();
      $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('profile_user');
  }
};
