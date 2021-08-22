<x-app>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">Create new tasks</div>
                    <div class="card-body">
                        <form action="/tasks" method="post" class="d-flex">
                            @csrf
                            <input type="text" class="form-control me-2" name="task" placeholder="Input tasks">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <ul class="list-group">
            @foreach ($tasks as $task)
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    {{ $task->task }}
                    <div class="d-flex">
                        <a class="btn btn-primary me-2" href="/tasks/{{ $task->id }}/edit">Edit</a>
                        <form action="/tasks/{{ $task->id }}" method="post" style="display: inline">
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
