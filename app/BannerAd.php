<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class BannerAd extends Model
{
    


    protected $table = 'banner_ads';


    protected $primaryKey = 'id';

    public $timestamps = true;



    protected $fillable = [
        'ads_image', 'ads_link'
    ];



}
