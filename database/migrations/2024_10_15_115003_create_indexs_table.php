<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('indexs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_heading');
            $table->string('rj_para');
            $table->string('mh_para');
            $table->string('sadiq_para');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indexs');
    }
};
