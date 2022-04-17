<?php

namespace TCG\Voyager\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class RiwayatPemilikanDimmer extends BaseDimmer
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
        $count = \App\Models\RiwayatPemilikan::count();
        $string = 'Riwayat Pemilikan';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-certificate',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.user_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'View all Riwayat Pemilikan',
                'link' => route('voyager.riwayat-pemilikan.index'),
            ],
            'image' => '/riwayat-pemilikan-bg.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        // return Auth::user()->can('browse', Voyager::model('User'));
        return true;
    }
}
