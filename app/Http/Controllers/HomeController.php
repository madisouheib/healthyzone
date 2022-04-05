<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Menu;
use App\Plats;
use App\BannerAd;
use App\Feedback;
use App\Countdown;
use App\Prop;


class HomeController extends Controller
{
    //

    public function index(){

        $banners = BannerAd::all();
        $sliders = Slider::all();
        $menus = Menu::all();
        $plats = Plats::all();
        $featured = Plats::where('featured',true)->get();
        $feedbacks = Feedback::all();
        $countDonw = Countdown::where('active',true)->first();
        $values = Prop::all();

        return view('welcome')->with('sliders',$sliders)->with('menus',$menus)->with('plats',$plats)->with('featured',$featured)->with('feedbacks',$feedbacks)->with('banners',$banners)->with('ads',$countDonw)->with('values',$values);

    }
}
