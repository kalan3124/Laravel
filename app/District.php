<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $primaryKey = 'dis_id';
    protected $table = 'tbl_districts';

    public function areas()
    {
        return $this->hasMany('App\Area','dis_id');
    }
}
