<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Services\SeoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the social links page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function socials()
    {
        return view('admin.settings.socials');
    }

    /**
     * Show the seo tags page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function seo(SeoService $service)
    {
        return view('admin.settings.seo', [
            'pages' => $service->seoInputFields()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->except('_token');

        foreach ($data as $key => $value) {
            Setting::updateOrCreate([
                'key' => $key
            ], [
                'value' => $value ?? ''
            ]);
        }

        return redirect()->back()->with('status', 'Data saved successfully!');
    }

    /**
     * Config & Route clear cache.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function clear(Request $request)
    {
        Artisan::call('config:clear');
        Artisan::call('route:clear');

        return redirect()->back()->with('status', 'Data cache cleared successfully!');
    }

    /**
     * Config & Route cache.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cache(Request $request)
    {
        Artisan::call('optimize');
        Artisan::call('config:cache');
        Artisan::call('route:cache');

        return redirect()->back()->with('status', 'Data cached successfully!');
    }
}
