<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $books = Book::all();
       return view ('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('books.create',[
            'categories' => $categories //أرسلت  بيانات جدول الفئات كرمال للقائمة المنسدلة
        ]);
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
            'titlebook' =>'required|string|max:255', // أسماء الحقول ال name
            'Authorname' =>'required|string|max:255',
            'bookdescription'=>'required|string|max:255',
            'categoryname' => 'required|exists:categories,id',
            'bookcontent'=>'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // التحقق من صحة الصورة

        ]);
        $book = new Book();
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('book_images', 'public'); // تخزين الصورة في المجلد العام
            $book->image = $imagePath;
        }

        Book::create([
            'Book_Title' => $request->titlebook, //أسماء الأعمدة
            'Author_name' => $request->Authorname,
            'Book_Description' => $request->bookdescription,
            'Category_id' => $request->categoryname,
            'Book_Content' => $request->bookcontent,
             'image' => $book->image    //حفظ الصورة بقاعدة البيانات
        ]);


        return redirect()->route('books')->with('success','Book created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
               return view('books.show',[

            'book'=>$book
        ]);
            //  ارسلت الكتاب  يلي بدي شوفو  منشان وصل لبياناتوshow(Book $book)





    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {

        $categories=Category::all();
        return view('books.edit',[
            'categories' => $categories, //أرسلت  بيانات جدول الفئات كرمال للقائمة المنسدلة
            'book'=>$book//ارسلت الكتاب يلي بدي عدلو
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'namebook' =>'required|string|max:255',
            'Authorname' =>'required|string|max:255',
            'bookdescription'=>'required|string|max:255',
            'categoryname' => 'required|exists:categories,id',
             'bookcontent'=>'required|string|max:255'

        ]);

        $book->update([
            'Book_Title' => $request->namebook,
            'Author_name' => $request->Authorname,
            'Book_Description'=> $request->bookdescription,
            'Category_id' => $request->categoryname,
            'Book_Content'=>$request->bookcontent

        ]);

        return redirect()->route('books')->with('success','Book update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route ('books')->with('success', 'book Deleted Successfully');
    }
}
