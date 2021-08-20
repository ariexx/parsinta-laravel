<x-app>
    <h1>Tasks</h1>
    <form action="/tasks" method="post">
        @csrf
        <input type="text" name="task" id="task">
        <button type="submit">Kirim</button>
    </form>
    <ol>
        @foreach($tasks as $task)
            <li>{{ $task->task }} - <a style="color: red" href="/tasks/{{ $task->id }}/edit">Edit</a></li>
        @endforeach
    </ol>
</x-app>
