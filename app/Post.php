<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use \Laravelrus\LocalizedCarbon\Traits\LocalizedEloquentTrait;

class Post extends Model
{
    use LocalizedEloquentTrait;

    protected $fillable = [
        'title', 'body', 'published_at'
    ];

    public function setPublishedAtAttribute($field)
    {
        $this->attributes['published_at'] = Carbon::parse($field);
    }
}
