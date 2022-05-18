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
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->decimal('price');
            $table->string('image')->nullable();
            $table->integer('duration')->nullable();
            $table->string('embed')->nullable();
            $table->integer('published')->nullable();
            $table
                ->enum('level', [
                    'Beginer',
                    'Intermidiate',
                    'Advanced',
                    'All Levels',
                ])
                ->nullable();

            $table->index('slug');

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
        Schema::dropIfExists('courses');
    }
};
