<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Feedback extends Model
{
    


    protected $table = 'feedbacks';


    protected $primaryKey = 'id';

    public $timestamps = true;

  
    protected $fillable = [
        'message', 'name', 'heading','img_client'
    ];
}
