<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Guiller\Taggy\TaggableTrait;

class Topics extends Model
{
    use TaggableTrait;
}
