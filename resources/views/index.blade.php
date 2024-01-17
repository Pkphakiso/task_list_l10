@extends("layouts.app")

@section("title", "list of tasks" )

@section("contents")

    <nav class="mb-4">
        <a href="{{route('tasks.create')}}" 
        class="link"> Add Task </a>
    </nav>

    @if(count($tasks))
    
    @else
        <div>There are no tasks</div>
    @endif

    @forelse ($tasks as $task)
        <div> 
            {{-- there is @class directive added to make some conditional css --}}
        <a href="{{ route('tasks.show', ['task' => $task->id]) }}" @class(['line-through'=> $task->completed ])>{{ $task->title }}</a>
        </div>    
        
    @empty

        <p>No tasks</p>

    @endforelse

    @if ($tasks->count())
        <nav class="mt-4">
            {{$tasks->links()}}
        </nav>
    @endif
@endsection