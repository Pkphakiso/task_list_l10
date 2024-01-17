@extends('layouts.app')
    
@section('contents')

    {{-- {{$errors}} --}}
   @include('form' , [ 'task'=>$task ])
        
@endsection