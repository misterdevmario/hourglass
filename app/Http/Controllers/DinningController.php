<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodSchedule;

class DinningController extends Controller
{
    //

    function getFoodList()
    {
        $rstFoodList = FoodSchedule::orderBy('id', 'ASC')->get();
        return view('admin-dinning', ['rstFoodList' => $rstFoodList]);
    }


    public function getDataDinning(Request $request)
    {
        $nId = $request->id;
        $slider = FoodSchedule::find($nId);
        return response()->json($slider);
    }


    public function editDinning(Request $request)
    {
        // Form validation
        $validatedData = $request->validate([
            'restaurantNameEdit' => 'required|min:3',
            'typeFoodEdit' => 'required|min:3',
            'main_sectionEdit' => 'required|min:3',
            'carteNameEdit' => 'required|min:3',
            'scheduleEdit' => 'required|min:3',
            'membersEdit' => 'required|min:3',
        ], [
            'restaurantNameEdit.required' => 'Restaurant name field is required.',
            'typeFoodEdit.required' => 'Type food field is required.',
            'main_sectionEdit.required' => 'Section field is required.',
            'carteNameEdit.required' => 'carte name field is required.',
            'scheduleEdit.required' => 'Schedule field is required.',
            'membersEdit.required' => 'members section file is required.',
        ]);

        //Update data in database
        $nId = $request->hiddenFieldIdEditDinning;
        $dinning = FoodSchedule::find($nId);
        $dinning->update(['restaurant_name' => $request->restaurantNameEdit,
            'type_food' => $request->typeFoodEdit,
            'section' => $request->main_sectionEdit,
            'carte_name' => $request->carteNameEdit,
            'schedule' => $request->scheduleEdit,
            'members' => $request->membersEdit
        ]);

        return response()->json(['success' => 'Record is successfully updated']);
    }
}
