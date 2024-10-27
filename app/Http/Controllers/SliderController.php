<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Image;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'slider_title'=>['required'],
                'short_title'=>['required'],
                'slider_image'=>['required']
            ]);
            Slider::create([
                'slider_title'=>$request->slider_title,
                'short_title'=>$request->short_title,
                'slider_image'=>$this->uploadImage(request()->file('slider_image'))
            ]);
            return redirect()->route('sliders.index')->withMessage('sliders add created successfully?');
        }catch (QueryException $e){
            return  redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        return view('admin.sliders.show',['slider'=>$slider]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit',['slider'=>$slider]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {

        try {

            $request->validate([
                'slider_title'=>['required'],
                'short_title'=>['required'],
                'slider_image'=>['required']
            ]);


            $requestData = [
                'slider_title'=>$request->slider_title,
                'short_title'=>$request->short_title,
                //'slider_image'=>$this->uploadImage(request()->file('slider_image'))
            ];

            if ($request->hasFile('slider_image')){
                $requestData['slider_image']=$this->uploadImage(request()->file('slider_image'));
            }

            $slider->update($requestData);


            return redirect()->route('sliders.index')->withMessage('slider  updated successfully?');
        }catch (QueryException $e){
            return  redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        try {
            $slider->delete();

            return redirect()->route('brands.index')->withMessage('slider deleted successfully?');
        }catch (QueryException $e){
            return  redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }


    public function uploadImage($file)
    {
        $fileName = time().'.'.$file->getClientOriginalExtension();
        Image::make($file)
            ->resize(1170,600)->save(storage_path().'/app/public/slider/'.$fileName);
        return $fileName;
    }
}
