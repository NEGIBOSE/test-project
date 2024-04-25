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
        Schema::table('books', function (Blueprint $table) {
            $table->string('isbn')->after('id');
            $table->string('title')->after('isbn');
            $table->string('author')->after('title');
            $table->string('thumbnail_url')->after('author');
            $table->unsignedBigInteger('categories_id')->after('thumbnail_url');
            $table->foreign('categories_id')->references('id')->on('categories'); //②
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            //
        });
    }
};
