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
        Schema::create('divisions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->enum('rank', ['RANK1', 'RANK2']);
            $table->uuid('division_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('divisions');
    }
};
