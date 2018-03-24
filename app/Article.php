<?php

namespace App;

class Article extends AppModel
{
    protected $fillable = [
        'title', 'body', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
