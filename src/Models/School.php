<?php

namespace Osoobe\School\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Osoobe\LaravelTraits\Support\HasSlug as SupportHasSlug;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class School extends Model
{
    use HasFactory;
    use HasSlug;
    use SupportHasSlug;

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
        'logo',
        'slug'
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



    // Scope queries
    public function scopeSchoolCode($query, $code) {
        return $query->where('school_code', $code);
    }


}
