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
    Schema::create('registrations', function (Blueprint $table) {
      $table->id();

      $table->bigInteger('user_id')->unsigned();
      $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');

      $table->bigInteger('event_id')->unsigned();
      $table->foreign('event_id')->references('id')->on('events')->onDelete('CASCADE');

      $table->enum('drink', ['coffee', 'beer'])->default('coffee');
      $table->string('bank');
      $table->date('date');
      $table->string('reference');
      $table->decimal('amount', 12, 2)->default(0);
      $table->longText('description')->nullable();
      $table->timestamps();
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
    Schema::dropIfExists('registrations');
  }
};
