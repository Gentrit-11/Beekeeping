<?php

namespace App\Http\Controllers;

use App\Models\Hive; // Import the Hive model
use Illuminate\Http\Request;
use App\Models\Honey;
use App\Models\HoneyCategory;

class HoneyController extends Controller
{
    public function showHoney()
    {
        $honeys = Honey::all();
        return view('showHoney', compact('honeys'));
    }
    public function showFormHoney()
    {
        $hives = Hive::all(); // Fetch all hive records
        $categories = HoneyCategory::all();


return view('insert-honey', compact('hives', 'categories'));
    }
    public function insertHoney(Request $request)
    {
        $validatedData = $request->validate([
            'hive_id' => 'required|exists:hive,id',
            'quantity_kg' => 'required|numeric',
            'honey_category_id' => 'required|exists:honey_categories,id', // Validate honey_category_id
            // 'kind_of_honey' => 'required',

        ]);
        $honeyCategory = HoneyCategory::findOrFail($validatedData['honey_category_id']);
        $validatedData['kind_of_honey'] = $honeyCategory->name;
        unset($validatedData['honey_category_id']);
        // Remove honey_category_id from validated data as we don't need to save it directly


        // Create a new Honey record in the database
         Honey::create($validatedData);

        // Redirect to a success page or back to the form with a success message
        return redirect()->route('insert.formHoney')->with('success', 'Honey created successfully.');
    }
    public function editHoney($id)
{
    $honey = Honey::findOrFail($id);
    // You may also load any additional data needed for editing, such as categories or related entities

    return view('edit-honey', compact('honey'));
}

public function updateHoney(Request $request, $id)
{
    $validatedData = $request->validate([
        'hive_id' => 'required|exists:hive,id',
        'quantity_kg' => 'required|numeric|min:0',
        'kind_of_honey' => 'required',
        // Add validation rules for other fields as needed
    ]);

    $honey = Honey::findOrFail($id);
    $honey->update($validatedData);

    return redirect()->route('dashboard')->with('success', 'Honey updated successfully!');
}


public function deleteHoney($id)
{
    $honey = Honey::findOrFail($id);
    $honey->delete();

    return redirect()->route('dashboard')->with('success', 'Honey deleted successfully!');
}


}
