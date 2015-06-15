<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Laravelrus\LocalizedCarbon\Traits\LocalizedEloquentTrait;

class Post extends Model
{
    use LocalizedEloquentTrait;
}
