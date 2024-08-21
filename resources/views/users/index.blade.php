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
                    <th>{{  __ ('messages.user_name') }}</th>
                    <th>{{  __ ('messages.email') }}</th>
                    <th>{{  __ ('messages.password') }}</th>
                    <th>{{  __ ('messages.action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>

                        <td>

                    <form action="{{ route('users.destroy', $user) }}" class="d-inline" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">{{  __ ('messages.delete') }}</button>
                    </form>

          {{--  url ارسلنا الايدي كمان منشان نحطو بين {}  منشان عند الضغط على زر الحذف نحط ايديت الكتاب يلي منا نحذفه بملف الويب $category--}}

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection
