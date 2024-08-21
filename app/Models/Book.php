<?php

// app/Models/Book.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'thumbnail_url', 'category_id', 'user_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the user that owns the book.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
