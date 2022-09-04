<?php

namespace Osoobe\School\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Osoobe\LaravelTraits\Support\HasSlug as SupportHasSlug;
use Osoobe\LaravelTraits\Support\TimeDiff;
use Osoobe\School\Traits\HasPackageFactory;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Student extends Model
{
    use HasPackageFactory;
    // use HasFactory;
    use HasSlug;
    use SupportHasSlug;
    use TimeDiff;


    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'school_id',
        'user_id',
        'gender',
        'grade',
        'form_class',
        'phone_number',
        'dob',
        'status',
        'description'
    ];

    protected $dates = [
        'dob'
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }


}
