<?php

namespace TCG\Voyager\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class PostDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Voyager::model('Post')->count();
       // $string = trans_choice('voyager::dimmer.post', $count);
        $string = 'الاطباق';
        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-pizza',
            'title'  => "{$count} {$string}",
            'text'   => __('عرض جميع الاطباق في الموقع', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.post_link_text'),
                'link' => route('voyager.posts.index'),
            ],
            'image' => Voyager::image('home/top-view-food-donation-with-copy-space.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('Post'));
    }
}
