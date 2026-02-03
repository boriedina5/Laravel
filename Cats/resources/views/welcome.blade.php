@extends('layouts.app') <!--layout-t bővíti-->
@section('mainContent')
    <h5>So good, tütü so good</h5>

    <a href="{{route("cats.index" )  }}">Az összes szisza lekérése</a>
@endsection