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
        Schema::table('illustrations', function (Blueprint $table) {
            $table->string('image_url')->nullable()->after('id');
            $table->unsignedBigInteger('categories_id')->after('image_url'); //①
            $table->foreign('categories_id')->references('id')->on('categories'); //②
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('illustrations', function (Blueprint $table) {
            //
        });
    }
};
