<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Test extends Model
{
    use SoftDeletes;

    public $timestamps = false;
    protected $table = 'tests';
    protected $fillable = [
        'name', 'email', 'my_date'
    ];
    protected $dates = ['deleted_at', 'my_date'];


    /**
     * @param $query
     * @return mixed
     */
    public function scopePublish($query)
    {
        return $query->where('my_date', '<', Carbon::now());
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeUnpublish($query)
    {
        return $query->where('my_date', '>=', Carbon::now());
    }

    /**
     * @param $query
     * @param $ids
     * @return mixed
     */
    public function scopeId($query, $ids)
    {
        return $query->whereIn('id', $ids);
    }
}
