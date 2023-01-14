<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Models\News;
use App\Models\Page;
use Carbon\Carbon;

class SitemapController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        // sitemap for pages
        $pages = ['homepage', 'about', 'consultancy', 'web_development', 'user_design', 'strategy_planning', 'contact'];

        foreach ($pages as $page) {
            $data['pages'][$page]['route'] = $page;
            $data['pages'][$page]['updated_at'] = now();
        }

        return response()->view('sitemap.index', compact('data'))->header('Content-Type', 'text/xml');
    }
}
