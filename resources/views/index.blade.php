@extends("layouts.app")

@section("title", "list of tasks" )

@section("contents")

    @if(count($tasks))
    
    @else
        <div>There are no tasks</div>
    @endif

    @forelse ($tasks as $task)
        <div> 
        <a href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->title }}</a>
        </div>    
        
    @empty

        <p>No tasks</p>

    @endforelse

    @if ($tasks->count())
        <div>
            {{$tasks->links()}}
        </div>
    @endif
@endsection