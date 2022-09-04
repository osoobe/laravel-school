<?php

namespace Osoobe\School\Traits;


trait BelongsToSchool {


    /**
     * Get the school that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function school(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(
            config('manage-school.models.school', \Osoobe\School\Models\School::class),
            'school_id'
        );
    }


}


?>
