<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneBrand extends Model
{
    protected $primaryKey = 'model_id';
    protected $table = 'tbl_models';
}
