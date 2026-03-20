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
        Schema::table('user_shops', function (Blueprint $table) {
            $table
                ->foreign(['user_id'], 'user_shops_ibfk_1')
                ->references('id')
                ->on('users')
                ->onUpdate('restrict')
                ->onDelete('cascade');
            $table
                ->foreign(['shop_id'], 'user_shops_ibfk_2')
                ->references('id')
                ->on('shops')
                ->onUpdate('restrict')
                ->onDelete('cascade');
            $table->foreign(['created_by'], 'user_shops_ibfk_100')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['updated_by'], 'user_shops_ibfk_200')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['deleted_by'], 'user_shops_ibfk_300')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_shops', function (Blueprint $table) {
            $table->dropForeign('user_shops_ibfk_1');
            $table->dropForeign('user_shops_ibfk_2');
            $table->dropForeign('user_shops_ibfk_100');
            $table->dropForeign('user_shops_ibfk_200');
            $table->dropForeign('user_shops_ibfk_300');
        });
    }
};
