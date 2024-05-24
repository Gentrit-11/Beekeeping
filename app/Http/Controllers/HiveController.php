<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hive;

class HiveController extends Controller
{
    public function showForm()
    {
        return view('insert-data');
    }

    public function insertData(Request $request)
    {
        $validatedData = $request->validate([
            'hive_color' => 'required|string|max:255',
            'hive_id' => 'required|integer', // Adjust validation rules for Hive ID as needed
        ]);

        // Create a new Hive instance and fill it with validated data
        $hive = new Hive();
        $hive->HiveID = $validatedData['hive_id'];
        $hive->HiveColor = $validatedData['hive_color'];
        $hive->save();

        return redirect()->route('dashboard')->with('success', 'Data inserted successfully!');
    }
    public function showHives()
    {
        $hives = Hive::all();
        return view('showHives', compact('hives'));
    }
    public function editHive($id)
    {
        $hive = Hive::findOrFail($id);
        // You may also load any additional data needed for editing

        return view('edit-hive', compact('hive'));
    }


public function updateHive(Request $request, $id)
{
    $request->validate([
        'HiveID' => 'required', // Add validation rules as needed
        'HiveColor' => 'required',
    ]);

    $hive = Hive::findOrFail($id);
    $hive->HiveID = $request['HiveID'];
    $hive->HiveColor = $request['HiveColor'];

    $hive->save();

    return redirect()->route('dashboard')->with('success', 'Hive updated successfully!');
}



    public function deleteHive($id)
    {
        $hive = Hive::findOrFail($id);
        $hive->delete();

        return redirect()->route('dashboard')->with('success', 'Hive deleted successfully!');
    }

}
