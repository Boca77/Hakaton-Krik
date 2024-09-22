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
    Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->date('date_from');
        $table->date('date_to');
        $table->text('description_1')->nullable();
        $table->text('description_2')->nullable();
        $table->text('description_3')->nullable();
        $table->string('img_main'); // Path to the main image
        $table->string('img_2'); // Path to the main image
        $table->timestamps(); // This adds created_at and updated_at
    });
}

public function down(): void
{
    Schema::dropIfExists('projects');
}

};
