@extends("layouts.app")

@section("content")

    <p>This page is about {{ $book->title }}</p>
    <p>It was written be {{ $book->author }} in the year of {{ $book->year }}.</p>

    <p>Published by {{$book->publisher->name}}</p>

    {{--Összes könyv--}}
    <p>Kiadó az alábbi könyveket adta ki</p>
    <ul>
        @foreach ($book->publisher->books as $pub_book )
            <li>{{$pub_book->title}}</li>
        @endforeach
    </ul>

    {{--Csak az első könyv--}}
    <p>{{$book->publisher->books}}</p>

    {{--sok a sokhoz kapcs bemutatása--}}
    <p>Adott könyv minden olyan User-e, aki megvette ezt a könyvet</p>
    <ul>
        @foreach ($book->users as $book_customer)
            <li>{{$book_customer->name}}</li>
            
        @endforeach
    </ul>

@endsection