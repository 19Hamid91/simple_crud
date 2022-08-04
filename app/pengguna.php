<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pengguna extends Model
{
    use SoftDeletes;

    protected $guarded = ['id', 'timestamps'];

    protected $dates = ['deleted_at'];
}
