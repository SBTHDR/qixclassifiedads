<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChildCategoryRequest;
use Flasher\Prime\FlasherInterface;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\ChildCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ChildCategoryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $childcategories = ChildCategory::paginate(10);
        return view('admin.childcategories.index', compact('childcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.childcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChildCategoryRequest $request, FlasherInterface $flasher)
    {
        if($request->file('image')) {
            $imageName = time() . '-' . $request->image->getClientOriginalName();
            // store the file
            $request->image->storeAs('public/uploads/childcategories', $imageName);
        }
        ChildCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'sub_category_id' => $request->sub_category_id,
            'image' => $imageName
        ]);
        $flasher->addSuccess('Child Category Created Successfully!');
        return redirect()->route('childcategories.index');
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
        $subcategories = SubCategory::all();
        $childcategory = ChildCategory::findOrFail($id);
        return view('admin.childcategories.edit', compact('subcategories', 'childcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, FlasherInterface $flasher)
    {
        $childcategory = ChildCategory::findOrFail($id);

        if(!empty($request->image)) {
            // Delete the old file
            Storage::delete('public/uploads/childcategories/'. $childcategory->image);
            $imageName = time() . '-' . $request->image->getClientOriginalName();
            // store the file
            $request->image->storeAs('public/uploads/childcategories', $imageName);

            $childcategory->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'sub_category_id' => $request->sub_category_id,
                'image' => $imageName
            ]);
            $flasher->addInfo('Child Category Updated Successfully!');
            return redirect()->route('childcategories.index');
        } else {
            $childcategory->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'sub_category_id' => $request->sub_category_id
            ]);
            $flasher->addInfo('Child Category Updated Successfully!');
            return redirect()->route('childcategories.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, FlasherInterface $flasher)
    {
        $childcategory = ChildCategory::findOrFail($id);
        
        Storage::delete('public/uploads/childcategories/'. $childcategory->image);
        $childcategory->delete();

        $flasher->addInfo('Child Category Deleted Successfully!');
        return redirect()->route('childcategories.index');
    }
}
