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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('content_id')->constrained('contents'); // ارتباط با جدول contents
            $table->string('image_url'); // لینک تصویر اسلاید
            $table->string('caption')->nullable(); // توضیح اسلاید
            $table->integer('order')->default(0); // ترتیب نمایش اسلایدها
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sliders');
    }

};
