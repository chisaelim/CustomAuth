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
        Schema::table('instances', function (Blueprint $table) {
            $table->foreign(['created_by'], 'instances_ibfk_100')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['updated_by'], 'instances_ibfk_200')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['deleted_by'], 'instances_ibfk_300')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('instances', function (Blueprint $table) {
            $table->dropForeign('instances_ibfk_100');
            $table->dropForeign('instances_ibfk_200');
            $table->dropForeign('instances_ibfk_300');
        });
    }
};
