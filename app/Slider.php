<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{


    //

   
    protected $table = 'sliders';


    protected $primaryKey = 'id';

    public $timestamps = true;



    protected $fillable = [
        'slider_image', 'title','descrip',
    ];

}
