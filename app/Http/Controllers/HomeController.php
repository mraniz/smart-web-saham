<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $feed = \Feeds::make('https://id.investing.com/rss/news_25.rss');
        $data = array(
            'title'     => $feed->get_title(),
            'items'     => $feed->get_items()
        );
        return \View::make('home.index', $data);
    }
}
