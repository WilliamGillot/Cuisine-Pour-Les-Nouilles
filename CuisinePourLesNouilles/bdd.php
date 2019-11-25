<?php

class CreateTable extends Migration {
  /**
   * Run the migrations.
   * 
   * @return void
   */
  public function up() {
    Schema::create('users', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('email')->unique();
      $table->string('password');
      $table->rememberToken();
    });
    Schema::create('category', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
    });
    Schema::create('steps', function (Blueprint $table) {
      $table->increments('id');
      $table->string('steps');
    });
    Schema::create('ingredients', function (Blueprint $table) {
      $table->incremernts('id');
      $table->string('name');
    });
    Schema::create('recipe', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('category');
      $table->int('quantité');
      $table->string('steps');
      $table->blob('picture');
    });
    Schema::create('cocktail', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('category');
      $table->int('quantité');
      $table->string('steps');
      $table->blob('picture');
    });
  }
  /**
   * Reverse the migrations.
   * 
   * @return void
   */
  public function down() {
    Schema::dropIfExists('users');
    Schema::dropIfExists('category');
    Schema::dropIfExists('steps');
    Schema::dropIfExists('ingredients');
    Schema::dropIfExists('recipe');
    Schema::dropIfExists('cocktail');
  }
}
?>