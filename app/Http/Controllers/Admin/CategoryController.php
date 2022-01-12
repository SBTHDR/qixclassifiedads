<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
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
        $categories = Category::paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request, FlasherInterface $flasher)
    {
        if(!empty($request->image)) {
            $imageName = time() . '-' . $request->image->getClientOriginalName();
            // store the file
            $request->image->storeAs('public/uploads/categories', $imageName);

            Category::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'image' => $imageName
            ]);
            $flasher->addSuccess('Category Created Successfully!');
            return redirect()->route('categories.index');
        }
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
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, FlasherInterface $flasher)
    {
        if(!empty($request->image)) {
            // Delete the old file
            Storage::delete('public/uploads/categories/'. $category->image);
            $imageName = time() . '-' . $request->image->getClientOriginalName();
            // store the file
            $request->image->storeAs('public/uploads/categories', $imageName);

            $category->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'image' => $imageName
            ]);
            $flasher->addInfo('Category Updated Successfully!');
            return redirect()->route('categories.index');
        } else {
            $category->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name)
            ]);
            $flasher->addInfo('Category Updated Successfully!');
            return redirect()->route('categories.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, FlasherInterface $flasher)
    {
        Storage::delete('public/uploads/categories/'. $category->image);
        $category->delete();

        $flasher->addInfo('Category Deleted Successfully!');
        return redirect()->route('categories.index');
    }
}
