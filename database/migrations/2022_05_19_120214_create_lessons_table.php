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
        Schema::create('lessons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table
                ->integer('published')
                ->default(0)
                ->nullable();
            $table->integer('position')->default(0);
            $table->integer('is_free')->default(0);
            $table->foreignId('course_id');
            $table->foreignId('parent_id')->nullable();
            $table->unsignedBigInteger('lesson_id')->nullable();

            $table->index('title');
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
        Schema::dropIfExists('lessons');
    }
};
