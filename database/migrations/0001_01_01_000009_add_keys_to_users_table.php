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
        Schema::table('users', function (Blueprint $table) {
            $table
                ->foreign(['instance_id'], 'users_ibfk_1')
                ->references('id')
                ->on('instances')
                ->onUpdate('restrict')
                ->onDelete('cascade');
            $table->foreign(['created_by'], 'users_ibfk_100')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['updated_by'], 'users_ibfk_200')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['deleted_by'], 'users_ibfk_300')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_ibfk_1');
            $table->dropForeign('users_ibfk_100');
            $table->dropForeign('users_ibfk_200');
            $table->dropForeign('users_ibfk_300');
        });
    }
};
