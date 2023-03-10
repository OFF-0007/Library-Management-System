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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
            ->references('id')
            ->on('categories'); 

            $table->unsignedBigInteger('publisher_id');
            $table->foreign('publisher_id')
            ->references('id')
            ->on('publishers'); 

            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')
            ->references('id')
            ->on('authors');

            $table->tinyInteger('quantity');


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
        Schema::dropIfExists('books');
    }
};
