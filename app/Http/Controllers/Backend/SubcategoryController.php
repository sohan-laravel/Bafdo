<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\subcategory;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Image;
use Symfony\Component\Console\Input\Input;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategory = Subcategory::orderBy('id', 'desc')->get();
        return view('backend.subcategory.index', compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status', 1)->get();
        return view('backend.subcategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();

        $this->validate($request, [

            'subcategory_name'  => 'required|max:255',
        ]);

        $subcategory = new Subcategory();

        $subcategory->subcategory_name = $request->subcategory_name;
        $subcategory->category_id = $request->category_id;
        $subcategory->subcategory_slug = Str::slug($request->subcategory_name, '-');

        $subcategory->save();

        Toastr::success('subcategory Successfully Created', 'Success');

        return redirect()->route('admin.subcategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = Subcategory::find($id);
        $categories = Category::where('status', 1)->get();

        return view('backend.subcategory.edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'subcategory_name'  => 'required|max:255',
        ]);

        $subcategory = Subcategory::find($id);

        $subcategory->subcategory_name = $request->subcategory_name;
        $subcategory->category_id = $request->category_id;
        $subcategory->subcategory_slug = Str::slug($request->subcategory_name, '-');

        $subcategory->save();

        Toastr::success('subcategory Successfully Updated', 'Success');

        return redirect()->route('admin.subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = Subcategory::find($id);

        if (!is_null($subcategory)) {

            $subcategory->delete();
        }

        Toastr::success('subcategory Successfully Deleted', 'Success');

        return back();
    }


    public function inactive(Request $request)
    {
        $subcategory = Subcategory::findOrFail($request->id);
        $subcategory->status = $request->status;

        // if ($subcategory->status === 0) {
        //     return 0;
        // }

        $subcategory->save();
        //Toastr::success('Status Successfully Changed', 'Success');
        return 1;
    }
}
