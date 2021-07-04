<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category1 extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'category_name', 'category_slug', 'status'
    ];
    protected $primaryKey = 'category_id';
    protected $table = 'tbl_category1';
}
