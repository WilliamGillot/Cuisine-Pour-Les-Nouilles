<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
    Schema::create('sub_cat', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
    });
    Schema::create('steps', function (Blueprint $table) {
      $table->increments('id');
      $table->string('steps');
    });
    Schema::create('ingredients', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
    });
    Schema::create('recipe', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('id_category');
      $table->string('id_sub_cat');
      $table->int('nb_parts');
      $table->string('id_steps');
      $table->blob('picture');
    });
    Schema::create('cocktail', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('id_category');
      $table->string('id_sub_cat');
      $table->int('nb_parts');
      $table->string('id_steps');
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
    Schema::dropIfExists('sub_cat');
    Schema::dropIfExists('steps');
    Schema::dropIfExists('ingredients');
    Schema::dropIfExists('recipe');
    Schema::dropIfExists('cocktail');
  }
}
?>