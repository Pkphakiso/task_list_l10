@extends('layouts.app')
@section('title', "Edit Task")
@section('styles')
    <style>
        .error_para{
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection
    
@section('contents')

    {{-- {{$errors}} --}}
    <form action="{{route('tasks.update',["id"=> $task->id])}}" method="POST">
        @csrf
        @method("PUT")
        <div>
            <label for="title">
                Title
            </label>
            <input type="text" name="title" id="title" value="{{$task->title}}" />
            @error('title')
                <p class="error_para">{{ $message}}</p>
            @enderror
        </div>
        
        <div>
            <label for="description">
                description
            </label>
            <textarea name="description" id="description" rows="5">
                {{$task->description}}
            </textarea>
            @error('description')
                <p class="error_para">{{ $message}}</p>
            @enderror
        </div>
        <div>
            <label for="long_description">
                long description
            </label>
            <textarea name="long_description" id="long_description" rows="10">
                {{$task->long_description}}
            </textarea>
            @error('long_description')
                <p class="error_para">{{ $message}}</p>
            @enderror
        </div>

        <div>
            <button type="submit">Add task</button>
        </div>
        
    </form>
        
@endsection