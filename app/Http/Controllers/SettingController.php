<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SettingController extends Controller
{
    function index()
    {
        return view('pages.setting');
    }
    public function clearCache(Request $request)
    {
        Artisan::call('cache:clear');
        return response()->json(['message' => 'کش با موفقیت پاک شد.']);
    }

    public function runMigrations(Request $request)
    {
        Artisan::call('migrate');
        return response()->json(['message' => 'مایگریشن‌ها با موفقیت اجرا شدند.']);
    }

    public function optimizeApp(Request $request)
    {
        Artisan::call('optimize');
        return response()->json(['message' => 'اپلیکیشن با موفقیت بهینه‌سازی شد.']);
    }
}
