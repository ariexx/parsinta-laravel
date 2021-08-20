<x-app>
    <h1>Tasks</h1>
    <form action="/tasks" method="post">
        @csrf
        <input type="text" name="task" id="task">
        <button type="submit">Kirim</button>
    </form>
    <ol>
        @foreach($tasks as $task)
            <li style="margin-bottom: 15px;">
                {{ $task->task }}
                <div><a style="color: blue" href="/tasks/{{ $task->id }}/edit">Edit</a>
                    <form action="/tasks/{{ $task->id }}" method="post" style="display: inline">
                        @csrf
                        @method('delete')
                        <button type="submit">delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ol>
</x-app>
