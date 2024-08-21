<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categories = Category::all();
       return view ('categories.index',compact('categories'));
    }


    public function indexcategory()
    {
    // جلب جميع الفئات مع الكتب المرتبطة بها
    $categories = Category::with('books')->get();


    return view('homeuser', compact('categories'));
    }

    public function availablebooks()
    {
        $categories = Category::with(['books' => function ($query) {
            $query->where('Available', true);
        }])->get();
        return view('availablebookuser', compact('categories'));
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namecategory' =>'required|string|max:255', // أسماء الحقول ال name
            'descriptioncategory' =>'required|string|max:255',
        ]);

        Category::create([
            'Category_Name' => $request->namecategory, //أسماء الأعمدة
            'Category_Description' => $request->descriptioncategory,

        ]);

        return redirect()->route('categories')->with('success','category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {

        return view('categories.edit',[
            'category' => $category,//ارسلت الفئة يلي بدي عدلها

        ]);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'namecategory' =>'required|string|max:255', // أسماء الحقول ال name
            'descriptioncategory' =>'required|string|max:255',
        ]);

        $category->update([
            'Category_Name' => $request->namecategory, //أسماء الأعمدة
            'Category_Description' => $request->descriptioncategory,

        ]);

        return redirect()->route('categories')->with('success','category update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {

    }
}
