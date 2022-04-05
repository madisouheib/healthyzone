<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Prop extends Model
{





    protected $table = 'props';


    protected $primaryKey = 'id';

    public $timestamps = true;

  
    protected $fillable = [
        'body', 'title', 'image'
    ];




    
}
