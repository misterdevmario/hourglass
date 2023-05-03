<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Slider;
use Validator;
use Illuminate\Support\Str;
use Log;


class SliderController extends Controller
{
    //

    public function getSliders()
    {
        $sliders = Slider::orderBy('hour', 'ASC')->get();
        //$sliders = Slider::orderBy('hour', 'ASC')->where('active', 1)->get();

        return view('dashboard', ['sliders' => $sliders]);
    }


    public function uploadImage(Request $request)
    {
        if (!empty($request->files) && $request->hasFile('image')) {
            //upload the image
            $request->validate([
                'image' => 'file|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            $original_name = $request->image->getClientOriginalName();//Original image file name
            $file_size = $request->image->getSize();//Size in bytes
            $extension = $request->image->extension();//Image file extension eg. jpg or png
            $directory = 'assets/images'; //Upload and move image into this directory
            $id = Str::random(8);//Random 8 character string
            $image_name = $id . '.' . $extension;
            $full_save_path_name = $directory . '/' . $image_name;
            $request->image->move(public_path($directory), $image_name);//Save into: public/images

            //Updating record
            $nId = $request->hiddenFieldId;
            $slider = Slider::find($nId);
            $slider->update(['image' => $image_name]);
            return response()->json(['success' => 'Record is successfully added']);
        } else {
            dd('error');
        }
    }


    public function getDataSlider(Request $request)
    {
        $nId = $request->id;
        $slider = Slider::find($nId);
        return response()->json($slider);
    }


    public function editSlider(Request $request)
    {
        // Form validation
        $validatedData = $request->validate([
            'titleEdit' => 'required|min:3',
            'areaEdit' => 'required|min:3',
            //'hourEdit' => 'required|min:3',
            //'image' => 'required',
        ], [
            'titleEdit.required' => 'Title field is required.',
            'areaEdit.required' => 'Area field is required.',
            //'hourEdit.required' => 'Hour field is required.',
            //'image.required' => 'Images file is required.',
        ]);

        //Update data in database
        $nId = $request->hiddenFieldIdEdit;
        $slider = Slider::find($nId);
        $slider->update(['title' => $request->titleEdit, 'area' => $request->areaEdit, 'hour' => $request->hourEdit, 'main_section' => $request->main_sectionEdit]);

        return response()->json(['success' => 'Record is successfully updated']);
    }


    public function createSlider(Request $request)
    {
        // Form validation
        $validatedData = $request->validate([
            'title' => 'required|min:3',
            'area' => 'required|min:3',
            //'hour' => 'required|min:3',
            //'image' => 'required',
        ], [
            'title.required' => 'Title field is required.',
            'area.required' => 'Area field is required.',
            //'hour.required' => 'Hour field is required.',
            //'image.required' => 'Images file is required.',
        ]);
        $validatedData['main_section'] = $request->main_section;
        $validatedData['active'] = false;

        //Store data in database
        Slider::create($validatedData);

        return response()->json(['success' => 'Record is successfully added']);
    }


    public function toggleActivate(Request $request)
    {
        $nId = $request->id;
        $slider = Slider::find($nId);
        if (!$slider->active) {
            $slider->update(['active' => !$slider->active]);
        } else {
            Slider::where('id', $nId)->delete();
        }
    }


}
