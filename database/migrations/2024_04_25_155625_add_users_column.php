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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('books_id')->after('password'); //①
            $table->foreign('books_id')->references('id')->on('books'); //②
            $table->unsignedBigInteger('results_id')->after('books_id'); //①
            $table->foreign('results_id')->references('id')->on('results'); //②
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
