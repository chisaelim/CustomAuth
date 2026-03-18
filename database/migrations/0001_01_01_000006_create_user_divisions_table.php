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
        Schema::create('user_divisions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->index('user_id');
            $table->uuid('division_id')->index('division_id');
            $table->uuid('created_by')->index('created_by');
            $table->uuid('updated_by')->index('updated_by');
            $table->uuid('deleted_by')->index('deleted_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_divisions');
    }
};
