<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        'isbn', // 書籍のISBN番号
        'title', // 書籍のタイトル
        'author', // 著者名
        'thumbnail_url', // サムネイル画像のURL
    ];
}
