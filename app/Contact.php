<?php

namespace WebPro;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
        use SoftDeletes;

        //
        protected $dates = ['deleted_at'];
}
