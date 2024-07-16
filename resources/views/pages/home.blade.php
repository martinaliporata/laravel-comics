{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <img src="{{Vite::asset('resources/img/happy-dogjpg.jpg')}}" alt="">
    <div class="dog">
        ciao
    </div>
</body>
</html> --}}
@extends('layout.app')

@section('main-content')
    <h1>
        @foreach ($books as $book)
            <article>
                {{-- <img src="{{Vite::asset('https://www.coverbrowser.com/image/action-comics/1-1.jpg')}}" alt=""> --}}
                <p>
                    {{$book['title']}}
                </p>
                <p>
                    {{$book['description']}}
                </p>
                <p>
                    {{$book['price']}}
                </p>
                <p>
                    {{$book['series']}}
                </p>
                <p>
                    {{$book['sale_date']}}
                </p>
                <p>
                    {{$book['type']}}
                </p>
            </article>
        @endforeach
    </h1>
@endsection
