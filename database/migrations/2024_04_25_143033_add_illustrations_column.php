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
            $table->unsignedBigInteger('categories_id')->change(); //①
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
