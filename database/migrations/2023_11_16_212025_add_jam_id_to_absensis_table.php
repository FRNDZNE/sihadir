<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('absensis', function (Blueprint $table) {
            if (!Schema::hasColumn('absensis', 'jam_id')) {
                $table->foreignId('jam_id')->after('week_id')->constrained('jams')->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('absensis', function (Blueprint $table) {
            if (Schema::hasColumn('absensis', 'jam_id')) {
                // $table->dropForeign(['jam_id']);
                // $table->dropColumn('jam_id');
            }
        });
    }
};
