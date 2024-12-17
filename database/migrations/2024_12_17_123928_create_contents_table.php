<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// migration file
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // عنوان صفحه
            $table->text('description')->nullable(); // توضیحات صفحه
            $table->string('slogan')->nullable(); // شعار صفحه
            $table->string('font_style')->nullable(); // فونت
            $table->string('theme_color')->nullable(); // رنگ تم
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contents');
    }

};
