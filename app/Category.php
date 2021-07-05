<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'category_name', 'category_slug', 'status'
    ];
    protected $primaryKey = 'category_id';
    protected $table = 'tbl_category';
}
