<?php

use App\Models\Setting;

// get seeting value
if (!function_exists('setting')) {
    function setting($setting_name = Null)
    {
        $setting = Setting::select(['key', 'value'])->where('key', $setting_name)->first();

        return $setting ? $setting->value : null;
    }
}

// get updated at
if (!function_exists('updatedAt')) {
    function updatedAt($key)
    {
        $setting = Setting::where('key', $key)->first();

        return $setting ? $setting->updated_at : null;
    }
}
