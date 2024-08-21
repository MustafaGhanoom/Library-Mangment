
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Update Category</title>

</head>

<style>

    .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top:65px;
        justify-content: center;

    }

    .centered-form {
        width:370px;
        padding: 20px;
        background-color: #ffffff;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .container .form-container .centered-form .btn1
    {

    margin-left: 93;
    margin-top: 20px;

    }

    </style>


<div class="container">

    <div class="form-container">

        <img src="/images/updatecategory.png" alt="..." width="70px">
        <h2>{{  __ ('messages.update_category') }}</h2>
        <p></p>
        <form class="centered-form" action="{{ route('categories.update',$category) }}" method="POST">
                @csrf
                @method('PUT')
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            @endif
            <div class="mb-3">
                <label for="name" class="form-label">{{  __ ('messages.category_name') }}</label>
                <input type="name" class="form-control" id="name" name="namecategory" value="{{$category->Category_Name}}">
            </div>
            <div class="mb-3">
                <label for="descriptioncategory" class="form-label">{{  __ ('messages.category_description') }}</label>
                <input type="name" class="form-control" id="descriptioncategory" name="descriptioncategory" value="{{$category->Category_Description}}">
            </div>
          <button type="submit" class="btn btn1 btn-primary">{{  __ ('messages.update_category') }}</button>
       </form>
    </div>
</div>







{{--

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>

.form-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.centered-form {
    width: 300px;
    padding: 20px;
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
</style>
<body>
    <x-app-layout>
        <div class="form-container">
            <form class="centered-form">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name Book</label>
                    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">the have</label>
                    <input type="name" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </x-app-layout>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

 --}}
