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
        Schema::table('division_divisions', function (Blueprint $table) {
            $table
                ->foreign(['main_division_id'], 'division_divisions_ibfk_1')
                ->references('id')
                ->on('divisions')
                ->onUpdate('restrict')
                ->onDelete('cascade');
            $table
                ->foreign(['sub_division_id'], 'division_divisions_ibfk_2')
                ->references('id')
                ->on('divisions')
                ->onUpdate('restrict')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('division_divisions', function (Blueprint $table) {
            $table->dropForeign('division_divisions_ibfk_1');
            $table->dropForeign('division_divisions_ibfk_2');
        });
    }
};
