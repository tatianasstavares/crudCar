<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use App\Exports\BrandsExport;
use App\Imports\BrandsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;




class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('pages.brands.index', [
            'brands' => $brands
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>   'required',
            'image'       => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $brand = new Brand();
        $brand->name=$request->name;
        $brand->save();
        if ($request->file('image')) {
            // Get Image File
            $imagePath = $request->file('image');
            // Define Image Name
            $imageName =  $brand->id . '_' .  time() . '_' .  $imagePath->getClientOriginalName();
            // Save Image on Storage$
            $path = $request->file('image')->storeAs('images/brands/' . $brand->id, $imageName, 'public');

            //Save Image Path
            $brand->image = $path;
        }

        $brand->save();

        return redirect('brands')->with('status', 'Item created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return view('pages.brands.show', [
            'brand' => $brand
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('pages.brands.edit', [
            'brand' => $brand
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $this->validate($request, [
            'name' =>   'required',
            'image'
        ]);

        $brand->update($request->all());
        return redirect('brands')->with('status', 'Item edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        Storage::deleteDirectory('public/images/brands/' . $brand->id);

        $brand->delete();

        return redirect('brands')->with('status', 'Item deleted successfully!');;
    }

    public function destroyAll()
    {
        Brand::truncate();
        return redirect('brands')->with('status', 'deleted all!');
    }


    public function export()
    {
        return Excel::download(new BrandsExport, 'brands.xlsx');
    }

    public function import()
    {
        Excel::import(new BrandsImport, request()->file('file'));

        return redirect('/')->with('success', 'All good!');
    }
}




