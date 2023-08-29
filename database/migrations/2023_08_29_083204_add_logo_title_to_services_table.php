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
        Schema::table('services', function (Blueprint $table) {
            $table->text('logo1_title');
            $table->text('logo2_title');
            $table->text('logo3_title');
            $table->text('logo4_title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('logo1_title');
            $table->dropColumn('logo2_title');
            $table->dropColumn('logo3_title');
            $table->dropColumn('logo3_title');
        });
    }
};
