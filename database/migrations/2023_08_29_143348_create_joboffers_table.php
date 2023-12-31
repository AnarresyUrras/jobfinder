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
        Schema::create('joboffers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('company_id');
            $table->string('slug');
            $table->string('joboffer');
            $table->string('company_name');
            $table->string('location');
            $table->text('excerpt');
            $table->text('jobdescription');
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joboffers');
    }
};
