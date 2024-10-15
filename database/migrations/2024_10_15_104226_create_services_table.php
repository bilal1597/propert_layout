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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('heading');
            $table->string('heading_para');
            $table->string('service1_para');
            $table->string('service2_para');
            $table->string('service3_para');
            $table->string('service4_para');
            $table->string('design_para');
            $table->string('build_para');
            $table->string('management_para');
            $table->string('consult_para');
            $table->string('QA_para');
            $table->string('support_para');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
