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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->text('email');
            $table->text('phoneno');
            $table->text('logo');
            $table->text('logo_name');
            $table->text('facebook_link');
            $table->text('youtube_link');
            $table->text('twitter_link');
            $table->text('instagram_link');
            $table->text('copyright');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
