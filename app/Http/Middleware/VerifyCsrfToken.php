<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        // ここにCSRFトークン検証を除外したいルートを追加します
        'post/save-category',
        // 他の除外したいルートもここに追加できます
    ];
}
