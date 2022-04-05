<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //


    protected $table = 'categories';


    protected $primaryKey = 'id';

    public $timestamps = true;



    protected $fillable = [
        'parent_id', 'order', 'slug','name','catg_image','slug'
    ];


}
