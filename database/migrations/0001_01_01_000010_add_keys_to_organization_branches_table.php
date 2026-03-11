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
        Schema::table('organization_branches', function (Blueprint $table) {
            $table
                ->foreign(['organization_id'], 'organization_branches_ibfk_1')
                ->references('id')
                ->on('organizations')
                ->onUpdate('restrict')
                ->onDelete('cascade');
            $table
                ->foreign(['branch_id'], 'organization_branches_ibfk_2')
                ->references('id')
                ->on('branches')
                ->onUpdate('restrict')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('organization_branches', function (Blueprint $table) {
            $table->dropForeign('organization_branches_ibfk_1');
            $table->dropForeign('organization_branches_ibfk_2');
        });
    }
};
