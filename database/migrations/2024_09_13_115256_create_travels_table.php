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
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('package_name', 255);
            $table->string('destination', 50);
            $table->date('departure_date');
            $table->date('return_date');
            $table->tinyInteger('duration')->unsigned();
            $table->smallInteger('price')->unsigned();
            $table->string('trip_type');
            $table->boolean('aviable')->default(0);
            $table->string('slug', 255)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travels');
    }
};
