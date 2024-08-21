@extends('layouts.dash')

@section('content')


            @if(session('success'))

                <div class="alert alert-success">

                    {{ session('success') }}

                </div>

            @endif
                <p></p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{  __ ('messages.category_name') }}</th>
                    <th>{{  __ ('messages.category_description') }}</th>
                    <th>{{  __ ('messages.action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->Category_Name }}</td>
                        <td>{{ $category->Category_Description }}</td>
                        {{-- <td>{{ $book->Book_Description }}</td> --}}
                        {{-- <td>{{ $book->Book_Content }}</td> --}}
                        <td>

                            <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning btn-sm">{{  __ ('messages.edit') }}</a>
          {{--  url ارسلنا الايدي كمان منشان نحطو بين {}  منشان عند الضغط على زر التعديل نحط ايديت الكتاب يلي منا نعدله بملف الويب $category--}}


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection
