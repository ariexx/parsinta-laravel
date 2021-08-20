<x-app>
    <h1>Tasks</h1>
    <form action="/tasks/{{ $task->id }}" method="post">
        @method('put')
        @csrf
        <input type="text" name="task" id="task" value="{{ $task->task }}">
        <button type="submit">Update</button>
    </form>
</x-app>
