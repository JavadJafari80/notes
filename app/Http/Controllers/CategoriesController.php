<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Categories::all();
        return view('pages.categories', compact('categories'));
    }

    public function store(Request $request)
    {
//        Categories::create([
//            'PTitle' => $request->PTitle,
//            'ETitle' => $request->ETitle,
//            'user_id' => Auth::user()->id,
//            'parent_id' => $request->parent_id == 0 ? null : $request->parent_id,
//            'is_active' => true,
//        ]);

        return redirect()->back()->with('success', 'دسته‌بندی با موفقیت اضافه شد.');
    }


}
