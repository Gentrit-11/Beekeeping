<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Selling;
use App\Models\Hive;
use App\Models\HoneyCategory;
use App\Models\Honey;
use App\Http\Controllers\HoneyController; // Add this line

class SellingHoneyController extends Controller
{
    public function  showSellings(){
        $sellings = Selling::all();

        return view('sellings', compact('sellings'));
    }



    public function showSellHoneyForm()
    {

        $hive = Hive::find(1); // Assuming hive with ID 1
           $hives = Hive::all();
        $categories = HoneyCategory::all();
        $honeyData = Honey::with('hive', 'category')->get();
        $zeroQuantityError = $honeyData->contains('hive.quantity_kg', 0);

    return view('sell-honey', compact('hives', 'categories', 'honeyData', 'zeroQuantityError'));

    }


    public function sellHoney(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'honey_id' => 'required|exists:honey,id',
            'hive_id' => 'required|exists:hive,id',
            'Special-hive_id' => 'required|exists:hive,HiveID', // Validate Special-hive_id against HiveID in the hive table
            'quantity_kg' => 'required|numeric|min:0',
            'kind_of_honey' => 'required',
            'quantity_to_buy' => 'required|numeric|min:0',
            'personi' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);
        $quantityToBuy = $validatedData['quantity_to_buy'];
        $honey = Honey::findOrFail($validatedData['honey_id']);
        $remainingQuantity = $honey->quantity_kg - $quantityToBuy;

        // Ensure the remaining quantity is not negative
        $remainingQuantity = max($remainingQuantity, 0);

        // Update the quantity in the honey table
        $honey->update(['quantity_kg' => $remainingQuantity]);

        // Create a new Selling instance and fill it with validated data
        $selling = new Selling();
        $selling->honey_id = $validatedData['honey_id'];
        $selling->hive_id = $validatedData['hive_id'];
        $selling->HiveID = $validatedData['Special-hive_id']; // Set the HiveID using Special-hive_id

        $selling->quantity_kg = $validatedData['quantity_kg'];
        $selling->kind_of_honey = $validatedData['kind_of_honey'];
        $selling->quantity_to_buy = $quantityToBuy;
        $selling->personi = $validatedData['personi'];
        $selling->price = $validatedData['price'];
        $selling->save();

        return redirect()->route('dashboard')->with('success', 'Data inserted successfully!');
    }
    public function returnHoney(Request $request, $sellingId)
    {
        // Find the selling record
        $selling = Selling::findOrFail($sellingId);

        // Update the honey record's quantity
        $honey = Honey::findOrFail($selling->honey_id);
        $honey->increment('quantity_kg', $selling->quantity_to_buy);

        // Delete the selling record
        $selling->delete();

        // Redirect back to the same view (showSellings) with a success message
        return redirect()->back()->with('success', 'Honey returned successfully!');
    }

// public function Sellings()
// {
//     $hive = Hive::find(1); // Assuming hive with ID 1
//     $hives = Hive::all();
//     $categories = HoneyCategory::all();
//     $honeyData = Honey::with('hive', 'category')->get();

//     // Check if hive exists and calculate zeroQuantityError
//     $zeroQuantityError = $hive && $hive->quantity_kg == 0;

//     return view('sell-honey', compact('hive', 'hives', 'categories', 'honeyData', 'zeroQuantityError'));
// }
public function editSelling($sellingId)
{
    $selling = Selling::findOrFail($sellingId);
    $honeyData = Honey::all(); // Assuming you need honeyData for the dropdown

    return view('edit-selling', compact('selling', 'honeyData'));
}
public function updateSelling(Request $request, $sellingId)
{
    // Validate the incoming request data for updating an existing selling
    $request->validate([
        'honey_id' => 'required|exists:honey,id',
        'hive_id' => 'required|exists:hive,id',
        'quantity_kg' => 'required|numeric|min:0',
        'kind_of_honey' => 'required',
        'quantity_to_buy' => 'required|numeric|min:0',
        'personi' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
    ]);

    // Find the selling record by ID
    $selling = Selling::findOrFail($sellingId);

    // Find the original honey record
    $originalHoney = Honey::findOrFail($selling->honey_id);

    // Calculate the difference in quantity to buy
    $difference = $request['quantity_to_buy'] - $selling->quantity_to_buy;

    // Update the selling record with new data
    $selling->honey_id = $request['honey_id'];
    $selling->hive_id = $request['hive_id'];
    $selling->quantity_kg = $request['quantity_kg'];
    $selling->kind_of_honey = $request['kind_of_honey'];
    $selling->quantity_to_buy = $request['quantity_to_buy'];
    $selling->personi = $request['personi'];
    $selling->price = $request['price'];
    $selling->save();

    // Update the honey's quantity_kg based on the difference
    $newHoneyQuantity = $originalHoney->quantity_kg - $difference;

    // Ensure the new quantity is not negative
    $newHoneyQuantity = max($newHoneyQuantity, 0);

    // Update the honey's quantity_kg
    $originalHoney->update(['quantity_kg' => $newHoneyQuantity]);
    return redirect()->route('dashboard')->with('success', 'Selling updated successfully!');
}



}
