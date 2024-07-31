<?php

namespace App\Models;

use Spatie\Sheets\Facades\Sheets;

class Posts extends Sheets {
    public static function allPosts() {
        return self::collection('posts')->all();
    }
}
