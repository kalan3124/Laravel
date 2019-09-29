<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'user_post_id';
    protected $table = 'tbl_user_posts';
}
