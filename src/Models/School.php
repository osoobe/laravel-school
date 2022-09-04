<?php

namespace Osoobe\School\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'school_code',
        'phone_no',
        'website',
        'street_address',
        'city',
        'state',
        'country',
        'zip_code',
        'logo',
        'slug'
    ];


}
