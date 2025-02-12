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
            $table->string('Book_Title');
            $table->string('Author_name');
            $table->text('Book_Description');
            $table->string('image')->nullable(); // حقل لتخزين اسم الملف أو مسار الصورة
            $table->text('Book_Content');
            $table->boolean('Available')->default(true);
            $table->timestamps();

            $table->unsignedBigInteger('Category_id');
            $table->foreign('Category_id')->references('id')->on('categories')->cascodeonDelete();
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
