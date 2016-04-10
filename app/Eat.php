<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Eat extends Model
{
    protected $fillable = ['datetime', 'store', 'food', 'price', 'rate', 'note'];

    protected $casts = [
        'user_id' => 'integer',
        'rate'    => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('latest', function (Builder $builder) {
            $builder->latest('datetime');
        });
    }

    public function getDatetimeAttribute($value)
    {
        return (new Carbon($value))->format('Y-m-d H:i');
    }
}
