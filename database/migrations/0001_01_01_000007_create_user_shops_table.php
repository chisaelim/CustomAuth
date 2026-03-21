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
        Schema::create('user_shops', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->index('user_id');
            $table->uuid('shop_id')->index('shop_id');
            $table->timestamps();
            $table->softDeletes();
            $table->uuid('created_by')->index('created_by');
            $table->uuid('updated_by')->index('updated_by');
            $table->uuid('deleted_by')->index('deleted_by')->nullable();
            $table->unique(['user_id', 'shop_id'], 'user_shops_user_id_shop_id_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_shops');
    }
};
