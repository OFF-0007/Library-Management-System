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
        Schema::create('bookissues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')
            ->references('id')
            ->on('students'); 

            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')
            ->references('id')
            ->on('books'); 

            $table->timestamp('issue_date');
            $table->timestamp('return_date')->nullable();;
            $table->timestamp('issue_status')->nullable();;
            $table->timestamp('issue_day')->nullable();;
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
        Schema::dropIfExists('bookissues');
    }
};
