<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\SoftDeletes;
use Plank\Mediable\Media as BaseMedia;

class Media extends BaseMedia
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
