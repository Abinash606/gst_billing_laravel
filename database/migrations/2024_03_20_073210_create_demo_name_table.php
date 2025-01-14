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
        Schema::create('demo_names', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('full_name',200);
            $table->text('address')->nullable();
            $table->string('phone_no',100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demo_name');
    }
};
