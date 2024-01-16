@extends("layouts.app")

@section("title", $task->title )

@section("contents")
    
    <p>{{ $task->description }}</p>

    @if($task->long_description)
        <p>{{$task->long_description}}</p>
    @endif

    <p>{{$task->created_at}}</p>
    <p>{{$task->updated_at}}</p>

    <div>
        <form action="{{route('tasks.destroy', ['task'=> $task->id ]) }}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit">Delete task</button>
        </form>
    </div>
@endsection



