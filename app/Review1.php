<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review1 extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'review_title', 'review_slug', 'review_desc', 'review_content', 'review_image', 'status', 'location_id', 'category_id', 'admin_id'
    ];
    protected $primaryKey = 'review_id';
    protected $table = 'tbl_review1';
}
