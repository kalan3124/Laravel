<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $primaryKey = 'ar_id';
    protected $table = 'tbl_areas';
//    public function district()
//    {
//        return $this->belongsTo(District::class,'dis_id');
//    }
}
