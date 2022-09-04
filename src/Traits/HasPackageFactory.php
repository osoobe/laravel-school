<?php

namespace Osoobe\School\Traits;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use StudentFactory;

trait HasPackageFactory
{
    use HasFactory;

    protected static function newFactory()
    {
        require_once dirname(__FILE__).'/../../database/factories/StudentFactory.php';
        return StudentFactory::new();
    }
}

?>
