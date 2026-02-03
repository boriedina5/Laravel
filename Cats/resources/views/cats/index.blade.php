@extends('layouts.app'){{--Layouts mappa App nevű fájl lesz bővítve--}}
@section('mainContent'){{--Az app fájlban a @yield('mainContent') helyére kerül a kód--}}
    @foreach($macskak as $egyMacska){{--Macskák néven adtuk át az összes lekért macskát tartalmazó $cats tömböt --}}
        <p>{{$egyMacska->name}} egy {{$egyMacska->breed}} fajba tartozó {{$egyMacska->color}} éves, világratőrő{{$egyMacska->isFemale? "nőstény" : "kandúr"}}</p>
        <a href="{{route("cats.show", $egyMacska)}}"><strong>Mutastd ennek a macskának összes adatát</strong></a>
    @endforeach
@endsection()
