<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Countdown extends Model
{
 
    

    protected $table = 'countdowns';


    protected $primaryKey = 'id';

    public $timestamps = true;

   

    protected $fillable = [
        'date_end', 'title','body','image_ads','active'
    ];

}
