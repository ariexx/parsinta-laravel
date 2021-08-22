<x-app>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @include('tasks._create')
            </div>
        </div>

        <ul class="list-group">
            @foreach ($tasks as $task)
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    {{ $task->task }}
                    <div class="d-flex">
                        <a class="btn btn-primary me-2" href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display: inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-app>
