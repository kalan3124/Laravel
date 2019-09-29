<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $primaryKey = 'user_image_id';
    protected $table = 'tbl_user_images';
}
