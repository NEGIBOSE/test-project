<?php

// app/Models/Category.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['mark', 'user_id'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class); // ユーザーとのリレーション
    }
}

