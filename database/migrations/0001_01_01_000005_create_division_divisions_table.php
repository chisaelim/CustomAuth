<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('division_divisions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('main_division_id')->index('main_division_id');
            $table->uuid('sub_division_id')->index('sub_division_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('division_divisions');
    }
};
