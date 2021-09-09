<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Subcategory;
use App\Model\subsubcategory;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Image;
use Symfony\Component\Console\Input\Input;

class SubsubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subsubcategory = Subsubcategory::orderBy('id', 'desc')->get();
        return view('backend.subsubcategory.index', compact('subsubcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status', 1)->get();
        $subcategories = Subcategory::where('status', 1)->get();
        return view('backend.subsubcategory.create', compact('categories', 'subcategories'));
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

            'subsubcategory_name'  => 'required|max:255',
        ]);

        $subsubcategory = new Subsubcategory();

        $subsubcategory->subsubcategory_name = $request->subsubcategory_name;
        $subsubcategory->category_id = $request->category_id;
        $subsubcategory->subcategory_id = $request->subcategory_id;
        $subsubcategory->subsubcategory_slug = Str::slug($request->subsubcategory_name, '-');

        $subsubcategory->save();

        Toastr::success('subsubcategory Successfully Created', 'Success');

        return redirect()->route('admin.subsubcategory.index');
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
        $subsubcategory = Subsubcategory::find($id);
        $subcategories = Subcategory::where('status', 1)->get();
        $categories = Category::where('status', 1)->get();

        return view('backend.subsubcategory.edit', compact('subsubcategory', 'categories', 'subcategories'));
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

            'subsubcategory_name'  => 'required|max:255',
        ]);

        $subsubcategory = Subsubcategory::find($id);

        $subsubcategory->subsubcategory_name = $request->subsubcategory_name;
        $subsubcategory->category_id = $request->category_id;
        $subsubcategory->subcategory_id = $request->subcategory_id;
        $subsubcategory->subsubcategory_slug = Str::slug($request->subsubcategory_name, '-');

        $subsubcategory->save();

        Toastr::success('subsubcategory Successfully Updated', 'Success');

        return redirect()->route('admin.subsubcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subsubcategory = Subsubcategory::find($id);

        if (!is_null($subsubcategory)) {

            $subsubcategory->delete();
        }

        Toastr::success('subsubcategory Successfully Deleted', 'Success');

        return back();
    }


    public function inactive(Request $request)
    {
        $subsubcategory = Subsubcategory::findOrFail($request->id);
        $subsubcategory->status = $request->status;

        // if ($subsubcategory->status === 0) {
        //     return 0;
        // }

        $subsubcategory->save();
        //Toastr::success('Status Successfully Changed', 'Success');
        return 1;
    }
}
