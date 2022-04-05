<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plats extends Model
{
    //

    protected $table = 'posts';


    protected $primaryKey = 'id';

    public $timestamps = true;



    protected $fillable = [
        'author_id','category_id' ,'title', 'seo_title','body','image','slug','meta_description','meta_keywords','status','featured','price'
    ];



}
