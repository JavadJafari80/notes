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
        Schema::create('platforms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('content_id')->constrained('contents'); // ارتباط با جدول contents
            $table->string('name'); // نام پلتفرم (گوگل پلی، بازار، مایکت، لینک مستقیم)
            $table->string('icon'); // آیکون پلتفرم
            $table->string('link'); // لینک دانلود
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('platforms');
    }

};
