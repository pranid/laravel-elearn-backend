<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class SlPostalCode extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'postal_code', 'city', 'district','province',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'city_id');
    }
}
