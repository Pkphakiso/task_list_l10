@extends('layouts.app')
@section('title', isset($task) ? "Edit Task" :"Add Task")
{{-- @section('styles')
    <style>
        .error_para{
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection --}}
    
@section('contents')
{{-- this reusing the blade code if there is common blade files --}}
    {{-- {{$errors}} --}}
    <form action="{{ isset($task)? route('tasks.update', ['task'=> $task->id ]) : route('tasks.store')}}" method="POST">
        @csrf

        @isset($task)
            @method('PUT')
            
        @endisset

        <div class="mb-4">
            <label for="title">
                Title
            </label>
            <input type="text" name="title" id="title"
            @class(['border-red-500'=> $errors->has('title')]) 
            value="{{ $task->title ?? old("title") }}" />
            @error('title')
                <p class="error_para">{{ $message}}</p>
            @enderror
        </div>
        
        <div class="mb-4">
            <label for="description">
                description
            </label>
            <textarea name="description" id="description" rows="5"  
             @class(['border-red-500'=> $errors->has('description')])>{{ $task->description ?? old("description") }}</textarea>
            @error('description')
                <p class="error_para">{{ $message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="long_description">
                long description
            </label>
            <textarea name="long_description" id="long_description" rows="10"
              @class(['border-red-500'=> $errors->has('long_description')])>{{ $task->long_description ?? old("long_description") }}</textarea>
            @error('long_description')
                <p class="error_para">{{ $message}}</p>
            @enderror
        </div>

        <div class="flex items-center gap-2">
            <button type="submit" class="btn">
                @isset($task)
                    Update task
                @else
                    Add task
                @endisset
            </button>
            <a href="{{route('tasks.index')}}" class="link">cancel</a>
        </div>
        
    </form>
        
@endsection