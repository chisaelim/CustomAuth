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
        Schema::table('divisions', function (Blueprint $table) {
            $table
                ->foreign(['division_id'], 'divisions_ibfk_1')
                ->references('id')
                ->on('divisions')
                ->onUpdate('restrict')
                ->onDelete('cascade');
            $table->foreign(['created_by'], 'divisions_ibfk_100')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['updated_by'], 'divisions_ibfk_200')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['deleted_by'], 'divisions_ibfk_300')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('divisions', function (Blueprint $table) {
            $table->dropForeign('divisions_ibfk_1');
            $table->dropForeign('divisions_ibfk_100');
            $table->dropForeign('divisions_ibfk_200');
            $table->dropForeign('divisions_ibfk_300');
        });
    }
};
