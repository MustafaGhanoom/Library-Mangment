@extends('layouts.home')

@section("content")

<div class="page">
    @foreach($categories as $category)

        <h1 class="css bg-success mt-2">{{ $category->Category_Name }}</h1>

        <div class="d-flex justify-content-center flex-wrap  grid gap-4  p-4  text-center rounded-5">
            @foreach($category->books as $book)
            <div class="card Larger shadow" style="width:14rem; ">
                {{-- <img src="..."  alt=".."> --}}
                <img src="{{ url('storage/' . $book->image) }}" class="card-img-top" alt="...">
                <div class="card-body position">
                    <h5 class="card-title"><strong>Title:</strong> {{$book->Book_Title}}</h5>
                     <p class="card-text"><strong>Author: </strong> {{$book->Author_name}}</p>

                     @if($book->Available)

                     <a href={{route("books.sho",$book)}} class="btn btn-primary mt-2">Show</a>
                  {{-- //مع الايدي للكتاب يلي بدي شوفو --}}
                     @endif

              </div>

            </div>
            @endforeach
         </div>
         <hr style="border: 3px solid rgb(0, 0, 0);">
    @endforeach
</div>

@endsection
