<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Library</title>

<style>
    .page{

      background-color:  rgba(0, 0, 0, 0.074);

    }
    .css{
      font-size:20px;

      color:white;
      font-family:Verdana, Geneva, Tahoma, sans-serif;
      border-radius:25px;

      text-align:center;
      margin-left:500px;
      margin-right:500px;
      padding:4px;

    }

    .position{
      display: flex;
      flex-direction: column;
      align-items:center;
      justify-content:flex-end;

    }
  </style>
</head>
<body>
    <x-app-layout>

        <x-slot name="slot">

            @yield('content')

        </x-slot>



    </x-app-layout>
</body>
</html>
