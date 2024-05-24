<?php

namespace App\Http\Controllers;

use App\Models\HoneyCategory;
use Illuminate\Http\Request;

class HoneyCategoryController extends Controller
{
    public function showFormCategory()
    {
        return view('insert-honey-category');
    }

    public function insertHoneyCategory(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $honeyCategory = new HoneyCategory();
        $honeyCategory->name = $validatedData['name'];

        $honeyCategory->save();


        return redirect()->route('dashboard')->with('success', 'Data inserted successfully!');    }
}
