<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Models\Category;
use Flasher\Prime\FlasherInterface;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
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
        $subcategories = SubCategory::paginate(10);
        return view('admin.subcategories.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubCategoryRequest $request, FlasherInterface $flasher)
    {
        if($request->file('image')) {
            $imageName = time() . '-' . $request->image->getClientOriginalName();
            // store the file
            $request->image->storeAs('public/uploads/subcategories', $imageName);
        }
        SubCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'category_id' => $request->category_id,
            'image' => $imageName
        ]);
        $flasher->addSuccess('Sub Category Created Successfully!');
        return redirect()->route('subcategories.index');
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
        $categories = Category::all();
        $subcategory = SubCategory::findOrFail($id);
        return view('admin.subcategories.edit', compact('subcategory', 'categories'));
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
        $subcategory = SubCategory::findOrFail($id);

        if(!empty($request->image)) {
            // Delete the old file
            Storage::delete('public/uploads/subcategories/'. $subcategory->image);
            $imageName = time() . '-' . $request->image->getClientOriginalName();
            // store the file
            $request->image->storeAs('public/uploads/subcategories', $imageName);

            $subcategory->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'category_id' => $request->category_id,
                'image' => $imageName
            ]);
            $flasher->addInfo('Category Updated Successfully!');
            return redirect()->route('subcategories.index');
        } else {
            $subcategory->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'category_id' => $request->category_id
            ]);
            $flasher->addInfo('Sub Category Updated Successfully!');
            return redirect()->route('subcategories.index');
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
        $subcategory = SubCategory::findOrFail($id);
        
        Storage::delete('public/uploads/subcategories/'. $subcategory->image);
        $subcategory->delete();

        $flasher->addInfo('Sub Category Deleted Successfully!');
        return redirect()->route('subcategories.index');
    }
}
