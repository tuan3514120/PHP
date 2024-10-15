<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps =false;
    protected $fillable=['post_title','post_desc','post_content','post_status','post_image'];
    protected $primaryKey='post_id';
    protected $table='tbl_posts';
}
